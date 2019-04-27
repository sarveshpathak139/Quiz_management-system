

 <!DOCTYPE html>
 <html>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

   <div class="container "><br>
         <div class="container">
         
            <div class=" text-center">
               <h3 class="text-uppercase "> Welcome to Quiz </h3>
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto ">
               <div class="card">
                  <p class="card-header text-center" >enter your choice  </p>
               </div>
               <br> 			
                  <br>
                  <div class="card">
                     <br>     
                     <div class="card-block">
                       <h5>a Detail of Student who attend the quiz</h5>
                        <br>
                     </div>
                     <div class="card-block">
                       <h5>b NAME AND MARKS OF STUDENT WHO ATTEND PYTHON </h5>
                        <br>
                     </div>
                     <div class="card-block">
                       <h5>c how many student attept the quize</h5>
                        <br>
                     </div>
                     <div class="card-block">
                      <h5>d Display question and answers of cpp</h5>
                        <br>
                     </div>
                     <div class="card-block">
                       <h5>e NAME AND MARKS OF STUDENT WHO ATTEND cpp</h5>
                        <br>
                     </div>
                     <div class="card-block">
                        <h5>f NAME AND MARKS OF STUDENT WHO ATTEND JAVA</h5>
                        <br>
                     </div>
                     <div class="card-block">
                       <h5>g NAME AND MARKS OF STUDENT By procedure</h5>
                        <br>
                     </div>
                     <div class="card-block">
                        <h5>h for update and delete</h5>
                        <br>
                     </div>
                      </br>
                     </div>

                  

   </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<div class="container"> 
 <form action="admin.php" method ="post">
choice <input type="text"  name="email"><br /><br />
 <input type = "submit" value ="Submit">
    </form>
    <form action="Welcome.php" method ="post">
        <input type = "submit" value ="Logout">
    </form>
  </div>
 <body>
<style>
      body {
  margin: 0;
  background-color: lightblue;
}
   </style> 

<?php
         mysql_connect('localhost','root','');
        mysql_select_db('se');

if (isset ($_POST['email'])){
       
$Email = $_POST['email'];
$fav =$Email ;

switch ($fav) {
    case "a":
                 ?><style>
      body {
  background-color: lightblue;
}
   </style>
                 <div class="container">
                 	 <h2>Detail of Student who attend the quiz</h2>
                 <table class="table table-bordered">
                        <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>    <?php
                    $q = "SELECT * FROM user WHERE Email IN (SELECT username FROM marks);";
                    $query = mysql_query($q);
                        		
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
                                 
  

    <tbody>
      <tr>
        <td><?php echo $rows['Firstname']; ?></td>
        <td><?php echo $rows['Lastname']; ?></td>
        <td><?php echo $rows['Email']; ?></td>
      </tr>
    
     
                                               

                     
                     
<?php
} ?></tbody>
  </table>
</div> <?php
        break;
    case "b":

?>
<div class="container">
                <div class=" text-center">
               <h3 class="text-uppercase "> NAME AND MARKS OF STUDENT WHO ATTEND PYTHON </h3>
            </div>
                 	
                 <table class="table table-bordered">

                        <thead>
      <tr>
        <th> <h4><span class="label label-primary ">Firstname</span></h4></th>
        <th> <h4><span class="label label-primary ">Marks</span></h4></th>
       <th> <h4><span class="label label-primary ">sub</span></h4></th>
      </tr>
    </thead>

    <?php
        $q = "SELECT Firstname,marks,sub from user INNER JOIN marks where user.email = marks.username and marks.sub='python' Order by marks Desc;";
                    $query = mysql_query($q);
                        		
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
                       <tbody>
      <tr>
        <td><?php echo $rows['Firstname']; ?></td>
        <td><?php echo $rows['marks']; ?></td>
        <td><?php echo $rows['sub']; ?></td>
      </tr>
                       
<?php
} ?></tbody>
  </table>
</div> <?php   break;
    case "c":?>
       <<!DOCTYPE html>
       <html>
       <head>
       	<h2> how many student attept the quize</h2>
       </head>
       <body>
       
       </body>
       </html><?php
        $q = " select count(marks)from marks ";
                    $query = mysql_query($q);
                        		
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
                       <div class="card">
                   
                       <p class="card-header">  <?php
                        echo $rows['count(marks)'];
                        ?> </p>
                                               

                     
                     </div>
