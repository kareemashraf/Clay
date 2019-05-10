<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Clay
                </div>

                <div class="desc">
                    <span>Kindly choose a user to check his permission </span></br>



    <div class="form-check form-check-inline">
      <input class="form-check-input user" type="radio" name="inlineRadioOptionsuser" id="inlineRadio1" value="1">
      <label class="form-check-label" for="inlineRadio1">user1</label>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp;
    <div class="form-check form-check-inline">
      <input class="form-check-input user" type="radio" name="inlineRadioOptionsuser" id="inlineRadio2" value="2">
      <label class="form-check-label" for="inlineRadio2">user2</label>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp;
    <div class="form-check form-check-inline">
      <input class="form-check-input user" type="radio" name="inlineRadioOptionsuser" id="inlineRadio3" value="3" >
      <label class="form-check-label" for="inlineRadio3">user3 </label>
    </div>
    </br>
      <span>Now choose a door to open</span></br>
    <div class="form-check form-check-inline">
      <input class="form-check-input door" type="radio" name="inlineRadioOptionsdoor" id="inlineRadio4" value="1">
      <label class="form-check-label" for="inlineRadio4">Tunnel Door</label>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp;
    <div class="form-check form-check-inline">
      <input class="form-check-input door" type="radio" name="inlineRadioOptionsdoor" id="inlineRadio5" value="2">
      <label class="form-check-label" for="inlineRadio5">Office Door</label>
    </div></br>

    <button type="button" class="btn btn-primary open">Open</button> </br>        
    <div class="output" ></div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </footer>
</html>
