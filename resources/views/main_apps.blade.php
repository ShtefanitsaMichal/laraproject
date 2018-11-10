 


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: top;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Podstawowe aplikacji
                </div>

                <div class="links">
                <table> 
                    <tr>
                        <th>id</th>
                        <th>session_id</th>
                        <th>intranet</th>
                        <th>comarch</th>
                        <th>bpcs</th>
                        <th>qms</th>
                        <th>sap</th>
                        <th>asseco</th>
                        <th>sanden_vision</th>
                        <th>facebook</th>
                        <th>strona internetowa</th>
                        <th>baza sugestii</th>
                        <th>Sanden mounth news</th>
                        <th>zmt</th>
                        <th>parcel warehouse</th>
                        <th>Lessons learned</th>
                        <th>Own title</th>
                        <th>Own</th>
                        <th>Total</th>    
                        
                    </tr>        
                       
                    @foreach($main_apps as $key => $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->session_id}}</td>
                        <td>{{$data->intranet}}</td>
                        <td>{{$data->comarch}}</td>
                        <td>{{$data->bpcs}}</td>
                        <td>{{$data->qms}}</td>
                        <td>{{$data->sap}}</td>
                        <td>{{$data->asseco}}</td>
                        <td>{{$data->sanden_vision}}</td>
                        <td>{{$data->facebook}}</td>
                        <td>{{$data->smp_web_page}}</td>
                        <td>{{$data->baza_sugestii}}</td>
                        <td>{{$data->sanden_month_news}}</td>
                        <td>{{$data->zmt}}</td>
                        <td>{{$data->parcel_warehouse}}</td>
                        <td>{{$data->lessons_learned}}</td>
                        <td>{{$data->own_title}}</td>
                        <td>{{$data->own}}</td>
                        <td>{{$data->total}}</td>
                    </tr>                  
                    
                @endforeach

                    <a href="<?php echo url('/'); ?>">
                </table>
                </div>
            </div>
        </div>
    </body>
</html>
