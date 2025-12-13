<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<style>
    .about-row {
        margin-bottom: 70px;
        align-items: center;
    }

    .image-container {
        position: relative;
        display: inline-block;
        width: 100%;
        max-width: 420px;
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

    .img-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: #20c997;
        color: #fff;
        padding: 13px 0;
        font-size: 15px;
        font-weight: 600;
        border-radius: 0 0 12px 12px;
        text-align: center;
        letter-spacing: 0.5px;
    }

    .about-content p {
        position: relative;
        font-size: 16px;
        color: #333;
        line-height: 1.8;
        margin-bottom: 12px;
        padding-left: 20px;
        text-align: justify;
    }

    .about-content p::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #20c997;
        font-weight: bold;
        font-size: 20px;
        line-height: 1;
        top: 0;
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

    .modern-list {
        list-style: none;
        padding: 0;
        margin: 10px 0;
    }

    .modern-list li {
        position: relative;
        padding: 12px 0 12px 35px;
        line-height: 0.5;
    }

    .modern-list li:before {
        content: "-";
        position: absolute;
        left: 0;
        top: 50%;
        width: 24px;
        height: 24px;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: bold;
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

        .about-content p {
            padding-left: 0;
        }

        .about-content p::before {
            display: none;
        }
    }
</style>

<main>
    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h2 class="mt-2">Privacy Policy</h2>
                    </div>
                </div>
            </div>

            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <figure class="image-container">
                        <img src="<?= base_url('public/assets/img/aboutus/PP/LP.jpg') ?>" alt="Privacy Overview" class="about-img">
                        <figcaption class="img-caption">LAKE PALACE - Udaipur</figcaption>
                    </figure>
                </div>
                <div class="col-md-7 about-content">
                    <p>Maheshwari Pragati Mandal (MPM) is a non-profit Social Organization of Maheshwari community.</p>
                    <p>MPM is committed to maintain and protect your privacy. We respect user privacy and value user trust.</p>
                    <p>This policy explains what information we require, how it is protected, how we use it and with whom it is shared to provide you an effective and satisfactory service.</p>
                    <p>By using our service, you agree to the terms of this Privacy Policy.</p>
                    <p><strong>Use of Information:</strong> MPM collects limited information required to connect members of the Maheshwari community.</p>
                    <p>Information includes name, photo, family details, mobile number, email, residential/office address, educational and professional details, and KYC documents as provided.</p>
                    <p>MPM does not control third-party sites and is not responsible for misuse of personal or banking details shared externally.</p>
                    <p><strong>User Account Passwords & Registration:</strong> Users must provide accurate, complete and updated information at all times.</p>
                    <p>Users are responsible for maintaining the confidentiality of their login credentials and for activities arising from misuse.</p>
                    <p>MPM never asks for your password under any circumstances and advises you to change it periodically for security.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row about-row flex-row-reverse">
                <div class="col-md-5 text-center">
                    <figure class="image-container">
                        <img src="<?= base_url('public/assets/img/aboutus/PP/mandore.jpg') ?>" alt="Use of Information" class="about-img">
                        <figcaption class="img-caption">MANDORE - Jodhpur</figcaption>
                    </figure>
                </div>
                <div class="col-md-7 about-content">
                    <p><strong>Sharing of Information:</strong> MPM may share data with trusted third parties like Banks or NBFCs solely to provide better services.</p>
                    <p>MPM may disclose user data as required by law to identify or take legal action against offenders.</p>
                    <p>MPM may also inform you about features, products, or events through SMS or email.</p>
                    <p><strong>Cookies:</strong> Cookies help improve browsing experience but do not collect personal information.</p>
                    <p>MPM may use cookies to enhance site functionality. Aggregated cookie data may be shared for service improvement.</p>
                    <p><strong>Links to Other Sites:</strong> Our website may contain links to external sites for enhanced user experience.</p>
                    <p>MPM is not responsible for the privacy practices or content of these external websites.</p>
                    <p>Users should review the privacy policies of external sites before sharing personal information.</p>
                    <p><strong>Communicate with Us:</strong> You can contact MPM if you:</p>
                    <ul class="modern-list">
                        <li>Need to update or correct your personal data.</li>
                        <li>Find an error in your stored information.</li>
                        <li>Believe that we are not following our privacy policy.</li>
                    </ul>
                </div>
            </div>
        </div>
        </section>

        <div class="team-area pt-30 pb-30" style="background: #f9fafb;">
            <div class="container">
                <div class="col-md-8 mx-auto">
                    <div class="contact-card text-center p-4 shadow-sm rounded-4 bg-white">
                        <h3 class="fw-bold mb-3" style="color:#d32f2f;">📍 Maheshwari Pragati Mandal</h3>
                        <p class="mb-4 text-muted">
                            Maheshwari Bhavan, Jagannath Shankar Seth Rd, Marine Lines East,<br>
                            Bhangwadi, Marine Lines,<br>
                            Mumbai, Maharashtra 400002
                        </p>

                        <div class="contact-info text-start mx-auto" style="max-width: 400px;">
                            <p class="d-flex align-items-center mb-3">
                                <i class="bi bi-telephone-fill me-2 text-danger"></i>
                                <span><strong>Phone:</strong> 8850758921 / 022 5026/27/28</span>
                            </p>

                            <p class="d-flex align-items-center mb-3">
                                <i class="bi bi-envelope-fill me-2 text-danger"></i>
                                <span><strong>Email:</strong>
                                    <a href="mailto:info@mpmmumbai.in" class="text-decoration-none text-dark">info@mpmmumbai.in</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php $this->endSection(); ?>