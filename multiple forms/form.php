<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="CSS/shop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<center> 
 <div class="card HAS">
      <div class="card-header"> <h5 style="color:rgb(10, 10, 9);">REGISTRATION</h5></div>
        <div class="card-body ">
        <div class="row">
        <div class="col">
      
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" id="form" method="post" name="form">
            <?php  $s_codeer=$s_nameer=$shop_incharger=""; ?>
            <input id="shop_code" placeholder="shop code" type="text"  value="" name="shop_code">
           <br>   <br>
            <input id="shop_name" placeholder="shop name"type="text" value="" name="shop_name">
           <br>   <br>
            <input id="incharge" placeholder="shop_incharge"  type="text" value="" name="incharge">
            <br>    
            <br>
            <input id="save" type="submit" value="Save" name=""  onclick ="return validateform()">
           
            <input id="clear" type="submit" value="Clear" name="clear"   onclick =" return clears()">
        
            <input type="hidden"  id="action" name="insert"  value="" >
           </form>
           <br>
           </div>

           <div class="col">


            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" id="form_employe" method="post" name="form_employe">
              <input id="employe_code" placeholder="employe code" type="text"  value="" name="employe_code">
           <br>   <br>
            <input id="employe_name" placeholder="employe name"type="text" value="" name="employe_name">
           <br>   <br>
            <input id="age" placeholder="employe age"  type="text" value="" name="age">
            <br>    
            <br>
            <input id="employe_save" type="submit" name="insert_employe" value="Save">
           
            <input id="clear" type="reset" value="Clear" name="clear"   onclick ="">
        
            <input type="hidden"  id="actions" name=""  value="Save" >
           </form>
           </div>
</div>
<tbody>
</table>
</div>
</CEnter>
</body>
</html>
