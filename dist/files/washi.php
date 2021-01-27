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
  <link rel="stylesheet" href="../assets/css/washi.css">

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
  <title>WASHI</title>
</head>

<body>

  <?php include('../assets/common/header_nav_global.inc') //ヘッダー読み込み ;?>

  <main class="main">
    <div class="washi">

      <!-- メインビジュアルここから -->
      <div class="inner sp-p0">
        <div class="mv">
        </div><!-- /.mv -->
      </div><!-- /.inner-mv -->
      <!-- メインビジュアルここまで -->

      <!-- sec01ここから -->
      <section class="sec01">
        <div class="inner">
          <h2 class="ttl uni">和紙<span class="sub-ttl uni">SERIES</span></h2>
          <p class="catch">紙から出来た「和紙シリーズ」は、<br>軽く、吸水速乾に優れた<br>心地よい着心地。<br>環境負荷の低い新素材で<br>人にも地球にも優しい。</p>
        </div><!-- /.inner -->
      </section><!-- /.sec01 -->
      <!-- sec01ここまで -->

      <!-- sec02ここから -->
      <section class="sec02">
        <div class="inner">
          <div class="img-wrap">
            <figure><img src="../assets/img/washi/sec02-001.png" alt=""></figure>
            <div class="over-txt-wrap">
              <h2 class="sub-ttl">紙の糸が紡ぐ<br>サラサラとした着心地</h2>
              <p class="txt">
                マニラ麻を原料とする和紙のさらっと肌離れのよい爽やかな肌触りと、コットンのふんわりと柔らかく自然な風合いが融合。年中着ていたくなる心地良さです。
              </p>
            </div>
          </div>
          <div class="img-wrap">
            <ul class="list">
              <li class="item">
                <div class="img-txt-wrap">
                  <h2 class="sub-ttl">麻なのになめらか<br>紙なのに水に強い</h2>
                  <p class="txt">
                    優れた通気性と吸汗・速乾性を備えた和紙の繊維は、コットンにも負けない優れた耐久性、さらには天然の保湿・消臭機能をも兼ね備えた高機能素材です。
                  </p>
                </div>
              </li>
              <li class="item">
                <figure><img src="../assets/img/washi/sec02-002.png" alt=""></figure>
              </li>
            </ul>
          </div>
          <div class="img-wrap mb110">
            <ul class="list">
              <li class="item">
                <figure><img src="../assets/img/washi/sec02-003.png" alt=""></figure>
              </li>
              <li class="item">
                <div class="img-txt-wrap">
                  <h2 class="sub-ttl">サスティナブル<br>プログラム</h2>
                  <p class="txt">
                    ミレーは企業活動による環境への負荷を削減していくため、具体的なガイドラインを策定し、常により環境への影響を配慮した、耐用性の高い製品を提供していくための改善を絶えず続けています。
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div><!-- /.inner -->
      </section><!-- /.sec02 -->
      <!-- sec2ここまで -->

      <!-- sec03ここから -->
      <section class="sec03">
        <div class="inner">
          <div class="list-area">
            <h2 class="ttl uni">和紙 series</h2>
            <ul class="list">
              <li class="item col4 sp-col2">
                <figure><img src="../assets/img/washi/sec03-001.png" alt=""></figure>
                <p class="item-name">WASHI+SHIRT</p>
                <p class="price">&yen;9,900</p>
              </li>
              <li class="item col4 sp-col2 sp-br-none">
                <figure><img src="../assets/img/washi/sec03-002.png" alt=""></figure>
                <p class="item-name">WASHI+SHIRT</p>
                <p class="price">&yen;9,900</p>
              </li>
              <li class="item col4 sp-col2">
                <figure><img src="../assets/img/washi/sec03-003.png" alt=""></figure>
                <p class="item-name">WASHI+SHIRT</p>
                <p class="price">&yen;9,900</p>
              </li>
              <li class="item col4 sp-col2 br-none">
                <figure><img src="../assets/img/washi/sec03-004.png" alt=""></figure>
                <p class="item-name">WASHI+SHIRT</p>
                <p class="price">&yen;9,900</p>
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