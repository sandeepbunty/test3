<?php 
class A {

$n=array(5,5,9,6,6,5);
$arr='';
$check[]='';
for ($i = 0; $i < 6; $i++) {
   $k=0;
   $temp=$n[$i];

  if($check[$i]!=$temp)
{
    for ($j = 0; $j < 6; $j++) {
          
                   
              if($temp==$n[$j])
                    {
                          $check[]=$temp;  
                          $k++;
                    }
  
          
          }

  }

print_r($check);
die;
        $arr.=$k.','.$temp.'---';  
  
  $temp='';
  }
  
 
echo $arr;
  
 
 		$.post(site_url('emisiones/get_plan_apiID'), {
			id_tarjeta: $("#id_tarjeta").val(),
		
		}, function(data) {
			if (data != 'undefined')
			{
				
			}
			else
			{
				quitar_error_ajax();
			}
		}, 'json').error(quitar_error_ajax);
	protected $field = 'smth';
 
	
}
 
class B extends A {

	private function do() {
		echo 'hello';
	}
	
	public function getField() {
		return $this->field;
	}
}

$a = new A();
$b = new B();
 
$a->do(); // throws exception
$b->run(); // display "hello"
 
// echo $a->field; // throws exception
echo $b->getField(); // display "smth"

?>