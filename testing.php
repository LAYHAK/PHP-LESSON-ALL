<?php
// In case: method="get or post"
if (isset($_REQUEST["buttonSubmit"])) {
    $value01 = $_POST["txtValue01"];
    //? pre-defined array varaible
    $value02 = $_POST["txtValue02"];
    $sum = $value01 + $value02;
    echo $sum;
}
$arr = 1;
echo is_array($arr);
?>
<form action="" method="post">
    <label for="txtValue01">Value 01: </label>
    <input type="text" name="txtValue01" id="txtValue01"><br><br>
    <label for="txtValue02">Value 02: </label>
    <input type="text" name="txtValue02" id="txtValue02"><br><br>
    <input type="submit" value="Submit" name="buttonSubmit">
</form>