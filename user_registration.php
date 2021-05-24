<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
    function onbtnclick()
        {
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var phone = document.getElementById('phone').value;
        var email = document.getElementById('email').value;

            if(fname == "")
            {
             swal("Alert!", "Please enter first name", "error");
             return false;
            }
            else if(lname == "")
            {
                swal("Alert!", "Please enter last name", "error");
                 return false;
            }
             else if(email == "")
            {
              	swal("Alert!", "Please provide email", "error");
                 return false;
            }
            else if(phone == "")
            {
                swal("Alert!", "Please provide phone", "error");
                 return false;
            }
            else
            {
                return true;
            }
        }
    </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="post" onsubmit="return onbtnclick()">
					<span class="login100-form-title ">
						<b>Register</b>
					</span>					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							<b>First name</b>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="fname" id="fname" >
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							<b>Last Name</b>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="lname" id="lname" >
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							<b>Email</b>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="email" name="email" id="email" >
					</div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							<b>Phone</b>
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="number" minlength="10" maxlength="10" name="phone" id="phone" >
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" name="regbtn" class="login100-form-btn">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
            
            if(isset($_POST['regbtn']))
             {
                include 'database.php';
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $sql = "INSERT INTO tbl_users (`fname`, `lname`, `email`, `phone`) VALUES ('$fname' , '$lname','$email','$phone' )";
                            if(mysqli_query($conn, $sql))
                            {
                                echo ("<script LANGUAGE='JavaScript'>
                                window.alert('User Registered Successfully');
                                window.location.href='index.php';
                                </script>");
                                $_SESSION['id'] = session_id();
                            }
                            else
                            {
                            echo ("<script LANGUAGE='JavaScript'>
                                window.alert('Registration failed');
                                </script>");
                            }
             }       

?>
