<?php
class employe
{

}
$employeobj = new employe;

if(isset($_POST["insert_employe"]))

{ $employeobj ->employe_code=$_POST["employe_code"];
  $employeobj ->employe_name=$_POST["employe_name"];
  $employeobj ->age=$_POST["age"];
  $employe_insert=new employe_control();
  $employe_insert->insert_employe($employeobj);
}

if(isset($_POST["Update"]))
{
 
 $employeobj ->employe_code=$_POST["employe_code"];
 $employeobj ->employe_name=$_POST["employe_name"];
 $employeobj ->age=$_POST["age"];
 $employe_insert=new employe_control();
 $employe_insert->update_employe($employeobj);
}

if(isset($_POST["delete_employe"]))
{
 
 $employeobj ->employe_code=$_POST["employe_code"];

$employe_insert=new employe_control();
$employe_insert->delete_employe($employeobj);
}

class employe_control extends employe_model{

public function  insert_employe($employeobj){  
    
  $this->insert_employe_model($employeobj);
}
public function  update_employe($employeobj){  
    
  $this->update_employe_model($employeobj);
}
public function  delete_employe($employeobj){

  $this->delete_employe_model($employeobj);
}
}
?>
<div class="col"> 
<?php
$table_view_obj = new employe_table_view;
$table_view_obj->Displaying();
?>
</div>
</div>


