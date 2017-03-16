
@extends('blade.parent')

@section('title', 'CNU, HAPPAY, YES')

@section('sideBar')
    <p>blade模块</p>
@endsection

@section('content')
    <p>我是Content内容部分</p>
    @if($data)
        <h1>有数据</h1>
    @else
        <h1>暂无数据</h1>
    @endif
    @if($data)
        <ul>
            @foreach($data as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    @endif
@endsection



