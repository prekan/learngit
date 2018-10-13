<!DOCTYPE html>
<html>
<head>
  <title>uds</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

</head>
<body>

  <table width="600" border="1" cellspacing="5" cellpadding="5">
    <tr style="background-color: lightblue;">
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>mobile</th>
      <th>update</th>
      <th>Delete</th>
    </tr>
    <?php
 $i=1;
  foreach($datap as $row)
  {
    ?>
    <form method="post">
  <tr>
  <td><input type="text" name="id" value="<?php echo $row->id; ?>"></td>
  <td><input type="text" name="name" value="<?php echo $row->name; ?>"></td>
  <td><input type="text" name="email" value="<?php echo $row->email; ?>"></td>
  <td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>"></td>
  <td><input  id="update" type="submit" name="update" value="update"></td>
   <td><input id="delete" type="submit" name="delete" value="delete"></td>
 </tr>
 
    </form>
    <?php
  $i++;
  }

   ?>
  </table>

  <script type="text/javascript">

$(document).ready(function(){

  $("#update").click(function(){
    $("form").attr(  "action" , "http://localhost/mvc/index.php/Select_ctrl/pre");
  });
  $("#delete").click(function(){
    $("form").attr( "action" , "http://localhost/mvc/index.php/Select_ctrl/delete");
  });
});
  </script>

</body>
</html>