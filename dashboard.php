<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logoetpcsemnome.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Menu</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
            <?php include('mobile-menu.php'); ?>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <?php include('menu.php'); ?>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Menu</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Account Menu -->
                    <?php 
                            include('account-menu-user.php');  
                    ?>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Menu
                                </h2>
                                <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Atualizar </a>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <?php if($idtipo == 1){ ?>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="user" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM utilizadores where estado = 1");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Utilizadores</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="users" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM tipo_user where estado = 1");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Tipos de Utilizadores</div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="package" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM produto where estado = 1");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Produtos</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="truck" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM fornecedores where estado = 1");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Fornecedores</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="layers" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM categorias where estado = 1");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Categorias</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="map-pin" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM localidades where estado = 1");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Localidades</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="briefcase" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM empresas where estado = 1");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Empresas</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="file-text" class="report-box__icon text-theme-10"></i>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">
                                            <?php
                                                $sql = mysqli_query($link, "SELECT * FROM logs");
                                                $row = mysqli_num_rows($sql);
                                                echo $row;
                                            ?>
                                            </div>
                                            <div class="text-base text-gray-600 mt-1">Logs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: General Report -->
                    </div>
                    <?php if($idtipo == 1){ ?>
                        <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
                            <div class="xxl:pl-6 grid grid-cols-12 gap-6">

                                <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3 xxl:mt-8">
                                        <div class="intro-x flex items-center h-10">
                                            <h2 class="text-lg font-medium truncate mr-5">
                                                Logs
                                            </h2>
                                        </div>
                                        <div class="mt-5">

                                            <?php 
                                                $query = "SELECT descricao, l.datahora, l.user as luser, userid, content FROM logs as l, utilizadores as u where l.userid = u.id order by l.id desc limit 5";
                                                $result = mysqli_query($link, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            
                                            <div class="intro-x">
                                                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                                        <img alt="Midone Tailwind HTML Admin Template" src="<?php echo "data:image/jpg;base64,".base64_encode($row['content']); ?>">
                                                    </div>
                                                    <div class="ml-4 mr-auto">
                                                        <div class="font-medium"><?php echo $row['luser']; ?></div>
                                                        <div class="text-gray-600 text-xs"><?php echo $row['descricao']; ?></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } ?>

                                            <a href="formlistarlogs.php" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-15 dark:border-dark-5 text-theme-16 dark:text-gray-600">Ver Mais</a> 
                                        </div>
                                    </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>