<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Portal/Registration.css')}}">
</head>
<body>
<nav>
    <h2>Student Portal</h2>
</nav>
@if ($message = Session::get('Error') )
    <div class="SuccessMsg">
        <h2>{{$message}}</h2>

    </div>
@endif
<div class="signin">
    <div class="innerSignIn">
        <div class="RegisHeader">
            Registration Form
        </div>
        <form method="post" action="{{ url('student-portal') }}">
            @csrf
            <div class="RegisForm">

                <input type="text" name="UniversityRoll" placeholder="University Roll" required>
                <input type="Password" name="Password" placeholder="Create New Password" required>
                <input type="text" name="Name" placeholder="Full Name" required>
                <input type="Email" name="Email" placeholder="Email Address" required>
                <input type="Number" name="MoblileNumber" placeholder="Moblile Number" required>
                <input type="text" name="Depertment" placeholder="Depertment" required>
                <button value="Submit">Submit</button>

            </div>
        </form>
        <div class="RegisLogin">
            <a href="{{ url('student-portal') }}">Login Here</a>
        </div>
    </div>
</div>
