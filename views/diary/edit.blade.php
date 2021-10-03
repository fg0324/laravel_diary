@extends('layouts.default')

@section('title', $title)

@section('content')
<h1>日記編集画面</h1>
<a>一覧に戻る</a>

<form action="{{ url('/diaries/' . $diary->id) }}" method="post">
  @csrf
  @method('PATCH')
  <div>
    <label>
      タイトル：
      <input type="text" name="title"  value = "{{$diary->title}}" placeholder="日記のタイトルを入力">
    </label>
  </div>
  <div>
    <label>
      <textarea type="text" name="log" placeholder="内容を入力">{{$diary->log}}</textarea>
    </label>
  </div>

  <input type="submit" value="保存">
</form>

@endsection