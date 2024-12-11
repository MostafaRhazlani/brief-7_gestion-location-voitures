<?php 
    require_once('../../connectdb/connectiondb.php');
    
    // select table contrats
    $contrats = "SELECT contrats.*, clients.name, voitures.numImmatriculation FROM ((contrats 
                INNER JOIN clients ON contrats.numClient = clients.id)
                INNER JOIN voitures ON contrats.numVoiture = voitures.id)";
    $resultContrats = mysqli_query($conn, $contrats);
?>


<?php include('../layout/_HEAD.php'); ?>

<div class="w-full h-screen grid grid-cols-5 grid-rows-10 p-2 gap-2">
    <!-- include sidebar -->
    <?php include('../layout/_SIDEBAR.php') ?>

    <header class="col-span-4 row-span-1 py-4 px-6 bg-[#2a2455] rounded-md flex justify-end">
        <input class="p-2 w-2/5 rounded-md" type="search" placeholder="Search...">
    </header>

    <div class="col-span-4 row-span-1 py-4 px-6 bg-[#2a2455] rounded-md text-white flex justify-between">
        <button class="showFormAdd py-2 px-4 bg-[#423c6b] rounded-md hover:bg-[#5b5680]"><i class="fa-solid fa-user-plus"></i> Add Client</button>
        <button class="py-2 px-4 bg-[#423c6b] rounded-md hover:bg-[#5b5680]"><i class="fa-solid fa-arrow-down-a-z"></i> Sort Clients</button>
    </div>
    
    <div class="col-span-4 row-span-8 flex justify-center">
        <div class="w-full bg-[#2a2455] p-10 rounded-md">
            <table class="w-full mx-auto table-auto text-center text-gray-300">
                <thead>
                    <tr class="bg-[#191444]">
                        <th class="p-4">ID</th>
                        <th class="p-4">Name Client</th>
                        <th class="p-4">N° Immatriculation</th>
                        <th class="p-4">Date Debut</th>
                        <th class="p-4">Date Fin</th>
                        <th class="p-4">Duree</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- display all contrats -->
                    <?php if($resultContrats) { ?>
                        <?php $index = 0; while($contrat = mysqli_fetch_assoc($resultContrats)) { ?>
                            <tr class="border-t-[0.2px] border-gray-500 hover:bg-[#585286]">
                                <td class="px-2 py-4"><?php echo $index +=1 ?></td>
                                <td class="px-2 py-4"><?php echo $contrat['name'] ?></td>
                                <td class="px-2 py-4"><?php echo $contrat['numImmatriculation'] ?></td>
                                <td class="px-2 py-4"><?php echo $contrat['dateDebut'] ?></td>
                                <td class="px-2 py-4"><?php echo $contrat['dateFin'] ?></td>
                                <td class="px-2 py-4"><?php echo $contrat['duree'] ?></td>
                                <td class="px-2 py-4">
                                    <span class="bg-blue-700 rounded-full px-2 py-1 text-white text-[13px] hover:bg-blue-500 cursor-pointer mr-1"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit</span>
                                    <span class="bg-red-700 rounded-full px-2 py-1 text-white text-[13px] hover:bg-red-500 cursor-pointer"><i class="fa-regular fa-trash-can"></i>&nbsp;Delete</span>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php include('./addContrats.php') ?>
        <?php include('../../alertAdd.php') ?>
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
                    window.location.href = 'contrats.php'
                }, 3000)
            </script>";
        }
    }
?>