<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style ="background:url(https://image.freepik.com/free-photo/brown-cement-texture-background-wall_41691-633.jpg)">

    <?php


    if(isset($_POST['Login']))
    {
    $groupnum=$_POST['group_num'];
    $groupmem=$_POST['group_mem'];
    $d1=$_POST['developing1'];
    $d2=$_POST['developing2'];
    $d3=$_POST['developing3'];
    $d4=$_POST['developing4'];
    $d5=$_POST['developing5'];
    $d6=$_POST['developing6'];
    $c1=$_POST['competent1'];
    $c2=$_POST['competent2'];
    $c3=$_POST['competent3'];
    $c4=$_POST['competent4'];
    $c5=$_POST['competent5'];
    $c6=$_POST['competent6'];
    $a1=$_POST['accomplished1'];
    $a2=$_POST['accomplished2'];
    $a3=$_POST['accomplished3'];
    $a4=$_POST['accomplished4'];
    $a5=$_POST['accomplished5'];
    $a6=$_POST['accomplished6'];
    $title=$_POST['title'];
    $Iname=$_POST['Evaluatorname'];
    $Com=$_POST['comments'];
    $tode=$_POST['totalde'];
    $toco=$_POST['totalco'];
    $toac=$_POST['totalac'];




    echo "<center><h1>Hi Group ".$groupnum."</h1></center>";
    echo "<hr>";
    $total= $tode+$toco+$toac;
    echo "<h3>Your total average is ".$total." for your group presentation</h3><br>";

    echo "<h3>Your group member are ".$groupmem."</h3><br>";
    echo "<h3>Your group project title is ".$title."</h3><br>";


    echo"<h3>Your Evaluator is ".$Iname."</h3><br>";

    echo"<h3> The comment that ".$Iname." give to you is ".$Com."</h3><br>";



    }


    echo"<h4>click here to <a href='cover.php'>go back</a><br>";
        echo"<h4>click here to <a href='Search.php'>search data</a><br>";

    $conn=mysqli_connect('localhost','root','','sytem');
    $sql= "INSERT INTO rubric(group_num,group_mem,title,developing,competent,accomplished,total,Evaluatorname,comments) VALUES('','$groupmem','$title','$tode','$toco','$toac','$total','$Iname','$Com')";

    $run=mysqli_query($conn,$sql);
    if($run=TRUE){
      echo"Insert data successfully";
    }
    else{
      echo "Fail to Inserted";
    }


    ?>







</body>
</html>
