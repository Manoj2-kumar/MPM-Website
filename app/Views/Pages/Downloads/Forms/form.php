<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<main>
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="hero-cap hero-cap2 pt-0">
                            <h2>Forms & Documents <br> For Members</h2>
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
                        <p class="mt-2">Download and access essential forms for medical, educational, and membership-related purposes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Karyakarta form.pdf') ?>" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png') ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <p>1. Karyakarta form 2022-24</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Scholarship Application.pdf') ?>" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png') ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <p>2. Scholarship Application Form</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Radhakrishna Lahoti Sahayata Kosh.pdf') ?>" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png') ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <p>3. Radhakrishna Lahoti Sahayata Kosh Form</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Membership Form.pdf') ?>" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png') ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <p>4. Membership Form</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Shiksha Form.pdf') ?>" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png') ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <p>5. Shiksha Form</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="<?= base_url('public/assets/pdf/Student Prize.pdf') ?>" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png') ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <p>6. Student Prize Application</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>


<style>
    .single-team {
        padding: 10px;
        border-radius: 10px;
        transition: all 0.3s ease;
        text-align: center;
        box-shadow: 0 2px 6px rgba(24, 23, 23, 0.1);
        max-width: 400px;
        margin: 0 auto 20px;
        border: 2px solid #20c997;
    }

    .team-img img {
        width: 80px;
        height: 80px;
        object-fit: contain;
        margin: 0 auto 10px;
    }

    .team-caption p {
        font-size: 12px;
        line-height: 1.3;
    }

    .single-team:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        border-color: #20c997;
    }
</style>

<?php $this->endSection(); ?>