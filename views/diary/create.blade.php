@extends('layouts.default')

@section('title', $title)

@section('content')
<h1>日記追加画面</h1>
<a href="{{ url('/diaries') }}">一覧に戻る</a>

<form method="post" action="{{ url('/diaries') }}">
  @csrf

  <div>
    <label>
      タイトル：
      <input type="text" name="title" placeholder="日記のタイトルを入力">
    </label>
  </div>

  <div>
    <label>
      <textarea type="text" name="log" placeholder="内容を入力" rows="5" cols="80"></textarea>
    </label>
  </div>

  <input type="submit" value="保存">

</form>
@endsection
