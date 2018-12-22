

@php( $user = \App\Employee::find(Session('login')) )    

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
          
                            Profession:<br>
                            <select name="profession" required>
                                <option value="{{$user->profession}}">{{$user->profession}}</option>
                                <option value="Electrician">Electrician</option>
                                <option value="Plumber">Plumber</option> 
                                <option value="Mason">Mason</option>
                                <option value="Carpenter">Carpenter</option>
                            </select><br>
                          
                            Work Experience (in years):<br>
                            <select name="experience" required>
                            <option value="{{$user->experience}}">{{$user->experience}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            </select><br>
                          
                            Cost per Hour (in taka):<br>
                            <input type="text" name="cost" value="{{$user->cost}}" required><br>
                          
                            Location:<br>
                            <input type="text" name="location" value="{{$user->location}}" required><br>
                          
                            Phone No:<br>
                            <input type="tel" id="phoneNo" name="phoneNo" pattern="[0-9]{7,11}" value="{{$user->phoneNo}}" required><br>
                          
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
