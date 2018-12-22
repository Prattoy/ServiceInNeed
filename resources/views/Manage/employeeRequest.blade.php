@php( $employee = \App\Employee::find(Session('login')) )

@php( $user = \App\User::find($employee->request) )

<html>
<head>
	<title>Request</title>

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
                <a href="{{route('home')}}">Home</a>
            </div>
        </div>
		<div class="content">

			<h1>Request</h1>
            <form method="POST">
            {{@csrf_field()}}
			<div class="box">
				<div class="links">
					You have a work request from user {{$user->username}}!<br>
                    Location: <label type="text">{{$user->location}}</label><br>
                    <!-- <input type="text" name="input"> -->
                    <button type="submit" name="confirm" value="accept">Accept</button>
                    <button type="submit" name="confirm" value="deny">Deny</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>