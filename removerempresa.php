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
        <title>Remover Empresa</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <?php include "DBConnection.php";?>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <?php include ("mobile-menu.php");?>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <?php include ("menu.php");?>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Remover Empresa</a> </div>
                    <!-- END: Breadcrumb -->
                    
                    <!-- BEGIN: Account Menu -->
                        <?php include('account-menu-user.php'); ?>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    Remover Empresa
                                </h2>
                                <!-- <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a> -->
                            </div>
                            

                            
                                
                                    <form action="removerempresa.php" name="apagar_emp" id="apagar_emp" method="post">                                   
                                        Escolha a empresa que pretende remover:
                                        <div class="mt-2">
                                            <select name="empid" class="input border mr-2">
                                                <?php
                                                    $qry = "Select * from empresas order by id";
                                                    $result = mysqli_query($link, $qry);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value = "<?php echo $row['id'];?>">
                                                        <?php echo $row['nome'];?> </option>
                                                        <?php } ?>
                                            </select>
                                            <button class="button w-24 inline-block mr-1 mb-2 border border-theme-1 text-theme-1 dark:border-theme-10 dark:text-theme-10">Apagar</button>
                                        </div>
                                    </form>
                                    <?php
                                        if(isset($_POST["empid"]))
                                        {
                                            $fempid = $_POST["empid"];
                                            $query = mysqli_query($link, "update empresas set estado = 0 where id = '$fempid'");

                                            if($query)
                                            {
                                                echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-9 text-white\">Removida com sucesso</div>";

                                                $query = mysqli_query($link, "INSERT INTO logs (user, descricao, datahora, userid) VALUES ('$user_name', 'Removeu Empresa', now(), '$iduser')");
                                            }
                                            else
                                            {
                                                echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-6 text-white\">Erro ao remover! Erro:".mysqli_error($link);"</div>";
                                            }
                                        }
                                    ?>


                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-3 xxl:border-l border-theme-5 -mb-10 pb-10">
                        <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                        </div>
                    </div>
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