<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StopFood Login</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .left {
            background-color: #db1414;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
            padding: 20px;
        }
        .left img {
            max-width: 100%;
            height: auto;
            width: 20vw; /* Adjust this value as needed */
        }
        .left h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: bold;
        }
        .right {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            padding: 10px;
            font-size: 1em;
            background-color: #db1414;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            background-color: white;
            color: #757575;
            border: 1px solid #ccc;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container .google-btn img {
            margin-right: 10px;
        }
        .login-container .links {
            display: flex;
            justify-content: space-between;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="left">
        <div>
            <img src="images/STOPFOOD_LOGIN.png" alt="StopFood Logo">
        </div>
    </div>
    <div class="right">
        <div class="login-container">
            <h2>Welcome Back!</h2>
            <p>Login to order your favorite food now!</p>
            <form method="POST" action="{{ url('login') }}">
                @csrf
                @if(session()->has('error_message'))
                    <div class="alert alert-danger">
                        <center>{{ session()->get('error_message') }}</center>
                    </div>
                @endif
                <input type="text" placeholder="Email/Username" required name=email>
                <input type="password" placeholder="Password" required name=password>
                <div class="links">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#">Forgot your password?</a>
                </div>
                <button type="submit">Log In</button>
                <div class="google-btn">
                    <img src="google-logo.png" alt="Google Logo" width="20">
                    <span>Sign up with Google</span>
                </div>
                <div class="links">
                    <span>Don't have an account?</span>
                    <a href="{{ url('register') }}">Create an account</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>