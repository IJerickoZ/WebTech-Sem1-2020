<form id="showmsg" method="post" action="">
<input type="text" id="invalue" name="invalue" value="0">
<input type="submit" id="submit" value="Submit">
</form>

<?php
    $number = $_POST['invalue'];
    echo "<strong>ตารางสูตรคูณแม่ $number </strong>" ."<br>";
    for ($i = 1; $i <= 12; $i++) {
        echo $number . " x " . $i . " = " . $number * $i . "<br>";
    }

?>