Rasp
=========

Raspはユーザの任意の処理を登録出来るコマンドアプリケーションです。


### ClassLoaderのダウンロード
---
RaspではSymfonyのClassLoaderコンポーネントを使用しています。動作させるためにはComposerでClassLoaderからダウンロードをします。
library/composer ディレクトリに移動して下記のコマンドを叩きます。

    $> composer.phar install


### .bashrcへのパスの登録
---
.bashrcへRaspへのパスを登録します。

    export PATH=$PATH:/Path/to/Rasp

### Raspを動かす
---
コンソールでraspコマンドを叩くと使用出来るコマンド群が表示されます。

    $> rasp

    -- rasp commands list --
      Generate:                      新たなコマンドファイルを作成します。

### Generateコマンドで新たなコマンドを生成する
---
下記のコマンドを打つと、Testコマンドが生成されます。
生成場所はcommands/Rasp/Commands/Test.php

    $> rasp Generate Test

### Testコマンドを編集して実行する
---
Test.phpを開いてexecuteメソッドを編集します。コマンド実行時に渡される引数はメソッドのArray変数に格納されてきます。
また、コマンドリストに表示するヘルプメッセージはhelpメソッドに記載します。

メソッドの編集が完了したら下記のコマンドでTestコマンドを実行出来ます。

    $> rasp Test