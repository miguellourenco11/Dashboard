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
        <title>Alterar Password</title>
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
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Menu</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Alterar Password</a> </div>
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
                                    Alterar Password
                                </h2>
                                <!-- <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a> -->
                            </div>
                            
							<?php
								if (isset($_SESSION["iduser"])) 
								{	 
								$fiduser = $_SESSION['iduser'];
								} 

								$query  = "SELECT * FROM utilizadores where id = $fiduser";
								$result = mysqli_query($link,$query);
								$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

								$user = $row['user'];

							?>

							<form action="formalterarpass.php" method="post">
								<input id="fiduser" name="fiduser" value=" <?php echo $fiduser ?>" type="hidden" size = "20"  />
								<div>
									<label>Nome de utilizador</label>
									<input type="text" name="fuser" value="<?php echo $user ?>" class="input w-full border mt-2 mb-4" readonly>
								</div>

								<div>
									<label>Nova Password</label>
									<input type="password" name="fpass" class="input w-full border mt-2 mb-4" placeholder="Nova Password">
								</div>

								<div>
									<label>Confirme Nova Password</label>
									<input type="password" name="fpass2" class="input w-full border mt-2 mb-4" placeholder="Nova Password">
								</div>

								<button type="submit" class="button w-24 mr-1 mb-2 bg-theme-1 text-white">Guardar</button>
							</form>
						<?php
							if(isset($_POST['fuser']) && isset($_POST['fpass']) && isset($_POST['fpass2'])){
								$fuser = $_POST['fuser'];
								$fpass = $_POST['fpass'];
								$fpass2 = $_POST['fpass2'];

								if($fpass != $fpass2){
									echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-6 text-white\">As passwords têm de ser iguais!</div>";
								}else{
							
									if($user != 'admin')
									{
										$fpass = md5($fpass);
									}

								$query = mysqli_query($link,"update utilizadores set pass = '$fpass' where id = '$fiduser'");
								
								if($query){
									echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-9 text-white\">Atualizado com sucesso</div>";
											
								}else{
									echo "<div class=\"rounded-md px-5 py-4 mb-2 bg-theme-6 text-white\">Erro ao atualizar! Erro:".mysqli_error($link);"</div>";
														}	
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