
<?php
include "DBConnection.php";
$id = $_SESSION['iduser'];

$query = "SELECT * from utilizadores where id = '$id'";
$result = mysqli_query($link, $query);
$image = mysqli_fetch_assoc($result);
?>
<div class="intro-x dropdown w-8 h-8">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
        <img alt="Midone Tailwind HTML Admin Template" src="<?php
                                                                echo "data:image/jpg;base64,".base64_encode($image['content']);
                                                            ?>">

    </div>
    <div class="dropdown-box w-56">
        <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
            <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                <div class="font-medium">
                    <?php
                            if(isset($_SESSION['iduser'])){
                                echo $_SESSION['user-name'];
                            }
                    ?>
                </div>
                <div class="text-xs text-theme-41 dark:text-gray-600"><!--DevOps Engineer--></div>
            </div>
            <div class="p-2">
                <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a> -->
                <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a> -->
                <a href="formalterarpass.php" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Alterar Password </a>
                <!-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a> -->
            </div>
            <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                <a href="logout.php" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="log-out" class="w-4 h-4 mr-2"></i> Sair </a>
            </div>
        </div>
    </div>
</div>