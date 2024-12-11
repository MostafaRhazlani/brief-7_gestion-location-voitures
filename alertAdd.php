<?php $page = $_SERVER['PHP_SELF'] ?>

<div class="showAlertAdd absolute z-10 w-1/4 bg-white p-5 top-20 hidden rounded-md text-center">
    
    <div class="w-full flex justify-center mb-10 mt-5">
        <div class="w-28 h-28 rounded-full border-[4px] border-green-500 flex justify-center items-center">
            <span class="text-6xl text-green-500"><i class="fa-solid fa-check"></i></span>
        </div>
    </div>
    <?php 
        if($page == '/views/users/users.php') {
            echo "<h1 class='text-2xl font-semibold text-center mb-10'>Client added succesfuly</h1>";
        } else if($page == '/views/voitures/voitures.php') {
            echo "<h1 class='text-2xl font-semibold text-center mb-10'>Voiture added succesfuly</h1>";
        } else {
            echo "<h1 class='text-2xl font-semibold text-center mb-10'>Contrats added succesfuly</h1>";
        }
    ?>
</div>