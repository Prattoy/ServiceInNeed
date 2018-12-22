@php( $admins = \App\Admin::all() ) 
@php( $users = \App\User::all() )  
@php( $employees = \App\Employee::all()) 
@php( $servicess = \App\Services::all()) 

@section('content')
<html>
    <head>
        <title>Manage</title>

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
                    <a href="{{route('home')}}">Home</a> 
                </div>
            </div>
            <div class="top-right">
                <div class="links">
                    <a href="{{route('admin.index')}}">Create New Admin</a>
                </div>
            </div>

            <div class="content">
                <p>{{session('message')}}</p>
                <div class="links">
                    <fieldset>
                    <legend>Admins</legend>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Operation</th>
                        </tr>                            
                        
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->email }}</td>
                            
                            <td><a href='/deleteAdmin/{{ $admin->id }}'>Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                    </fieldset>
                    <br>
                    <br>
                    <fieldset>
                    <legend>Users</legend>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Location</th>
                            <th>Operation</th>
                        </tr>                            
                        
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phoneNo }}</td>
                            <td>{{ $user->location }}</td>
                            
                            <td><a href='/deleteUser/{{ $user->id }}'>Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                    </fieldset>
                    <br>
                    <br>
                    <fieldset>
                    <legend>Employees</legend>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Profession</th>
                            <th>Work Experience</th>
                            <th>Cost(Per Hour)</th>
                            <th>Phone No</th>
                            <th>Location</th>
                            <th>Availability</th>
                            <th>Rating</th>
                            <th>Operation</th>
                        </tr>                            
                        
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->username }}</td>
                            <td>{{ $employee->profession }}</td>
                            <td>{{ $employee->experience }}</td>
                            <td>{{ $employee->cost }}</td>
                            <td>{{ $employee->phoneNo }}</td>
                            <td>{{ $employee->location }}</td>
                            <td>{{ $employee->status }}</td>
                            <td>{{ $employee->rating }}</td>
                            
                            <td><a href='/deleteEmployee/{{ $employee->id }}'>Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                    </fieldset>
                    <br>
                    <br>
                    <fieldset>
                    <legend>Services</legend>
                    <table class="table">
                        <tr>
                            <th>Serial</th>
                            <th>User</th>
                            <th>User ID</th>
                            <th>Employee</th>
                            <th>Employee ID</th>
                            <th>Rating</th>
                        </tr>                            
                        
                        @foreach($servicess as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->userName }}</td>
                            <td>{{ $service->userId }}</td>
                            <td>{{ $service->employeeName}}</td>
                            <td>{{ $service->employeeId }}</td>
                            <td>{{ $service->rating }}</td>                            
                            
                            <!-- <td><a href='/deleteEmployee/{{ $employee->id }}'>Delete</a></td> -->
                        </tr>
                        @endforeach
                    </table>
                    </fieldset>
                </div>
            </div>
        </div>
        
    </body>
</html>