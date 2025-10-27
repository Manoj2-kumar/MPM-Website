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
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h2 class="mt-2">Andheri Rules</h2>
                        <p><strong>Maheshwari Bhavan – Andheri (West)</strong><br>
                            New Link Road Extension, Near Oshiwara Police Station,<br>
                            Andheri (W), Mumbai 400 053<br>
                            Phone: (022) 2637 4253<br>
                            Website: <a href="http://bookingandheri.mpmmumbai.in" target="_blank">bookingandheri.mpmmumbai.in</a>
                        </p>
                        <p><em>Effective Date: February 10, 2020</em></p>
                    </div>
                </div>
            </div>

            <!-- Section 1 -->
            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Privacy Overview" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <p>This Privacy Statement discloses the privacy practices for <strong>Maheshwari Pragati Mandal, Andheri (West)</strong> (“MPM”), Mumbai, for the data it collects and receives in the course of enabling online booking for its Bhavan at Mumbai.</p>
                    <p>This policy does not apply to other services provided by MPM. By using our website, you agree to the most recent version of this Privacy Policy and Terms & Conditions for Booking. Do not use the website if you do not agree with the same.</p>

                    <p><strong>1. The Information Collected by MPM</strong></p>
                    <p>MPM collects information from users at various points on our website. “Personally Identifiable Information” refers to data that can directly identify an individual such as name, mailing address, phone number, or email address.</p>

                    <p><strong>a) Information Submitted to MPM Website:</strong> Users must provide contact details like name and mobile number for registration and booking. Financial information (credit/debit card or net banking details) is collected via secure payment gateways for billing. MPM stores only contact details and payment amounts, not financial data.</p>

                    <p><strong>b) Third Party Advertisement:</strong> Currently, MPM does not provide or allow third-party advertisements on its website. Hence, no data is shared with external advertisers.</p>

                    <p><strong>c) Information Obtained by Third Parties:</strong> Payment details such as card numbers, expiry dates, and bank information are collected and stored solely by our payment gateway service provider. MPM receives only transaction numbers and payment statuses (success, cancelled, or error).</p>

                    <p>Since MPM does not collect or store financial information, it is not responsible for such data. Payment gateway providers handle all critical payment data and do not share it with any third party except the bank involved in processing the transaction.</p>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="row about-row flex-row-reverse">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Information Use" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <p><strong>2. How Information Collected by MPM is Used</strong></p>
                    <p><strong>a) Communicating with Users:</strong> Personally identifiable information (like name, email, or mobile number) is used to communicate with users about their bookings, queries, or concerns.</p>

                    <p><strong>b) Information Shared with Third Parties:</strong> MPM does not share user information with third parties except for payment transaction details provided to payment gateway providers.</p>

                    <p><strong>c) Use of Information by Payment Gateways:</strong> Payment processors use your information only for payment authorization. MPM is not responsible for how they manage this data.</p>

                    <p>MPM may disclose personal information if required by law, court order, or in cases of fraud, misuse, or safety threats.</p>

                    <p><strong>3. Providing Accurate Personal Information:</strong> Users must provide accurate and correct details. MPM is not responsible for errors or failed bookings due to incorrect information.</p>

                    <p><strong>4. Linking to Third Party Websites:</strong> MPM is not responsible for privacy practices of external websites linked from ours. Users should read each site’s privacy policy before sharing information.</p>

                    <p><strong>5. Changes to Privacy Policy:</strong> MPM may update or change its Privacy Policy without prior notice. Updates are effective immediately upon posting.</p>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Technical Info" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <p><strong>6. Technical Considerations:</strong> MPM takes due care of data security, but technical issues may arise. Users are encouraged to report any website or data issues for prompt attention.</p>

                    <p><strong>7. Disclaimer:</strong> While every effort is made to ensure accuracy, MPM welcomes feedback on any omissions or inaccuracies found on the website.</p>

                    <p><strong>Maheshwari Pragati Mandal, Mumbai</strong><br>
                        Maheshwari Bhavan – Andheri (West),<br>
                        New Link Road Extension, Near Oshiwara Police Station,<br>
                        Andheri (W), Mumbai 400 053.<br>
                        Phone: (022) 2637 4253<br>
                        Effective Date: February 10, 2020<br>
                        Website: <a href="http://bookingandheri.mpmmumbai.in" target="_blank">bookingandheri.mpmmumbai.in</a>
                    </p>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="row about-row flex-row-reverse">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Terms & Conditions" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <h4><strong>Terms & Conditions</strong></h4>

                    <ul>
                        <li>Full details like name, address, contact number, and ID proof are required for booking.</li>
                        <li>Rates are quoted in INR and exclude GST, which will be collected at check-in.</li>
                        <li>Check-in: 8:00 AM | Check-out: 8:00 AM next day.</li>
                        <li>Early check-in is subject to availability; previous-night booking ensures guaranteed early check-in.</li>
                        <li>Foreign guests must present valid passports and visas. Indian guests must present government-approved ID proof.</li>
                        <li>Two adults per room; a third person may stay with permission. Children under 5 may stay free without extra bed.</li>
                        <li>Bookings may be corrected or cancelled by MPM at any time. Refunds will be provided for advance payments as applicable.</li>
                        <li>Guests must carry the printout of booking confirmation at check-in.</li>
                        <li>Accommodation may be denied or cancelled if incorrect information is provided.</li>
                        <li>Guests must pay for any damages or loss caused to Bhavan’s property.</li>
                        <li>Use of iron, stove, or electric appliances is strictly prohibited in rooms.</li>
                        <li>Consumption of non-veg food, alcohol, tobacco, or drugs is strictly prohibited.</li>
                        <li>Main gate remains closed between 10:30 PM and 5:00 AM.</li>
                        <li>Guests are responsible for their personal belongings. MPM is not liable for loss or theft.</li>
                    </ul>
                </div>
            </div>

            <!-- Section 5 -->
            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Cancellation Rules" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <h4><strong>Rules for Cancellation (Andheri Bhavan Rooms)</strong></h4>
                    <p><strong>MPM</strong> means Maheshwari Pragati Mandal, Andheri (West), Mumbai.</p>

                    <p><strong>On Successful Payment:</strong> Users are notified upon successful transactions via SMS (if mobile number is provided). The payment is credited to MPM’s account, and confirmation appears in the user’s bank statement.</p>

                    <p><strong>On Cancellation:</strong> If a user cancels mid-process, the transaction is recorded as “Cancelled.” Users must initiate cancellations through the website if required.</p>

                    <p><strong>Refund Policy:</strong></p>
                    <ul>
                        <li>70% of room rent + 100% security deposit refundable up to 7 days before booking (till 6 PM).</li>
                        <li>50% of room rent + 100% security deposit refundable up to 1 day before check-in.</li>
                        <li>After that, only 100% of security deposit is refundable.</li>
                    </ul>

                    <p>Website: <a href="http://bookingandheri.mpmmumbai.in" target="_blank">bookingandheri.mpmmumbai.in</a></p>
                </div>
            </div>

        </div>
    </div>
</main>

<?php $this->endSection(); ?>
