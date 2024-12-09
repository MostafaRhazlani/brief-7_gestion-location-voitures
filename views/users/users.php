
<?php include('../layout/_HEAD.php') ?>

<div class="w-full h-screen grid grid-cols-5 p-2 gap-2">
    <!-- include sidebar -->
    <?php include('../layout/_SIDEBAR.php') ?>

    <div class="col-span-4">
        <header class="py-4 px-6 bg-[#2a2455] rounded-md flex justify-end">
            <input class="p-2 w-2/5 rounded-md" type="search" placeholder="Search...">
        </header>

        <div class="mt-2 py-4 px-6 bg-[#2a2455] rounded-md text-white flex justify-between">
            <button class="py-2 px-4 bg-[#423c6b] rounded-md hover:bg-[#5b5680]"><i class="fa-solid fa-user-plus"></i> Add Client</button>
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
                        <tr class="border-t-[0.2px] border-gray-500 hover:bg-[#585286]">
                            <td class="px-2 py-4"></td>
                            <td class="px-2 py-4"></td>
                            <td class="px-2 py-4"></td>
                            <td class="px-2 py-4"></td>
                            <td class="px-2 py-4">
                                <span class="edit bg-blue-700 rounded-full px-2 py-1 text-white text-[13px] hover:bg-blue-500 cursor-pointer mr-1"><i class="fa-solid fa-user-pen"></i>&nbsp;&nbsp;Edit</span>
                                <span class="remove bg-red-700 rounded-full px-2 py-1 text-white text-[13px] hover:bg-red-500 cursor-pointer"><i class="fa-solid fa-user-minus"></i>&nbsp;&nbsp;Delete</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>