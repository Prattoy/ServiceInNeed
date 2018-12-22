<html>
<head>
	<title>Services</title>

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

            .box {
            	background-color: #fff;
            	float: left;
    			width: 200px;
    			border: 5px solid black;
    			padding: 25px;
    			margin: 10px;
            }
        </style>
</head>
<body>
	<div class="flex-center position-ref full-height">
        <div class="top-left">
            <div class="links">
                @if(Session::has('login'))
                    <a href="{{route('logout.index')}}">Logout</a>
                    @if((Session('who'))=='admin')
                        <a href="{{route('manage.index')}}">Manage</a>
                    @endif
                @endif
            </div>
        </div>
		<div class="top-right">
			<div class="links">
				@if(Session::has('login'))
                    <a href="/profile/user">MyProfile</a>
                @else
                    <a href="/login">Login</a>
                    <a href="/registration">Registration</a>
                @endif
			</div>
		</div>
		<div class="content">
			<div class="links">
				<a href="{{route('home')}}">Home</a>
                <a href="{{route('services')}}">Services</a>
                <a href="{{route('aboutUs')}}">About Us</a>
                <a href="{{route('contact')}}">Contact</a>
    		</div>

			<h1>Services</h1>

			<div class="box">
				<div class="links">
                    @if(Session::has('login'))
                        <a href="/electrician">Electrician</a>
                    @else
                       <a href="/login">Electrician</a>
                    @endif
										
				</div>
			</div>

			<div class="box">
				<div class="links">
                    @if(Session::has('login'))
                        <a href="/plumber">Plumber</a>
                    @else
                       <a href="/login">Plumber</a>
                    @endif
										
				</div>
			</div>

			<div class="box">
				<div class="links">
                    @if(Session::has('login'))
                        <a href="/mason">Mason</a>
                    @else
                       <a href="/login">Mason</a>
                    @endif
										
				</div>
			</div>

			<div class="box">
				<div class="links">
                    @if(Session::has('login'))
                        <a href="/carpenter">Carpenter</a>
                    @else
                       <a href="/login">Carpenter</a>
                    @endif
										
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>