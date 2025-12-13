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

    /* Unified bullet style for all paragraphs */
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
                                <h2>Organisation at Glance</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <figure class="image-container">
                            <img src="<?= base_url('public/assets/img/aboutus/OAG/Chittorgarh Fort.jpg') ?>" alt="Maheshwari Bhavan" class="about-img">
                            <figcaption class="img-caption">CHITTORGARH FORT - Chittorgarh</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-7 about-content">
                        <p>A Socio Charitable Trust/Organisation established 67 years ago in the city of Mumbai.</p>
                        <p>This is the only social organisation representing more than <strong>4,500 Maheshwari families</strong> residing in the Metropolis city of Mumbai.</p>
                        <p>The Mandal family has a current strength of more than <strong>8,500 active life members.</strong></p>
                        <p><strong>800 active members</strong> including 275 Ladies and 175 Youth are active Karyakarta carrying out Mandal's activities under through the Board of Trustees, Managing Committee, 8 Central Samitis, 8 Regional Samitis, 8 Regional Ladies Samitis, 8 Regional Yuva Samitis, 5 Bhavan Management Samitis, Chikitsa Sahayata Kosh, etc.</p>
                        <p>Places utmost importance on the <strong>Unity of the organisation</strong> and functions based on democratic principles, by taking all members together.</p>
                        <p>Nearly 200 programmes are organised every year by various samitis.</p>
                        <p>Equipped with all modern amenities, Maheshwari Bhavan at Girgaum, mainly provides accommodation at concessional rate to outstation Samaj Bandhus coming for medical treatment.</p>
                        <p>A huge 5 storeys Bhavan admeasuring 40,000 square feet is available at Andheri, Link Road for organising weddings, spiritual discourses & other auspicious events by Samaj Bandhus.</p>
                        <p>Open Plot admeasuring 36,000 square ft. is available at Borivali for members to organise various social events.</p>
                        <p>Provides assistance to under privileged Members for their sustenance through ‘Radha Krishna Lahoti Smriti Kosh.’</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-5 text-center">
                        <figure class="image-container">
                            <img src="<?= base_url('public/assets/img/aboutus/OAG/FPPM.jpg') ?>" alt="Social Welfare" class="about-img">
                            <figcaption class="img-caption">FATEH PRAKASH PALACE MUSEUM - Chittorgarh</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-7 about-content">
                        <p>Provides financial assistance for medical purposes to under privileged members through Chikitsa Sahayata Kosh.</p>
                        <p>Provides assistance to people affected by natural calamities such as drought, earthquake, floods, etc.</p>
                        <p>Collects Donations from Members every year and distributes the same as loan to students for educational purposes.</p>
                        <p>Provides financial assistance through Videsh Shiksha Kosh to students going abroad for higher studies.</p>
                        <p>Fully sponsoring students’ education under ‘Students Adoption Scheme.’</p>
                        <p>Distributes Note Books at concessional rates to school and college students every year.</p>
                        <p>Organises Members get together, Cultural Programme and felicitates bright students with gold and silver medals every year at Annual Day Celebration.</p>
                        <p>Distributes every year pure Saatu Churna and other products at cost price, on the occasion of Badi Teej Festival.</p>
                        <p>Operates Homeopathy clinics at Ghatkopar, Andheri & Girgaum, physiotherapy centre at Andheri and has installed water coolers at Ghatkopar, Goregaon and Borivali as General Welfare Schemes.</p>
                        <p>Provides financial assistance in Tribal areas to children for educational and medical purposes and distributes products useful in schools.</p>
                        <p>Communicates with more than <strong>8,500 Members</strong> through Mandal’s monthly magazine – <strong>‘Saraswani’</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $this->endSection(); ?>