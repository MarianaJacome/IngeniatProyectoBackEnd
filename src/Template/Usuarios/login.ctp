
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Iniciar sesión - Sistema de Mutualista</title>
    <link rel="apple-touch-icon" href="<?= $this->Url->Image('/themes/vue/images/ico/apple-icon-120.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $this->Url->Image('/themes/vue/images/ico/favicon.ico') ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <?= $this->Html->css('/themes/vue/vendors/css/vendors.min.css') ?>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <?= $this->Html->css('/themes/vue/css/bootstrap.css') ?>
    <?= $this->Html->css('/themes/vue/css/bootstrap-extended.css') ?>
    <?= $this->Html->css('/themes/vue/css/colors.css') ?>
    <?= $this->Html->css('/themes/vue/css/components.css') ?>
    <?= $this->Html->css('/themes/vue/css/themes/dark-layout.css') ?>
    <?= $this->Html->css('/themes/vue/css/themes/semi-dark-layout.css') ?>

    <!-- BEGIN: Page CSS-->
    <?= $this->Html->css('/themes/vue/css/core/menu/menu-types/vertical-menu.css') ?>
    <?= $this->Html->css('/themes/vue/css/core/colors/palette-gradient.css') ?>
    <?= $this->Html->css('/themes/vue/css/pages/authentication.css') ?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <?= $this->Html->css('/themes/vue/style.css') ?>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <?= $this->Html->script('/themes/vue/vendors/js/vendors.min.js') ?>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <?= $this->Html->script('/themes/vue/js/core/app-menu.js') ?>
    <?= $this->Html->script('/themes/vue/js/core/app.js') ?>
    <?= $this->Html->script('/themes/vue/js/scripts/components.js') ?>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>