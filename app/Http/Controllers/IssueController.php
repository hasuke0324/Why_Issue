<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Issue;

class IssueController extends Controller
{
    /**
     * 課題一覧を表示する
     * 
     * @return View
     */
    public function showList()
    {
        $issues = Issue::all();
        return view('issue.list', ['issues' => $issues]);
    }
}
