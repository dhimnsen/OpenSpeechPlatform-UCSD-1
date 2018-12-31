<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
    <style>
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type="number"] {
            -moz-appearance: textfield;
        }
        input#q156 {
            transform: scale(2);
        }
        .nav-pills>a {
            border-right: 1px solid #16A2B7;
            border-top: 1px solid #16A2B7;
            border-bottom: 1px solid #16A2B7;
            border-left: 1px solid #16A2B7;
        }
    </style>

    <title>Feedback Management</title>

</head>

<body>

    <div class="container" style="margin-top: 10px">

        <nav class="nav nav-pills nav-justified" style="margin-bottom: 10px">
            <a class="nav-item nav-link text-info bg-white" href="{{ url('/researcher/amplification') }}">Amplification</a>
            <a class="nav-item nav-link text-info bg-white" href="{{ url('/researcher/noise') }}">Noise Management</a>
            <a class="nav-item nav-link text-white bg-info" href="#">Feedback Management</a>
        </nav>


        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                FxLMS
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
            PNLMS
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
            <label class="form-check-label" for="exampleRadios3">
                SLMS
            </label>
        </div>

        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">mu- Step size parameter: a positive constant. A higher value results in faster tracking at the cost of higher steady state error</label>
                <input type="text" class="form-control" id="mu" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">rho- Forgetting factor for power estimation: a constant between 0 and 1. (> 0.9 is suggested)</label>
                <input type="text" class="form-control" id="rho" placeholder="Another input">
            </div>
        </form>


        <div class="row align-items-center" style="margin: 1px">
            <button type="button" class="btn btn-info " onclick="save()">Reset</button>
            <button type="button" class="btn btn-info " onclick="save()">Transmit</button>
        </div>
    </div>


</body>
</html>
