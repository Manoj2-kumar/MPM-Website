<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<!--? About Law Start-->
<section class="about-low-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <h2>It is not enough to be compassionate. One must Act.</h2>
                    </div>
                    <p>Maheshwari Pragati Mandal, Mumbai is a volunteer based organisation. Members from all over Mumbai voluntarily provide their time, effort and resources to run the social and fellowship activities of the organisation. Members can donate in the form of तन, मन, धन towards Mandal activities.</p>
                    <p>Monetary Donations to Maheshwari Pragati Mandal are entitled to benefits under section 80G of the Income Tax Act, 1961.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <div class="about-font-img d-none d-lg-block">
                        <img src="assets/img/gallery/about2.png" alt="">
                    </div>
                    <div class="about-back-img ">
                        <img src="assets/img/gallery/about1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <!-- Header Section -->
        <div class="text-center mb-5">
            <div class="section-tittle mb-4">
                <h2 class="fw-bold display-6 text-danger">How Can I Donate to Maheshwari Pragati Mandal?</h2>
            </div>
            <p class="lead text-muted fst-italic mb-2">“It is not enough to be compassionate. One must Act.”</p>
            <p class="text-secondary fs-5">
                Your support — whether through <strong>time</strong>, <strong>skills</strong>, or <strong>resources</strong> —
                empowers us to serve our community better.
            </p>
        </div>

        <div class="row g-4">
            <!-- Donate Time -->
            <div class="col-lg-6 col-md-12">
                <div class="card h-100 shadow border-0 rounded-4 donation-card transition">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="card-title mb-0 fw-bold text-dark">1. Donate Time</h3>
                        </div>
                        <p class="text-muted mt-3">
                            Time is a precious gift in a bustling city like Mumbai. We invite dedicated individuals to
                            volunteer their time and talents, helping us deliver meaningful initiatives and reach those in need.
                        </p>
                        <div class="border-start border-3 border-primary ps-3 mt-3">
                            <p class="fst-italic text-secondary mb-0">
                                “A little bit of your time can make a big difference.<br>
                                Alone we can do so little; together we can do much more.”
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donate Money -->
            <div class="col-lg-6 col-md-12">
                <div class="card h-100 shadow border-0 rounded-4 donation-card transition">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-3">
                            <h3 class="card-title mb-0 fw-bold text-dark">2. Donate Money</h3>
                        </div>

                        <div class="ms-1">
                            <h5 class="text-success fw-bold mt-3">a) Sparsh</h5>
                            <p class="text-muted">
                                Support <strong>Environment Protection</strong> and <strong>Water Conservation</strong>
                                through our <strong>Sparsh</strong> initiative.
                                Under this scheme, a fixed amount can be auto-debited monthly from your bank account to Mandal.
                                The detailed scheme and forms will be launched soon.
                            </p>

                            <h5 class="text-success fw-bold mt-4">b) Other Monetary Donations</h5>
                            <p class="text-muted">
                                You can visit any of our <strong>Bhavans</strong> to make a donation toward our social activities.
                                Alternatively, email us at
                                <a href="mailto:info@mpmmumbai.in" class="text-decoration-none text-primary">
                                    info@mpmmumbai.in
                                </a>
                                and we’ll reach out to assist you.
                            </p>
                        </div>

                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
                                <i class="fas fa-heart me-2"></i> Make a Donation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .transition {
        transition: all 0.3s ease-in-out;
    }
</style>

<!-- Optional: Add a subtle hover effect -->
    <style>
        .donation-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .donation-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
    </style>


<?php $this->endSection(); ?>