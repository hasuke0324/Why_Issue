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
      <th></th>
    </tr>
    @foreach($issues as $issue)
    <tr>
      <td>{{ $issue->id }}</td>
      <td nowrap class="list__goal"><a href="/issue/{{ $issue->id }}" class="show__link">{{ $issue->goal }}</a></td>
      <td nowrap class="list__action">{{ $issue->action }}</td>
      <td>{{ $issue->deadline }}</td>
      <td><button type="button" class="btn__edit" onclick="location.href='/issue/edit/{{ $issue->id }}'">編集</button></td>
      <form method="POST" action="{{ route('delete', $issue->id) }}" onSubmit="return checkDelete()">
      @csrf
      <td><button type="submit" class="btn__delete" onclick=>削除</button></td>
    </tr>
    @endforeach
  </table>
</div>
<script>
function checkDelete(){
  if(window.confirm('削除してよろしいですか？')){
      return true;
  } else {
      return false;
  }
}
</script>
@endsection