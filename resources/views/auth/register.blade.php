<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StopFood Register</title>

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
            background-color: #db1414;;
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
        .register-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
        }
        .register-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
        }
        .register-container form {
            display: flex;
            flex-direction: column;
        }
        .register-container input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .register-container button {
            padding: 10px;
            font-size: 1em;
            background-color: #db1414;;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
        <div class="register-container">
            <h2>Create an account</h2>
            <div>
                <p>Register to order your favorite food now!</p>
            </div>
            <form action="{{ url('register') }}" method="POST"">
                @csrf
                <div>
                    <input type="text" placeholder="Username" name="name">
                    @if($errors->has('name'))
                        <span class="text-danger"> {{ $errors->first('name')}} </span>
                    @endif
                </div>
                
                <div>
                    <input type="email" placeholder="Email" name="email">
                    @if($errors->has('email'))
                        <span class="text-danger"> {{ $errors->first('email')}} </span>
                    @endif
                </div>

                <div>
                {{-- <input type="text" placeholder="No telp" name="telp"> --}}
                    <input type="tel" placeholder="No. telp" id="phone" name="telp"> 
                    @if($errors->has('telp'))
                        <span class="text-danger"> {{ $errors->first('telp')}} </span>
                    @endif
                </div>

                <div>
                    <input type="password" placeholder="Password" name="password">
                    @if($errors->has('password'))
                        <span class="text-danger"> {{ $errors->first('password')}} </span>
                    @endif
                </div>

                <div>
                    <input type="password" placeholder="Confirm your password" name="password_confirmation">
                </div>
                
                <div>
                    <button type="submit">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>