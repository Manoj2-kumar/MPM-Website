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
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-0 text-center">
                                <h2>Our Vision</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="col-md-10 mx-auto text-center mb-5">
                    <div class="about-caption">
                        <p>Maheshwari Samaj is in the forefront of country’s various organised and progressive Societies. It occupies a unique position amongst the nation’s other Societies due to its vast and multifarious specialities / qualities. The salient features of Mandal’s Vision about Maheshwari Samaj in the 21st Century are as follows:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url('public/assets/img/aboutus/img4.png') ?>" alt="Social Completeness" class="about-img">
                    </div>
                    <div class="col-md-7 about-content">
                        <p><strong>1. Social Completeness</strong> — The Samaj to protect and preserve its traditional culture, values, faith and dignity while adopting need-based changes to continue to march forward towards social completeness.</p>
                        <p><strong>2. Family Co-ordination</strong> — The Samaj to have family happiness, love, respect and trust for each other and to be a part of each other’s happiness and sorrows. Also, to have an inspirational environment all-around, particularly to make life of Senior (Aged) Members of the family happy and peaceful.</p>
                        <p><strong>3. Health</strong> — The Samaj to follow the time-tested belief that ‘prevention is better than cure’ and undertake purification of mind, body & soul by practising Yoga, Exercise, Follow rules of Nature and have Pure and Nutritious diets as also regular Health check-ups.</p>
                        <p><strong>4. Education</strong> — There should be an environment of encouraging individual capability and expanding capacity in the Samaj so that every child — male or female — gets the best education according to his/her potentials, to suit the needs of changing scenario.</p>
                        <p><strong>5. Traditional Values</strong> — The Samaj to follow/inculcate traditional human values, time-tested social traditions and culture-oriented “Teej” and other festivities so that it continues to remain least affected by the wide-spread distortions and disturbing trends all around.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url('public/assets/img/aboutus/img5.png') ?>" alt="Education & Values" class="about-img">
                    </div>
                    <div class="col-md-7 about-content">
                        <p><strong>6. Youth and Females</strong> — The Samaj to have a wide-spread participation of Youth and Ladies in the Social activities so that it can protect and preserve its traditional values, customs, faith and dignity, etc.</p>
                        <p><strong>7. Depleting Population</strong> — Depleting population has, of late, surfaced as an issue of concern in the Samaj. Bearing this in mind, each household to actively observe its family planning appropriately, so that Maheshwari Samaj continues to be unique eternally for the cause of not only national service but also for the service of the humanity at large.</p>
                        <p><strong>8. Economic</strong> — Economic activities are at the root of KARMA of Maheshwari Samaj. Therefore, in the World of Commerce, even in the changing scenario, the Samaj to continue to observe pious principles and work ethics so that it can achieve all-round success in the Economic World and be prosperous.</p>
                        <p><strong>9. Abolition of Superstitions</strong> — The Samaj to become free of superstitions and be rational. The abolition of superstitions and rational behaviour will enable it to face the challenges of generation gap as well.</p>
                        <p><strong>10. Service to the Mankind</strong> — The Samaj to become capable, physically and economically, so that it continues to play a leading role in the service of the humanity with appropriate contributions in various ventures of public importance and also in natural calamities.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?php $this->endSection(); ?>