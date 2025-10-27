<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<main>
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="hero-cap hero-cap2 pt-0">
                            <h2>Saraswani</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area pt-60 pb-60">
        <div class="container">
            <?php if (!empty($publications)): ?>
                <div class="row justify-content-center">
                    <?php foreach ($publications as $pub): ?>
                        <?php $pdfUrl = API_BASE_URL . 'public/' . $pub['document_path']; ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 mb-5">
                            <div class="publication-card text-center p-4 shadow-sm rounded">
                                <div class="team-img mb-4">
                                    <img src="<?= base_url('public/assets/pdf/pdf_file_icon.png'); ?>"
                                        alt="PDF Icon" style="width:100px; margin:auto;">
                                </div>
                                <div class="team-caption">
                                    <h4 class="mb-3"><?= esc($pub['month']) . ' ' . esc($pub['year']); ?></h4>
                                    <a href="<?= esc($pdfUrl); ?>" target="_blank" class="btn btn-sm btn">View PDF</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>No publications available at the moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>
