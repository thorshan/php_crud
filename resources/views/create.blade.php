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
    <title>PHP CRUD | Create</title>
    <style>
        body{
            padding: 50px 100px;
        },
    </style>
</head>
<body>

    <div class="container">
        <h2>Crate new post</h2>
        <div class="row mt-5">
            <div class="col-md-6">
                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group mb-2">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="" cols="30" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="category">Category</label>
                        <select name="category_id" id="category" class="form-select">
                            <option>-- Select ---</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mt-3">
                        <label class="input-group-text" for="image">Upload</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <a href="{{route('posts.index')}}">
                        <button type="button" class="btn btn-secondary mt-5">Cancel</button>
                    </a>
                    <button class="btn btn-primary mt-5">Create</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
    </script>
</body>
</html>
