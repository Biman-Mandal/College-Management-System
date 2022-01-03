<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Portal/login.css')}}">
</head>
<body>
<nav>
    <h2>Student Portal</h2>
</nav>
<div class="upperSignin">
    <div class="signin">
        <div class="LoginFormText">
            <h2>Login Form</h2>
        </div>
        <div class="LoginForm">
            <form method="post" action="{{ url('student-portal/login') }}">
                @csrf
                <input type="Email" name="Email" placeholder="Username" required>
                <input type="Password" name="Password" placeholder="Password" required>
                <button value="Submit">Submit</button>
            </form>
        </div>
        <div class="Pass">
            <a href="#" class="Reset">Reset Password?</a>
            <a href="#" class="Forgot">Forgot Password?</a>
        </div>
        <div class="Register">
            <a href="{{ url('student-portal/create') }}">Register Here</a>
        </div>
    </div>
</div>
</body>
</html>



<!--<form>
			<h2>Log In</h2>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="pass" placeholder="Password">
			<a href=""><input type="button" value="Log in"></a><br><br>
			<div id="container">
				<a href="#" style="margin-right:35px; font-size: 13px; font-family: Tahoma, Geneva, sans-serif;">Reset Password?</a>
				<a href="#" style="margin-right: 0px; font-size: 13px; font-family: Tahoma, Geneva, sans-serif;">forgot Password?</a><br><br><br><br><br><br>
				New user?<a href="#">&nbsp;Register Here</a>
			</div>
		</form>-->
