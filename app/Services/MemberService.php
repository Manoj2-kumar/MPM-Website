<?php

namespace App\Services;

use Config\Services;
use Exception;

class MemberService
{
    protected $client;

    public function __construct()
    {
        $this->client = Services::curlrequest();
    }

    public function getLatestSaraswaniPublications()
    {
        $client = \Config\Services::curlrequest();

        $apiUrl = API_BASE_URL . 'api/get_latest_saraswani_publications';

        log_message('info', 'Fetching Latest Saraswani Publications' . $apiUrl);

        try {
            $response = $client->get($apiUrl);
            log_message('info', 'Saraswani Publications Response: ' . json_encode($response, JSON_PRETTY_PRINT));
            if ($response->getStatusCode() === 200) {
                $responseData = json_decode($response->getBody(), true);
                log_message('info', 'Saraswani Publications Response: ' . json_encode($responseData, JSON_PRETTY_PRINT));

                if ($responseData['status'] === true && !empty($responseData['data'])) {
                    return $responseData['data'];
                }
                return [];
            } else {
                log_message('error', 'Failed to fetch Saraswani publications: ' . $response->getBody());
                return [];
            }
        } catch (\Exception $e) {
            log_message('error', 'Saraswani Publications API Error: ' . $e->getMessage());
            return [];
        }
    }

    public function searchMemberProfile($searchTerm)
    {
        $client = \Config\Services::curlrequest();

        $apiUrl = API_BASE_URL . 'api/search_member_profile';
        log_message('info', 'Searching Member Profile for term: ' . $searchTerm);

        try {
            $response = $client->get($apiUrl, [
                'query' => ['search_term' => trim($searchTerm)]
            ]);

            if ($response->getStatusCode() === 200) {
                $responseData = json_decode($response->getBody(), true);
                log_message('info', 'Member Search Response: ' . json_encode($responseData, JSON_PRETTY_PRINT));

                if ($responseData['status'] === true && !empty($responseData['data'])) {
                    return $responseData['data'];
                }

                return [];
            } else {
                log_message('error', 'Failed to search member profile: ' . $response->getBody());
                return [];
            }
        } catch (\Exception $e) {
            log_message('error', 'Member Search API Error: ' . $e->getMessage());
            return [];
        }
    }

    public function getAllEvents($zoneId = null)
    {
        $client = \Config\Services::curlrequest();

        $apiUrl = API_BASE_URL . 'api/get_all_events';
        log_message('info', 'Fetching events for zone ID: ' . ($zoneId ?? 'All Zones'));

        try {
            $response = $client->get($apiUrl, [
                'query' => ['zone_id' => $zoneId]
            ]);

            if ($response->getStatusCode() === 200) {
                $responseData = json_decode($response->getBody(), true);
                log_message('info', 'Events API Response: ' . json_encode($responseData, JSON_PRETTY_PRINT));

                if (!empty($responseData['status']) && $responseData['status'] === true && !empty($responseData['data'])) {
                    return $responseData['data'];
                }

                return [];
            } else {
                log_message('error', 'Failed to fetch events: ' . $response->getBody());
                return [];
            }
        } catch (\Exception $e) {
            log_message('error', 'Events API Error: ' . $e->getMessage());
            return [];
        }
    }
}
