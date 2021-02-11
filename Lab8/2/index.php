<?php
    $url = "http://10.0.15.12/lab8/restapis/movies90";    
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
    <div class="container mt-5">
        <div>
            <?php
                for($i = 0; $i < sizeof($result); $i++){
                    echo "<strong><strong>".($i+1) .". " .$result[$i]->title ."(" .($result[$i]->year) .")" ."<br>" ."Cast: <br>";
                    for($j = 0; $j < sizeof($result[$i]->cast); $j++){
                        echo "&emsp; <strong>- " .$result[$i]->cast[$j] ."<br>";
                    }
                    echo "<strong> Genres: </strong><br>";
                    for($k = 0; $k < sizeof($result[$i]->genres); $k++){
                        echo "&emsp;- " .$result[$i]->genres[$k] ."<br>";
                    }
                    echo "<br>";
                }
            ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>