<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<style>
    .about-row {
        margin-bottom: 70px;
        align-items: center;
    }

    .about-img {
        width: 100%;
        max-width: 420px;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .about-img:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .about-content p {
        position: relative;
        font-size: 16px;
        color: #333;
        line-height: 1.8;
        margin-bottom: 12px;
        text-align: justify;
    }

    .about-content strong {
        color: #20c997;
    }

    .about-content ul {
        list-style-type: disc;
        margin-left: 40px;
        color: #333;
    }

    .about-content a {
        color: #007bff;
        text-decoration: none;
    }

    .about-content a:hover {
        text-decoration: underline;
    }

    .hero-cap2 h2 {
        font-weight: 700;
        color: #2d2d2d;
    }

    @media (max-width: 768px) {
        .about-row {
            flex-direction: column !important;
            text-align: center;
        }

        .about-img {
            margin-bottom: 20px;
            max-width: 100%;
        }
    }
</style>

<main>
    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h2 class="mt-2">Girgoan Rules</h2>
                        <p><strong>Maheshwari Pragati Mandal, Mumbai</strong></p>
                        <p><em>Effective Date: May 16, 2017</em></p>
                        <p>This Privacy Statement discloses the privacy practices for <strong>Maheshwari Pragati Mandal (MPM), Mumbai</strong> for the data it collects and receives in the course of enabling online booking for its Bhavan at Mumbai.</p>
                        <p>This policy does not apply to other services provided by MPM. By using our website, you agree to the most recent version of this Privacy Policy and Terms & Conditions for Booking.</p>
                        <p>If you do not agree with the terms, please discontinue using the website.</p>
                    </div>
                </div>
            </div>

            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Privacy Overview" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <p><strong>1. The Information Collected by MPM</strong></p>
                    <p>MPM collects information from users at various points on our website. “Personally Identifiable Information” refers to data that can directly identify an individual, such as name, mailing address, phone number, or email.</p>

                    <p><strong>a) Information Submitted to MPM Website:</strong> Users must provide contact details like name and mobile number for registration and booking. Financial information (credit/debit card or net banking details) is collected for billing through secure payment gateways. MPM only stores contact details and payment amount, not financial details.</p>

                    <p><strong>b) Third Party Advertisement:</strong> Currently, MPM does not host third-party advertisements, hence no user data is shared for such purposes.</p>

                    <p><strong>c) Information Obtained by Third Parties:</strong> Critical payment details like card numbers, expiry dates, and bank details are collected and stored only by our payment gateway service provider, not MPM. MPM only receives transaction status and reference IDs.</p>

                    <p><strong>d) On Successful Payment:</strong> Users are notified via SMS (if mobile number is provided) and the payment amount is credited to MPM’s account.</p>

                    <p><strong>e) On Cancellation of Transaction:</strong> If a user cancels a transaction midway, a record is stored with status as "Cancelled". Refund policies apply as below:</p>

                    <ul>
                        <li>70% of room rent + 100% security deposit refundable up to 7 days before booking (till 6 PM).</li>
                        <li>50% of room rent + 100% security deposit refundable up to 1 day before check-in.</li>
                        <li>After that, only 100% security deposit is refundable.</li>
                    </ul>
                </div>
            </div>

            <div class="row about-row flex-row-reverse">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Information Collection" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <p><strong>2. How Information Collected by MPM is Used</strong></p>
                    <p><strong>Communicating with Users:</strong> Contact details (name, phone, email) are used to respond to queries, booking updates, or concerns. Emails may be retained as needed.</p>
                    <p><strong>Information Shared with Third Parties:</strong> MPM does not share personal data except with payment gateway providers for transaction processing.</p>
                    <p><strong>Use of Information by Payment Gateways:</strong> MPM is not responsible for how these providers handle data as per their internal policies.</p>
                    <p>Information may be disclosed under legal obligations or to investigate fraud or misuse.</p>
                    <p><strong>3. Providing Accurate Personal Information</strong></p>
                    <p>Users must provide correct and updated contact information (name, address, phone, and email). MPM is not responsible for issues caused by inaccurate information.</p>
                    <p><strong>4. Linking to Third-Party Websites</strong></p>
                    <p>This website may contain links to other sites. MPM is not responsible for the privacy practices of such websites. Users are advised to read each site's privacy policy carefully.</p>
                </div>
            </div>

            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Information Usage" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <p><strong>5. Changes to Privacy Policy</strong></p>
                    <p>MPM reserves the right to update or change this Privacy Policy without prior notice. All changes take effect immediately upon posting.</p>

                    <p><strong>6. Technical Considerations</strong></p>
                    <p>MPM takes due care of all data but is not liable for technical errors. Users may contact MPM for any data-related issues or website malfunctions.</p>

                    <p><strong>7. Disclaimer</strong></p>
                    <p>While every care has been taken to ensure accuracy, MPM welcomes feedback regarding any errors or omissions found on the website.</p>

                    <p><strong>Maheshwari Pragati Mandal</strong><br>
                        Maheshwari Bhavan, Jagannath Shankar Seth Rd,<br>
                        Marine Lines East, Bhangwadi, Mumbai, Maharashtra 400002<br>
                        Phone: 8850758921 / 022 5026/27/28<br>
                        Email: <a href="mailto:info@mpmmumbai.in">info@mpmmumbai.in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>