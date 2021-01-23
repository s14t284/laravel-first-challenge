# 概論
https://readouble.com/laravel/8.x/ja/lifecycle.html

## 始まり
- Laravelでのアプリケーションに対するリクエストは全て`public/index.php`
  - apache/nginx などの webサーバがここにアクセスを誘導
  - index.phpは`Composer`が生成したオートローダーの定義をロードして、`bootstrap/app.php`からLaravelアプリのインスタンスを取得
    - ここでLaravelアプリケーションが呼び出されているので、index.phpなどはLaravelの外
    
## HTTP/Consoleカーネル
- 送信されたリクエストはHTTPカーネル/コンソールカーネルのいずれかに送る
  - HTTPカーネルは`app/Http/Kernel.php`
    - HTTPカーネルは実行前に処理されるbootstrappers(起動コード)の配列を定義
      - エラー処理、ログ設定、アプリケーション動作環境の決定
      - HTTPミドルウェア（HTTPセッションの読み書き、CSRFトークンの確認など）
  - コンソールカーネルは`app/Console/Kernel.php`

## サービスプロバイダ
- カーネル初期起動時の重要な処理の1つに`config/app.php`の`providers`配列に設定されているサービスプロバイダをロード
- 全てのプロバイダの`register`メソッドが呼ばれた後、全てのプロバイダの`boot`メソッドが呼ばれる

### サービスプロバイダの責務
- DB、キュー、バリデーション、ルーティングなどFWの様々なコンポーネントの初期起動処理
- Laravel アプリケーションの中で最も重要な機能の1つ

### サービスプロバイダの精査
- サービスプロバイダを自身で追加するためには `app/Providers` ディレクトリを編集

## リクエストのディスパッチ
- サービスプロバイダが登録されたら実行制御の以降（ディスパッチ）をするためにルーターへ`Request`が手渡される
- ルーターはリクエストをルートorコントローラへディスパッチする。ルートへ指定されているミドルウェアも同時に実行

