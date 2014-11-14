<?php
 extract($_POST);
 mail('arturjanka@gmail.com', "temat", $_POST['comments']);
 echo"Your email has been sent.";
?>