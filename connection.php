<?php
try{

	$db = new PDO("mysql:host=localhost;dbname=auditions","root","");

}catch(PDOException $e){
	echo $e->getMessage();
}
?>