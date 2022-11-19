<?php

class shop_model extends db
{
  
        protected function Display_shop(){
             $sql="SELECT * from registration";
             $stmt= $this->connect()->prepare($sql);
             $stmt->execute();
             $result= $stmt->fetchAll();
           return $result;
        }
   
    public function insert_shop($shopobj)
    {   $sql="INSERT INTO registration VALUES ('$shopobj->shop_code','$shopobj->shop_name',  '$shopobj->incharge')";
        $stm=$this->connect()->query($sql);
      
        }
    
    
    public function delete_shop($shopobj)
    {    $sql="DELETE FROM registration WHERE shop_code= ' $shopobj->shop_code';";
         $stm=$this->connect()->query($sql);
     
        }
    
    
    public function update_shop($shopobj)
    {    $sql = "UPDATE registration set incharge = '$shopobj->incharge' where shop_code = '$shopobj->shop_code';";
         $stm=$this->connect()->query($sql);
        
        }
    }


?>