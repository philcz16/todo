<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    </head>
    <body>
        <div class="panel-body">
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                
                <div class="title m-b-md">
        <form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="POST">
                    {{csrf_field()}}

            <div class="form-group">
               <input type="text" name="todo" class="form-control" value="{{ $todo->todo }}" placeholder="Enter your todo to save" style="width:30%"> 
            </div>
        </form>
                </div>

            </div>
        </div>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{asset('js/toastr.min.js')}}"></script>
</html>
