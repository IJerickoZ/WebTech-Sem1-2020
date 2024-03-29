<?php
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";    
    $response = file_get_contents($url);
    $result = json_decode($response);
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
        <img width="30%" src="<?php echo $result->meals[0]->strMealThumb;?>">
        <div class="mt-3">
            <p><strong><?php echo $result->meals[0]->strMeal;?><strong></strong><hr width="50%"></p>
        </div>
        <div class="mt-3">
            <p><?php echo substr($result->meals[0]->strInstructions, 0, 560)?></p>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" onClick="window.location.reload();">Random</button>
            <a href="<?php echo $result->meals[0]->strSource?>" target="_blank"> <button class="btn btn-primary">More...</button></a>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
