@extends('layouts.default')

@section('title', $title)

@section('content')
<h1 class = "title" >日記一覧画面</h1>

<div class = "box">

    <a href="{{ url('/diaries/create') }}">新規投稿</a>

    <div>

    @forelse($diaries as $diary)
        <div class = "diary">
            <p>{{ $diary->title }} {{ $diary->created_at}}</p>
            <p>{{ $diary->log }}</p>
            <a href="{{ url('/diaries/' . $diary->id . '/edit') }}">編集</a>
            <form action="{{ url('/diaries/' . $diary->id) }}" method="post">
              @csrf
              @method('DELETE')  
                <input type="submit" value="削除">
            </form>
        </div>
    @empty

    <p>日記がありません。</p>

    @endforelse

    </div>
</div>

@endsection