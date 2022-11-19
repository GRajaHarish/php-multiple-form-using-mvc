<?php
class shop{
}
$shopobj =new shop();

if(isset($_POST["insert"]))

{  
 $shopobj->shop_code=$_POST["shop_code"];
 $shopobj->shop_name=$_POST["shop_name"];
 $shopobj->incharge=$_POST["incharge"];   
 


$regcontrol=new shop_control();
$regcontrol->insert_control($shopobj);
}
if(isset($_POST["update"]))
{
 $shopobj->shop_code=$_POST["shop_code"];
 $shopobj->shop_name=$_POST["shop_name"];
 $shopobj->incharge=$_POST["incharge"];   
 


$regcontrol=new shop_control();
$regcontrol->update_control($shopobj);
}

if(isset($_POST["delete"]))
{  
 $shopobj->shop_code=$_POST["shop_code"];
 $shopobj->shop_name=$_POST["shop_name"];
 $shopobj->incharge=$_POST["incharge"];   
 

    $regcontrol=new shop_control();
    $regcontrol->delete_control($shopobj);
}

class shop_control extends shop_model{
 
public function  insert_control($shopobj){
    
    $this->insert_shop($shopobj);
}
public function  delete_control($shopobj){

  $this->delete_shop($shopobj);
}
public function  update_control($shopobj){
    
  $this->update_shop($shopobj);
}

}
?>

<div class ="row">
<div class="col"> 
  <?php
  $userview_obj = new shop_view();
  $userview_obj->Displaying();
?>
</div>




