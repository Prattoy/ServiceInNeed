

@php( $user = \App\Admin::find(Session('login')) )    

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit</title>

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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
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
                    <a href="/">Home</a>
                </div>
            </div>
			
            <div class="content">
                <fieldset>
                    <legend>Editor</legend>
                    <form method="post" onsubmit="return validation();">
                        {{@csrf_field()}}
                        <table>
            
                            Name:<br>
                            <input type="text" name="name" value="{{$user->name}}" required><br>

                            Username:<br>
                            <input type="text" name="username" value="{{$user->username}}" required><br>
          
                            Email:<br>
                            <input type="email" name="email" value="{{$user->email}}" required></input><br>
                          
                            Password:<br>
                            <input type="password" name="password" id="password" value="{{$user->password}}" required><br>
                          
                            Confirm password:<br>
                            <input type="password" name="confirm_password" id="confirm_password" value="{{$user->password}}"><br>

                            <input type="submit" value="Save"/>
                        
                        </table>
                    </form> 
                </fieldset>
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
