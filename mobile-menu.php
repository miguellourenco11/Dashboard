<?php
    session_start();
    if(!isset($_SESSION['iduser'])){
        Header("Location: index.php");
    }

    include('DBConnection.php');

        $id = $_SESSION['iduser'];
        $query = "SELECT * FROM utilizadores WHERE id = '$id'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);

        $idtipo = $row["idtipo"];
?>
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="dashboard.php" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logoetpcsemnome.png">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="dashboard.php" class="menu">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Menu </div>
            </a>
        </li>
        <?php
        if($idtipo == 1){
        ?>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="user"></i> </div>
                <div class="menu__title"> Utilizadores <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="forminseriruser.php" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="menu__title"> Inserir Utilizador </div>
                    </a>
                </li>
                <li>
                    <a href="formlistaruser.php" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Listar Utilizadores </div>
                    </a>
                </li>
                <li>
                    <a href="removerutilizador.php" class="menu">
                        <div class="menu__icon"> <i data-feather="trash"></i> </div>
                        <div class="menu__title"> Remover Utilizador </div>
                    </a>
                </li>
            </ul>
        </li>
        

        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title"> Tipo de utilizador <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="forminserirtipo.php" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="menu__title"> Inserir Tipo </div>
                    </a>
                </li>
                <li>
                    <a href="formlistartipo.php" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Listar Tipo </div>
                    </a>
                </li>
                <li>
                    <a href="removertipo.php" class="menu">
                        <div class="menu__icon"> <i data-feather="trash"></i> </div>
                        <div class="menu__title"> Remover Tipo </div>
                    </a>
                </li>
            </ul>
        </li>
        <?php } ?>

        
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="package"></i> </div>
                <div class="menu__title"> Produtos <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="forminserirprod.php" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="menu__title"> Inserir Produto </div>
                    </a>
                </li>
                <li>
                    <a href="formlistarprod.php" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Listar Produtos </div>
                    </a>
                </li>
                <?php if($idtipo == 1){ ?>
                <li>
                    <a href="removerproduto.php" class="menu">
                        <div class="menu__icon"> <i data-feather="trash"></i> </div>
                        <div class="menu__title"> Remover Produto </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="truck"></i> </div>
                <div class="menu__title"> Fornecedores <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="forminserirforn.php" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="menu__title"> Inserir Fornecedor </div>
                    </a>
                </li>
                <li>
                    <a href="formlistarforn.php" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Listar Fornecedores </div>
                    </a>
                </li>
                <?php if($idtipo == 1){ ?>
                <li>
                    <a href="removerfornecedor.php" class="menu">
                        <div class="menu__icon"> <i data-feather="trash"></i> </div>
                        <div class="menu__title"> Remover Fornecedor </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="layers"></i> </div>
                <div class="menu__title"> Categorias <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="forminserircat.php" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="menu__title"> Inserir Categoria </div>
                    </a>
                </li>
                <li>
                    <a href="formlistarcat.php" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Listar Categorias </div>
                    </a>
                </li>
                <?php if($idtipo == 1){ ?>
                <li>
                    <a href="removercategoria.php" class="menu">
                        <div class="menu__icon"> <i data-feather="trash"></i> </div>
                        <div class="menu__title"> Remover Categoria </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="map-pin"></i> </div>
                <div class="menu__title"> Localidades <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="forminserirlocal.php" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="menu__title"> Inserir Localidade </div>
                    </a>
                </li>
                <li>
                    <a href="formlistarlocal.php" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Listar Localidades </div>
                    </a>
                </li>
                <?php if($idtipo == 1){ ?>
                <li>
                    <a href="removerlocalidade.php" class="menu">
                        <div class="menu__icon"> <i data-feather="trash"></i> </div>
                        <div class="menu__title"> Remover Localidade </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="briefcase"></i> </div>
                <div class="menu__title"> Empresas <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="forminseriremp.php" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-circle"></i> </div>
                        <div class="menu__title"> Inserir Empresa </div>
                    </a>
                </li>
                <li>
                    <a href="formlistaremp.php" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Listar Empresas </div>
                    </a>
                </li>
                <?php if($idtipo == 1){ ?>
                <li>
                    <a href="removerempresa.php" class="menu">
                        <div class="menu__icon"> <i data-feather="trash"></i> </div>
                        <div class="menu__title"> Remover Empresa </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </li>
    </ul>
</div>