@extends('layout')
@section('title', '課題編集フォーム')
@section('list')
<div id="app">
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
                        onkeyup="ShowLength1(value);"
                        maxlength="40"
                        placeholder="（例）予算120万円の売上達成、体重60キロ台になるetc"
                        autocomplete="off"
                    >
                @if ($errors->has('goal'))
                    <span class="text-danger">
                        {{ $errors->first('goal') }}
                    </span>
                @endif
                <span id="inputlength1">
                  {{ mb_strlen($issue->goal) }}/40
                </span>
            </div>
            <div class="form__group">
                <h3>それに対して現状は？</h3>
                <span class="required-tag">必須</span>
                <transition name="vif">
                    <span class="text-now" v-if="showNow">これは状況です。</span>
                </transition>
                    <input
                        id="now"
                        name="now"
                        class="form__control"
                        value="{{ $issue->now }}"
                        type="text"
                        onkeyup="ShowLength2(value);"
                        maxlength="40"
                        placeholder="（例）毎月30万円の未達、体重80キロetc"
                        autocomplete="off"
                        @change="onChange2"
                        v-on:keydown.enter.exact.prevent
                    >
                @if ($errors->has('now'))
                    <span class="text-danger">
                        {{ $errors->first('now') }}
                    </span>
                @endif
                <span id="inputlength2">
                  {{ mb_strlen($issue->now)}}/40
                </spn>
            </div>
            <div class="form__group">
                <h3>目標と現状の差はなぜ生まれる？</h3>
                <span class="required-tag">必須</span>
                <transition name="vif">
                    <span class="text-why" v-if="showWhy">これが課題です。</span>
                </transition>
                    <input
                        id="why"
                        name="why"
                        class="form__control"
                        value="{{ $issue->why }}"
                        type="text"
                        onkeyup="ShowLength3(value);"
                        maxlength="70"
                        placeholder="（例）お客様都合を聞きすぎ月初の面談が埋まらないから、夜中に親友の菓子パンが誘惑してくるからetc"
                        autocomplete="off"
                        @change="onChange3"
                        v-on:keydown.enter.exact.prevent
                    >
                @if ($errors->has('why'))
                    <span class="text-danger">
                        {{ $errors->first('why') }}
                    </span>
                @endif
                <span id="inputlength3">
                  {{ mb_strlen($issue->why) }}/70
                </spn>
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
                        onkeyup="ShowLength4(value);"
                        maxlength="70"
                        placeholder="（例）お客様に日時指定で面談日を提案、18時以降は豆腐しか食べないetc"
                        autocomplete="off"
                    >
                @if ($errors->has('action'))
                    <span class="text-danger">
                        {{ $errors->first('action') }}
                    </span>
                @endif
                <span id="inputlength4">
                  {{ mb_strlen($issue->action) }}/70</spn>
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
                    <span class="text-danger">
                        {{ $errors->first('deadline') }}
                    </span>
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
</div>
<script>
function checkSubmit(){
    if(window.confirm('更新してよろしいですか？')){
        return true;
    } else {
        return false;
    }
}
function ShowLength1( str ) {
   document.getElementById("inputlength1").innerHTML = str.length + "/40";
}
function ShowLength2( str ) {
   document.getElementById("inputlength2").innerHTML = str.length + "/40";
}
function ShowLength3( str ) {
   document.getElementById("inputlength3").innerHTML = str.length + "/70";
}
function ShowLength4( str ) {
   document.getElementById("inputlength4").innerHTML = str.length + "/70";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
var app = new Vue({
    el: '#app',
    data: {
        showNow: false,
        showWhy: false,
    },
    methods:{
        onChange2: function (){
            this.showNow = true
        },
        onChange3: function (){
            this.showWhy = true
        }
    }
});
</script>
<style>
.text-now, .text-why {
  margin-left: 5px;
  font-size: 14px;
  font-weight: 600;
  color: #3490dc;
}
.vif-enter-active, .vif-leave-active {
  transition: opacity .3s;
}
.vif-enter, .vif-leave-to {
  opacity: 0;
}
#inputlength1, #inputlength2, #inputlength3, #inputlength4 {
  color: #444444;
  font-size: 12px;
  margin-top:1px;
  margin-right:17%;
  float: right;
}
</style>
@endsection