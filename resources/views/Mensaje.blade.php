<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    @if($error==1)
<body class="container">
        <div class="container text-center">
           <div class="card text-white bg-danger">
                <h1>{{$mensaje ?? ''}} </h1>
            </div>
        </div>
    @else
<body class="container">
    <div class="container text-center">
        <div class="card text-white bg-success">
            <h1>{{$mensaje ?? ''}}</h1>
        </div>
    </div>
    @endif
</body>