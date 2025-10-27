<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<style>
    /* Container setup */
    .publication-scroll-container {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    /* Scroll row */
    .publication-scroll {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        padding: 15px 30px;
        scrollbar-width: none;
        /* Firefox */
    }

    .publication-scroll::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari */
    }

    /* Individual cards */
    .publication-card {
        flex: 0 0 auto;
        width: 265px;
        height: 320px;
        margin-right: 25px;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
        padding: 25px 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .publication-card img {
        width: 110px;
        height: 110px;
        margin: 0 auto 20px;
        display: block;
    }

    .publication-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
    }

    .publication-card .team-caption {
        flex-grow: 1;
    }

    .view-more-card {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        border: 2px dashed #ccc;
        height: 320px;
    }

    /* Arrows */
    .scroll-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 26px;
        cursor: pointer;
        background: rgba(255, 255, 255, 0.85);
        border-radius: 50%;
        padding: 8px 14px;
        z-index: 10;
        user-select: none;
        transition: all 0.3s ease;
    }

    .scroll-arrow:hover {
        background: #007bff;
        color: #fff;
    }

    .left-arrow {
        left: 5px;
    }

    .right-arrow {
        right: 5px;
    }

    /* Mobile tweaks */
    @media (max-width: 767px) {
        .publication-card {
            width: 220px;
            height: 280px;
        }

        .publication-card img {
            width: 90px;
            height: 90px;
        }
    }
</style>

<main>
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">Welcome to the Maheshwari Pragati Mumbai.</h1>
                                <P data-animation="fadeInUp" data-delay=".8s">The strength of the team is each individual member. The strength of each member is the team.</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn d-flex justify-content-center gap-3 flex-wrap" style="margin-top: 20px;">
                                    <a href="https://members.mumbaimaheshwari.com/admin/login"
                                        class="btn hero-btn mb-2 small-btn"
                                        data-animation="fadeInLeft"
                                        data-delay=".8s">
                                        Existing Member Login
                                    </a>
                                    <a href="https://members.mumbaimaheshwari.com/member/registration"
                                        class="btn hero-btn mb-2 small-btn"
                                        data-animation="fadeInLeft"
                                        data-delay=".8s">
                                        New Member Registration
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">Welcome to the Mumbai Maheshwari.</h1>
                                <P data-animation="fadeInUp" data-delay=".8s">The strength of the team is each individual member. The strength of each member is the team.</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="https://members.mumbaimaheshwari.com/admin/login" class="btn hero-btn mb-10" data-animation="fadeInLeft" data-delay=".8s">Existing Member Login</a>
                                    <a href="https://members.mumbaimaheshwari.com/member/registration" class="btn hero-btn mb-10" data-animation="fadeInLeft" data-delay=".8s">New Member Registration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <div class="section-tittle mb-35">
                            <span>About our Organisation</span>
                            <h2>Connect - Bond - Serve</h2>
                        </div>
                        <p>Any Maheshwari who has attained 18 years of age is epgible to become a member of Maheshwari Pragati Mandal. Visit our ABOUT US Page to understand why you should become a member of Maheshwari Pragati Mandal, Mumbai.</p>
                        <p>Mandal activities provide Members a platform to make a meaningful change to Society while estabpshing deep bonds with fellow members.</p>
                    </div>
                    <a href="<?= base_url('public/organisation_at_glance') ?>" class="btn">Know more</a>
                </div>
                <div class="col-lg-6 col-md-12">
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
    </section>
    <!-- About Law End-->

    <!-- Saraswani Publications Section -->
    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <span>Saraswani</span>
                        <h2>Latest Saraswani Publications</h2>
                    </div>
                </div>
            </div>

            <?php if (!empty($publications)): ?>
                <?php
                $latestPublications = array_slice($publications, 0, 5);
                ?>
                <div class="publication-scroll-container position-relative">
                    <div class="scroll-arrow left-arrow" onclick="scrollPublications('left')">&#10094;</div>

                    <div class="publication-scroll d-flex flex-nowrap overflow-auto" id="publicationScroll">
                        <?php foreach ($latestPublications as $pub): ?>
                            <?php $pdfUrl = API_BASE_URL . 'public/' . $pub['document_path']; ?>
                            <div class="publication-card text-center flex-shrink-0 mx-3">
                                <div class="team-img mb-5">
                                    <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png'); ?>"
                                        alt="PDF Icon" style="width:110px; margin:auto;">
                                </div>
                                <div class="team-caption">
                                    <h4 class="mb-5"><?= esc($pub['month']) . ' ' . esc($pub['year']); ?></h4>
                                    <a href="<?= esc($pdfUrl); ?>" target="_blank" class="btn btn-sm">View PDF</a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- View More Arrow -->
                        <div class="publication-card view-more-card flex-shrink-0 mx-3 text-center">
                            <a href="<?= base_url('public/saraswani') ?>" class="btn btn-primary btn-sm">View More →</a>
                        </div>
                    </div>

                    <div class="scroll-arrow right-arrow" onclick="scrollPublications('right')">&#10095;</div>
                </div>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>No publications available at the moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- End Saraswani Section -->


    <!-- Rest of your content here -->
    <!--? Services Area Start -->
    <!-- <div class="service-area section-padding30">
        <div class="container"> -->
    <!-- Your services content -->
    <!-- </div>
    </div> -->
    <!-- Services Area End -->

    <!-- Continue with the rest of your sections -->
</main>

<script>
    function scrollPublications(direction) {
        const container = document.getElementById('publicationScroll');
        const scrollAmount = container.offsetWidth * 0.8; // scroll 80% of visible area
        container.scrollBy({
            left: direction === 'left' ? -scrollAmount : scrollAmount,
            behavior: 'smooth'
        });
    }
</script>

<?php $this->endSection(); ?>