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
    <title>PHP CRUD</title>
    <style>
        body{
            padding: 50px 100px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <h2>Posts List</h2>
            <hr>
            <a href="{{route('posts.create')}}">
                <button class="btn btn-primary btn-sm my-2">Add new</button>
            </a>
        </div>
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($posts as $post)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{Str::limit($post->content, 20, ' more')}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>
                        <img width="50px" src="{{ asset('uploads/' . $post->image)}}">
                    </td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="{{route('posts.show', $post->id)}}">
                                    <button type="button" class="btn btn-primary btn-sm">Details</button>
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{route('posts.edit', $post->id)}}">
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                </a>
                            </div>
                            <div class="col">
                                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <caption>Showing {{$posts->count()}} posts</caption>
          </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
    </script>
</body>
</html>
