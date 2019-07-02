<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị danh sách blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 style="margin-left: 35%">Hiển thị danh sách blog</h2>
    <a href="{{route('blog.create')}}" class="btn btn-primary">ADD</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @forelse($blogs as $key => $blog)
        <tbody>
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$blog->name}}</td>
            <td>{{$blog->content}}</td>
            <td>{{$blog->dob}}</td>
            <td>
                <img src="{{asset('storage/'. $blog->image)}}" style="width: 60px" alt="">
            </td>
            <td>
                <a href="{{route('blog.show', ['id' => $blog->id])}}" class="btn btn-primary">Show</a>
                <a href="{{route('blog.edit', ['id' => $blog->id])}}" class="btn btn-danger">Edit</a>
                <a href="{{route('blog.delete', ['id' => $blog->id])}}" class="btn btn-info">Delete</a>
            </td>
        </tr>
        </tbody>
            @empty
            <p>Hiện trang blog của bạn dang bị trống</p>
            @endforelse
    </table>
    {{$blogs->links()}}
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>