<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

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
                    <a href="/">Home</a>
                    <a href="/services">Back</a>
                </div>
            </div>
        <div class="container">

            <br/>

            <h1 class="text-center">Electricians</h1>

            <br/>
            <p>{{session('message')}}</p>
            <br/>

            <table class="table table-bordered" id="electrician-table">

                <thead>

                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Work Experience (in years)</th>
                        <th>Cost (per hour)</th>
                        <!-- <th>Phone No</th> -->
                        <th>Rating</th>
                        <th>Availability</th>
                        <th>Booking</th>
                    </tr>

                </thead>

            </table>

        </div>
    </div>

        <script src="//code.jquery.com/jquery.js"></script>

        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>

        $(function() {

            $('#electrician-table').DataTable({

                processing: true,

                serverSide: true,

                ajax: '{!! route('get.employeedata') !!}',
                
                columns: [

                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'location', name: 'location' },
                    { data: 'experience', name: 'experience'},
                    { data: 'cost', name: 'cost'},
                    // { data: 'phoneNo', name: 'phoneNo'},
                    { data: 'rating', name: 'rating'},
                    { data: 'status', name:'status'},
                    {
                        data: 'id',

                        fnCreatedCell: function (nTd, sData, oData, iRow, iCol) {
                            $(nTd).html("<a href='/contactElectrician/"+oData.id+"'>"+'Book'+"</a>");
                        }
                    },

                ]
            

            });

        });

        </script>

        @stack('scripts')

    </body>

</html>