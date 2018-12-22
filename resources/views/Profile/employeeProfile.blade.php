

@php( $user = \App\Employee::find(Session('login')) )    

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

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

			<div class="top-right">
				<div class="links">

				</div>
			</div>
			
            <div class="content">
                <fieldset>
                    <legend>Profile</legend>
                    Name: <label>{{$user->name}}</label><br>
                    Username: <label>{{ $user->username }}</label><br>
                    Profession: <label>{{$user->profession}}</label><br>
                    Work Experience: <label>{{$user->experience}}</label><br>
                    Cost(Per Hour): <label>{{$user->cost}}</label><br>
                    Phone Number: {{ $user->phoneNo }}<br>
                    Location: {{ $user->location }}<br>
                    <a href='/editEmployee/{{ $user->id }}'>Edit Profile</a></td>
                </fieldset>
            </div>
        </div>
    </body>
</html>
