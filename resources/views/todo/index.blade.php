<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Grocery App</title>
</head>
<style>
    li{
        list-style-type:none;
    }
</style>

<body>
   
    

    <div class="wrapper-grid">
            <div class="container-grid">
                <h1>
                    Grocery List App
                </h1>
        
    <div style="display:flex; flex-direction:row; justify-content:space-between; align-items:center; padding:2.5em;">
    <h1>Items</h1>
        <a href="/create" class="create">Add Grocery to list</a>
</div>
    <hr>
    <h3>
        <x-alert />
    </h3>
    @foreach($todos as $todo)
        <li class="litag">
            @if($todo->completed)
                <span style="color:red; opacity:0.7;"><h4>{{$todo->title}}</h4></span>
            @else <h4>
                {{$todo->title}}</h4>
            @endif
            <br><br>  
            <div style="display:flex; justify-content:space-around;align-items:center;">
            <a href="{{asset('/' . $todo->id . '/edit')}}" class="ecd">Edit cart</a><br><br><br>
            <a href="{{asset('/' . $todo->id . '/completed')}}" class="ecd">Picked</a><br><br><br>
            <a href="{{asset('/' . $todo->id . '/delete')}}" class="ecd">Remove item</a>
            </div>
            

        </li><br><br>
    @endforeach
                <!-- <button class="btn-new">Add to cart</button> -->
        </div>
</body>
</html>
