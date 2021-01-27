<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include('../assets/common/header_meta_global.inc') //メニュー読み込み ;?>

  <link rel="stylesheet" type="text/css" href="../assets/common/foundation.css" />

  <link rel="stylesheet" type="text/css" href="../assets/common/modaal.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/common/16bs.css" />
  <link rel="stylesheet" type="text/css" href="https://www.millet.jp/brand/common/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../assets/common/base.css" />
  <link rel="stylesheet" type="text/css" href="../assets/common/project.css" />
  <link rel="stylesheet" type="text/css" href="../assets/common/fw.css" />
  <!-- common -->
  <link rel="stylesheet" type="text/css" href="../assets/common/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../assets/common/hosokawa.css" />
  <!-- リセット用css -->
  <link rel="stylesheet" type="text/css" href="../assets/common/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/common/reset.css" />
  <!-- ss21 -->
  <!-- <link rel="stylesheet" href="../assets/css/reboot.css"> -->
  <link rel="stylesheet" href="../assets/css/common.css">
  <link rel="stylesheet" href="../assets/css/power-of-smart.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- common -->
  <script src="../assets/common/bootstrap.min.js"></script>
  <script src="../assets/common/common.js"></script>
  <script src="../assets/common/modaal.min.js"></script>
  <script src="../assets/common/modal.js"></script>



  <?php 
    /**
    * Get the HTTP(S) URL of the current page.
    *
    * @param $server The $_SERVER superglobals array.
    * @return string The URL.
    */
    function currentUrl($server){
      $http = 'http';
      if(isset($server['HTTPS'])){
        $http = 'https';
      }
      $host = $server['HTTP_HOST'];
      $requestUri = $server['REQUEST_URI'];
      return $http . '://' . htmlentities($host) . '/' . htmlentities($requestUri);
    }
    $url = currentUrl($_SERVER);
  ?>
  <title>POWER OF SMART</title>
</head>

