<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * 課題一覧を表示する
     * 
     * @return View
     */
    public function showList()
    {
        return view('issue.list');
    }
}
