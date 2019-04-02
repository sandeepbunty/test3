<?php

$string='sandeep';
// $reverse = '';
// for($i=strlen($arr)-1;$i>=0;$i--)
// {
//      echo $se= $arr[$i]; 
     
// }


 echo $arr=substr($string,-2);


echo '<br>';
$number=379;
$x=$number;
$sum=0;
while($x!=0)
{

  $rum=$x%10;
  echo $rum;
die();
  $sum=$sum+($rum*$rum*$rum);
  $x=$x/10;
  
}

if($sum==$number)
{
  echo 'yes';
}
else{
  echo 'np';
}





echo '<br>';

$j=2;

for ($i=1; $i <=10 ; $i++) { 

  $p=$j*$i;

echo '2'.'*'.$i.'='.$p.'<br>';  
}

echo '<br>';

$arrayName = array('friuts' => array('mango','chill','pantnt'),'stdunt'=>array('sandeep','mohit','jassi'));

echo sizeof($arrayName['friuts']);

foreach ($arrayName as $key => $value) {

foreach ($value as $key=>$value1) {
  
    // echo $value1->.'<br>';
}
}










echo '<pre>';
print_r($arrayName);

echo '</pre>';
echo '<br>';
echo '';







 $n=0;
 $f=0;
 $space=6;

for($i=0;$i<=3;$i++)
{
  $f++;
 for($k=0;$k<=$space;$k++)
  {
    
  echo "&nbsp;";
 for($j=0;$j<=$i;$j++)
  {
      $n++;
      echo '*';
  }

  }
  $space--;
  
  echo '<br>';
}
 echo '<br>';



?>

<!-- 
<form role="form" method="post" action="student_details@store">
  {{csrf_field()}}
  
  <div class="form-group">  
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email_id">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <input type="submit" name="submit" value="SAVE">
</form> -->
