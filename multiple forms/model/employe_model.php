<?php
    class employe_model extends db
    {

        protected function Display_employe(){
             $sql="SELECT * from employe";
             $stmt= $this->connect()->prepare($sql);
             $stmt->execute();
             $result= $stmt->fetchAll();
           return $result;
        }
 
        public function insert_employe_model($employeobj)
        {   $sql="INSERT INTO employe VALUES ('$employeobj->employe_code','$employeobj->employe_name','$employeobj->age');";
            $stm=$this->connect()->query($sql);
           
        }
    
         public function delete_employe_model($employeobj)
        {   $sql="DELETE FROM employe WHERE employe_code= '$employeobj->employe_code'";
            $stm=$this->connect()->query($sql);
         }

    public function update_employe_model($employeobj)
        {   $sql = "UPDATE employe set age = '$employeobj->age' where employe_code = '$employeobj->employe_code'";
            $stm=$this->connect()->query($sql);
        
        }
    }  

?>