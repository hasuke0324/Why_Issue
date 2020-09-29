<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Issue;

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
}
