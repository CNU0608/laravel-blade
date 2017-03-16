<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>1. Hello, I am about<?= $name; ?></h1>
    <h1>2. Hello, I am about{{$name}}</h1>
    <h1>3. Hello, I am about{!! $tag !!}</h1>
    @if($name == 'CNU:OK888')
        <h1>及格</h1>
    @else
        <h1>不及格</h1>
    @endif

    @if($data)
    <ul>
        @foreach($data as $item)
                <li>{{$item}}</li>
        @endforeach
    </ul>
    @endif

    <ol>
    @forelse($data as $item)
        <li>{{$item}}</li>
    @empty
        暂无记录
        @endforelse
        </ol>

</body>
</html>