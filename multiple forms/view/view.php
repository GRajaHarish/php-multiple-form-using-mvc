<script src="form.js"></script>
<?php


class shop_view extends shop_model {

    public function Displaying(){
        $results=$this->Display_shop();
        ?>
       <table class="table table-striped table-hover table-primary">
            <thead>
            <tr>
                <th>si no</th>
                <th>shop code</th>
                <th>shop name</th>
                <th>incharge</th>
                <th colspan=2>Select</th>
            </tr>
            </thead>
        <?php
         $slno=1;
        foreach ($results as $res){
            ?>
            <tbody>
                <tr>
                <td><?php echo $slno ?></td>
                    <td><?php echo $res["shop_code"]?></td>
                    <td><?php echo $res["shop_name"]?></td>
                    <td><?php echo $res["incharge"]?></td>
                    <td>
              <a onclick='onEdit(this)'  class='btn btn-primary btn-sm' >Edit</a>
              <a onclick='onDelete(this)' class='btn btn-primary btn-sm' >Delete</a>
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
