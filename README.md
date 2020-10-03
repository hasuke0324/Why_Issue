# Why Issue
「課題」と「状況」を整理するアプリケーションです。
http://polar-chamber-46255.herokuapp.com/

# 概要
予算が達成しない、勉強が続かない、、
これは課題でしょうか？状況でしょうか？
課題を解決するツールは様々ありますが、
本アプリケーションはそもそもの「課題」をしっかり抽出するサポートをしてくれます。
課題と状況をしっかり分けれて考えなければ正しい改善アクションが見えてきません。

##　デモ
フォームに答えていくと新しいフォームが現れます。
[![Image from Gyazo](https://i.gyazo.com/50be486c84219effdd3beb1b9e7c4967.gif)](https://gyazo.com/50be486c84219effdd3beb1b9e7c4967)

投稿すると一覧画面で管理ができます。
[![Image from Gyazo](https://i.gyazo.com/edc53cdf3a9f7cf647edc5cdac51d2e5.gif)](https://gyazo.com/edc53cdf3a9f7cf647edc5cdac51d2e5)

# 機能
* フォーム入力による課題の作成
* 登録した課題の詳細表示
* 課題の編集
* 課題の削除

# 使い方
1. TOP画面（フォーム）から質問に返答
1. 一つの回答が終わりましたら入力欄からフォーカスを外すと
　　新しいフォームが出現
1. 期限を設定すると投稿ボタンが出現
1. 投稿をするとリスト画面に遷移
1. 登録した「目標」はリンクとなり、選択で詳細画面に遷移
1. リストの編集ボタンで編集が可能
1. リストの削除ボタンで削除が可能

# 技術
* PHP : 7.3.11
* Laravel Framework : 8.6.0
* DB操作 : mysql/14.14
* フロント制御 :Vue.js/2.5.17
* インフラ : heroku/7.44.0

# DB設計
## issuesテーブル
|Column|Type|Options|
|------|----|-------|
|goal|string|null: false, MAX:40|
|now|string|null: false, MAX:40|
|why|string|null: false, MAX:70|
|action|string|null: false, MAX:70|
|deadline|date|null: false|

# ライセンス
This project is licensed free.  
ご自由にご利用ください