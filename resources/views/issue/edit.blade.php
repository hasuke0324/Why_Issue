@extends('layout')
@section('title', '課題編集フォーム')
@section('list')
<div class="form">
    <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
        @csrf
        <input type="hidden" name="id" value="{{ $issue->id }}"> 
        <div class="form__group">
            <h3>あなたの目標は？</h3>
            <span class="required-tag">必須</span>
                <input
                    id="goal"
                    name="goal"
                    class="form__control"
                    value="{{ $issue->goal }}"
                    type="text"
                    placeholder="40文字まで"
                    autocomplete="off"
                >
            @if ($errors->has('goal'))
                <div class="text-danger">
                    {{ $errors->first('goal') }}
                </div>
            @endif
        </div>
        <div class="form__group">
            <h3>それに対して現状は？</h3>
            <span class="required-tag">必須</span>
                <input
                    id="now"
                    name="now"
                    class="form__control"
                    value="{{ $issue->now }}"
                    type="text"
                    placeholder="40文字まで"
                    autocomplete="off"
                >
            @if ($errors->has('now'))
                <div class="text-danger">
                    {{ $errors->first('now') }}
                </div>
            @endif
        </div>
        <div class="form__group">
            <h3>目標と現状の差はなぜ生まれる？</h3>
            <span class="required-tag">必須</span>
                <input
                    id="why"
                    name="why"
                    class="form__control"
                    value="{{ $issue->why }}"
                    type="text"
                    placeholder="70文字まで"
                    autocomplete="off"
                >
            @if ($errors->has('why'))
                <div class="text-danger">
                    {{ $errors->first('why') }}
                </div>
            @endif
        </div>
        <div class="form__group">
            <h3>その差を埋めるための行動とは？</h3>
            <span class="required-tag">必須</span>
                <input
                    id="action"
                    name="action"
                    class="form__control"
                    value="{{ $issue->action }}"
                    type="text"
                    placeholder="70文字まで"
                    autocomplete="off"
                >
            @if ($errors->has('action'))
                <div class="text-danger">
                    {{ $errors->first('action') }}
                </div>
            @endif
        </div>
        <div class="form__group">
        <h3>いつまでに目標達成？</h3>
            <span class="required-tag">必須</span>
            <input
                id="deadline"
                name="deadline"
                class="form__control"
                value="{{ $issue->deadline }}"
                type="date"
            >
            @if ($errors->has('deadline'))
                <div class="text-danger">
                    {{ $errors->first('deadline') }}
                </div>
            @endif
        </div>
        <div class="btn">
            <a class="btn__cancel" href="{{ route('lists') }}">
                キャンセル
            </a>
            <button type="submit" class="btn__submit">
                更新する
            </button>
        </div>
    </form>
</div>
<script>
function checkSubmit(){
if(window.confirm('更新してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection