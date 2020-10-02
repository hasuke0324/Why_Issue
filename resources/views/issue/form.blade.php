@extends('layout')
@section('title', '課題登録フォーム')
@section('list')
<div id="app">
    <div class="form">
        <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
            @csrf
            <div class="form__group">
                <h3>あなたの目標は？</h3>
                <span class="required-tag">必須</span>
                    <input
                        id="goal"
                        name="goal"
                        class="form__control"
                        value="{{ old('goal') }}"
                        type="text"
                        placeholder="40文字まで"
                        autocomplete="off"
                        @change="onChange1"
                        v-on:keydown.enter.exact.prevent
                    >
                @if ($errors->has('goal'))
                    <div class="text-danger">
                        {{ $errors->first('goal') }}
                    </div>
                @endif
            </div>
            <div class="form__group" v-show="setNow">
                <h3>それに対して現状は？</h3>
                <span class="required-tag">必須</span>
                    <input
                        id="now"
                        name="now"
                        class="form__control"
                        value="{{ old('now') }}"
                        type="text"
                        placeholder="40文字まで"
                        autocomplete="off"
                        @change="onChange2"
                        v-on:keydown.enter.exact.prevent
                    >
                @if ($errors->has('now'))
                    <div class="text-danger">
                        {{ $errors->first('now') }}
                    </div>
                @endif
            </div>
            <div class="form__group" v-show="setWhy">
                <h3>目標と現状の差はなぜ生まれる？</h3>
                <span class="required-tag">必須</span>
                    <input
                        id="why"
                        name="why"
                        class="form__control"
                        value="{{ old('why') }}"
                        type="text"
                        placeholder="70文字まで"
                        autocomplete="off"
                        @change="onChange3"
                        v-on:keydown.enter.exact.prevent
                    >
                @if ($errors->has('why'))
                    <div class="text-danger">
                        {{ $errors->first('why') }}
                    </div>
                @endif
            </div>
            <div class="form__group" v-show="setAction">
                <h3>その差を埋めるための行動とは？</h3>
                <span class="required-tag">必須</span>
                    <input
                        id="action"
                        name="action"
                        class="form__control"
                        value="{{ old('action') }}"
                        type="text"
                        placeholder="70文字まで"
                        autocomplete="off"
                        @change="onChange4"
                        v-on:keydown.enter.exact.prevent
                    >
                @if ($errors->has('action'))
                    <div class="text-danger">
                        {{ $errors->first('action') }}
                    </div>
                @endif
            </div>
            <div class="form__group" v-show="setDeadline">
            <h3>いつまでに目標達成？</h3>
                <span class="required-tag">必須</span>
                <input
                    id="deadline"
                    name="deadline"
                    class="form__control"
                    value="{{ old('deadline') }}"
                    type="date"
                    @change="onChange5"
                    v-on:keydown.enter.exact.prevent
                >
                @if ($errors->has('deadline'))
                    <div class="text-danger">
                        {{ $errors->first('deadline') }}
                    </div>
                @endif
            </div>
            <div class="btn" v-show="setBtn">
                <a class="btn__cancel" href="{{ route('lists') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn__submit">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
var app = new Vue({
    el: '#app',
    data: {
        setNow: false,
        setWhy: false,
        setAction: false,
        setDeadline: false,
        setBtn: false,
    },
    methods:{
        onChange1: function (){
            this.setNow = true
        },
        onChange2: function (){
            this.setWhy = true
        },
        onChange3: function (){
            this.setAction = true
        },
        onChange4: function (){
            this.setDeadline = true
        },
        onChange5: function (){
            this.setBtn = true
        },
    }
});
</script>
@endsection