<body>

  <?php include('../assets/common/header_nav_global.inc') //ヘッダー読み込み ;?>

  <main class="main">
    <div class="power-of-smart">

      <!-- メインビジュアルここから -->
      <div class="inner sp-p0">
        <div class="mv">
        </div><!-- /.mv -->
      </div><!-- /.inner-mv -->
      <!-- メインビジュアルここまで -->

      <!-- sec01ここから -->
      <section class="sec01">
        <div class="inner">
          <h2 class="catch">高機能とデザインで<br>暮らしをもっとスマートに</h2>
        </div><!-- /.inner -->
      </section><!-- /.sec01 -->
      <!-- sec01ここまで -->

      <!-- sec02ここから -->
      <section class="sec02">
        <section class="sec02-1 bg-grey">
          <div class="inner sp-p0">
            <div class="head">
              <h2 class="ttl uni uni">EXP</h2>
              <p class="int">旅に出たくなる<br>高機能スマートバッグ。</p>
            </div>
            <div class="img-wrap">
              <figure><img src="../assets/img/power-of-smart/sec02-1-002.png" alt=""></figure>
              <div class="dl-wrap">
                <dl>
                  <dt>EXP35 -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd><br class="sp">
                  <dt><span class="pc">&nbsp;</span>TYPHON TOUGH ST FIELD JKT -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="img-wrap mb120-sp50">
            <div class="inner">
              <figure><img src="../assets/img/power-of-smart/sec02-1-003.png" alt=""></figure>
              <div class="img-int-box">
                <p class="img-int">
                  カメラやPC・ガジェットも、レインジャケットやトレッキングシューズもこれ1つに詰め込んで。ドアを開けてから未知の絶景との出会いまで、街とフィールドとをシームレスに行き来するアクティブな旅に欠かせない相棒です。
                </p>
              </div>
            </div>
          </div>

          <div class="img-wrap">
            <div class="inner sp-p0">
              <figure class="bg-left-over"><img src="../assets/img/power-of-smart/sec02-1-004.png" alt=""></figure>
              <div class="dl-wrap">
                <dl>
                  <dt>EXP35 -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd><br class="sp">
                  <dt><span class="pc">&nbsp;</span>BREATHER WILDER LIGHT JKT -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="img-wrap mb0">
            <div class="inner667">
              <figure><img src="../assets/img/power-of-smart/sec02-1-005.png" alt=""></figure>
            </div>
          </div>
          <div class="btn-blc">
            <h2 class="ttl uni">EXP SERIES</h2>
            <a href="#" class="more-btn">more info</a>
          </div>
        </section><!-- /.sec02-1 -->
        <section class="sec02-2">
          <div class="inner sp-p0">
            <div class="head">
              <h2 class="ttl uni">Washi</h2>
              <p class="int">サラッと肌に心地良い<br>地球に優しい新素材。</p>
            </div>
            <div class="img-wrap">
              <figure><img src="../assets/img/power-of-smart/sec02-2-002.png" alt=""></figure>
              <div class="dl-wrap">
                <dl>
                  <dt>MEN : WASHI SHIRT SS -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                  <dt>KULA30 -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd><br>
                  <dt>WOMEN : WASHI CREW SS -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                  <dt>SUIU18 -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd><br class="sp">
                  <dt>BREATHER LIGHT COAT -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                </dl>
              </div>
            </div>
            <div class="img-wrap mb120-sp50">
              <div class="inner">
                <figure class="bg-left-over"><img src="../assets/img/power-of-smart/sec02-2-003.png" alt=""></figure>
                <p class="img-int">
                  ふんわりと柔らかくサラッとした快適な着心地、そしてシワ感のある風合いも魅力の和紙シャツ。旅行に、休日に、そしてデイリーにとどんなシーンにもマッチして、太陽の日差しの下、爽やかな印象と快適さを身にまとうことができます。
                </p>
              </div>
            </div>
            <div class="img-wrap">
              <div class="inner sp-p0">
                <figure class="bg-right-over"><img src="../assets/img/power-of-smart/sec02-2-004.png" alt=""></figure>
                <div class="dl-wrap">
                  <dl>
                    <dt>MEN : WASHI SHIRT SS -&nbsp;</dt>
                    <dd><a href="#">BUY</a></dd><br>
                    <dt>WOMEN : WASHI SHIRT SS -&nbsp;</dt>
                    <dd><a href="#">BUY</a></dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="img-wrap mb0">
              <div class="inner667">
                <figure><img src="../assets/img/power-of-smart/sec02-2-005.png" alt=""></figure>
              </div>
            </div>
            <div class="btn-blc">
              <h2 class="ttl uni">WASHI SERIES</h2>
              <a href="#" class="more-btn">more info</a>
            </div>

          </div><!-- /.inner -->
        </section><!-- /.sec02-2 -->
        <section class="sec02-3 bg-grey">
          <div class="inner">
            <div class="head">
              <h2 class="ttl uni">SUIU</h2>
              <p class="int">このバッグなら<br>雨はわたしの敵じゃない。</p>
            </div>
            <div class="img-wrap">
              <figure><img src="../assets/img/power-of-smart/sec02-3-002.png" alt=""></figure>
              <div class="dl-wrap pr0">
                <dl>
                  <dt>SUIU18 -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                  <dt><span class="pc">&nbsp;</span>BREATHER LIGHT COAT -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                </dl>
              </div>
            </div>
            <div class="img-wrap mb120-sp50">
              <figure><img src="../assets/img/power-of-smart/sec02-3-003.png" alt=""></figure>
              <p class="img-int">
                シンプルで洗練された、それでいて飽きのこないデザイン。そのうえ軽くて丈夫、雨にも強くて使いやすい。SUIUは街ブラも通勤も、休日の旅行も、好奇心の赴くままに楽しむ自由な女性の思いにしっかりと応えてくれます。
              </p>
            </div>
          </div>
          <div class="img-wrap">
            <div class="inner sp-p0">
              <figure class="bg-left-over"><img src="../assets/img/power-of-smart/sec02-3-004.png" alt=""></figure>
              <div class="dl-wrap">
                <dl>
                  <dt>SUIU18 -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                  <dt><span class="pc">&nbsp;</span>WASHI SHIRT SS -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd><br class="sp">
                  <dt><span class="pc">&nbsp;</span>BREATHER LIGHT COAT -&nbsp;</dt>
                  <dd><a href="#">BUY</a></dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="img-wrap mb0">
            <div class="inner667">
              <figure><img src="../assets/img/power-of-smart/sec02-3-005.png" alt=""></figure>
            </div>
          </div>
          <div class="btn-blc">
            <h2 class="ttl uni">SUIU SERIES</h2>
            <a href="#" class="more-btn">more info</a>
            <div class="mb249 pc"></div>
            <div class="mb71 sp"></div>
          </div>

    </div><!-- /.inner -->
    </section><!-- /.sec02-3 -->

    </section><!-- /.sec02 -->
    <!-- sec2ここまで -->

    <!-- sec03ここから -->
    <section class="sec03 bg-grey sp-white">
      <div class="inner">
        <div class="btm-det-box">
          <h2 class="ttl uni">各アイテムの詳細はこちら</h2>
          <ul class="list">
            <li class="item col3">
              <figure><img src="../assets/img/power-of-smart/sec03-001.png" alt=""></figure>
              <p class="item-ttl uni">EXP SERIES</p>
            </li>
            <li class="item col3">
              <figure><img src="../assets/img/power-of-smart/sec03-002.png" alt=""></figure>
              <p class="item-ttl uni">WASHI SERIES</p>
            </li>
            <li class="item col3">
              <figure><img src="../assets/img/power-of-smart/sec03-003.png" alt=""></figure>
              <p class="item-ttl uni">SUIU SERIES</p>
            </li>
          </ul>
        </div>
      </div><!-- /.inner -->
    </section><!-- /.sec03 -->
    <!-- sec3ここまで -->

    </div><!-- /.power-of-dry -->
  </main>
  <!--- /.main -->

  <?php include('../assets/common/footer_nav_global.inc') //フッター読み込み ;?>

</body>

</html>