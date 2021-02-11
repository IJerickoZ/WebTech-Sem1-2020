<?php
    $url = "http://10.0.15.12/lab8/restapis/candidates";    
    $response = file_get_contents($url);
    $result = json_decode($response);
    $value = $_POST['select1'];
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
        <form action="" method="post">
                <select id="select1" name="select1" style="width:500px">
                <option value="x" selected>Select number</option>
                <option value="0">1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
                <option value="4">5</option>
                <option value="5">6</option>
                <option value="6">7</option>
                <option value="7">8</option>
                <option value="8">9</option>
                <option value="9">10</option>
            </select>
            <button style="width:100px; padding: 2px" type="submit" class="btn btn-primary">Submit</button>
</form>
            <?php
            for($i = 0; $i <= 10; $i++){
                if(strcmp($value, $i)== 0){
                    echo "
                    <div class='card mt-5' style='width: 100%'>
                    <img src='" .$result[$i]->img ."' .class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'><strong>" .$result[$i]->name ."</strong></h5>
                      <p class='card-text' style='color:red;'> Rank: " .$result[$i]->no ."</p>
                      <p class='card-text'>Vote: " .$result[$i]->score ."</p>
                    </div>
                  </div>
                    ";
                }
            }
            ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>

