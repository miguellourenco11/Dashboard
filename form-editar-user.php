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
        <title>Editar Utilizador</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
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
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Editar Utilizador</a> </div>
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
                                    Editar Utilizador
                                </h2>
                                <!-- <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a> -->
                            </div>
                            <?php
                            if(isset($_GET['id'])){
                                $userid = $_GET['id'];
                                $query = "SELECT * from utilizadores WHERE id = '$userid'";
                                $result = mysqli_query($link, $query);
                                $row = mysqli_fetch_array($result);
                                $fidtipo = $row['idtipo']; 
                            
                            ?>
                            <form action="form-editar-user.php" method="post">
                                <div class="intro-y box">
                                    <!-- <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                        <h2 class="font-medium text-base mr-auto">
                                            Input
                                        </h2>
                                        <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                            <div class="mr-3">Show example code</div>
                                            <input data-target="#input" class="show-code input input--switch border" type="checkbox">
                                        </div>
                                    </div> -->
                                    <div class="p-5" id="input">
                                        <div class="preview">
                                            <div>
                                                <input name = "userid" value="<?php echo $userid?>" hidden>
                                            </div>
                                            <div>
                                                <label>Nome</label>
                                                <input name="user" value="<?php echo $row["user"] ?>" type="text" class="input w-full border mt-1 mb-4" placeholder="nome">
                                            </div>
                                            <div>
                                                <label>Password</label>
                                                <input name="pass" value="<?php echo $row["pass"]?>" type="text" class="input w-full border mt-1 mb-4" placeholder="Password" readonly>
                                            </div>
                                            <div>
                                                <label>Tipo</label>
                                                <select name="idtipo" class="input border mr-2">
                                                <?php
                                                        $qry = "SELECT * from tipo_user where estado = 1 and idtipo = '$fidtipo'";
                                                        $result = mysqli_query($link, $qry);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['idtipo'] ?>">
                                                            <?php echo $row['tipo'];?> </option>
                                                            <?php } ?>
                                                    <?php
                                                        $qry = "SELECT * from tipo_user where estado = 1 and idtipo != '$fidtipo' order by idtipo";
                                                        $result = mysqli_query($link, $qry);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['idtipo'] ?>">
                                                            <?php echo $row['tipo'];?> </option>
                                                            <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="source-code hidden">
                                            <button data-target="#copy-input" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                            <div class="overflow-y-auto h-64 mt-3">
                                                <pre class="source-preview" id="copy-input"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full rounded-full border mt-2&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-xs text-gray-600 mt-2&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;password&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2 bg-gray-100 cursor-not-allowed&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                            </div>
                                        </div>
                                    </div>
                                    <button id="editar" class="button w-24 ml-5 mr-2 mb-8 bg-theme-1 text-white">Editar</button>
                                <button type="reset" class="button w-24 inline-block mr-1 mb-2 border border-theme-1 text-theme-1 dark:border-theme-10 dark:text-theme-10">Limpar</button>
                                </div>
                            </form>
                            <?php } ?>                                                                        
                            <?php
                                if(isset($_POST["userid"]) && isset($_POST["user"]) && isset($_POST["idtipo"])){
                                    $fuserid = $_POST["userid"];
                                    $fuser = $_POST["user"];
                                    $fidtipo = $_POST["idtipo"];

                                    $query = mysqli_query($link, "UPDATE utilizadores SET user = '$fuser',  idtipo = '$fidtipo' WHERE id = '$fuserid'");
                                    if($query){
                                        echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-9 text-white\">Editado com sucesso</div>";

                                        $query = mysqli_query($link, "INSERT INTO logs (user, descricao, datahora, userid) VALUES ('$user_name', 'Editou Utilizador', now(), '$iduser')");
                                        ?>
                                            <script>
                                                window.location.replace("formlistaruser.php");
                                            </script>
                                        <?php
                                    }
                                    else
                                    {
                                        echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-6 text-white\">Erro ao editar! Erro:".mysqli_error($link);"</div>";
                                    }
                                }
                            ?>

                            
                            </div> 
                        </div>
                        <!-- END: General Report -->
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