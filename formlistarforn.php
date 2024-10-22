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
        <title>Listar Fornecedores</title>
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
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Listar Fornecedores</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Account Menu -->
                    <?php 
                            include('account-menu-user.php');
                    ?>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <?php include "DBConnection.php";?>

                <div class="grid grid-cols-2 gap-6">
                    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h1 class="text-lg font-medium truncate mr-5">
                                    Listar Fornecedores
                                </h1>
                                <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Atualizar </a>
                            </div>
                            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">  
                                <form method="POST" action="exportar-forn.php">
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
                                            <th class="text-center whitespace-no-wrap">EMAIL</th>
                                            <th class="text-center whitespace-no-wrap">TELEFONE</th>
                                            <th class="text-center whitespace-no-wrap">LOCALIDADE</th>
                                            <?php if($_SESSION['iduser'] == 0){ ?>
                                            <th class="text-center whitespace-no-wrap">AÇÕES</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT idforn, f.nome as nomeforn, email, telefone, l.nome as lnome, l.estado as estadolocal FROM localidades l, fornecedores f WHERE f.estado = 1 and l.id = f.localidade order by idforn";
                                        $result = mysqli_query($link, $query);
                                        while ($row = mysqli_fetch_array($result)) {

                                            echo "<tr class=\"intro-x\">";
                                            // Atributos
                                            echo "<td class=\"text-center font-bold\">" . $row['nomeforn'] . "</td>";
                                            echo "<td class=\"text-center\">" . $row['email'] . "</td>";
                                            echo "<td class=\"text-center\">" . $row['telefone'] . "</td>";
                                            if($row['estadolocal'] == 0){
                                                echo "<td class=\"text-center\">Sem localidade atual</td>";
                                            }else{
                                            echo "<td class=\"text-center\">" . $row['lnome'] . "</td>";
                                            };

                                            // Ações
                                            if($_SESSION['iduser'] == 0){
                                            echo '<td class="table-report__action w-56">';
                                            echo '<div class="flex justify-center items-center">';
                                            echo '<a class="flex items-center mr-3" href="form-editar-forn.php?id='.$row['idforn'].'"><i data-feather="check-square" class="w-4 h-4 mr-1"></i> Editar </a>';
                                            echo '<a class="flex items-center text-theme-6 delete-forn" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal" data-id="'.$row['idforn'].'"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Apagar </a>';
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
                                <form action="formlistarforn.php" method="post" name="del_forn">
                                    <div class="p-5 text-center">
                                        <input type="hidden" value="" name="del_forn_id">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                                        <div class="text-3xl mt-5">Tem a certeza?</div>
                                        <div class="text-gray-600 mt-2">Quer mesmo apagar este fornecedor? Este processo não pode ser revertido.</div>
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
                                const deleteButtons = document.querySelectorAll('.delete-forn');

                                deleteButtons.forEach(button => {
                                    button.addEventListener('click', function () {
                                        const fornId = this.getAttribute('data-id');
                                        const modal = document.getElementById('delete-confirmation-modal');
                                        
                                        // Preencher o campo hidden do modal com o ID do produto
                                        modal.querySelector('input[name="del_forn_id"]').value = productId;
                                    });
                                });

                                // Adicionar evento de clique ao botão "Apagar" dentro do modal
                                document.getElementById('confirm-delete').addEventListener('click', function () {
                                    const modal = document.getElementById('delete-confirmation-modal');
                                    const productId = modal.querySelector('input[name="del_forn_id"]').value;

                                    // Enviar a solicitação de exclusão ao servidor
                                    window.location.href = 'formlistarforn.php?del_forn_id=' + fornId;
                                });
                            });
                        </script>
                        <?php 
                            if(isset($_POST['del_forn_id'])){
                                $id = $_POST['del_forn_id'];

                                if(isset($id)){
                                    $query = mysqli_query($link, "update fornecedores set estado = 0 where idforn = '$id'");

                                    $query = mysqli_query($link, "INSERT INTO logs (user, descricao, datahora, userid) VALUES ('$user_name', 'Removeu Fornecedor', now(), '$iduser')");
                                    ?>
                                    <script>
                                        window.location.replace("formlistarforn.php");
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