   
<?php
       
        $Email = $_POST['Email'];
        $password = $_POST['password'];



        
        mysql_connect('localhost','root','');
        mysql_select_db('se');

        
        $sql =mysql_query("select * from user where Email = '$Email' and password ='$password'");
        $row =mysql_fetch_array($sql);
        if($row['Email']==$Email and $row['Password']==$password)
        {
            echo ' Welcome'.$row['Firstname'];
        }
        else
        {
            echo'enter valid password and email';
        }

?>
