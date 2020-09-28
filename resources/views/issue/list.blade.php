@extends('layout')
@section('title', 'アクション一覧')
@section('list')
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
    <td>{{ $issue->goal }}</td>
    <td>{{ $issue->action }}</td>
    <td>{{ $issue->deadline }}</td>
  </tr>
  @endforeach
</table>
@endsection