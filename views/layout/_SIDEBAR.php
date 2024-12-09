<?php include('../../URL.php') ?>

<div class="bg-[#2a2455] rounded-md col-span-1 p-4 text-white">
    <div class="flex items-center justify-center text-xl mb-8">
        <?php echo "<img width='80' src='$URL/src/img/images_sidebar/logo.png' alt=''>" ?>
        <h1 class="font-semibold text-[#837bbe]">RENTAL CAR</h1>
    </div>

    <div class="flex items-center mb-10">
        <?php echo "<img class='rounded-full bg-[#423c6b] w-10 h-10 border-2 border-[#7361ff]' src='$URL/src/img/images_sidebar/photo youcode.jpg' alt=''>" ?>
        <div class="ml-3">
            <h1 class="text-md">Mostafa Rhazlani</h1>
            <span class="text-gray-400 text-sm">mo.rhazlani@gmail.com</span>
        </div>
    </div>
    
    <h1>Home</h1>
    <a class="mb-4 p-2 hover:bg-[#595480] rounded-sm flex items-center" href="#">
        <?php echo "<img class='p-1 bg-slate-600 rounded-md mr-4' width='26' src='$URL/src/img/images_sidebar/home.svg' alt=''>" ?>
            Home
    </a>

    <h1>Pages</h1>
    <div class="flex flex-col mt-2">
        <a class="p-2 mb-1 hover:bg-[#595480] rounded-sm flex items-center" href="#">
        <?php echo "<img class='p-1 bg-emerald-600 rounded-md mr-4' width='26' src='$URL/src/img/images_sidebar/users.svg' alt=''>" ?>
            Clients
        </a>
        <a class="p-2 mb-1 hover:bg-[#595480] rounded-sm flex items-center" href="#">
            <?php echo "<img class='p-1 bg-cyan-600 rounded-md mr-4' width='27' src='$URL/src/img/images_sidebar/car.svg' alt=''>" ?>
            Cars
        </a>
        <a class="p-2 hover:bg-[#595480] rounded-sm flex items-center" href="#">
            <?php echo "<img class='p-1 bg-purple-600 rounded-md mr-4' width='27' src='$URL/src/img/images_sidebar/contract.svg' alt=''>" ?>
            Contracts
        </a>
    </div>

</div>