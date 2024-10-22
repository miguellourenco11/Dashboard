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
        <title>Listar Tipos</title>
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
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Listar Tipos</a> </div>
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
                                    Listar Tipos
                                </h1>
                                <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Atualizar </a>
                            </div>
                            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">  
                                <form method="POST" action="exportar-tipo.php">
                                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                                        <button class="button text-white bg-theme-1 shadow-md mr-2" type="button" onclick="window.print()">Imprimir</button>
                                        <button class="button text-white bg-theme-1 shadow-md mr-2" type="submit" name="export">Exportar PDF</button>
                                    </div>
                                </form>
                                <table class="table table-report -mt-2">
                                    <thead>
                                        <tr>
                                            <!-- <th class="whitespace-no-wrap">IMAGES</th> -->
                                            <th class="text-center whitespace-no-wrap">NOME</th>
                                            <?php if($idtipo == 1){ ?>
                                            <th class="text-center whitespace-no-wrap">AÇÕES</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT idtipo, tipo FROM tipo_user where estado = 1 order by idtipo";
                                        $result = mysqli_query($link, $query);
                                        while ($row = mysqli_fetch_array($result)) {

                                            echo "<tr class=\"intro-x\">";
                                            // Atributos
                                            echo "<td class=\"text-center font-bold\">" . $row['tipo'] . "</td>";

                                            // Ações
                                            if($idtipo == 1){
                                            echo '<td class="table-report__action w-56">';
                                            echo '<div class="flex justify-center items-center">';
                                            echo '<a class="flex items-center mr-3" href="form-editar-tipo.php?id='.$row['idtipo'].'"><i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar </a>';
                                            echo '<a class="flex items-center text-theme-6 delete-tipo" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal" data-id="'.$row['idtipo'].'"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Apagar </a>';
                                            echo '</div>';
                                            echo '</td>';
                                            }
                                            echo '</tr>';
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal" id="delete-confirmation-modal">
                            <div class="modal__content">
                                <form action="formlistartipo.php" method="post" name="del_tipo">
                                    <div class="p-5 text-center">
                                        <input type="hidden" value="" name="del_tipo_id">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                                        <div class="text-3xl mt-5">Tem a certeza?</div>
                                        <div class="text-gray-600 mt-2">Quer mesmo apagar este tipo de utilizador? Este processo não pode ser revertido.</div>
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
                                const deleteButtons = document.querySelectorAll('.delete-tipo');

                                deleteButtons.forEach(button => {
                                    button.addEventListener('click', function () {
                                        const tipoId = this.getAttribute('data-id');
                                        const modal = document.getElementById('delete-confirmation-modal');
                                        
                                        // Preencher o campo hidden do modal com o ID do produto
                                        modal.querySelector('input[name="del_tipo_id"]').value = tipoId;
                                    });
                                });

                                // Adicionar evento de clique ao botão "Apagar" dentro do modal
                                document.getElementById('confirm-delete').addEventListener('click', function () {
                                    const modal = document.getElementById('delete-confirmation-modal');
                                    const tipoId = modal.querySelector('input[name="del_tipo_id"]').value;

                                    // Enviar a solicitação de exclusão ao servidor
                                    window.location.href = 'formlistartipo.php?del_tipo_id=' + tipoId;
                                });
                            });
                        </script>
                        <?php 
                            if(isset($_POST['del_tipo_id'])){
                                $id = $_POST['del_tipo_id'];

                                if(isset($id)){
                                    $query = mysqli_query($link, "update tipo_user set estado = 0 where idtipo = '$id'");

                                    $query = mysqli_query($link, "INSERT INTO logs (user, descricao, datahora, userid) VALUES ('$user_name', 'Removeu Tipo de Utilizador', now(), '$iduser')");
                                    ?>
                                    <script>
                                        window.location.replace("formlistartipo.php");
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