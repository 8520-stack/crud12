<?php 
function testmeseage($condition,$message)
{ if($condition){
    echo "<div class='alert alert-success'>
    $message is true
  </div>" ;
}
else { echo "<div class='alert alert-danger'>
    $message is false
     </div>";}

}
?>