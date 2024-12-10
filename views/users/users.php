<?php 
    require_once('../../connectdb/connectiondb.php');
    include('../layout/_HEAD.php');
    
    // select table users
    $clients = "SELECT * FROM clients";
    $resultClients = $conn->query($clients);
?>

<div class="w-full h-screen grid grid-cols-5 p-2 gap-2">
    <!-- include sidebar -->
    <?php include('../layout/_SIDEBAR.php') ?>

    <div class="col-span-4">
        <header class="py-4 px-6 bg-[#2a2455] rounded-md flex justify-end">
            <input class="p-2 w-2/5 rounded-md" type="search" placeholder="Search...">
        </header>

        <div class="mt-2 py-4 px-6 bg-[#2a2455] rounded-md text-white flex justify-between">
            <button class="showFormAdd py-2 px-4 bg-[#423c6b] rounded-md hover:bg-[#5b5680]"><i class="fa-solid fa-user-plus"></i> Add Client</button>
            <button class="py-2 px-4 bg-[#423c6b] rounded-md hover:bg-[#5b5680]"><i class="fa-solid fa-arrow-down-a-z"></i> Sort Clients</button>
        </div>
        <div class="pt-2 flex justify-center h-[82%]">
            <div class="w-full bg-[#2a2455] p-10 rounded-md">
                <table class="w-full mx-auto table-auto text-center text-gray-300">
                    <thead>
                        <tr class="bg-[#191444]">
                            <th class="p-4">ID</th>
                            <th class="p-4">Name</th>
                            <th class="p-4">Address</th>
                            <th class="p-4">Number Phone</th>
                            <th class="p-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- display all users -->
                        <?php if($resultClients) { ?>
                            <?php while($client = $resultClients->fetch()) { ?>
                                <tr class="border-t-[0.2px] border-gray-500 hover:bg-[#585286]">
                                    <td class="px-2 py-4"><?php echo $client['id'] ?></td>
                                    <td class="px-2 py-4"><?php echo $client['name'] ?></td>
                                    <td class="px-2 py-4"><?php echo $client['address'] ?></td>
                                    <td class="px-2 py-4"><?php echo $client['numberPhone'] ?></td>
                                    <td class="px-2 py-4">
                                        <a href="./users.php?idUser=<?php echo $client['id'] ?>" class="bg-blue-700 rounded-full px-2 py-1 text-white text-[13px] hover:bg-blue-500 mr-1">
                                            <i class="fa-solid fa-user-pen"></i>&nbsp;&nbsp;Edit
                                        </a>
                                        <span class="remove bg-red-700 rounded-full px-2 py-1 text-white text-[13px] hover:bg-red-500 cursor-pointer"><i class="fa-solid fa-user-minus"></i>&nbsp;&nbsp;Delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php include('./addClient.php') ?>
            <?php include('./editClient.php') ?>
            <?php include('../../alertAdd.php') ?>
            <?php include('../../alertEdit.php') ?>
            <?php include('../../alertDelete.php') ?>
        </div>
    </div>
</div>

<?php 

    include('../layout/_FOOTER.php');

    if(isset($_GET['alert'])) {
        $alert = $_GET['alert'];

        if($alert == 'success_add') {
            echo "<script>
                const showAlertAdd = document.querySelector('.showAlertAdd');
                showAlertAdd.classList.remove('hidden')

                setTimeout(() => {
                    window.location.href = 'users.php'
                }, 3000)
            </script>";
        } else if($alert == 'success_update') {
            echo "<script>
                const showAlertEdit = document.querySelector('.showAlertEdit');
                showAlertEdit.classList.remove('hidden')

                setTimeout(() => {
                    window.location.href = 'users.php'
                }, 3000)
            </script>";
        }
    }
?>