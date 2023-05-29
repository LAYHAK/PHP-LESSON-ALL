<?php 
include "db.php";
include "function.php";

update();

include "include/header.php"
?>

<body>
    <table class="table table-bordered">
        <thead class='table-primary'>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">UserName</th>
                <th scope="col">Password</th>

            </tr>
        </thead>
        <tbody class='table-warning'>
            <?php
                    read();
                ?>

        </tbody>
    </table>
    <?php 
    include "include/footer.php";
?>