<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logoetpcsemnome.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Listar Logs</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        <?php include("mobile-menu.php"); ?>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <?php include("menu.php"); ?>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Listar Logs</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Account Menu -->
                    <?php
                            include('account-menu-user.php');
                    ?>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h1 class="text-lg font-medium truncate mr-5">
                                    Listar Logs
                                </h1>
                                <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Atualizar </a>
                            </div>
                            <div class="intro-y w-full col-span-12 overflow-auto lg:overflow-visible">
                                <form method="POST" action="exportar-logs.php">
                                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                                        <button class="button text-white bg-theme-1 shadow-md mr-2" type="button" onclick="window.print()">Imprimir</button>
                                        <button class="button text-white bg-theme-1 shadow-md mr-2" type="submit" name="export">Exportar PDF</button>
                                    </div>
                                </form>
                                <form action="formlistarlogs.php" method="post">
                                    <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                                        <div class="w-56 relative text-gray-700 dark:text-gray-300 ml-auto mr-0">
                                            <input type="text" name="search" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                                            <button class="button w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" type="submit"><i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i></button> 
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-report -mt-2">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-no-wrap">NOME</th>
                                            <th class="whitespace-no-wrap">DESCRIÇÃO</th>
                                            <th class="whitespace-no-wrap">DATA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(isset($_POST['search'])){
                                                $search = $_POST['search'];
                                                $query = "SELECT * FROM logs where user like '%$search%' or descricao like '%$search%' or datahora like '%$search%' order by id desc";
                                                $result = mysqli_query($link, $query);
                                                while ($row = mysqli_fetch_array($result)) {

                                                    echo "<tr class=\"intro-x\">";
                                                    // Atributos
                                                    echo "<td class=\"font-medium whitespace-no-wrap\">" . $row['user'] . "</td>";
                                                    echo "<td class=\"font-medium whitespace-no-wrap\">" . $row['descricao'] . "</td>";
                                                    echo "<td class=\"font-medium whitespace-no-wrap\">" . $row['datahora'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            else{
                                                $query = "SELECT * FROM logs order by id desc";
                                                $result = mysqli_query($link, $query);
                                                while ($row = mysqli_fetch_array($result)) {

                                                    echo "<tr class=\"intro-x\">";
                                                    // Atributos
                                                    echo "<td class=\"font-medium whitespace-no-wrap\">" . $row['user'] . "</td>";
                                                    echo "<td class=\"font-medium whitespace-no-wrap\">" . $row['descricao'] . "</td>";
                                                    echo "<td class=\"font-medium whitespace-no-wrap\">" . $row['datahora'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal" id="delete-confirmation-modal">
                            <div class="modal__content">
                                <form action="formlistarcat.php" method="post" name="del_cat">
                                    <div class="p-5 text-center">
                                        <input type="hidden" value="" name="del_cat_id">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                                        <div class="text-3xl mt-5">Tem a certeza?</div>
                                        <div class="text-gray-600 mt-2">Quer mesmo apagar este produto? Este processo não pode ser revertido.</div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancelar</button>
                                        <button id="confirm-delete" type="submit" class="button w-24 bg-theme-6 text-white">Apagar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const deleteButtons = document.querySelectorAll('.delete-cat');

                                deleteButtons.forEach(button => {
                                    button.addEventListener('click', function () {
                                        const catId = this.getAttribute('data-id');
                                        const modal = document.getElementById('delete-confirmation-modal');
                                        
                                        // Preencher o campo hidden do modal com o ID do produto
                                        modal.querySelector('input[name="del_cat_id"]').value = catId;
                                    });
                                });

                                // Adicionar evento de clique ao botão "Apagar" dentro do modal
                                document.getElementById('confirm-delete').addEventListener('click', function () {
                                    const modal = document.getElementById('delete-confirmation-modal');
                                    const catId = modal.querySelector('input[name="del_cat_id"]').value;

                                    // Enviar a solicitação de exclusão ao servidor
                                    window.location.href = 'formlistarcat.php?del_cat_id=' + catId;
                                });
                            });
                        </script>
                        <?php 
                            if(isset($_POST['del_cat_id'])){
                                $id = $_POST['del_cat_id'];

                                if(isset($id)){
                                    $query = mysqli_query($link, "update categorias set estado = 0 where id = '$id'");
                                    ?>
                                    <script>
                                        window.location.replace("formlistarcat.php");
                                    </script>
                                    <?php
                                }
                            }
                        ?>
                         <!-- END: General Report -->
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