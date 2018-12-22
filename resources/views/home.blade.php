
@if((Session('who'))=='user')
    @php( $user = \App\User::find(Session('login')) )
@elseif((Session('who'))=='employee')
    @php( $user = \App\Employee::find(Session('login')) )
@elseif((Session('who'))=='admin')
    @php( $user = \App\Admin::find(Session('login')) )
@endif
@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Service In Need</title>

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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			
            <div class="top-left">
                <div class="links">
                    @if(Session::has('login'))
                        <a href="{{route('logout.index')}}">Logout</a>
                        @if((Session('who'))=='admin')
                            <a href="{{route('manage.index')}}">Manage</a>
                        @endif
                        @if((Session('who'))=='employee')
                            @if(($user->request)!='0')
                                <a href="{{route('request.employee')}}">Request!!!</a>
                            @endif
                        @endif
                        @if((Session('who'))=='user')
                            @if(($user->assigned)!='0')
                                <a href="{{route('assigned.employee')}}">Assigned!!!</a>
                            @endif
                        @endif
                    @endif
                </div>
            </div>

			<div class="top-right">
				<div class="links">
                    @if(Session::has('login'))
                        Hi {{session('who')}}, {{$user->username}}!
                        @if((Session('who'))=='user')
                            <a href="/profile/user">MyProfile</a>
                        @elseif((Session('who'))=='employee')
                            <a href="/profile/employee">MyProfile</a>
                        @elseif((Session('who'))=='admin')
                            <a href="/profile/admin">MyProfile</a>
                        @endif
                        
                    @else
					   <a href="{{route('login.index')}}">Login</a>
					   <a href="/registration">Registration</a>
                    @endif
				</div>
			</div>
			
            <div class="content">
                <div class="title m-b-md">
                    <marquee>Service In Need</marquee>
                </div>

                <div class="links">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('services')}}">Services</a>
                    <a href="{{route('aboutUs')}}">About Us</a>
                    <a href="{{route('contact')}}">Contact</a>
                </div>
                <p>{{session('message')}}</p>
            </div>
        </div>
    </body>
</html>
