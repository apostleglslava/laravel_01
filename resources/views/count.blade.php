<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fjalla One:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Fjalla One', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }


            li {
                color: #ff362c;
                font-family: 'Fjalla One', sans-serif;
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

            input {
                margin: 10px;
            }

            .Topik {
                font-size: 30px;
                font-family: 'Raleway', sans-serif;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div class="content">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/') }}" method="POST" >
                {{ csrf_field() }}

                    <div class="form-group">
                        <label class="Topik">Please write a number</label>

                        <div >
                            <input type="text" name="numeral" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" >
                                Generate the sum
                            </button>
                        </div>
                    </div>
                </form>
                <div class="title m-b-md">
                    {{ $numeral or '0' }}
                </div>

            </div>
        </div>
    </body>
</html>
