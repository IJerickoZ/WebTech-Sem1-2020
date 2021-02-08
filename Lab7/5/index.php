<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container"> 
    <table class="table mt-5 text-center">
  <thead>
    <tr>
      <th scope="col" class="table-dark">x</th>
      <?php 
        for($i = 1; $i <= 12 ; $i++){
            echo "<th scope='col' class='table-dark'>$i</th>";
        }
      ?>
    </tr>
  </thead>
  <tbody>
    
        <?php
            for($i = 1; $i <= 12 ; $i++){
                echo "<tr>
                <th scope='row' class='table-dark'>$i</th>";
                for($j = 1; $j <= 12; $j++){
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
        ?>
    
  </tbody>
</table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>