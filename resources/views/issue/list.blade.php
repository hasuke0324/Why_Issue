@extends('layout')
@section('title', 'アクション一覧')
@section('list')
@if(session('err_msg'))
<p class="text-danger">{{ session('err_msg') }}</span>
@endif
<div class="main__container">
  <table class="issue__list">
    <tr>
      <th>No.</th>
      <th>目標</th>
      <th>アクション</th>
      <th>期限</th>
      <th></th>
    </tr>
    @foreach($issues as $issue)
    <tr>
      <td>{{ $issue->id }}</td>
      <td><a href="/issue/{{ $issue->id }}" class="show__link">{{ $issue->goal }}</a></td>
      <td>{{ $issue->action }}</td>
      <td>{{ $issue->deadline }}</td>
      <td><button type="button" class="edit__btn" onclick="location.href='/issue/edit/{{ $issue->id }}'">編集</button></td>
    </tr>
    @endforeach
  </table>
</div>
@endsection