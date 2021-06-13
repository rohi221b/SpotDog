


    /*==================================================================
    [ Focus input ]*/
    
    /*==================================================================
    [ Validate ]*/
  
function validateFormx() {
  var x = document.forms["myform"]["username"].value;
  var y= document.forms["myform"]["pass"].value;
 
  if (x == "bhushan"  && y=="bhushan"){
     
   location.href("out.html");
}

  else
  {
    alert("Please Enter Correct Details");
    return false;
  }
}



    

 

    
    