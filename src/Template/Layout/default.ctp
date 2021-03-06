
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Invome : Invome Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="Invome : Invome Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="Invome : Invome Admin  Bootstrap 5 Template" />
	<meta property="og:image" content="https://invome.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Ingeniat</title>
	
	<!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="<?= $this->Url->Image('favicon.png') ?>">
	<?= $this->Html->css('/vendor/jquery-nice-select/css/nice-select.css') ?>
	<?= $this->Html->css('/vendor/owl-carousel/owl.carousel.css') ?>
    <?= $this->Html->css('/vendor/nouislider/nouislider.min.css') ?>
	<?= $this->Html->css('/vendor/select2/css/select2.min.css') ?>
	<?= $this->Html->script('jquery-3.6.0.min.js') ?>

	<!-- Style css -->
    <?= $this->Html->css('style.css') ?>
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
				<img alt="image" class="logo-abbr" width="70" height="56" src="<?= $this->Url->Image('profile/ingeniat.png') ?>">
				<!-- <svg class="logo-abbr" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg"> -->
					<path d="M32.9585 1.84675C30.4961 -0.615584 26.5039 -0.615585 24.0415 1.84675L19.3876 6.50068H12.8059C9.32365 6.50068 6.50071 9.32362 6.50071 12.8059V19.3876L1.84675 24.0415C-0.615584 26.5039 -0.615585 30.4961 1.84675 32.9585L6.50071 37.6124V44.1941C6.50071 47.6763 9.32365 50.4993 12.8059 50.4993H19.3876L24.0415 55.1532C26.5039 57.6156 30.4961 57.6156 32.9585 55.1532L37.6124 50.4993H44.1941C47.6764 50.4993 50.4993 47.6763 50.4993 44.1941V37.6124L55.1532 32.9585C57.6156 30.4961 57.6156 26.5039 55.1532 24.0415L50.4993 19.3876V12.8059C50.4993 9.32362 47.6764 6.50068 44.1941 6.50068H37.6124L32.9585 1.84675Z" fill="url(#paint0_linear)"/>
					<path class="logo-text" fill-rule="evenodd" clip-rule="evenodd" d="M24.7614 37.345L20.7666 40.3417C20.4005 40.616 19.9111 40.6607 19.5015 40.4553C19.0919 40.2511 18.8333 39.833 18.8333 39.375V17.625C18.8333 16.958 19.3746 16.4167 20.0416 16.4167H36.9583C37.6253 16.4167 38.1666 16.958 38.1666 17.625V39.375C38.1666 39.833 37.9081 40.2511 37.4984 40.4553C37.0888 40.6607 36.5994 40.616 36.2333 40.3417L32.2386 37.345L29.3543 40.2293C28.883 40.7018 28.1169 40.7018 27.6457 40.2293L24.7614 37.345ZM35.75 36.9584V18.8334H21.25V36.9584L24.15 34.7834C24.6309 34.4221 25.3039 34.4704 25.7293 34.8957L28.5 37.6664L31.2707 34.8957C31.696 34.4704 32.3691 34.4221 32.85 34.7834L35.75 36.9584ZM27.2916 28.5H29.7083C30.3753 28.5 30.9166 27.9587 30.9166 27.2917C30.9166 26.6247 30.3753 26.0834 29.7083 26.0834H27.2916C26.6246 26.0834 26.0833 26.6247 26.0833 27.2917C26.0833 27.9587 26.6246 28.5 27.2916 28.5ZM24.875 23.6667H32.125C32.792 23.6667 33.3333 23.1254 33.3333 22.4584C33.3333 21.7914 32.792 21.25 32.125 21.25H24.875C24.208 21.25 23.6666 21.7914 23.6666 22.4584C23.6666 23.1254 24.208 23.6667 24.875 23.6667Z" fill="white"/>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">Ing<span>eniat</span></h2>
					<span class="brand-sub-title"></span>
					
				</div>

            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                
                            </div>
                        </div>
                        
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<div class="dropdown header-profile2 ">
					<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
						<div class="header-info2 d-flex align-items-center border">
							<img src="<?= $userData["imagen"] ? $this->Url->Image('/files/userfiles/'.$userData["id"].'/picture/200.jpg') : $this->Url->Image('/files/default/defaultpic.jpg') ?>" alt="" >
							<div class="d-flex align-items-center sidebar-info">
								<div>
									<span class="font-w700 d-block mb-2"><?= $userData["usuario"]?></span>
									<small class="text-end font-w400"><?= $userData["rol"]?></small>
								</div>
								<i class="fas fa-sort-down ms-4"></i>
							</div>
							
						</div>
					</a>
					
					<div class="dropdown-menu dropdown-menu-end">
						<?= $this->Html->link(' <svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg><span class="ms-2">Cerrar Sesion </span>',['escape'=>false,'controller'=>'usuarios','action'=>'logout'],['escape'=>false,'class'=>'dropdown-item ai-icon']) ?>
					</div>
				</div> 
                <ul class="metismenu" id="menu">
                    <?php    
                        
                            foreach($menusDB as $Menu)
                            {
                                ?>
                                    <?php
                                    $icono = (!empty($Menu->icon))?$Menu->icon:'';
                                    if(!empty($Menu->children_menus))                           
                                    {
                                        ?>
                                        <li>
                                            <a class="has-arrow " href="javascript:void()" aria-expanded="false" >
                                                <i class=" <?= $Menu->icon ?>"></i>
                                                <span class="nav-text" data-i18n="<?= $Menu->nombre ?>"><?= $Menu->nombre ?></span>
                                            </a>
                                            <ul aria-expanded="false">
                                                <?php
                                                    foreach($Menu->children_menus as $submenu)
                                                    {
                                                        ?>
                                                            <li>
                                                                <?php echo $this->Html->link($submenu->nombre,$submenu->href,['escape'=>false, 'class'=>"/" . $this->request->getParam('controller') . "/" .  $this->request->getParam('action')  == $submenu->href ? "mm-active" : "/" .  $this->request->getParam('controller') . "/" .  $this->request->getParam('action') . "/"  == $submenu->href  ? "mm-active"  : ""]); ?>
                                                            </li>
                                                        <?php
                                                    }
                                                ?>   
                                            </ul>
                                        </li>
                                        <?php
                                        
                                    }
                                    else       
                                    {     
                                        ?>
                                            <li class=" <?= "/" . $this->request->getParam('controller') . "/" .  $this->request->getParam('action')  == $Menu->href ? "mm-active" : "/" .  $this->request->getParam('controller') . "/" .  $this->request->getParam('action') . "/"  == $Menu->href  ? "mm-active"  : ""  ?>" aria-expanded="false">
                                                <?= $this->Html->link('<i class=" '.$icono.'"></i> <span class="nav-text" data-i18n="'.$Menu->nombre.'">'.$Menu->nombre.'</span>',$Menu->href,['escape'=>false]) ?>
                                            </li>
                                        <?php     
                                    }
                                    ?>
                                <?php
                            }
                    ?>
                </ul>
				
				<div class="copyright">
					<p><strong>Invome Admin Dashboard</strong> ?? 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="min-height: 1130px;">
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		

		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright ?? Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?= $this->Html->script('/vendor/global/global.min.js') ?>
    <?= $this->Html->script('/vendor/jquery-nice-select/js/jquery.nice-select.min.js') ?>
	<?= $this->Html->script('/vendor/chart.js/Chart.bundle.min.js') ?>

	<!-- Apex Chart -->
	<?= $this->Html->script('/vendor/select2/js/select2.full.min.js') ?>
	<?= $this->Html->script('plugins-init/select2-init.js') ?>
	<?= $this->Html->script('custom.min.js') ?>
	<?= $this->Html->script('dlabnav-init.js') ?>
	<?= $this->Html->script('demo.js') ?>
	<?= $this->Html->script('styleSwitcher.js') ?>
    
	<!-- Chart piety plugin files -->
    <?= $this->Html->script('/vendor/peity/jquery.peity.min.js') ?>
    <?= $this->Html->script('/vendor/nouislider/nouislider.min.js') ?>
    <?= $this->Html->script('/vendor/wnumb/wNumb.js') ?>

	
	<!-- Dashboard 1 -->
    <?= $this->Html->script('dashboard/dashboard-1.js') ?>
	
    <?= $this->Html->script('/vendor/owl-carousel/owl.carousel.js') ?>
	
	<?= $this->Html->script('/vendor/apexchart/apexchart.js') ?>
    <?= $this->Html->script('/vendor/chart.js/Chart.bundle.min.js') ?>
    
    
	
	
	
    
    
    
	
	
    

</body>
</html>
    
