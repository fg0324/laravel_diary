<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Diary;

use App\Http\Requests\DiaryRequest;

class DiaryControlller extends Controller
{
    public function index(){
        $diaries = Diary::all();
        return view('diary.index', [
        'title' => '日記一覧',
        'diaries' => $diaries,
      ]);
    }

    public function create(){
        return view('diary.create', [
        'title' => '日記一覧',
      ]);
    }

    public function store(DiaryRequest $request){
        Diary::create(
        $request->only([
                'title',
                'log'
            ])
        );
        session()->flash('success', '日記を追加しました！');
        return redirect('/diaries');

    }

    public function edit(int $id){
        $diary = Diary::find($id);

        return view('diary.edit', [
           'title' => '日記編集',
           'diary' => $diary,
        ]);
    }

    public function update(int $id, DiaryRequest $request){
        $diary = Diary::find($id);
        $diary->update($request->only(['title', 'log']));
        session()->flash('success', '日記を更新しました！');
        return redirect('/diaries');

    }

    public function destroy(int $id){
        $diary = Diary::find($id);
        $diary->delete();
        session()->flash('success', '日記を削除しました！');
        return redirect('/diaries');
    }
}
