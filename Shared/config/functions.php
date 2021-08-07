<?php
function message($msg="", $msgtype="") {
    if(!empty($msg)) {
      // then this is "set message"
      // make sure you understand why $this->message=$msg wouldn't work
      $_SESSION['message'] = $msg;
      $_SESSION['msgtype'] = $msgtype;
    } else {
      // then this is "get message"
          return $message;
    }
  }
  function redirect($location=Null){
    if($location!=Null){
        echo "<script>
                window.location='{$location}'
            </script>";	
    }else{
        echo 'error location';
    }
     
}
//SEND SMS
function check_message(){
	
    if(isset($_SESSION['message'])){
        if(isset($_SESSION['msgtype'])){
            if ($_SESSION['msgtype']=="info"){
                 echo  '   <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i> Info!</h5>'. $_SESSION['message'] . '</div>';
                  
            }elseif($_SESSION['msgtype']=="error"){
                echo  ' <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Error!</h5>
' . $_SESSION['message'] . '</div>';
                                
            }elseif($_SESSION['msgtype']=="success"){
                echo  '<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i>Success!</h5>' . $_SESSION['message'] . '</div>';
            }
       	
            unset($_SESSION['message']);
             unset($_SESSION['msgtype']);
           }

    }	

}
?>