@extends('layout')
@section('title', 'アクション一覧')
@section('list')
@if(session('err_msg'))
<span class="text-danger">{{ session('err_msg') }}</span>
@endif
<div class="main__container">
  <table class="issue__list">
    <tr>
      <th class="width__goal">目標</th>
      <th class="width__now">現状</th>
      <th class="width__why">課題</th>
      <th class="width__action">アクション</th>
      <th class="width__deadline">期限</th>
      <th class="width__edit"></th>
      <th class="width__delete"></th>
    </tr>
    @foreach($issues as $issue)
    <tr>
      <td nowrap class="list__goal"><a href="/issue/{{ $issue->id }}" class="show__link">{{ $issue->goal }}</a></td>
      <td nowrap class="list__now">{{ $issue->now }}</td>
      <td nowrap class="list__why">{{ $issue->why }}</td>
      <td nowrap class="list__action">{{ $issue->action }}</td>
      <td>{{ $issue->deadline }}</td>
      <td><button type="button" class="btn__edit" onclick="location.href='/issue/edit/{{ $issue->id }}'">編集</button></td>
      <form method="POST" action="{{ route('delete', $issue->id) }}" onSubmit="return checkDelete()">
      @csrf
      <td><button type="submit" class="btn__delete" onclick=>削除</button></td>
      </form>
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