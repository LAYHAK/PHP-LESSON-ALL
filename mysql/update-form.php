<?php 
include "db.php";
include "function.php";

update();

include "include/header.php"
?>

<body>
    <div class="container">

        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
            <form action="update-form.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php
                        show_option();

                        ?>
                        <option value=""></option>
                    </select>
                </div>

                <button class="btn btn-primary" name="submit">Update</button>

            </form>
        </div>

    </div>
    <?php 
    include "include/footer.php";
?>