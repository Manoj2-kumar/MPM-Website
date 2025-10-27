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

    .facility-highlight {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #20c997;
        margin: 15px 0;
    }

    .modern-list {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .modern-list li {
        position: relative;
        padding: 12px 0 12px 35px;
        line-height: 1.6;
    }

    .modern-list li:before {
        content: "-";
        position: absolute;
        left: 0;
        top: 50%;
        width: 24px;
        height: 24px;
        color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: bold;
    }

    .nested-list {
        list-style: none;
        padding: 10px 0 0 20px;
        margin: 10px 0;
    }

    .nested-list li {
        position: relative;
        padding: 8px 0 8px 30px;
        border-bottom: none;
        font-size: 14px;
    }

    .nested-list li:before {
        content: "•";
        background: transparent;
        color: #20c997;
        font-size: 18px;
        width: auto;
        height: auto;
    }

    .nested-list li:hover {
        background: transparent;
        padding-left: 30px;
    }

    .booking-info {
        background: linear-gradient(135deg, #20c997, #17a2b8);
        color: white;
        padding: 20px;
        border-radius: 10px;
        margin: 20px 0;
    }

    .booking-info h4 {
        color: white;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .booking-list {
        list-style: none;
        padding: 0;
    }

    .booking-list li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .booking-list li:last-child {
        border-bottom: none;
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

        .modern-list li {
            padding-left: 30px;
        }

        .modern-list li:hover {
            padding-left: 35px;
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
                                <h2>Bhavan & Plot Information</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area pt-30 pb-30">
            <div class="container">
                <div class="col-md-10 mx-auto">
                    <div class="about-content text-center">
                        <p>Over the years, Maheshwari Pragati Mandal, Mumbai has set-up Bhavans in different areas of Mumbai for the service of both Mumbai based Members and for Visitors coming from out of Mumbai, at reasonable and affordable costs.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url('public/assets/img/aboutus/img1.png') ?>" alt="Girgaon Bhavan" class="about-img">
                    </div>
                    <div class="col-md-7 about-content">
                        <h3><b>Maheshwari Pragati Mandal (Girgaon, Chirabazar)</b></h3>
                        <p>Equipped with all modern amenities Maheshwari Bhavan situated at Girgaum, mainly provides accommodation at concessional rate to outstation Community members coming to Mumbai for medical treatment or for other purposes.</p>

                        <h3><b>Maheshwari Bhavan, Andheri</b></h3>
                        <p>A 5 storey Bhavan admeasuring 40,000 square feet at Andheri Link Road is for organising weddings, spiritual discourses, auspicious events of Community Members and their families and friends.</p>
                        <p>First Floor & Fourth Floor available only up to 10:30 pm.</p>

                        <ul class="modern-list">
                            <li>The Bhavan is available for auspicious ceremonies like Wedding, Marriage Anniversary, Birthday Party and other similar occasions.</li>
                            <li>Subsidised rates are provided for Spiritual Programmes, Bhagwat Katha, Discourses, Teaching - Training, etc.</li>
                            <li>Rules and regulations applicable at the time of use will prevail.</li>
                            <li>For additional information, tariff, etc please contact the Manager of Andheri Bhavan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-5 text-center">
                        <img src="<?= base_url('public/assets/img/aboutus/img1.png') ?>" alt="Andheri Bhavan" class="about-img">
                    </div>
                    <div class="col-md-7 about-content">
                        <h3><b>Borivali Plot Information</b></h3>
                        <p>Plot admeasuring 36,000 sq.ft. includes 2 AC Rooms with attached bathrooms</p>
                        <p>The Plot is available for auspicious ceremonies like Wedding, Marriage Anniversary, Birthday Party and other similar occasions.</p>
                        <p>Booking in Advance</p>
                        <ul class="modern-list">
                            <li><strong>For Members:</strong> 12 Months in advance</li>
                            <li><strong>For Others:</strong> 6 Months in advance</li>
                        </ul>

                        <h3><b>Ghatkopar Bhavan Information</b></h3>
                        <ul class="modern-list">
                            <li>AC Hall – 750 sq.ft.</li>
                            <li>AC Room – 180 sq.ft. (attached bathroom)</li>
                            <li>Open Terrace – 1300 sq.ft.</li>
                            <li>Homeopathy Clinic – 100 sq.ft.</li>
                        </ul>

                        <h3><b>Goregaon Bhavan Information</b></h3>
                        <p>340 sq.ft. (Carpet) AC Flat with Bathroom, on Ground Floor is available at Mahesh Nagar.</p>

                        <h3><b>Contact Numbers for Booking</b></h3>
                        <p>Please contact the Mandal office for current contact details and booking information</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $this->endSection(); ?>