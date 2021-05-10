<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>NINJA PUCCHO</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/reset-stylesheet.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/search.css">
  <?php include('contact/contact.php'); ?>
  <!-- contact.phpはindex.phpに読み込まれているので、その階層。その階層からlibsのファイルを読み込んでいる。 -->
</head>

<body>
  <div class="width-100" id="wrapper">
    <header class="header">

      <div class="header__background-image">
        <img class="header__image width-100" src="image/flower.jpg" alt="背景画像の花">
      </div>

      <section class="header__container width-100 display-flex__center--sp">
        <div class="header__top width-100 display-flex">
          <a class="header__title font-title link-style" href="#">PORTFOLIO</a>
          <nav class="header__menu display-flex justify-content display-none--sp">
            <ul class="header__menu--list display-flex">
              <li class="header__menu--item display-flex"><a class="header__menu--link link-style" href="#profile">Profile</a></li>
              <li class="header__menu--item display-flex"><a class="header__menu--link link-style" href="#skill">Skill</a>
              </li>
              <li class="header__menu--item display-flex"><a class="header__menu--link link-style" href="#achievements">Achievements</a></li>
              <li class="header__menu--item display-flex"><a class="header__menu--link link-style" href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <h1 class="header__logo font-title">For those who struggle.</h1>
        <button type="button" class="humberger-button--sp" id="humberger-button--sp"><span class="humberger-line--sp"></span></button>
      </section>

      <div class="humberger-menu__container display-none">
        <nav class="humberger-menu height-100 display-flex__vertical">
          <a class="humberger-menu__title font-title link-style" href="#">PORTFOLIO</a>
          <ul class="humberger-menu__list display-flex__vertical">
            <li class="humberger-menu__item"><a class="humberger-menu__link link-style font-title" href="#profile">Profile</a></li>
            <li class="humberger-menu__item"><a class="humberger-menu__link link-style font-title" href="#skill">Skill</a></li>
            <li class="humberger-menu__item"><a class="humberger-menu__link link-style font-title" href="#achievements">Achievements</a></li>
            <li class="humberger-menu__item"><a class="humberger-menu__link link-style font-title" href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
      <button type="button" class="humberger-button" id="humberger-button"><span class="humberger-line"></span></button>
    </header>

    <main>
      <section class="profile main-layout display-flex__center--sp" id="profile">
        <h2 class="profile__title font-title title-size display-flex__center--sp">Profile<span class="jp-text">自己紹介</span></h2>
        <div class="profile__container sentence-style display-flex__center--sp">
          <div class="profile__myself sp-width">
            <p class="profile__name">忍者ぷっちょ<span class="en-text">NINHA PUCCHO</span></p>
            <img class="profile__image" src="image/face.png" alt="製作者の顔">
          </div>
          <p class="profile__text width-33 sp-width">
            東京生まれ、札幌在住。33歳。<br>好きなサイトはシンプルな軽いサイト。<br>表示に時間がかかると「戻る」を押す経験がよくあるので、軽いサイトを作りたい。<br>食べることが好き。高校生の頃から約20kgほど太って、昨年のWeb制作学習に伴ってダイエット開始。<br>2021年4月現在-16kg達成。
          </p>
        </div>
      </section>

      <section class="skill main-layout display-flex__center--sp" id="skill">
        <h2 class="skill__title font-title title-size display-flex__center--sp">Skill<span class="jp-text">言語</span>
        </h2>
        <div class="skill__container sentence-style display-flex__center--sp">
          <div class="skill__box width-33 sp-width">
            <img class="skill__image width-100 height-auto" src="image/profile.png" alt="スキルを持つ男性">
          </div>
          <ul class="skill__list skill-list menu sp-width">
            <li class="skill-list__item">
              <p class="skill__text width-100">HTML</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">CSS</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">Sass</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">JavaScript</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">jQuery</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">PHP</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">WordPress</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">MySQL</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">Apache</p>
            </li>
            <li class="skill-list__item">
              <p class="skill__text width-100">git</p>
            </li>
          </ul>
          <p class="skill__text width-33 sp-width">
            Web制作では改修をしやすいように見やすく、シンプルになるコードを心がけています。SEO対策を意識してサイトを作成します。レスポンシブ対応も可能。<br>jQueryではハンバーガーメニューやアコーディオンメニュー。画像のスライド、モーダル、スムーススクロールなどの基本的なところは全て対応できます。<br>WordPressはインストールからサーバーへのアップロード、簡単なブログサイトの構築などは対応可能。
          </p>
        </div>
      </section>

      <section class="achievements main-layout display-flex__center--sp" id="achievements">
        <h2 class="achievements__title font-title title-size sp-center-text">Achievements<span class="jp-text">実績</span>
        </h2>
        <div class="archievements__container display-flex display-flex__center--sp">
          <figure class="archievements__contents sp-width">
            <img class="achievements__image width-100 height-auto" src="image/chanel.png" alt="実績を置く予定の仮画像">
            <figurecapiton class="achievements__name jp-text">テスト１</figurecapiton>
          </figure>
          <figure class="archievements__contents sp-width">
            <img class="achievements__image width-100 height-auto" src="image/chanel2.png" alt="実績を置く予定の仮画像">
            <figurecapiton class="achievements__name jp-text">テスト２</figurecapiton>
          </figure>
        </div>
      </section>

      <section class="contact main-layout display-flex__center--sp" id="contact">
        <h2 class="contact__title font-title title-size sp-center-text">Contact<span class="jp-text">お問い合わせ</span></h2>
        <?php if (isset($_GET['result']) && $_GET['result']) : // 送信が成功した場合
        ?>
          <p class="jp-text center-text">送信完了いたしました。</p>
        <?php elseif (isset($result) && !$result) : // 送信が失敗した場合 
        ?>
          <p class="jp-text center-text">申し訳ございませんが、送信に失敗しました。</p>
        <?php endif; ?>
        <form class="contact__form sp-width" id="form" method="post">
          <div class="contact__form--container">
            <label class="contact__form--label">お名前</label>
            <input class="concact__form--style" id="contact__form--name" type="text" value="" placeholder="お名前" name="name" required value="<?php echo h($name); ?>">
            <label class="contact__form--label">メールアドレス</label>
            <input class="concact__form--style" id="contact__form--email" type="email" value="" placeholder="メールアドレス" name="email" required value="<?php echo h($email); ?>">
            <label class="contact__form--label">お問い合わせ内容</label>
            <textarea class="concact__form--style" id="contact__form--textarea" placeholder="お問い合わせ内容" name="body" required rows="3"><?php echo h($body); ?></textarea>
            <button class="concact__form--style" id="contact__form--button" type="submit" name="submitted">送信する</button>
          </div>
        </form>
      </section>
    </main>

    <footer class="footer">
      <a class="footer__title font-title link-style" href="#">PORTFOLIO</a>
      <div class="footer__container">
        <ul class="footer__menu--list display-flex display-none--sp">
          <li class="footer__menu--item display-flex"><a class="footer__menu--link link-style" href="#profile">Profile</a></li>
          <li class="footer__menu--item display-flex"><a class="footer__menu--link link-style" href="#skill">Skill</a>
          </li>
          <li class="footer__menu--item display-flex"><a class="footer__menu--link link-style" href="#achievements">Achievements</a>
          </li>
          <li class="footer__menu--item display-flex"><a class="footer__menu--link link-style" href="#contact">Contact</a></li>
        </ul>
        <p class="footer__copyright width-100 height-100 display-flex">© 2021 PUCCHO NINJA</p>
      </div>

      <button type="button" class="scroll-button" id="scroll-button"></button>
    </footer>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
</body>

</html>