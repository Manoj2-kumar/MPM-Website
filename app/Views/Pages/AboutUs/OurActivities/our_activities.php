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

    h3 {
        color: #20c997;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .about-content p {
        position: relative;
        font-size: 16px;
        line-height: 1.8;
        margin-bottom: 12px;
        padding-left: 20px;
        padding-left: 40px;
    }

    .about-content p::before {
        content: "•";
        position: absolute;
        left: 20px;
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
                                <h2>Our Activities</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="col-md-10 mx-auto mb-5">
                    <div class="about-content">
                        <p>Every year Mandal, under the banner of its various committees, conducts about <strong>200 programmes</strong> across Greater Mumbai.</p>
                        <p>Every year, <strong>meritorious students</strong> are honoured during the Mandal’s Annual Day Function.</p>
                        <p>Every year, <strong>Mahila Samitis</strong> organise the distribution of <strong>“Satu Choon”</strong> at cost price during the women’s festival of <strong>Badi Teej</strong>.</p>
                        <p>Once in four years, a <strong>Grand Mega Snehmilan</strong> is organised for all community members, attended by around <strong>8,000 people</strong> who enjoy various cultural and social events.</p>
                        <p>Conducts various <strong>religious and social functions</strong> specifically for ladies.</p>
                        <p>Organises <strong>special programmes</strong> for the benefit of members in fields like <strong>health and medicine</strong>, <strong>eye check-up camps</strong> and <strong> special tie-ups with hospitals</strong> for concessionary services for health & other checkup.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url('public/assets/img/aboutus/img6.jpg') ?>" alt="Service to Society" class="about-img">
                    </div>
                    <div class="col-md-7 about-content">
                        <h3><b>Service to Society / Nation</b></h3>
                        <p>The Mandal has always been active in contributing to national causes during calamities such as the <strong>Latur and Gujarat Earthquakes, Orissa Cyclone, Kargil War, Kerala and Mumbai Floods, and droughts</strong> in Rajasthan and Marathwada.</p>
                        <p>Every year, the Mandal distributes <strong>exercise note books</strong> at subsidized prices to members. Some committees also distribute them <strong>free of cost</strong> to needy students in municipal schools.</p>
                        <p><strong>Drinking water fountains (Pyaus)</strong> are installed and managed for the common public at <strong>Borivali, Girgaon, and Ghatkopar</strong>.</p>
                        <h3><b>Facilities for Members:</b></h3>
                        <p><strong>Girgaum Maheshwari Bhavan</strong>: Renovated Bhavan caters to the needs for accommodation for persons coming from out of Mumbai for medical treatments. Also has a Hall for social functions.</p>
                        <p><strong>Maheshwari Bhavan, Andheri (West)</strong>: Spread over 40,000 sq. ft., available for marriage and social ceremonies since 2005.</p>
                        <p><strong>Borivali Plot</strong>: 36,000 sq. ft. open plot available for social events.</p>
                        <p><strong>Ghatkopar Bhavan</strong>: Homeopathy clinic for needy patients.</p>
                        <p><strong>Goregaon (Mahesh Nagar)</strong>: 340 sq. ft. (Carpet) AC flat with toilet on ground floor available for members.</p>
                        <h3><b>Other:</b></h3>
                        <p>Tie-ups with medicine suppliers, hospitals and diagnostic agencies for medical discounts to Members</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url('public/assets/img/aboutus/img8.jpg') ?>" alt="Education & Welfare" class="about-img">
                    </div>
                    <div class="col-md-7 about-content">
                        <h3><b>STUDENT LOAN/SCHOLARSHIP:</b></h3>
                        <p><strong>Radhakrishna Lahoti Memorial Fund</strong>: Caters to the needy persons for financial assistance for livelihood.</p>
                        <p><strong>Chikitsa Sahayata Kosh</strong>: Caters to the needs of persons who require financial assistance for medical treatment.</p>
                        <p><strong>Students Scholarship Samiti</strong>: Collects and distributes funds as <strong>loans or scholarships</strong> to needy students from Maharashtra and Rajasthan.</p>
                        <p>Provides <strong>loans for students</strong> going abroad for higher studies are also given as financial assistance.</p>
                        <p><strong>Students Adoption Scheme</strong>: Supports needy meritorious students with full financial assistance for 3–4 years until completion of their education.</p>
                        <h3><b>Connecting with Members:</b></h3>
                        <p>Publishes monthly newsletter <strong>“Saraswani”</strong> which contains all activities of Mandal.</p>
                        <p>Publishes <strong>“Janaganana” or “Parivar Parichay Book”</strong> covering Maheshwari families of the zone by regional Zonal Committies at regular interval providing complete info about Maheshwari family, contact details & business details.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $this->endSection(); ?>