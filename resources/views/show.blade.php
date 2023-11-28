<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <title>PHP CRUD | Update</title>
    <style>
        body{
            padding: 50px 100px;
        },
    </style>
</head>
<body>

    <div class="container">
        <div class="container">
            <div class="card">
                <img class="card-img-top" src="{{ asset('uploads/' . $post->image)}}">
                <div class="card-body">
                  <h2 class="card-title">{{$post->title}}</h2>
                  <p class="card-text"><small class="text-body-secondary">Post category : {{$post->category->name}}</small></p>
                  <p class="card-text">{{$post->content}}</p>
                  <p class="card-text"><small class="text-body-secondary">{{$post->updated_at}}</small></p>
                </div>
              </div>
            <a href="{{route('posts.index')}}">
                <button class="btn btn-primary mt-3">Back to posts</button>
            </a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
    </script>
</body>
</html>
