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
        <title>Listar Utilizadores</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
            <?php include("mobile-menu.php"); ?>
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <?php include("menu.php"); ?>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Listar Utilizadores</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Account Menu -->
                    <?php include('account-menu-user.php'); ?>  
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h1 class="text-lg font-medium truncate mr-5">
                                    Listar Utilizadores
                                </h1>
                                <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Atualizar </a>
                            </div>
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">  
                            <form method="POST" action="exportar-user.php">
                                <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                                    <button class="button text-white bg-theme-1 shadow-md mr-2" type="button" onclick="window.print()">Imprimir</button>
                                    <button class="button text-white bg-theme-1 shadow-md mr-2" type="submit" name="export">Exportar PDF</button>
                                </div>
                            </form>
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-no-wrap">IMAGENS</th>
                                    <th class="whitespace-no-wrap">NOME</th>
                                    <th class="text-center whitespace-no-wrap">PASSWORD</th>
                                    <th class="text-center whitespace-no-wrap">TIPO</th>
                                    <th class="text-center whitespace-no-wrap">ESTADO</th>
                                    <th class="text-center whitespace-no-wrap">AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT id, content, user, pass, t.tipo as tipo, u.estado as uestado, t.estado as estadotipo FROM utilizadores as u, tipo_user as t where u.idtipo = t.idtipo and u.estado = '1' order by id";
                                    $result = mysqli_query($link, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                        echo "<tr class=\"intro-x\">";
                                        // Atributos

                                        echo "<td class=\"w-40\"> <div class=\"flex\"> <div class=\"w-10 h-10 image-fit zoom-in\">";
                                        echo "<img class=\"tooltip rounded-full\" src=";
                                        echo "data:image/jpg;base64,".base64_encode($row['content']).">";   
                                        echo "</div></div></td>";

                                        echo "<td class=\"font-medium whitespace-no-wrap\">" . $row['user'] . "</td>";
                                        echo "<td class=\"text-center\">" . $row['pass'] . "</td>";

                                        if($row['estadotipo'] == 0){
                                            echo "<td class=\"text-center\">Sem tipo atual</td>";
                                        }else{
                                        echo "<td class=\"text-center\">" . $row['tipo'] . "</td>";
                                        };

                                        echo "<td class=\"w-40\">";
                                        if($row['uestado'] == 1){
                                            echo " <div class=\"flex items-center justify-center text-theme-9\">";   
                                            echo "<i data-feather=\"check-square\" class=\"w-4 h-4 mr-2\"></i>";
                                            echo "Ativo </div>";
                                        }
                                        else{
                                            echo " <div class=\"flex items-center justify-center text-theme-6\">";   
                                            echo "<i data-feather=\"check-square\" class=\"w-4 h-4 mr-2\"></i>";
                                            echo "Inativo </div>";
                                        };

                                        // Ações
                                        echo '<td class="table-report__action w-56">';
                                        echo '<div class="flex justify-center items-center">';
                                        echo '<a class="flex items-center mr-3" href="form-editar-user.php?id='.$row['id'].'"><i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar </a>';
                                        echo '<a class="flex items-center text-theme-6 delete-user" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal" data-id="'.$row['id'].'"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Apagar </a>';
                                        echo '</div>';
                                        echo '</td>';
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
                                <form action="formlistaruser.php" method="post" name="del_user">
                                    <div class="p-5 text-center">
                                        <input type="hidden" value="" name="del_user_id">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                                        <div class="text-3xl mt-5">Tem a certeza?</div>
                                        <div class="text-gray-600 mt-2">Quer mesmo apagar este utilizador? Este processo não pode ser revertido.</div>
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
                                const deleteButtons = document.querySelectorAll('.delete-user');

                                deleteButtons.forEach(button => {
                                    button.addEventListener('click', function () {
                                        const userId = this.getAttribute('data-id');
                                        const modal = document.getElementById('delete-confirmation-modal');
                                        
                                        // Preencher o campo hidden do modal com o ID do produto
                                        modal.querySelector('input[name="del_user_id"]').value = userId;
                                    });
                                });

                                // Adicionar evento de clique ao botão "Apagar" dentro do modal
                                document.getElementById('confirm-delete').addEventListener('click', function () {
                                    const modal = document.getElementById('delete-confirmation-modal');
                                    const userId = modal.querySelector('input[name="del_user_id"]').value;

                                    // Enviar a solicitação de exclusão ao servidor
                                    window.location.href = 'formlistaruser.php?del_user_id=' + userId;
                                });
                            });
                        </script>
                        <?php 
                            if(isset($_POST['del_user_id'])){
                                $id = $_POST['del_user_id'];

                                if(isset($id)){
                                    $query = mysqli_query($link, "update utilizadores set estado = 0 where id = '$id'");

                                    $query = mysqli_query($link, "INSERT INTO logs (user, descricao, datahora, userid) VALUES ('$user_name', 'Removeu Utilizador', now(), '$iduser')");
                                    ?>
                                    <script>
                                        window.location.replace("formlistaruser.php");
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