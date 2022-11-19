var selectedRow ="";
function validateform(){  
    var shop_code = document.form.shop_code.value;
    var shop_name =document.form.shop_name.value;  
    var incharge=document.form.incharge.value;
    if(shop_code == "" ){
        alert("shopId can't be blank");
        return false;
    }
    else if(isNaN(shop_code)){
        alert("shopId should be numeric");
        return false;
    }
    else if (shop_name==""){  
      alert("shopName can't be blank");  
      return false;  
    }

    else if(incharge == ""){
        alert("shop incharge  can't be blank");
        return false;
    } 
}  
function onEdit(td){
    selectedRow = td.parentElement.parentElement;

    document.getElementById("shop_code").value = selectedRow.cells[1].innerHTML;
    document.getElementById("shop_name").value = selectedRow.cells[2].innerHTML;
    document.getElementById("incharge").value = selectedRow.cells[3].innerHTML;
    document.getElementById("action").name = "update";
    document.getElementById("save").value = "Update";
   
}

  
function onDelete(td){
    if(checkdelete() == true){
    selectedRow = td.parentElement.parentElement;  
    document.getElementById("action").name = "delete";
    document.getElementById("shop_code").value = selectedRow.cells[1].innerHTML;
    document.forms["form"].submit();
    }

  }
  function checkdelete(){
  return confirm('Are you sure want to delete this record?');
  }
function clears() {
    if(confirm("are you sure") == true)
    {
    document.getElementById("form").reset();
    }
    else
    { return false;}
 }




 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
 function validateform2(){  
    var employe_code = document.form_employe.employe_code.value;
    var employe_name =document.form_employe.employe_name.value;  
    var age=document.form_employe.age.value;
    if(employe_code == "" ){
        alert("shopId can't be blank");
        return false;
    }
    else if(isNaN(employe_code)){
        alert("shopId should be numeric");
        return false;
    }
    else if (employe_name==""){  
      alert("shopName can't be blank");  
      return false;  
    }

    else if(age == ""){
        alert("shop incharge  can't be blank");
        return false;
    } 
}  
var selectedRow ="";
function onEdit_employe(td){
    
    selectedRow = td.parentElement.parentElement;

    document.getElementById("employe_code").value = selectedRow.cells[1].innerHTML;
    document.getElementById("employe_name").value = selectedRow.cells[2].innerHTML;
    document.getElementById("age").value = selectedRow.cells[3].innerHTML;
    document.getElementById("employe_save").value = "Update";  
    document.getElementById("employe_save").name = "Update"; 
  
  
    
   
}
function onDelete_employe(td){
    if(checkdelete() == true){
    selectedRow = td.parentElement.parentElement;  
    document.getElementById("actions").name= "delete_employe";
    document.getElementById("employe_code").value =selectedRow.cells[1].innerHTML;
    document.forms["form_employe"].submit();
    }

  }