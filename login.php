<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | Voting System</title>
 	

<?php include('./header.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>
<style>
	/* body{
		width: 100%;
	    height: calc(100%);
	    /* background: #007bff; */
	/* }
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    /* background: #00000061; */
    /* padding: .5em 0.8em; */
    /* border-radius: 50% 50%; */
    /* color: #000000b3;
} */  */

/* General Body Styling */
body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #f5f7fa, #c3cfe2); /* Subtle gradient background */
    color: #333;
}

/* Main Container */
main#main {
    width: 100%;
    height: 100vh; /* Full screen height */
    display: flex;
}

/* Left Section */
#login-left {
    width: 60%;
    display: flex;
    align-items: center; /* Centers content vertically */
    justify-content: center; /* Centers content horizontally */
    background: linear-gradient(to bottom, rgba(245, 247, 250, 0.8), rgba(195, 207, 226, 0.8)),
                url('img3.jpg') no-repeat center center/cover; /* Background with gradient overlay */
    box-shadow: inset -10px 0px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

#login-left .logo h1 {
    font-size: 2.5rem;
    color: #ffffff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    margin-bottom: 20px;
}

#login-left .logo-image {
    width: 60%; /* Adjust the image size for professionalism */
    max-width: 400px; /* Limits the image size for larger screens */
    border-radius: 10px; /* Optional rounded corners for a clean look */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); /* Subtle shadow for depth */
}

/* Right Section */
#login-right {
    width: 40%;
    display: flex;
    align-items: center; /* Centers content vertically */
    justify-content: center; /* Centers content horizontally */
    background: #ffffff; /* Clean white background */
    box-shadow: inset 10px 0px 20px rgba(0, 0, 0, 0.1);
}

#login-right .card {
    width: 100%;
    max-width: 400px; /* Restrict card width */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Card shadow */
    border: 1px solid #e0e0e0; /* Subtle border for structure */
}

/* Form Styling */
#login-form .form-group {
    margin-bottom: 20px;
}

#login-form .form-control {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    font-size: 1rem;
}

#login-form .btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#login-form .btn-primary:hover {
    background-color: #0056b3;
}

/* Back-to-top Button */
.back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.back-to-top:hover {
    background-color: #0056b3;
}



</style>



<body>
  <main id="main">
    <!-- Left Section with Image and Text -->
    <div id="login-left">
      <div class="logo">
        <h1>Online Voting System</h1>
        <img src="img3.jpg" alt="Online Voting" class="logo-image">
      </div>
    </div>

    <!-- Right Section with Login Form -->
    <div id="login-right">
      <div class="card col-md-8">
        <div class="card-body">
          <form id="login-form">
            <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password</label>
              <input type="password" id="password" name="password" class="form-control">
            </div>
            <center>
              <button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>


<!-- <body>


  <main id="main" class=" alert-info">
  		<div id="login-left">
  			<div class="logo">
  				<h1>Online Voting System</h1>
  				<img src="img3.jpg" alt="..." width="100%">
  			</div>
  		</div>
  		<div id="login-right" class="bg-warning">
  			<div class="card col-md-8">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body> -->
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>