<!DOCTYPE html>
<html>
<head>
   <title>Belajar Cara Konversi Tipe Data PHP</title>
</head>
<body>
<?php
 
// Konversi menjadi Integer
  var_dump((int) 3.45); // 3
  echo "<br />";
  var_dump((int) "3.45");  // 3 (string 3.45)
  echo "<br />";
  var_dump((int) "9 Naga");  //9
  echo "<br />";
  var_dump((int) "Naga Bonar"); // 0
  echo "<br />";
  var_dump((int) "Wiro Sableng 212"); //0
  echo "<br />";
  var_dump((int) FALSE); // 0
  echo "<br />";
  var_dump((int) "1FALSE"); //1
  echo "<br />";
  var_dump((int) array()); // 0
  echo "<br />";
  var_dump((int) array("data")); //1
  echo "<br />"; 
 
// Konversi menjadi Float
  var_dump((float) 3); // 3
  echo "<br />";
  var_dump((float) "3.45");  // 3.45
  echo "<br />";
  var_dump((float) "9 Naga");  //9
  echo "<br />";
  var_dump((float) "Naga Bonar"); // 0
  echo "<br />";
  var_dump((float) "Wiro Sableng 212"); //0
  echo "<br />";
  var_dump((float) FALSE); // 0
  echo "<br />";
  var_dump((float) "1FALSE"); //1
  echo "<br />";
  var_dump((float) array()); // 0
  echo "<br />";
  var_dump((float) array("data")); //1
  echo "<br />";
 
// Konversi menjadi Boolean
  var_dump((bool) 3); // TRUE
  echo "<br />";
  var_dump((bool) 0);  // FALSE
  echo "<br />";
  var_dump((bool) -1);  // TRUE
  echo "<br />";
  var_dump((bool) ""); // FALSE
  echo "<br />";
  var_dump((bool) " "); //TRUE
  echo "<br />";
  var_dump((bool) "0"); // FALSE
  echo "<br />";
  var_dump((bool) "FALSE"); // TRUE (!) - karena string
  echo "<br />";
  var_dump((bool) array()); // FALSE
  echo "<br />";
  var_dump((bool) array("data")); // TRUE
  echo "<br />";
?>
</body>
</html>