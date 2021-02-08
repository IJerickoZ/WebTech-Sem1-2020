<?php   
$day_now=array("Sun"=>"1","Mon"=>"2","Tue"=>"3","Wed"=>"4","Thu"=>"5","Fri"=>"6","Sat"=>"7");   
$first_day=date("D",mktime(0,0,1,intval(date("1")),1,date("20")));   
$start_td=$day_now[$first_day]-1;      
$num_day=date("t");   
$num_day2=($num_day+$start_td);   
$num_day3=(7*ceil($num_day2/7));   
?>   
<h3>62070121 เดือนมกรา 2020</h1>
<table width="300" border-style="solid" border="1">   
<thead>
<tr>
</tr>
  <tr>   
    <td>อา </td>   
    <td>จ </td>   
    <td>อ </td>   
    <td>พ </td>   
    <td>พฤ </td>   
    <td>ศ </td>   
    <td>ส </td>   
  </tr>   
</thead>   
<?php for($i=1;$i <=$num_day3;$i++){ ?>   
<?php if($i%7==1){ ?>   
  <tr>   
  <?php } ?>   
    <td   <?=(date("j")==$i-$start_td)?"class=\"current\"":""?>> <?=($i-$start_td>=1 && $i-$start_td <=$num_day)?$i-$start_td:" "?> </td>   
<?php if($i%7==0){ ?>   
  </tr>
  <?php } ?>
<?php } ?>
</table>