<?php
mysql_connect('localhost','root','');
         mysql_select_db('se');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">






   </head>
   <body>
    <h2>
    <style>
      body {

  background-color: lightblue;
}
   </style>
     <div class="container text-center" >
      <br><br>
      <br><br><br><br>
      <table class="table text-center table-bordered ">
        <tr>
          <th colspan="2" class="bg-dark"> <h1 class="text-white"> Result </h1></th>
          
        </tr>
        <tr>
            <td>
              Questions Attempted
            </td>

           <?php
             if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
              $count = count($_POST['quizcheck']);
            ?>

          <td>
            <?php
            echo "You have attempt ".$count;
             ?>
            </td>
            <?php
                       $result = 0;
                $i=1;


              $selected=$_POST['quizcheck'];
              
                $sql =mysql_query("select * from question");
                
              while($rows = mysql_fetch_array($sql)) {

            
                  $check = $rows['ans_id'] == $selected[$i];
                if ($check)
                {
                  $result++;

                }

               $i++;

}
            
            
              
        ?>
        <tr>
          <td>
            Your Total score
          </td>
          <td colspan="2">
        <?php 
              echo " Your score is ". $result;   
            }
          }
            ?>

            </td>
            </tr>



      </table>

        <a href="welcome.php" class="btn btn-success"> LOGOUT </a>
      </div>
      <footer>
           <h5 class="text-center">All Rights Reserved</h5>  
         </footer>
   </body>
</html>
