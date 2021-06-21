
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
		integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<!-- the start of the login style  -->
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="data:image/png;base64,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"
							class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="Username" vlaue ="admin" class="form-control input_user"  placeholder="usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="Password" class="form-control input_pass" placeholder="contraseña">
						</div>
						<br>
						<div class="d-flex justify-content-center mt-3 login_container">
							<!-- <button type="submit" name="Submit" type="button" class="btn login_btn">Ingresar</button> -->
							<button type="submit" name="Submit" type="button" class="btn login_btn">Ingresar</button>
						</div>
					</form>
				</div>

				
				<div class="d-flex justify-content-center">
					<p>Sessiones de PHP</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- the end of the login style -->


	<!-- ////////////////////////
	///////////////////////
    ////////PHP start///////////
   ///////////////////////
   /////////////////////// -->
   <?php
    session_start(); 

    if(isset($_POST['submit'])){
		
	   $logins = array(
		   "admin" => "pass"
		);
	//    $Username = $_POST['Username'];  
	//    $Password = $_POST['Password'];
	   //$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
	  // $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

	   if ($_POST['Password'] == $logins[$_POST['Username']])
	   //(isset($logins[$Username]) && $logins[$Username] == $Password)
	   {
		$_SESSION['Username'] = $_POST['Username'];
		//    $_SESSION['UserData']['Username']=$logins[$Username];
		   header('location:client.php');
		   //exit;
		} else {
			$msg="<span style='color:red'>Contraseña erronea</span>";
		}
   }
   ?>
	<!-- ////////////////////////
	///////////////////////
    ////////PHP end///////////
   ///////////////////////
   /////////////////////// -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>

</html>