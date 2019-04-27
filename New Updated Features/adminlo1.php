<?php
        $Email = $_POST['Email'];
        $password = $_POST['password'];
       
        if($Email=="admin@123" and $password=="123")
        {  
           header( "Location: admin.php" );
      }
        else
        {
            echo'enter valid password and email';
            header( "Location: adminlo.php" );
        }
       

?>