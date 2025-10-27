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

    .about-content ul {
        list-style-type: disc;
        margin-left: 40px;
        color: #333;
    }

    .about-content a {
        color: #007bff;
        text-decoration: none;
    }

    .about-content a:hover {
        text-decoration: underline;
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

<main>
    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h2 class="mt-2">Terms and Conditions</h2>
                        <p>The users of Maheshwari Pragati Mandal (MPM) using this Website and Mobile App by implication, means that users have gone through and agreed & abide by following disclaimer, Terms & Conditions.</p>
                    </div>
                </div>
            </div>

            <!-- Section 1 -->
            <div class="row about-row">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about1.png') ?>" alt="Terms Overview" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <h4><strong>Warranty</strong></h4>
                    <p>MPM has taken required efforts to ensure that the information/statement/certificate provided on the MPM Website is reasonably accurate. However, MPM does not warrant its accuracy, completeness, suitability, correctness, adequacy, or validity for any purpose.</p>
                    <p>The database provided is without any warranty, express or implied, as to its legal effect.</p>
                    <h4><strong>Liability to MPM</strong></h4>
                    <ul>
                        <li>Though MPM has taken proper care to make the database reliable, MPM will not be held responsible for any liability that may arise out of errors in the database.</li>
                        <li>MPM does not represent that the MPM Website or Mobile App are free from viruses or harmful components.</li>
                        <li>Use of any information or certificate on MPM’s site shall be at your own risk.</li>
                        <li>All information should be used in accordance with applicable laws. MPM does not undertake any liability whatsoever for the same.</li>
                        <li>If any record or transaction is not in agreement with your records, please contact <a href="mailto:info@mpmmumbai.in">info@mpmmumbai.in</a>.</li>
                        <li>Information is provided on an "as is where is" basis. MPM expressly disclaims all warranties, express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.</li>
                    </ul>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="row about-row flex-row-reverse">
                <div class="col-md-5 text-center">
                    <img src="<?= base_url('public/assets/img/gallery/about2.png') ?>" alt="Liability" class="about-img">
                </div>
                <div class="col-md-7 about-content">
                    <h4><strong>Fee Refund Policy</strong></h4>
                    <ul>
                        <li>The applicant has to pay the membership fee plus payment gateway charges as per prevailing policy of MPM.</li>
                        <li>If the membership application is accepted, the lifetime fee paid shall not be refunded.</li>
                        <li>If the data given in the membership application form or documents are found invalid, MPM reserves the right to disapprove the application and refund the fee paid by the applicant.</li>
                    </ul>
                    <h4><strong>Terms & Conditions</strong></h4>
                    <ul>
                        <li>Users must ensure their passwords are kept confidential and not disclosed to anyone.</li>
                        <li>MPM makes no representation about the timeliness, reliability, or availability of the services contained on the site.</li>
                        <li>MPM is not responsible if any content is altered, removed, or obscured after download or printing.</li>
                        <li>MPM shall not be responsible for any damages or loss arising out of or in connection with the use of the MPM site.</li>
                        <li>Services may be suspended if MPM believes the site or data security could be compromised.</li>
                        <li>MPM reserves the right to suspend any service for any member at its discretion without assigning a reason.</li>
                    </ul>
                    <p><strong>For assistance:</strong> Contact MPM Office at <a href="mailto:info@mpmmumbai.in">info@mpmmumbai.in</a></p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>