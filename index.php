<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="便利屋BGNの広告サイトです">
  <title>便利屋B・G・N</title>
  <link rel="stylesheet" href="css/destyle.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&family=Limelight&family=Montserrat:wght@400;700&family=Noto+Sans+JP&family=Open+Sans&family=Syne:wght@700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <!-- ヘッダー -->
  <header>
    <!-- ナビゲーション -->
    <header class="header">
      <div class="header-inner">
        <h1><img src="images/bgn-rogo.jpg" alt="ロゴ">&emsp;便利屋 B・G・N</h1>
        <div class="bgn-call">
          <h2>&emsp;<i class="bi bi-telephone-fill"></i>to&nbsp;call&nbsp;<a href="tel:0800-100-2800" ontouchstart="">0800-100-2800 </a></h2>
        </div>
      </div>
      <div class="header-site-menu"></div>
      <nav class="site-menu">
        <ul>
          <li><a href="./index.html">HOME</a></li>
          <li><a href="./service.html">SERVICE</a></li>
          <li><a href="./price.html">PRICE</a></li>
          <li><a href="./area.html">AREA</a></li>
          <li><a href="./contact.html">CONTACT</a></li>

        </ul>
      </nav>
    </header>

    <div class="contact-moppu">
      <img src="images/moppu.jpg" alt="モップ画像">
      <p>open&nbsp;24&nbsp;hours <br>open&nbsp;all&nbsp;year&nbsp;round</p>
    </div>
  </header>
  <!-- ヘッダーここまで -->


  <!-- メイン -->
  <main>
    <!-- お問い合わせ -->
    <div class="contact-container">
      <div class="contact">
        <h2><mark>お問い合わせ</mark></h2>
      </div>

      <div class="contact-bgn-form">
        <div class="contact-form">
          <form action="#">
            <div>
              <label for="name">お名前</label>
              <input type="text" id="name" name="your-name">
            </div>

            <div>
              <label for="email">メールアドレス</label>
              <input type="email" id="email" name="your-email">
            </div>

            <div>
              <label for="message">メッセージ</label>
              <textarea id="message" name="your-message"></textarea>
            </div>

            <input type="submit" class="button" value="送信">
          </form>
        </div>
      </div>
    </div>

    <!-- 作業の流れ -->
    <div class="contact-work-container">
      <div class="contact-work">
        <h2><mark>作業までの流れ</mark></h2>
      </div>
      <div class="contact-flow">
        <ul>
          <li>1&emsp;お見積りに伺います。</li>
          <li>2&emsp;作業内容の確認を致します。</li>
          <li>3&emsp;お見積り額のご提示をさせていただきます。</li>
          <li>4&emsp;作業日の確定を致します。</li>
          <li>5&emsp;作業完了後のお支払いになります。</li>
        </ul>
      </div>
      <div class="contact-pay">
        <p>・・・・お支払い方法について・・・ <br>
          &emsp; 現金でのお支払い又は御請求書発行でのお振込みとなります。</p>
      </div>
    </div>

    <div class="web-contact">
      <h2><mark>WEB&nbsp;contact</mark></h2>
      <h3> by&nbsp;web&nbsp;design&nbsp;ouka </h3>
    </div>

    <div class="web-container">
      <div class="hima">
        <p>お気軽にお問い合わせください。</p>
        <img src="images/hima.jpg" alt="ひまわり">
        <h2>CONTACT</h2>
      </div>

      <div class="contact-form">
        <form action="#">
          <div>
            <label for="name">name</label>
            <input type="text" id="name-f" name="your-name">
          </div>

          <div>
            <label for="email">email</label>
            <input type="email" id="email-f" name="your-email">
          </div>

          <div>
            <label for="message">message</label>
            <textarea id="message-f" name="your-message"></textarea>
          </div>

          <input type="submit" class="button" value="send">
        </form>
      </div>
    </div>

  </main>
  <!-- メインここまで -->

  <!--フッターコピーライト-->
  <footer>
    <div class="bgn-call2">
      <h2><span class="bold">B</span>&nbsp;便利屋&nbsp;<span class="bold">G</span>&nbsp;グループ&nbsp;<span class="bold">N</span>&nbsp;何でもやります</h2>
      <div class="free-cool">
        <h2><i class="bi bi-telephone-fill"></i> to&nbsp;call&nbsp; <a href="tel:0800-100-2800" ontouchstart="">0800-100-2800
          </a></h2>
      </div>
      <div class="contact-footer-copy">copyright&copy;&nbsp;Co.,Ltd.B・G・N All Rights Reserved.</div>
    </div>

  </footer>
  <!-- フッターここまで -->

</body>

</html>