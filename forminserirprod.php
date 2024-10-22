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
        <title>Inserir Produto</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <?php include "DBConnection.php";?>
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
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Inserir Produto</a> </div>
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
                                    Inserir Produto
                                </h2>
                                <!-- <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a> -->
                            </div>
                            

                        <form action="forminserirprod.php" method="post" enctype="multipart/form-data">
                            <div class="intro-y box">
                                <div class="p-5" id="input">
                                    <input type="file" name="image" accept="image/*" required>
                                    <div class="preview">
                                        <div>
                                            <label>Designação do produto</label>
                                            <input name="designacao" type="text" class="input w-full border mt-1 mb-4" placeholder="Designação do produto">
                                        </div>
                                        <div>
                                            <label>Quantidade do produto</label>
                                            <input name="quantidade" type="text" class="input w-full border mt-1 mb-4" placeholder="Quantidade do produto">
                                        </div>
                                        <div>
                                            <label>Cor do produto</label>
                                            <input name="cor" type="text" class="input w-full border mt-1 mb-4" placeholder="Cor do produto">
                                        </div>
                                        <div>
                                            <label>Preço unitário do produto</label>
                                            <input name="precounitario" type="text" class="input w-full border mt-1 mb-4" placeholder="Preço do produto">
                                        </div>
                                        <div>
                                            <label>Fornecedor do produto</label>
                                            <select name="idforn" class="input border mr-2">
                                                <?php
                                                    $qry = "SELECT * from fornecedores where  estado = 1 order by idforn";
                                                    $result = mysqli_query($link, $qry);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?php echo $row['idforn'] ?>">
                                                        <?php echo $row['nome'];?> </option>
                                                        <?php } ?>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Categoria do produto</label>
                                            <select name="id" class="input border mr-2">
                                                <?php
                                                    $qry = "SELECT * from categorias where estado = 1 order by id";
                                                    $result = mysqli_query($link, $qry);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>">
                                                        <?php echo $row['nomecat'];?> </option>
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
                                <button class="button w-24 ml-5 mr-2 mb-8 bg-theme-1 text-white" name="upload">Inserir</button>
                                <button type="reset" class="button w-24 inline-block mr-1 mb-2 border border-theme-1 text-theme-1 dark:border-theme-10 dark:text-theme-10">Limpar</button>
                            </div>
                        </form>
                        <?php

                            // Ligação Base de Dados
                            $host = "localhost";
                            $dbname = "bd_miguel";
                            $username = "root";
                            $password = "";

                            try {
                                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            } catch (PDOException $e) {
                                die("Falha na Ligação: " . $e->getMessage());
                            }


                            if(isset($_POST["designacao"]) && isset($_POST["quantidade"]) && isset($_POST["cor"]) && isset($_POST["precounitario"]) && isset($_POST["idforn"]) && isset($_POST["id"])){
                                $fdesignacao = $_POST["designacao"];
                                $fquantidade = $_POST["quantidade"];
                                $fcor = $_POST["cor"];
                                $fprecounitario = $_POST["precounitario"];
                                $fidforn = $_POST["idforn"];
                                $fid = $_POST["id"];


                                // Verificar Se Está Selecionado um Ficheiro
                                if ($_FILES['image']['name']) {
                                    $file_name = $_FILES['image']['name'];
                                    $file_tmp = $_FILES['image']['tmp_name'];
                                    $file_type = $_FILES['image']['type'];
                                    $file_size = $_FILES['image']['size'];
                            
                                    // Fazer a Leitura do Ficheiro
                                    $fp = fopen($file_tmp, 'r');
                                    $content = fread($fp, filesize($file_tmp));
                                    $content = addslashes($content);
                                    fclose($fp);
                            
                                    // Insert o ficheiro na tabela imagens
                                    $query = "INSERT INTO imagens (name, type, size, content) VALUES ('$file_name', '$file_type', '$file_size', '$content')";
                                    $conn->exec($query);
                                }


                                $query = mysqli_query($link, "INSERT into produto(designacao, quantidade, cor, precounitario, fornecedor, categoria, datahora, estado, name, type, size, content) values('$fdesignacao', '$fquantidade', '$fcor', '$fprecounitario', '$fidforn', '$fid', now(), 1, '$file_name', '$file_type', '$file_size', '$content');");
                                
                                if($query){
                                    echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-9 text-white\">Inserido com sucesso</div>";

                                    $query = mysqli_query($link, "INSERT INTO logs (user, descricao, datahora, userid) VALUES ('$user_name', 'Inseriu Produto', now(), '$iduser')");
                                }
                                else
                                {
                                    echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-6 text-white\">Erro ao inserir! Erro:".mysqli_error($link);"</div>";
                                }
                            }
                        ?>
                        <?php $id = $_SESSION['iduser'] ?>



                            
                            </div> 
                        </div>
                        <!-- END: General Report -->
                        
                        <!-- END: Weekly Top Products -->
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