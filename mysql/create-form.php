<?php 
include "db.php";
include "function.php";

add();
?>
<?php 
    include "include/header.php";
?>

<div class="container">

    <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="create-form.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-primary" name="submit">Create</button>

        </form>
    </div>

</div>
<?php 
    include "include/footer.php";
?>