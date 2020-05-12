<!DOCTYPE html>
<html>
  <head>
    <title>Grading Rubric</title>

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




<body style="background:url(https://image.freepik.com/free-photo/brown-cement-texture-background-wall_41691-633.jpg)" >
    <form action="inner.php" method="post">
  <center>
      <h1> CS 350 - Project Evaluation Rubric </h1>
  </center>
  <table align="center">
    <tr>
      <td colspan="4"> Group#: <input type ="num" name="group_num" size="200" placeholder="Enter the group#"></td>
    </tr>
    <tr>
      <td colspan="4">Group Members: <input type ="text" name="group_mem" size="191" placeholder="Enter the group member"></td>
    </tr>
    <tr>
      <td colspan="4">Project Title: <input type ="text" name="title" size="195" placeholder="Enter the Project Title"></td>
    </tr>
    <tr>
      <td>Catagory</td>
      <td>Developing(0-5)</td>
      <td>Competent(6-10)</td>
      <td>Accomplished(10-15)</td>
    </tr>
    <tr>
      <td>Articulate requirements<br>
         and design of the project</td>
      <td><input type="num" name="developing1"  placeholder="Enter # between 0-5"></td>
      <td><input type="num" name="competent1" placeholder="Enter # between 6-10"></td>
      <td><input type="num" name="accomplished1" placeholder="Enter # between 10-15"></td>
    </tr>
       <td>Plan the solution and<br>
       Implement the project</td>
       <td><input type="num" name="developing2" placeholder="Enter # between 0-5"></td>
       <td><input type="num" name="competent2" placeholder="Enter # between 6-10"></td>
       <td><input type="num" name="accomplished2" placeholder="Enter # between 10-15"></td>
       </tr>
       <tr>
         <td>Choose appropriate tools <br>
           and methods for each task</td>
           <td><input type="num" name="developing3" placeholder="Enter # between 0-5"></td>
           <td><input type="num" name="competent3" placeholder="Enter # between 6-10"></td>
           <td><input type="num" name="accomplished3" placeholder="Enter # between 10-15"></td>
           </tr>
           <tr>
             <td>Give clear and coherent<br>
               oral presentation</td>
               <td><input type="num" name="developing4" placeholder="Enter # between 0-5"></td>
               <td><input type="num" name="competent4" placeholder="Enter # between 6-10"></td>
               <td><input type="num" name="accomplished4" placeholder="Enter # between 10-15"></td>
               </tr>
               <tr>
                 <td>Use allocated time for<br>
                   presentation efficiently</td>
                   <td><input type="num" name="developing5" placeholder="Enter # between 0-5"></td>
                   <td><input type="num" name="competent5" placeholder="Enter # between 6-10"></td>
                   <td><input type="num" name="accomplished5" placeholder="Enter # between 10-15"></td>
                   </tr>
                   <tr>
                     <td>Function well<br>
                       as a team</td>
                       <td><input type="num" name="developing6" placeholder="Enter # between 0-5"></td>
                       <td><input type="num" name="competent6" placeholder="Enter # between 6-10"></td>
                       <td><input type="num" name="accomplished6" placeholder="Enter # between 10-15"></td>
                       </tr>
                      <tr>
                        <td>Total:</td>
                         <td><input type="num" name="totalde" placeholder="#enter the total score"></td>
                          <td><input type="num" name="totalco" placeholder="#enter the total score"></td>
                           <td><input type="num" name="totalac" placeholder="#enter the total score"></td>

                      </tr>

                      <tr>
                         <td>Evaluator's name: <input type:"text" name="Evaluatorname"></td>
                       </tr>
                       <tr>
                         <td>Comment:<td>
                    <textarea name="comments" rows="8" cols="80"></textarea>
                       </tr>
                       <tr>
                         <td align="right" colspan="5"><input type="submit" name="Login" value="Calculate"></td>
                       </tr>

</table>








  </body>
</html>
