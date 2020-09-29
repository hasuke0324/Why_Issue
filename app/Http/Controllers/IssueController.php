<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Issue;
use App\Http\Requests\IssueRequest;

class IssueController extends Controller
{
    /**
     * アクション一覧を表示する
     * @return View
     */
    public function showList()
    {
        $issues = Issue::all();
        return view('issue.list', ['issues' => $issues]);
    }
    /**
     * 課題詳細を表示する
     * @param int $id
     * @return View
     */
    public function showDetail($id)
    {
        $issue = Issue::find($id);

        if (is_null($issue)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('lists'));
        }

        return view('issue.detail', ['issue' => $issue]);
    }
    /**
     * 課題登録フォームを表示する
     * @return View
     */
    public function showCreate()
    {
        return view('issue.form');
    }
    /**
     * 課題を登録する
     * @return View
     */
    public function exeStore(IssueRequest $request)
    {
        // 課題のデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // 課題を登録
            Issue::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'アクションを登録しました');
        return redirect(route('lists'));
    } 
}
