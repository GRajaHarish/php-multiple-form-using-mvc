
<?php
class employe_table_view extends employe_model {

    public function Displaying(){
        $results=$this->Display_employe();
        ?>
       <table class="table table-striped table-hover table-primary">
            <thead>
            <tr>
                <th>si no</th>
                <th>employe code</th>
                <th>employe name</th>
                <th>age</th>
                <th>Select</th>
            </tr>
            </thead>
        <?php
         $slno=1;
        foreach ($results as $res){
            ?>
            <tbody>
                <tr>
                <td><?php echo $slno ?></td>
                    <td><?php echo $res["employe_code"]?></td>
                    <td><?php echo $res["employe_name"]?></td>
                    <td><?php echo $res["age"]?></td>
                    <td>
              <a onclick='onEdit_employe(this)'  class='btn btn-primary btn-block'  >Edit</a>
              <a onclick='onDelete_employe(this)' class='btn btn-primary btn-block' >Delete</a>
            </td>
            </tr>
            </tbody>  <?php
            $slno ++ ;
          
        }
        ?>
        </table>
        <?php
        
    }
}
?>