<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<main>
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="hero-cap hero-cap2 pt-0">
                            <h2>Bhavan Booking</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h3>Mumbai has Bhavans spread across Mumbai for the benefit of its Members.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="https://booking.mpmmumbai.in/" target="_blank" class="single-team mb-30 d-block text-decoration-none">
                        <div class="team-img">
                            <img src="assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="team-caption text-center">
                            <h3>Girgaon Bhavan</h3>
                            <p>Online Booking</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Bhavan_Booking/Girgoan_offline.pdf') ?>" target="_blank" class="single-team mb-30 d-block text-decoration-none">
                        <div class="team-img">
                            <img src="assets/img/gallery/team4.png" alt="">
                        </div>
                        <div class="team-caption text-center">
                            <h3>Girgaon Booking Form</h3>
                            <p>Offline Booking</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="https://bookingandheri.mpmmumbai.in/" target="_blank" class="single-team mb-30 d-block text-decoration-none">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3>Andheri Bhavan</h3>
                            <p>Online Booking</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Bhavan_Booking/Andheri-Bhavan.pdf') ?>" target="_blank" class="single-team mb-30 d-block text-decoration-none">
                        <div class="team-img">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3>Andheri Booking Form</h3>
                            <p>Offline Booking</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Bhavan_Booking/Ghatkopar-Bhavan.pdf') ?>" target="_blank" class="single-team mb-30 d-block text-decoration-none">
                        <div class="team-img">
                            <img src="assets/img/gallery/team4.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3>Ghatkopar Booking Form</h3>
                            <p>Offline Booking</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Bhavan_Booking/Borivali-Plot.pdf') ?>" target="_blank" class="single-team mb-30 d-block text-decoration-none">
                        <div class="team-img">
                            <img src="assets/img/gallery/team4.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3>Borivali Booking Form</h3>
                            <p>Offline Booking Plot</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h3>For details of our Bhavans please <a href="<?= base_url('public/our_bhavans') ?>" style="color: #00c48c;">click here...</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>