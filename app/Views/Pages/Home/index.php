<?php $this->extend('layout/main-layout'); ?>
<?php $this->section('content'); ?>

<style>
    .mpm-hero-pro {
        position: relative;
        overflow: hidden;
        padding: 140px 0 120px;
        z-index: 1;
    }

    .mpm-bg-layer {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        z-index: 0;
    }

    .top-layer {
        top: 0;
        background: radial-gradient(circle at 90% 30%, rgba(0, 200, 151, 0.25) 0%, transparent 60%);
    }

    .mpm-hero-text {
        position: relative;
        z-index: 3;
        padding-right: 30px;
    }

    .mpm-hero-text h1 {
        font-size: 4.8rem;
        font-weight: 800;
        color: #002c4b;
        line-height: 1.3;
        margin-bottom: 25px;
        position: relative;
    }

    .mpm-hero-text p {
        color: #5f6470;
        font-size: 1.9rem;
        margin-bottom: 40px;
        line-height: 1.7;
    }

    .mpm-btn-group {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .mpm-btn {
        font-weight: 600;
        font-size: 1.5rem;
        border-radius: 50px;
        padding: 12px 30px;
        transition: all 0.3s ease;
        text-decoration: none;
        letter-spacing: 0.3px;
    }

    .mpm-btn.filled {
        background: linear-gradient(135deg, #20c997, #1fb487);
        color: #fff;
        box-shadow: 0 6px 25px rgba(0, 200, 151, 0.3);
    }

    .mpm-btn.filled:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 35px rgba(0, 200, 151, 0.45);
    }

    .mpm-btn.outlined {
        border: 2px solid #20c997;
        color: #20c997;
        background: #fff;
    }

    .mpm-btn.outlined:hover {
        background: #20c997;
        color: #fff;
        box-shadow: 0 6px 20px rgba(0, 200, 151, 0.25);
    }

    .mpm-hero-visual {
        position: relative;
        text-align: center;
        z-index: 3;
        animation: floatImg 5s ease-in-out infinite;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-circle-wrapper {
        position: relative;
        width: 580px;
        height: 580px;
        border-radius: 50%;
        overflow: hidden;
        background: radial-gradient(circle at top left, #e8fff8 0%, #ffffff 100%);
        border: 8px solid #fff;
        box-shadow: 0 0 25px rgba(32, 201, 151, 0.3), 0 10px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .hero-circle-wrapper:hover {
        transform: scale(1.03);
        box-shadow: 0 0 35px rgba(32, 201, 151, 0.45), 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .hero-circle-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .mpm-hero-visual::after {
        content: '';
        position: absolute;
        width: 440px;
        height: 440px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(32, 201, 151, 0.25), transparent 70%);
        z-index: 1;
        animation: pulseGlow 4s infinite ease-in-out;
    }

    @keyframes pulseGlow {
        0% {
            transform: scale(1);
            opacity: 0.8;
        }

        50% {
            transform: scale(1.08);
            opacity: 0.4;
        }

        100% {
            transform: scale(1);
            opacity: 0.8;
        }
    }

    @keyframes floatImg {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .about-low-area {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .about-caption h2 {
        font-size: 2.4rem;
        color: #002c4b;
    }

    .img-bordered {
        border: 6px solid #20c997;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-bordered:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.25);
    }

    .publication-scroll-container {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .publication-scroll {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 15px 30px;
        scrollbar-width: none;
    }

    .publication-scroll::-webkit-scrollbar {
        display: none;
    }

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

    .publication-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
    }

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
        transition: all 0.3s ease;
    }

    .scroll-arrow:hover {
        background: #20c997;
        color: #fff;
    }

    .left-arrow {
        left: 5px;
    }

    .right-arrow {
        right: 5px;
    }

    .view-more-card {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        border: 2px dashed #ccc;
        height: 320px;
    }

    @media (max-width: 992px) {
        .mpm-hero-pro {
            padding: 80px 0;
        }

        .mpm-hero-text {
            text-align: center;
            padding-right: 0;
        }

        .hero-circle-wrapper {
            width: 280px;
            height: 280px;
        }

        .mpm-hero-visual::after {
            width: 320px;
            height: 320px;
        }
    }
</style>

<main>
    <section class="mpm-hero-pro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="mpm-hero-text">
                        <h1>Welcome to the Maheshwari Pragati Mumbai</h1>
                        <p>Strength of the team is each individual member. The strength of each member is the team.</p>
                        <div class="mpm-btn-group">
                            <a href="https://members.mumbaimaheshwari.com/admin/login" class="mpm-btn filled">Existing Member Login</a>
                            <a href="https://members.mumbaimaheshwari.com/member/registration" class="mpm-btn outlined">New Member Registration</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-5">
                    <div class="mpm-hero-visual">
                        <div class="hero-circle-wrapper">
                            <img src="<?= base_url('public/assets/img/hero/home.jpg') ?>" alt="Maheshwari Pragati Mandal Mumbai">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mpm-bg-layer top-layer"></div>
    </section>

    <section class="about-low-area mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <div class="section-tittle mb-35">
                            <span>About our Organisation</span>
                            <h2>Connect - Bond - Serve</h2>
                        </div>
                        <p>Any Maheshwari who has attained 18 years of age is eligible to become a member of Maheshwari Pragati Mandal. Visit our ABOUT US Page to understand why you should become a member of Maheshwari Pragati Mandal, Mumbai.</p>
                        <p>Mandal activities provide Members a platform to make a meaningful change to Society while establishing deep bonds with fellow members.</p>
                    </div>
                    <a href="<?= base_url('public/organisation_at_glance') ?>" class="btn">Know more</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="<?= base_url('public/assets/img/home/about2.jpg') ?>" alt="" class="img-bordered">
                        </div>
                        <div class="about-back-img">
                            <img src="<?= base_url('public/assets/img/home/about1.jpg') ?>" alt="" class="img-bordered">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="team-area pt-30 pb-30">
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
                <?php $latestPublications = array_slice($publications, 0, 5); ?>
                <div class="publication-scroll-container position-relative">
                    <div class="scroll-arrow left-arrow" onclick="scrollPublications('left')">&#10094;</div>

                    <div class="publication-scroll" id="publicationScroll">
                        <?php foreach ($latestPublications as $pub): ?>
                            <?php $pdfUrl = $pub['document_path']; ?>
                            <div class="publication-card text-center">
                                <div class="team-img mb-5">
                                    <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png'); ?>" alt="PDF Icon" width="110">
                                </div>
                                <div class="team-caption">
                                    <h4 class="mb-5"><?= esc($pub['month']) . ' ' . esc($pub['year']); ?></h4>
                                    <a href="<?= esc($pdfUrl); ?>" target="_blank" class="btn btn-sm">View PDF</a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="publication-card view-more-card flex-shrink-0 mx-3 text-center"> <a href="<?= base_url('public/saraswani') ?>" class="btn btn-sm">View More →</a> </div>
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
</main>

<script>
    function scrollPublications(direction) {
        const container = document.getElementById('publicationScroll');
        const scrollAmount = container.offsetWidth * 0.8;
        container.scrollBy({
            left: direction === 'left' ? -scrollAmount : scrollAmount,
            behavior: 'smooth'
        });
    }
</script>

<?php $this->endSection(); ?>