<?php
}
        break;
        case "d":
        ?>
        <div class="container">
                <div class=" text-center">
               <h3 class="text-uppercase "> Display question and answers of cpp </h3>
            </div>
                 	
                 <table class="table table-bordered">

                        <thead>
      <tr>
        <th> <h4><span class="label label-primary ">Question</span></h4></th>
        <th> <h4><span class="label label-primary ">answers</span></h4></th>
     
      </tr>
    </thead>
<?php
            $q = " select question,answers from cppque INNER JOIN cppans where cppque	.ans_id=cppans.aid;";
                    $query = mysql_query($q);
                        		
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
                       <tbody>
      <tr>
        <td><?php echo $rows['question']; ?></td>
        <td><?php echo $rows['answers']; ?></td>
       
      </tr>                       
<?php
} ?></tbody>
  </table>
</div><?php
break;
    case "e":

?>
<div class="container">
                <div class=" text-center">
               <h3 class="text-uppercase "> NAME AND MARKS OF STUDENT WHO ATTEND cpp </h3>
            </div>
                 	
                 <table class="table table-bordered">

                        <thead>
      <tr>
        <th> <h4><span class="label label-primary ">Firstname</span></h4></th>
        <th> <h4><span class="label label-primary ">Marks</span></h4></th>
       <th> <h4><span class="label label-primary ">sub</span></h4></th>
      </tr>
    </thead>

    <?php
        $q = "SELECT Firstname,marks,sub from user INNER JOIN marks where user.email = marks.username and marks.sub='cpp';";
                    $query = mysql_query($q);
                        		
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
                       <tbody>
      <tr>
        <td><?php echo $rows['Firstname']; ?></td>
        <td><?php echo $rows['marks']; ?></td>
        <td><?php echo $rows['sub']; ?></td>
      </tr>
                       
<?php
} ?></tbody>
  </table>
</div> <?php   break;
case "f":

?>
<div class="container">
                <div class=" text-center">
               <h3 class="text-uppercase "> NAME AND MARKS OF STUDENT WHO ATTEND java </h3>
            </div>
                 	
                 <table class="table table-bordered">

                        <thead>
      <tr>
        <th> <h4><span class="label label-primary ">Firstname</span></h4></th>
        <th> <h4><span class="label label-primary ">Marks</span></h4></th>
       <th> <h4><span class="label label-primary ">sub</span></h4></th>
      </tr>
    </thead>

    <?php
        $q = "SELECT Firstname,marks,sub from user INNER JOIN marks where user.email = marks.username and marks.sub='java';";
                    $query = mysql_query($q);
                        		
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
                       <tbody>
      <tr>
        <td><?php echo $rows['Firstname']; ?></td>
        <td><?php echo $rows['marks']; ?></td>
        <td><?php echo $rows['sub']; ?></td>
      </tr>
                       
<?php
} ?></tbody>
  </table>
</div> <?php 
 break;
case "g":
?>
<div class="container">
                <div class=" text-center">
               <h3 class="text-uppercase "> NAME AND MARKS OF STUDENT By procedure</h3>
            </div>
                 	
                 <table class="table table-bordered">

                        <thead>
      <tr>
        <th> <h4><span class="label label-primary ">username</span></h4></th>
        <th> <h4><span class="label label-primary ">Marks</span></h4></th>
       
      </tr>
    </thead>

    <?php 
        $q = " call quiz()";
                    $query = mysql_query($q);
                        		
                    while($rows = mysql_fetch_array($query)) 
                    {

                       ?>
                       <tbody>
      <tr>
        <td><?php echo $rows['username']; ?></td>
        <td><?php echo $rows['marks']; ?></td>
      </tr>
                       
<?php
} ?>
<?php
  break;
case 'h':?>
<form action="php-form-checkbox.php" method="post">
           
            <input type="submit" name="Su" value="press me" />
<?php
	break;

    
}


}
?> 
 </body>
 </html>