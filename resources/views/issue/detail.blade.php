@extends('layout')
@section('title', '課題詳細')
@section('list')
<div class="detail__list">
  <h2>{{ $issue->goal }}</h2>
  <span class="date">作成日:{{ $issue->created_at }}</span>
  <span class="date">更新日:{{ $issue->updated_at }}</span>
  <p class="detail__content">現状: {{ $issue->now }}</p>
  <p class="detail__content">課題: {{ $issue->why }}</p>
  <p class="detail__content">行動: {{ $issue->action }}</p>
  <p class="detail__content">期限: {{ $issue->deadline }}</p>
</div>
@endsection