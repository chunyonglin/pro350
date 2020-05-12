<!DOCTYPE html>
<html>
  <head>

    <title></title>
    <style>
  table {
    border:1px solid black;
    border-collapse: collapse;
}
th{
  border:1px solid black;
  border-collapse: collapse;
}
td{
    border:1px solid black;
    border-collapse: collapse;
}
  </style>
</head>
  </head>
   <body style ="background:url(https://image.freepik.com/free-photo/brown-cement-texture-background-wall_41691-633.jpg)">>
    <form action="" method="post">

    <center><input type="submit" name="search" value="Search"></center>
  </form>

<table align="center">
    <tr>
      <th colspan="8"><h2>Student Grade Record</h2></th>
    </tr>
    <tr>
     <th>Group member</th>
     <th>Title</th>
     <th>Developing</th>
     <th>Competent</th>
     <th>Accomplished</th>
     <th>Total</th>
     <th>Evaluator</th>
     <th>Comment</th>
   </tr><br>

   <?php

       $connection=mysqli_connect("localhost","root","");
       $sql=mysqli_select_db($connection,'sytem');
         if(isset($_POST['search'])){


         $result=mysqli_query($connection,"SELECT * FROM rubric");
         while($row=mysqli_fetch_array($result)){
           ?>
           <tr>
             <td><?php echo $row['group_mem'];?></td>
             <td><?php echo $row['title'];?></td>
             <td><?php echo $row['developing'];?></td>
             <td><?php echo $row['competent'];?></td>
             <td><?php echo $row['accomplished'];?></td>
             <td><?php echo $row['total'];?></td>
             <td><?php echo $row['Evaluatorname'];?></td>
             <td><?php echo $row['comments'];?></td>

           </tr>
           <?php

         }
       }
echo"Click here to go back to <a href='cover.php'>the Insert page";
    ?>





  </table>
</body>
</html>
