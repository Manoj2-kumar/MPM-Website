<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<style>
    .contact-title {
        text-align: center;
        font-weight: 700;
        color: #d32f2f;
        margin-bottom: 50px;
    }

    .contact-box {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 60px;
        gap: 40px;
    }

    .contact-text {
        flex: 1;
        min-width: 350px;
    }

    .contact-text h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 15px;
        text-decoration: underline;
        color: #000;
    }

    .contact-text p {
        font-size: 15px;
        color: #333;
        margin-bottom: 10px;
        line-height: 1.6;
    }

    .contact-text i {
        color: #ff5722;
        margin-right: 8px;
    }

    .contact-map {
        flex: 1;
        min-width: 400px;
    }

    .contact-map iframe {
        width: 100%;
        height: 230px;
        border: none;
        border-radius: 8px;
    }

    .contact-box:nth-child(even) {
        flex-direction: row-reverse;
    }

    .contact-section {
        padding: 60px 0;
        background-color: #fff;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .contact-item {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: flex-start;
        gap: 20px;
        border-left: 4px solid #20c997;
    }

    .contact-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .contact-icon {
        flex-shrink: 0;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #28a745, #28a745);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 22px;
    }

    .contact-info h4 {
        color: #2c3e50;
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: 600;
        line-height: 1.4;
    }

    .contact-info a {
        color: #007bff;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .contact-info a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .contact-form-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .contact-form-wrapper {
        background: #fff;
        border-radius: 16px;
        padding: 70px 80px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
        max-width: 1000px;
        margin: 0 auto;
    }

    .contact-form-wrapper:hover {
        transform: translateY(-4px);
    }

    .contact-us-form .form-control {
        height: 65px;
        padding: 0 20px;
        border: 2px solid #d1d5db;
        border-radius: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .contact-us-form .form-control:focus {
        border-color: #20c997;
        box-shadow: 0 0 6px rgba(211, 47, 47, 0.2);
    }

    .contact-us-form textarea {
        min-height: 120px;
        font-size: 16px;
        padding: 18px 25px;
        border-radius: 12px;
    }

    .btn-submit {
        background-color: #20c997;
        border: none;
        padding: 15px 60px;
        border-radius: 40px;
        font-weight: 700;
        color: #fff;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background-color: #17a673;
        transform: translateY(-3px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .contact-item {
            padding: 20px;
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .contact-info h4 {
            font-size: 16px;
        }

        .contact-info a {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .contact-section {
            padding: 40px 0;
        }

        .contact-grid {
            margin-top: 30px;
        }
    }

    @media (max-width: 768px) {
        .contact-box {
            flex-direction: column;
            text-align: center;
        }

        .contact-map iframe {
            height: 250px;
        }
    }
</style>

<main>
    <!-- Page Title -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="hero-cap hero-cap2 pt-0">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Sections -->
    <div class="team-area pt-60 pb-60">
        <div class="container">

            <!-- Section 1 -->
            <div class="contact-box">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.6672078947!2d72.82761200000002!3d18.946119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6379aaaaaab%3A0xb2fefb7bc7c63dd9!2sMaheshwari%20Pragati%20Mandal!5e0!3m2!1sen!2sin!4v1760920550823!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-text">
                    <h4>Maheshwari Bhavan - Girgaon</h4>
                    <p><i class="fa fa-map-marker"></i> Maheshwari Pragati Mandal, Mumbai</p>
                    <p>603, Jaganath Shankar Seth Road, Mumbai – 400 002</p>
                    <p><i class="fa fa-phone"></i> 2200 5026 / 27 / 28 / 33 / 36</p>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="contact-box">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3769.17942614522!2d72.8326135!3d19.1436217!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sin!4v1760920511715!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-text">
                    <h4>Maheshwari Bhavan - Andheri</h4>
                    <p><i class="fa fa-map-marker"></i> Plot No. R 14/15, Link Road Extension, Oshiwara, Near Tarapur Garden, Mumbai – 400 053</p>
                    <p><i class="fa fa-phone"></i> 2637 4256 / 57</p>
                    <p><i class="fa fa-mobile"></i> +91 93722 58324</p>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="contact-box">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3767.055243860806!2d72.8382173!3d19.236424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b12358fed51f%3A0x736c72849b8e576b!2sMaheshwari%20Pragati%20Mandal%20.Borivali%20PlotLink!5e0!3m2!1sen!2sin!4v1760920855156!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-text">
                    <h4>Maheshwari Bhavan - Borivali</h4>
                    <p><i class="fa fa-map-marker"></i> Behind Velniken School, Near Yogi Nagar, Linking Road, Borivali (W), Mumbai – 400 091</p>
                    <p><i class="fa fa-phone"></i> 2637 4253 / 54 / 55 / 33 / 36</p>
                    <p><i class="fa fa-mobile"></i> +91 85915 28918</p>
                </div>
            </div>

        </div>

        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-grid">
                            <!-- Account Related Work -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-user-circle"></i>
                                </div>
                                <div class="contact-info">
                                    <h4>Account Related Work</h4>
                                    <a href="mailto:accounts@mppmmumbai.in">accounts@mppmmumbai.in</a>
                                </div>
                            </div>

                            <!-- Girgaum Bhavan Booking -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="contact-info">
                                    <h4>Girgaum Bhavan Booking Related and other Work</h4>
                                    <a href="mailto:booking.girgaum@mppmmumbai.in">booking.girgaum@mppmmumbai.in</a>
                                </div>
                            </div>

                            <!-- Matrimony Related work -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="contact-info">
                                    <h4>Matrimony Related work</h4>
                                    <a href="mailto:matrimonial@mppmmumbai.in">matrimonial@mppmmumbai.in</a>
                                </div>
                            </div>

                            <!-- Andheri Bhavan Booking -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="contact-info">
                                    <h4>Andheri Bhavan Booking Related and other Work</h4>
                                    <a href="mailto:booking.andheri@mppmmumbai.in">booking.andheri@mppmmumbai.in</a>
                                </div>
                            </div>

                            <!-- General Enquiry -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                                <div class="contact-info">
                                    <h4>Any Type of Enquiry and all Samiti related Work</h4>
                                    <a href="mailto:info@mppmmumbai.in">info@mppmmumbai.in</a>
                                </div>
                            </div>

                            <!-- Shiksha Sahyog Samiti -->
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="contact-info">
                                    <h4>Any Types Of Enquiry Related To Shiksha Sahyog Samiti</h4>
                                    <a href="mailto:shikshasahyog@mppmmumbai.in">shikshasahyog@mppmmumbai.in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="contact-form-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="contact-form-wrapper">
                            <h3 class="text-center mb-3" style="color:#d32f2f;font-weight:700;">Get in Touch</h3>
                            <p class="text-center mb-4" style="color:#666;">Have any questions? Fill the form below and we’ll get back to you soon.</p>

                            <form action="<?= base_url('contact/submit') ?>" method="post" class="contact-us-form" id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" required>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <textarea name="message" class="form-control" rows="3" placeholder="Enter Message" required></textarea>
                                    </div>
                                    <div class="col-md-12 text-center mt-3">
                                        <button type="submit" class="btn-submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>