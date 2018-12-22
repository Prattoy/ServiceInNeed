<html>
<head>
	<title>Login</title>

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
        </style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		<div class="content">
            
            <form method="post">
            {{@csrf_field()}}
                <fieldset>
                    <legend><h1>Login</h1></legend>
			            <table>
				            <tr>
					           <td>Username</td>
					           <td><input name="username" required></td>
				            </tr>
				            <tr>
					           <td>Password</td>
					           <td><input type="password" name="password" required></td>
				            </tr>
                            <tr>
                                <td>Type</td>
                                <td>
                                    <select name="type" required>
                                        <option value="user">User</option>
                                        <option value="employee">Employee</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </td>
                            </tr>
				            <tr>
					           <td></td>
					           <td><input type="submit" name="Login"/></td>
				            </tr>
			            </table>
                </fieldset>
            </form>
        <p>{{session('message')}}</p>

        Not A User Yet! <a href="/registration">Register Here!</a>
		</div>
		<div class="top-left">
			<div class="links">
				<a href="/">Home</a>
			</div>
		</div>
	</div>
</body>
</html>