<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route("posts.store") }}" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" placeholder="Title ..." name="title" value="{{ old('title') }}">
        </div>
        <div>
            <input type="text" placeholder="Author ..." name="author" value="{{ old('author') }}">
        </div>
        <div>
            <input type="text" placeholder="Content ..." name="content" value="{{ old('content') }}">
        </div>
        <div>
            <select name="category_id" id="">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
