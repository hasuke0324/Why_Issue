@extends('layout')
@section('title', 'アクション一覧')
@section('list')
@if(session('err_msg'))
<span class="text-danger">{{ session('err_msg') }}</span>
@endif
<table class="issue__list">
  <tr>
    <th>No.</th>
    <th>目標</th>
    <th>アクション</th>
    <th>期限</th>
  </tr>
  @foreach($issues as $issue)
  <tr>
    <td>{{ $issue->id }}</td>
    <td><a href="/issue/{{ $issue->id }}" class="show__link">{{ $issue->goal }}</a></td>
    <td>{{ $issue->action }}</td>
    <td>{{ $issue->deadline }}</td>
  </tr>
  @endforeach
</table>
@endsection