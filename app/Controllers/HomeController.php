<?php

namespace App\Controllers;

use App\Libraries\EmailService;
use App\Services\MemberService;

class HomeController extends BaseController
{
    public function home_view()
    {

        $memberService = new MemberService();
        $publications = $memberService->getLatestSaraswaniPublications();

        $data = [
            'publications' => $publications
        ];

        return view('Pages/Home/index', $data);
    }

    public function about_us()
    {
        return view('Pages/AboutUs/about_us');
    }

    public function donate()
    {
        return view('Pages/Donate/donate');
    }

    public function booking()
    {
        return view('Pages/Booking/booking');
    }

    public function form()
    {
        return view('Pages/Downloads/Forms/form');
    }

    public function organisation_at_glance()
    {
        return view('Pages/AboutUs/OrganisationAtGlance/organisation_at_glance');
    }

    public function our_vision()
    {
        return view('Pages/AboutUs/OurVision/our_vision');
    }

    public function our_activities()
    {
        return view('Pages/AboutUs/OurActivities/our_activities');
    }

    public function our_bhavans()
    {
        return view('Pages/AboutUs/OurBhavans/our_bhavans');
    }

    public function our_samitis()
    {
        return view('Pages/AboutUs/OurSamitis/our_samitis');
    }

    public function orgin_of_maheshwari()
    {
        return view('Pages/AboutUs/OrginOfMaheshwari/orgin_of_maheshwari');
    }

    public function contact_us()
    {
        return view('Pages/ContactUs/contact_us');
    }

    public function submit()
    {
        $request = service('request');
        $data = [
            'name' => $request->getPost('name'),
            'mobile' => $request->getPost('mobile'),
            'email' => $request->getPost('email'),
            'message' => $request->getPost('message'),
            'sendTo' => 'mpmitsamiti@gmail.com', 
        ];

        $emailService = new EmailService();

        if ($emailService->sendContactUsEmail($data)) {
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to send your message. Please try again later.');
        }
    }

    public function terms_and_condition()
    {
        return view('Pages/AboutUs/TermsAndCondition/terms_and_condition');
    }

    public function privacy_policy()
    {
        return view('Pages/AboutUs/PrivacyPolicy/privacy_policy');
    }

    public function saraswani()
    {
        $memberService = new MemberService();
        $publications = $memberService->getLatestSaraswaniPublications();

        $data = [
            'publications' => $publications
        ];

        return view('Pages/Downloads/Saraswani/saraswani', $data);
    }

    public function members()
    {
        return view('Pages/Members/members');
    }

    public function search()
    {
        $query = $this->request->getGet('query');

        if (empty($query)) {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Search term is required',
                'data' => []
            ]);
        }

        $memberService = new MemberService();
        $members = $memberService->searchMemberProfile($query);

        return $this->response->setJSON([
            'status' => true,
            'data' => $members
        ]);
    }

    public function girgoan_rule()
    {
        return view('Pages/AboutUs/BookingRules/Girgoan/girgoan_rule');
    }


    public function andheri_rule()
    {
        return view('Pages/AboutUs/BookingRules/Andheri/andheri_rule');
    }

    public function events()
    {
        $memberService = new MemberService();
        $filter = $this->request->getGet('filter');
        $zoneId = 1;

        $events = [];

        if ($filter) {
            log_message('info', 'Fetching Events for filter: ' . $filter . ' in Zone ID: ' . $zoneId);

            $events = $memberService->getAllEvents($zoneId);

            $events = $this->filterEventsByType($events, $filter);
        }

        return view('Pages/Events/events', [
            'events' => $events,
            'selectedFilter' => $filter ?? 'all'
        ]);
    }

    private function filterEventsByType($events, $filter)
    {
        $today = date('Y-m-d');
        if ($filter === 'upcoming') {
            return array_filter($events, fn($e) => $e['start_date'] >= $today);
        } elseif ($filter === 'past') {
            return array_filter($events, fn($e) => $e['end_date'] < $today);
        }
        return $events;
    }


    public function eventDetail($eventId = null)
    {
        $client = \Config\Services::curlrequest();
        $apiUrl = API_BASE_URL . 'api/get_events_details_by_id';

        try {
            $response = $client->get($apiUrl, [
                'query' => ['event_id' => $eventId]
            ]);

            if ($response->getStatusCode() !== 200) {
                log_message('error', 'Failed to fetch event detail (non-200): ' . $response->getBody());
                return redirect()->to(base_url('public/events'))
                    ->with('error', 'Unable to fetch event details.');
            }

            $responseData = json_decode($response->getBody(), true);
            log_message('info', 'Event Detail API Response: ' . json_encode($responseData));

            if (empty($responseData) || empty($responseData['status']) || $responseData['status'] !== true) {
                return redirect()->to(base_url('public/events'))
                    ->with('error', 'Event details not found.');
            }

            $data = $responseData['data'] ?? [];

            $event = [];
            $eventDateTimes = [];

            if (!empty($data['event']) && is_array($data['event'])) {
                $event = $data['event'];
                $eventDateTimes = $data['event_date_time'] ?? $data['eventDateTimes'] ?? [];
            } elseif (!empty($data[0]) && is_array($data[0])) {
                $first = $data[0];
                $hasEventKeys = isset($first['event_id']) || isset($first['event_name']);
                if ($hasEventKeys) {
                    $event = $first;
                    $eventDateTimes = $data['event_date_time'] ?? $data['eventDateTimes'] ?? ($data[1] ?? []);
                } else {
                    $event = $data;
                }
            } else {
                $event = $data;
                $eventDateTimes = $data['event_date_time'] ?? $data['eventDateTimes'] ?? [];
            }

            if (!is_array($event) || empty($event)) {
                log_message('error', 'Event Detail API Error: event payload empty or invalid for id: ' . $eventId);
                return redirect()->to(base_url('public/events'))
                    ->with('error', 'Event details unavailable.');
            }

            return view('Pages/Events/event_detail', [
                'event' => $event,
                'eventDateTimes' => $eventDateTimes
            ]);
        } catch (\Throwable $e) {
            // catch Throwable to include Errors as well
            log_message('error', 'Event Detail API Error: ' . $e->getMessage() . ' | trace: ' . $e->getTraceAsString());
            return redirect()->to(base_url('public/events'))
                ->with('error', 'Something went wrong while fetching event detail.');
        }
    }
}
