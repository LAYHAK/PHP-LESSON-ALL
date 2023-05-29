<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Create form with label value 1 and value 2 -->
    <!-- Create a submit button -->
    <!-- Create a php file to handle the form -->
    <!-- Print the sum of the two values -->
    <form action="form.php" method="post">
        <label for="value1">Value 1</label>
        <input type="text" name="value1" id="value1">
        <label for="value2">Value 2</label>
        <input type="text" name="value2" id="value2">
        <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $sum = $value1 + $value2;
        echo "The sum is $sum";
    }
    ?>
</body>

</html>