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

    .about-content p {
        position: relative;
        font-size: 16px;
        color: #333;
        line-height: 1.8;
        margin-bottom: 12px;
        padding-left: 20px;
        text-align: justify;
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
                                <h2>Origin of Maheshwari</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="text-center mb-5">
                    <img src="<?= base_url('public/assets/img/Mahesh-Navami.jpg') ?>" alt="Maheshwari Culture and Festivals" class="about-img">
                </div>
                <div class="row about-row">
                    <div class="about-content">
                        <p>There are several legends about the origin of the Maheshwari community, but the one generally accepted places the date of their origin as about <strong>4,000 years prior to the Vikram Samvat</strong>.</p>
                        <p>Once upon a time, there was a King named <strong>Khadaksen</strong> who ruled the village of <strong>Khandela</strong> near Jaipur. The kingdom flourished under his wise administration, and the people loved their King dearly.</p>
                        <p>Despite having 24 wives, King Khadaksen had no son. To seek blessings, he performed a great <strong>Yagya</strong>. The saints blessed him with a son but warned that the boy must not go north until he was 16 years old.</p>
                        <p>Queen Champavati, the King’s fifth wife, later gave birth to a son named <strong>Sujan Kuvar</strong>. The kingdom rejoiced at his birth. Sujan grew up brave and learned in administration and weaponry.</p>
                        <p>In his youth, Sujan Kuvar came under the influence of Jain saints and began destroying Hindu temples to build Jain ones. One day, while hunting with his <strong>72 Rajput soldiers</strong>, he ordered the destruction of a holy Yagya being performed by sages. The enraged sages cursed Sujan and his soldiers, turning them into <strong>stone</strong>.</p>
                        <p>When the news reached King Khadaksen, he died in grief, and sixteen queens performed <strong>Sati</strong>. Sujan’s wife <strong>Chandravati</strong> and the wives of the 72 Rajputs pleaded with the sages for mercy. The sages gave them an <strong>Akshay Mantra</strong> to please Lord Shiva and Goddess Parvati.</p>
                        <p>Moved by their devotion, Lord Shiva restored the men to life. He instructed them to give up violence and live as <strong>Vaishyas (traders)</strong> instead of warriors, blessing them as the <strong>Maheshwari community</strong> — “the blessed ones of Mahesh (Lord Shiva).”</p>
                        <p>When the men hesitated to accept their wives due to caste restrictions, <strong>Goddess Parvati</strong> instructed them to take four parikramas around her, reuniting them as husband and wife within the Vaishya caste. This tradition continues even today as the <strong>four pheras</strong> in Maheshwari weddings.</p>
                        <p>The seventy-two Rajput couples formed seventy-two <strong>Khanps (surnames)</strong>, and five more were later added, forming the complete Maheshwari lineage.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="team-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <figure class="image-container">
                            <img src="<?= base_url('public/assets/img/aboutus/OGM/gaitore.jpg') ?>" alt="Girgaon Bhavan" class="about-img">
                            <figcaption class="img-caption">GAITORE</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-7 about-content">
                        <p><strong>Culture and Special Maheshwari Festivals:</strong></p>
                        <p>The Maheshwaris are devout followers of <strong>Lord Shiva and Goddess Parvati</strong>. Several rituals and festivals hold deep significance within the community.</p>
                        <p><strong>Badi Teej</strong> — Celebrated on the third day (Krishnapaksha) of <strong>Bhadrapada</strong>, this festival is especially sacred for women. Married women fast and pray for their husbands' longevity, while unmarried girls pray for good spouses. Only after the men cut the “peenda” do women perform puja and end their fast.</p>
                        <p><strong>Gorja (or Gavraja)</strong> — Celebrated on the third day of <strong>Chaitra (Sudi)</strong>, when Shiva and Parvati are worshipped. Unmarried girls worship Goddess Gorja with “gulla” (green grass core) for sixteen days, while married women worship for eight days with “doob” grass.</p>
                        <p><strong>Bhai Panchami (Rishi Panchami)</strong> — Observed twenty days after the usual Raksha Bandhan, on the fifth day of the second half of <strong>Bhadrapad</strong>. Sisters tie rakhis and pray for the well-being of their brothers.</p>
                        <p><strong>Mahesh Navami</strong> — Celebrated on <strong>Jyestha Shukla Navami</strong>, this marks the day Lord Shiva blessed the seventy-two Vaishya couples and is commemorated as the <strong>birth of the Maheshwari community</strong>. Devotees worship Lord Mahesh and Goddess Parvati on this day, seeking blessings for happiness, prosperity, and family harmony.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php $this->endSection(); ?>