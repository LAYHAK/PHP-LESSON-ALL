<?php 
include "db.php";
include "function.php";

delete();
?>
<?php 
    include "include/header.php"
?>
    <div class="container">

        <div class="col-sm-6">
            <h1 class="text-center">Delete</h1>
            <form action="delete-form.php" method="post">
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

                <button class="btn btn-primary" name="submit">Delete</button>
                <!-- <button class="btn btn-primary" name="submit">Create</button> -->

            </form>
        </div>

    </div>
<?php 
    include "include/footer.php";
?>