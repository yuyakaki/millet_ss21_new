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
  <link rel="stylesheet" href="../assets/css/drynamic-through.css">

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
  <title>DRYNAMIC THROUGH</title>
</head>

<body>

  <?php include('../assets/common/header_nav_global.inc') //ヘッダー読み込み ;?>

  <main class="main">
    <div class="drynamic-through">

      <!-- メインビジュアルここから -->
      <div class="inner sp-p0">
        <div class="mv">
        </div><!-- /.mv -->
      </div><!-- /.inner-mv -->
      <!-- メインビジュアルここまで -->

      <!-- sec01ここから -->
      <section class="sec01">
        <div class="inner sp-p0">
          <h2 class="ttl uni">DRYNAMIC<span class="tm sp">TM</span><span class="ssp"><span
                class="r-mark">®︎&nbsp;</span>THROUGH</span></h2>
          <p class="catch">
            高い通気性と速乾性を誇る<br>着心地抜群の<br>汗処理アンダーウェア。<br>ライトなアウトドアから<br
              class="sp">普段の生活でも使える<br>ニュートラルなデザインで<br>幅広いシーンで活躍する一枚。</p>
        </div><!-- /.inner -->
      </section><!-- /.sec01 -->
      <!-- sec01ここまで -->

      <!-- sec02ここから -->
      <section class="sec02">
        <div class="img-wrap">
          <div class="inner sp-p0">
            <figure><img src="../assets/img/drynamic-through/sec02-001.png" alt=""></figure>
          </div>
        </div>
        <div class="img-wrap">
          <div class="inner">
            <ul class="list">
              <li class="item">
                <div class="img-txt-wrap">
                  <h2 class="sub-ttl">優れた通気・速乾性を<br>可能にするメッシュ構造</h2>
                  <p class="txt">
                    大きめながら目立ちにくい外観の網目を備えたメッシュ構造は空気の流れを妨げず、運動時の身体の熱を素早く発散。
                  </p>
                </div>
              </li>
              <li class="item">
                <figure><img src="../assets/img/drynamic-through/sec02-002.png" alt=""></figure>
              </li>
            </ul>
          </div>
        </div>
        <div class="img-wrap">
          <div class="inner">
            <ul class="list">
              <li class="item">
                <figure><img src="../assets/img/drynamic-through/sec02-003.png" alt=""></figure>
              </li>
              <li class="item">
                <div class="img-txt-wrap">
                  <h2 class="sub-ttl">発汗時のベタつき感を<br>軽減する凹凸</h2>
                  <p class="txt">
                    生地裏面の凹凸による立体構造が発汗時の肌への張り付きや汗冷えを軽減。縫製には消臭糸を使用し、不快なニオイも抑えます。
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="img-wrap mb121">
          <div class="inner">
            <ul class="list">
              <li class="item">
                <div class="img-txt-wrap">
                  <h2 class="sub-ttl">締めつけ過ぎない<br>適度なストレッチ性</h2>
                  <p class="txt">
                    締めつけすぎず緩すぎない、適度なストレッチ性と立体的なデザインによって、快適なフィット感と動きやすさを両立しました。
                  </p>
                </div>
              </li>
              <li class="item">
                <figure><img src="../assets/img/drynamic-through/sec02-004.png" alt=""></figure>
              </li>
            </ul>
          </div>
        </div>
      </section><!-- /.sec02 -->
      <!-- sec2ここまで -->

      <!-- sec03ここから -->
      <section class="sec03">
        <div class="inner">
          <div class="list-area">
            <h2 class="ttl uni">DRYNAMIC THROUGH SERIES</h2>
            <div class="list-wrap">
              <h3 class="list-head uni">MEN</h3>
              <ul class="list">
                <li class="item col4 sp-col2">
                  <figure><img src="../assets/img/drynamic-through/sec03-001.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
                <li class="item col4 sp-col2 sp-br-none">
                  <figure><img src="../assets/img/drynamic-through/sec03-002.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
                <li class="item col4 sp-col2">
                  <figure><img src="../assets/img/drynamic-through/sec03-003.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
                <li class="item col4 sp-col2 br-none">
                  <figure><img src="../assets/img/drynamic-through/sec03-004.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
              </ul>
            </div>
            <div class="list-wrap">
              <h3 class="list-head uni">WOMEN</h3>
              <ul class="list">
                <li class="item col4 sp-col2">
                  <figure><img src="../assets/img/drynamic-through/sec03-001.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
                <li class="item col4 sp-col2 sp-br-none">
                  <figure><img src="../assets/img/drynamic-through/sec03-002.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
                <li class="item col4 sp-col2">
                  <figure><img src="../assets/img/drynamic-through/sec03-003.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
                <li class="item col4 sp-col2 br-none">
                  <figure><img src="../assets/img/drynamic-through/sec03-004.png" alt=""></figure>
                  <p class="item-name">DRYNAMIC THROUGH<br>V SS</p>
                  <p class="price">&yen;9,900</p>
                </li>
              </ul>
            </div>
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