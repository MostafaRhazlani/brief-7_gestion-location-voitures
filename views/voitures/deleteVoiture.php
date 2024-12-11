<?php
    require_once('../../connectdb/connectiondb.php');
    //  check if the id exist in url and get it
    if(isset($_GET['idDeleteVoiture'])) {
        $getId = $_GET['idDeleteVoiture'];
        echo "<script>
            document.addEventListener('DOMContentLoaded', () => {
                const formDelete = document.querySelector('.formDelete');
                formDelete.classList.remove('hidden');
            });
        </script>";

        // get client when id in url equal id of client
        $queryVoiture = mysqli_query($conn, "SELECT id, modele FROM voitures WHERE id = $getId");

        $resultgetVoiture = mysqli_fetch_assoc($queryVoiture);
        
 
    }

    if(isset($_POST['idUser'])) {
        $idUser = $_POST['idUser'];

        $queryDelete = "DELETE FROM voitures WHERE id = ?";
        $params = array($idUser);
        $resultQueryDelete = $conn->prepare($queryDelete);
        
        if($resultQueryDelete->execute($params)) {
            header('location:voitures.php?alert=success_delete');
        }
    }
?>

<div class="formDelete absolute z-10 w-1/4 bg-white p-5 top-20 rounded-md hidden text-center">
    <div class="w-full flex justify-center mb-10 mt-5">
        <div class="w-28 h-28 rounded-full border-[4px] border-yellow-500 flex justify-center items-center">
            <span class="text-6xl text-yellow-500">!</span>
        </div>
    </div>

    <h1 class="text-2xl font-semibold text-center mb-4">Are You Sure You Want Delete</h1>
    
    <form action="./deleteVoiture.php" method="post">
        
        <input type="hidden" name="idUser" value="<?php echo $resultgetVoiture['id'] ?>">
        <div class="w-full p-3 bg-gray-200 rounded-md text-gray-700">
            <h1><?php echo $resultgetVoiture['modele'] ?></h1>
        </div>
       
        <div class="mt-10 flex justify-evenly">
            <button id="closeDelete" type="button" class="px-3 py-2 w-2/6 bg-red-600 text-white rounded-md hover:bg-red-400">No</button>
            <button class="px-3 py-2 w-2/6 bg-blue-600 text-white rounded-md hover:bg-blue-400" type="submit">Yes</button>
        </div>
    </form>
</div>

<script>
    const closeDelete = document.querySelector('#closeDelete');
    
    closeDelete.addEventListener('click', () => {
        window.location.href = 'voitures.php';
    });

</script>