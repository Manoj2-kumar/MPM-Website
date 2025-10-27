<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mumbai Maheshwari</title>
    <?= $this->include('layout/header-link') ?>
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('public/assets/img/logo-dark (1).png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('layout/header') ?>


    <div class="pc-container">
        <div class="pc-content" id="main-content">
            <?= $this->renderSection('content') ?>
        </div>
    </div>


    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
        </div>
    </footer>

    <?= $this->include('layout/footer') ?>

    <?= $this->include('layout/footer-link') ?>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
</body>

</html>