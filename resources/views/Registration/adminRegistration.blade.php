<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="top-left">
            <div class="links">
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('manage.index')}}">Back</a>
            </div>
        </div>

        <div class="contain">
        <div class="regi_wrapper">
        <div class="header">
            <h1>Admin Registration</h1>
        </div>
        
        <form action="#" method="POST" onsubmit="return validation();">
            {{@csrf_field()}}
            <fieldset>
            Name:<br>
            <input type="text" name="name" placeholder="Thor OdinSon" required><br>

            Username:<br>
            <input type="text" name="username" placeholder="thor" required><br>
            
            Email:<br>
            <input type="email" class="form-control" name="email" required><br>
          
            Password:<br>
            <input type="password" name="password" id="password" required><br>
          
            Confirm password:<br>
            <input type="password" name="confirm_password" id="confirm_password"><br>

            <br>
            <div>
                <button type="submit" name="register">Confirm</button>
            </div>
        </fieldset>
        <p>{{session('message')}}</p>
        </form>
    </div>
</div>
</div>
<script type="text/javascript">
    var password = document.getElementById("password")
    var confirm_password = document.getElementById("confirm_password");

    function validation(){
        

        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
            return false;
        } else {
            confirm_password.setCustomValidity('');
            return true;
        }
    }
    password.onchange = validation;
    confirm_password.onkeyup = validation;

</script>
    
</body>
</html>