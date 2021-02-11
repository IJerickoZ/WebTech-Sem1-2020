<?php
    $url = "http://10.0.15.12/lab8/restapis/currencyrate";    
    $response = file_get_contents($url);
    $result = json_decode($response);
    $money = $_POST['money'];
    $exchange = $_POST['select1'];
    $exchange2 = $_POST['select2'];
    $money2 = $money/$result->rates->$exchange; //Euro 
    $money2 = $money2*$result->rates->$exchange2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5" align="center">
        <div width="200">
            <form action="" method="post">
                <label for="select">From: </label>
                <select id="select1" name="select1">
                <option value="THB" <?php if(strcmp($exchange, "THB") == 0){echo "selected";}?>>THB</option>
                <option value="JPY" <?php if(strcmp($exchange, "JPY") == 0){echo "selected";}?>>JPY</option>
                <option value="USD" <?php if(strcmp($exchange, "USD") == 0){echo "selected";}?>>USD</option>
                <option value="CNY" <?php if(strcmp($exchange, "CNY") == 0){echo "selected";}?>>CNY</option>
                <option value="SGD" <?php if(strcmp($exchange, "SGD") == 0){echo "selected";}?>>SGD</option>
            </select>
                <input type="text" id="money" name="money" value="<?php echo $money;?>"><br>
                <label for="select">To: </label>
                <select id="select2" name="select2">
                <option value="THB" <?php if(strcmp($exchange2, "THB") == 0){echo "selected";}?>>THB</option>
                <option value="JPY" <?php if(strcmp($exchange2, "JPY") == 0){echo "selected";}?>>JPY</option>
                <option value="USD" <?php if(strcmp($exchange2, "USD") == 0){echo "selected";}?>>USD</option>
                <option value="CNY" <?php if(strcmp($exchange2, "CNY") == 0){echo "selected";}?>>CNY</option>
                <option value="SGD" <?php if(strcmp($exchange2, "SGD") == 0){echo "selected";}?>>SGD</option>
            </select>
                <input type="text" id="money2" name="money2" value="<?php echo $money2;?>"><br>
                <input class="btn btn-primary" type="submit" type="submit" id="submit" name="submit" value="Callculate">
            </form>

        </div>





    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>