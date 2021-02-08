<?php
    $x = 0;
    $i = 1;
    $value = array(
        'id' => $_POST['id'], 
        'fname' => $_POST['fname'], 
        'lname' => $_POST['lname'], 
        'address' => $_POST['address'], 
        'amphur' => $_POST['amphur'], 
        'province' => $_POST['province'], 
        'postal' => $_POST['postal'], 
        'phone' => $_POST['phone']);
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
    <div class="container p-4 pt-5 pb-5 bg-light">
        <h2 class="text-center mb-0">Form</h2>
        <form method="POST">
            <p class="mt-3">หมายเลขบัตรประชาชน</p><input class="form-control" <?php if(strlen($value['id']) < 5){echo 'style="color:red"'; $x += 1;}?> name="id" type="text" placeholder="หมายเลขบัตรประชาชน" value="<?php echo $value['id'];?>">
            <p class="mt-3">ชื่อ-นามสกุล</p><input class="form-control mt-3" <?php if(strlen($value['fname']) < 5){echo 'style="color:red"'; $x += 1;}?> name="fname" type="text" placeholder="ชื่อ" value="<?php echo $value['fname'];?>">
            <input class="form-control mt-3" <?php if(strlen($value['lname']) < 5){echo 'style="color:red"'; $x += 1;}?> name="lname" type="text" placeholder="นามสกุล" value="<?php echo $value['lname'];?>">
            <p class="mt-3">ที่อยู่</p><input class="form-control mt-3" <?php if(strlen($value['address']) < 5){echo 'style="color:red"'; $x += 1;}?> name="address" type="text" placeholder="ที่อยู่" value="<?php echo $value['address'];?>">
            <p class="mt-3">อำเภอ/เขต</p><input class="form-control mt-3" <?php if(strlen($value['amphur']) < 5){echo 'style="color:red"'; $x += 1;}?> name="amphur" type="text" placeholder="อำเภอ/เขต" value="<?php echo $value['amphur'];?>">
            <p class="mt-3">จังหวัด</p><input class="form-control mt-3" <?php if(strlen($value['province']) < 5){echo 'style="color:red"'; $x += 1;}?> name="province" type="text" placeholder="จังหวัด" value="<?php echo $value['province'];?>">
            <p class="mt-3">รหัสไปรษณีย์</p><input class="form-control mt-3" <?php if(strlen($value['postal']) < 5){echo 'style="color:red"'; $x += 1;}?> name="postal" type="text" placeholder="รหัสไปรษณีย์" value="<?php echo $value['postal'];?>">
            <p class="mt-3">เบอร์โทรศัพท์</p><input class="form-control mt-3" <?php if(strlen($value['phone']) < 5){echo 'style="color:red"'; $x += 1;}?> name="phone" type="text" placeholder="เบอร์โทรศัพท์" value="<?php echo $value['phone'];?>">
            <input class="btn btn-primary mt-3 w-100" type="submit" value="ยืนยัน">
        </form>
        <p> <?php if($x > 0){echo "<h1 class='text-center' style='color:red;'>***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</h1>";}?> </p>
        <?php 
            if($x == 0){
                echo "
                <table class='table text-center'>
                <thead>
                  <tr>
                    <th scope='col'>ลำดับ</th>
                    <th scope='col'>รายการ</th>
                    <th scope='col'>ข้อมูล</th>
                  </tr>
                </thead>
                <tbody>
                ";
                foreach($value as $key => $keyvalue){
                    echo "
                    <tr>
                    <th scope='row'>$i</th>
                    <td>$key</td>
                    <td>$keyvalue</td>
                    </tr>
                    ";
                    $i++;
                }
                echo "
                </tbody>
                </table>
                ";
            };
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>