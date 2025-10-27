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
        padding-left: 20px;
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

        .about-content p {
            padding-left: 0;
        }

        .about-content p::before {
            display: none;
        }
    }
</style>

<body>
    <main>
        <!-- Page Title -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-0 text-center">
                                <h2>Our Samitis</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row about-row">
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Maheshwari Pragati Mandal Mumbai" class="about-img">
                    </div>
                    <div class="col-md-7 about-content">
                        <p><strong>Maheshwari Pragati Mandal, Mumbai</strong> functions through its Central and Regional Samitis. For better administration, Mumbai : has been bifurcated in eight Zones.</p>
                        <p>— South Mumbai</p>
                        <p>— Andheri</p>
                        <p>— Goregaon</p>
                        <p>— Ghatkopar</p>
                        <p>— Central Mumbai</p>
                        <p>— Borivali</p>
                        <p>— Malad</p>
                        <p>— Mulund</p>
                        <p>More than 650 volunteers including about 250 Lady Volunteers and about 150 Youth Volunteers are carrying on the activities of the organization through Nyas Mandal, Managing Committee, 8 Central Samitis, 8 Regional Samitis, 8 Regional Ladies Samitis, 8 Regional Yuva Samitis, 5 Bhavan Management Samitis, Chikitsa Sahayata Kosh etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $this->endSection(); ?>