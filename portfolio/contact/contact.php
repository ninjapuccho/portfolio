<?php 
//エスケープ処理やデータチェックを行う関数のファイルの読み込み
require 'libs/functions.php';
 
//POSTされたデータがあれば変数に格納、なければ NULL（変数の初期化）
$name = isset( $_POST[ 'name' ] ) ? $_POST[ 'name' ] : NULL;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : NULL;
$subject = 'お問い合わせメールです。';
$body = isset( $_POST[ 'body' ] ) ? $_POST[ 'body' ] : NULL;
 
//送信ボタンが押された場合の処理
if (isset($_POST['submitted'])) {
 
  //POSTされたデータに不正な値がないかを別途定義した checkInput() 関数で検証 
  $_POST = checkInput( $_POST ); 
  
  //filter_var を使って値をフィルタリング
  if(isset($_POST['name'])) {
    //スクリプトタグがあれば除去
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  }
  
  if(isset($_POST['email'])) {
    //全ての改行文字を削除
    $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
    //E-mail の形式にフィルタ
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  }
  
  if(isset($_POST['body'])) {
    $body = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
  }
  
  //POST でのリクエストの場合
  if ($_SERVER['REQUEST_METHOD']==='POST') {
  
    //メールアドレス等を記述したファイルの読み込み
    require 'libs/mailvars.php'; 
 
    //メール本文の組み立て。値は h() でエスケープ処理
    $mail_body = 'お問い合わせメールです。' . "\n\n";
    $mail_body .=  "お名前： " .h($name) . "\n";
    $mail_body .=  "Email： " . h($email) . "\n"  ;
    $mail_body .=  "＜お問い合わせ内容＞" . "\n" . h($body);
 
    //-------- sendmail を使ったメールの送信処理 ------------
 
    //メールの宛先（名前<メールアドレス> の形式）。値は mailvars.php に記載
    $mailTo = mb_encode_mimeheader(MAIL_TO_NAME) ."<" . MAIL_TO. ">";
 
    //Return-Pathに指定するメールアドレス
    $returnMail = MAIL_RETURN_PATH; //
    //mbstringの日本語設定
    mb_language( 'ja' );
    mb_internal_encoding( 'UTF-8' );
 
    // 送信者情報（From ヘッダー）の設定
    $header = "From: " . mb_encode_mimeheader($name) ."<" . $email. ">\n";
 
    //メールの送信結果を変数に代入 （サンプルなのでコメントアウト）
    if ( ini_get( 'safe_mode' ) ) {
      //セーフモードがOnの場合は第5引数が使えない
      $result = mb_send_mail( $mailTo, $subject, $mail_body, $header );
    } else {
      $result = mb_send_mail( $mailTo, $subject, $mail_body, $header, '-f' . $returnMail );
    }
 
    //メールが送信された場合の処理
    if ( $result ) {
      //空の配列を代入し、すべてのPOST変数を消去
      $_POST = array(); 
 
      //変数の値も初期化
      $name = '';
      $email = '';
      $body = '';
      
      //再読み込みによる二重送信の防止
      $params = '?result='. $result;
      $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']; 
      header('Location:' . $url . $params . '#contact');
      exit;
    } 
  }
}