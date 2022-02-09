<?php
session_start();

//block of code to create a user account
if(isset($_POST['register'])){
	$email = trim($_POST['email']);
	$name = trim($_POST['name']);
	$age = trim($_POST['age']);
	$address = trim($_POST['address']);
	$password = trim($_POST['password']);
	$cpassword = trim($_POST['cpassword']);

	if($password==$cpassword){
		$password = password_hash($password, PASSWORD_BCRYPT);

	if($myfile = fopen('cred.txt','a+')){
		//add new user to file
		$txt = $email." ".$name." ".$age." ".$address." ".$password."}";
		fwrite($myfile, $txt);
		fclose($myfile);

	
		header('Location: index.php');
	}else{
		$_SESSION['errors'] = "<h3 style='color:darkre
d;text-align:center;background-color: #74cfbf;'>Une erreur c'est produit l'hors de l'enregistrement</h3>";
	}

	}else{
		header('Location: register.php');
		$_SESSION['errors'] = "<h3 style='color:darkred;text-align:center;'>Mot de passe ne correspond pas !!!</h3>";
	}
}

//blog of code to login
if(isset($_POST['login'])){
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$isLogin = false;
	
	//read from file
	$myfile = fopen('cred.txt','a+');
	$text = fread($myfile,filesize("cred.txt"));
	$arr = explode("}", $text);

	for($i=0; $i<count($arr); $i++) { 
		$data = explode(" ",$arr[$i]);
		if($data[0]==$email && password_verify($password, $data[count($data)-1])){
			$isLogin = true;
			break;
		}
	}

	fclose($myfile);

	if($isLogin){
		$_SESSION['id'] = $email;
		header('Location: home.php');
	}else{
		$_SESSION['errors'] = "<span style='font-size:  14px;color: darkred;text-align: center;'>Désolé, ces 							informations d'identification ne sont pas valides</span>
								</center>";
		header('Location: index.php');
	}

}


?>