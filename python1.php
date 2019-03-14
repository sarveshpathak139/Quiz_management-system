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

   <style>
      body {
  background-color: lightblue;
}
   </style>>
      <div><h4> <center>
        <video width="900" controls>
  <source src="Class and Object in Python.mp4" type="video/mp4">
</video>
</center>
      <div class="container "><br>
         <div class="container">
         
            <div class=" text-center">
               <h3 class="text-uppercase "> Welcome to Quiz </h3>
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto ">
               <div class="card">
                  <p class="card-header text-center" >Best of Luck  </p>
               </div>
               <br>
                  <form action="python2.php" method="post">
            <?php
                    for($i=1;$i<6;$i++){
                    $q = "SELECT * FROM question where qid = $i";
                    $query = mysql_query($q);
                              
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
			
                  <br>
                  <div class="card">
                     <br>
                     <p class="card"> <?php  echo $rows['question']; ?> </p>
                    
                     
                      <?php
                    $q = "SELECT * FROM answers where ans_id =$i";
                    $query = mysql_query($q);
                              
                    while($rows = mysql_fetch_array($query)) 
                   {
                      ?>
                           
                     <div class="card-block">
                       <input type="radio" name="quizcheck[<?php echo $rows['ans_id']?>]" value="<?php echo $rows['aid']; ?>" >   <?php echo $rows['answers']; ?> 
                        <br>
                     </div>
                     <?php
                        
                      
}
}
}                 
?>
                        
                    
                  </div>

                  <br>
                  <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
      
            </div>
            
         </div>
      </div>


   


   </body>
</html>
