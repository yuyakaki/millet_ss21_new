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
  <!-- ski2020CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/common/ski2020.css" />
  <!-- ss21 -->
  <!-- <link rel="stylesheet" href="../assets/css/reboot.css"> -->
  <link rel="stylesheet" href="../assets/css/common.css">
  <link rel="stylesheet" href="../assets/css/power-of-dry.css">

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
  <title>POWER OF DRY</title>
</head>

<body>

  <?php include('../assets/common/header_nav_global.inc') //ヘッダー読み込み ;?>

  <main class="main">
    <div class="power-of-dry">

      <!-- メインビジュアルここから -->
      <div class="inner sp-p0">
        <div class="mv">
        </div><!-- /.mv -->
      </div><!-- /.inner-mv -->
      <!-- メインビジュアルここまで -->

      <!-- sec01ここから -->
      <section class="sec01">
        <div class="border-bottom">
          <div class="inner sp-p0">
            <p class="catch">挑戦する時も楽しむ時も<br>全ての瞬間を最高にするために</p>
            <div class="bg-wrap">
              <h2 class="bg-wrap-ttl">ドライのチカラ</h2>
              <p class="bg-wrap-txt">登山などのハードなアクティビティでは、<br>たとえ気温の低い冬でも、<br
                  class="sp">身体から大量の汗をかきます。<br>汗で濡れた衣服のままでいると、<br class="sp">肌は水分の熱伝導の<br class="pc">早さによって冷やされ、<br
                  class="sp">凍えてきます。<br>おまけに強い風を受けると、<br class="sp">気化熱の作用によって<br class="pc">体温は<br
                  class="sp">さらに激しく奪われていきます。</p>
              <p class="bg-wrap-txt mb0">
                この「冷え」は想像以上に<br class="sp">人間の体力を奪っていき、<br>最悪の場合、<br
                  class="sp">低体温症から凍死という<br>命の危険にさらされてしまうことに。<br>このため登山ではできる限り肌を<br
                  class="sp">「ドライ」な状態に保つことが、<br>快適さだけでなく安全のためにも<br class="sp">重要なポイントとなるのです。</p>
            </div>
            <p class="btm-txt uni"> MILLET DRY<br class="sp"> TECNOLOGY</br>
          </div><!-- /.inner -->
        </div>
      </section><!-- /.sec01 -->
      <!-- sec01ここまで -->

      <!-- sec02ここから -->
      <section class="sec02">
        <section class="sec02-1">
          <div class="inner">
            <ul class="pdc-head">
              <li class="item">
                <figure>
                  <img src="../assets/img/power-of-dry/sec02-1-001.png" alt="">
                </figure>
              </li>
              <li class="item txt-box">
                <div class="item-txt-wrap">
                  <h2 class="ttl uni">DRYNAMIC®︎<br>MESH</h2>
                  <p class="sub-ttl">汗による不快感から<br>あなたを解放する</p>
                  <p class="txt">
                    独自開発のかさ高メッシュ構造によって発汗による冷えと不快感を素早く解消し、長時間持続するドライ感を実現した次世代の速乾アンダーウェア。
                  </p>
                </div>
              </li>
            </ul>
            <h4 class="body-ttl">ドライナミックメッシュのレイヤリングの仕組み</h4>
            <ul class="pdc-body">
              <li class="item col3">
                <figure>
                  <img src="../assets/img/power-of-dry/sec02-1-002.png" alt="">
                </figure>
                <p class="txt">
                  1. かさ高メッシュが肌に密着し、毛細管現象で汗を吸い上げ、重ね着した上のレイヤーへと素早く汗を運びます。
                </p>
              </li>
              <li class="item col3">
                <figure>
                  <img src="../assets/img/power-of-dry/sec02-1-003.png" alt="">
                </figure>
                <p class="txt">
                  2. 吸い上げられてきた汗を、上のレイヤーが広げ拡散させます。レイヤーは、吸汗速乾性の高いものを選びます。
                </p>
              </li>
              <li class="item col3">
                <figure>
                  <img src="../assets/img/power-of-dry/sec02-1-004.png" alt="">
                </figure>
                <p class="txt">
                  3. メッシュの大きな網目による高い通気性が効果的に水分を蒸発させ、吸汗速乾レイヤーの乾燥を促します。
                </p>
              </li>
            </ul>
            <a href="" class="link-btn">詳しくはこちらへ</a>
          </div><!-- /.inner -->
        </section><!-- /.sec02-1 -->
        <section class="sec02-2">
          <div class="bg-grey">
            <div class="inner">
              <ul class="pdc-head">
                <li class="item txt-box pl100 pr0">
                  <div class="item-txt-wrap">
                    <h2 class="ttl uni">Typhon5000<br>ST JKT</h2>
                    <p class="sub-ttl">動きやすくて蒸れにくい<br>ストレスフリーな防水ウェア<span
                        class="sub-int">透湿性50,000/m2/24H　耐水圧20,000MM</span></p>
                    <p class="txt">
                      高いレベルの耐水性能に加え、優れた透湿性と動きやすさを兼ね備えた独自素材を採用した、天候を選ばず幅広いシーンで長時間快適な着心地を実現する全天候型レインウェア。
                    </p>
                  </div>
                </li>
                <li class="item">
                  <figure>
                    <img src="../assets/img/power-of-dry/sec02-2-001.png" alt="">
                  </figure>
                </li>
              </ul>
              <ul class="pdc-body">
                <li class="item">
                  <figure>
                    <img src="../assets/img/power-of-dry/sec02-2-002.png" alt="">
                  </figure>
                  <p class="sub-ttl">登山に十分な防水性</p>
                  <p class="txt">
                    登山に必要とされる耐水圧20,000mm以上という十分な耐水性を備え、さらに表面に施された耐久撥水加工によって、大雨の中でも安全に行動することができます。
                  </p>
                </li>
                <li class="item">
                  <figure>
                    <img src="../assets/img/power-of-dry/sec02-2-003.png" alt="">
                  </figure>
                  <p class="sub-ttl">高いレベルの<br class="sp">蒸れにくさ</p>
                  <p class="txt">
                    一般的なレインウェアをはるかに上回る50,000g/m2/24hの透湿性を実現し、湿気の多い日本の春夏シーズンでも蒸れにくく、快適な行動が可能です。
                  </p>
                </li>
              </ul>
              <a href="" class="link-btn">インナー製品一覧へ</a>
            </div><!-- /.inner -->
          </div><!-- /.bg-grey -->
        </section><!-- /.sec02-2 -->
        <section class="sec02-3">
          <div class="inner">
            <ul class="pdc-head">
              <li class="item">
                <figure>
                  <img src="../assets/img/power-of-dry/sec02-3-001.png" alt="">
                </figure>
              </li>
              <li class="item txt-box">
                <div class="item-txt-wrap">
                  <h2 class="ttl uni">BREATHER<br>LIGHT JKT</h2>
                  <p class="sub-ttl">超撥水軽量の<br>ウィンドシェルジャケット</p>
                  <p class="txt">
                    繊維自体に施された撥水加工により優れた撥水性能を実現した、軽くて動きやすいフード付きウィンドシェルジャケット。しかも洗濯を繰り返しても撥水力が長持ちします。
                  </p>
                </div>
              </li>
            </ul>
            <ul class="pdc-body">
              <li class="item">
                <p class="sub-ttl">優れた撥水性</p>
                <p class="txt">
                  軽量でストレッチ性を備えた超撥水素材「BREATHER（ブリーザ）」は、シリコン由来の強力な撥水成分を、生地表面ではなく繊維自体の奥深くまで定着させる新技術により、通気性を完全にブロックすることなく、水滴が生地に残留するスペースを極限まで抑えることに成功。持続力のある強力な撥水性能を実現しました。
                  風や水滴を防ぎながら、活動時の蒸れも軽減してくれる、一年を通して使い勝手のよい一着です。
                </p>
              </li>
              <li class="item">
                <figure>
                  <img src="../assets/img/power-of-dry/sec02-3-002.png" alt="">
                </figure>
              </li>
            </ul>
            <a href="" class="link-btn">インナー製品一覧へ</a>
          </div><!-- /.inner -->
        </section><!-- /.sec02-3 -->
        <section class="sec02-4">
          <div class="bg-grey">
            <div class="inner">
              <ul class="pdc-head">
                <li class="item">
                  <figure>
                    <img src="../assets/img/power-of-dry/sec02-4-001.png" alt="">
                  </figure>
                </li>
                <li class="item txt-box">
                  <div class="item-txt-wrap">
                    <h2 class="ttl uni">SaAsfee30+5</h2>
                    <p class="sub-ttl">100年の技術を継承する<br>最高峰の背負い心地</p>
                    <p class="txt">
                      身体と一体化するような卓越したフィット感と、肌と接する部分をドライに保つ快適性を実現した、ハイキングから本格縦走まで幅広く対応するミレー不動のロングセラー。
                    </p>
                  </div>
                </li>
              </ul>
              <ul class="pdc-body">
                <li class="item">
                  <p class="sub-ttl">体に接する部分をドライに<span class="sub-int">水を逃すフィルターフォームというクッション材</span></p>
                  <p class="txt">
                    サースフェーの背面クッション材には、ベッドマットレスやヘッドフォンパッド等にも使用される、立体網目構造をもったフィルターフォームを採用。一見反発が高くハリがあるように感じられるかもしれませんが、実は体へのストレスを軽減する適度な当たり心地と、強い負荷にもヘタらない反発力、非常に優れた通気性と水はけのよさ、さらには雑菌の繁殖も抑える性質をも兼ね備えた、多機能かつ高い次元でバランスのとれた高品質クッション材です。その快適性は長時間の強い荷重や、汗や雨、強風にさらされるフィールドで最大限に発揮されます。
                  </p>
                </li>
                <li class="item">
                  <figure>
                    <img src="../assets/img/power-of-dry/sec02-4-002.png" alt="">
                  </figure>
                </li>
              </ul>
              <a href="" class="link-btn">インナー製品一覧へ</a>
            </div><!-- /.inner -->
          </div><!-- /.bg-grey -->
        </section><!-- /.sec02-4 -->
      </section><!-- /.sec02 -->
      <!-- sec2ここまで -->

      <!-- sec03ここから -->
      <section class="sec03">
        <div class="inner">
          <div class="bg-wrap">
            <figure>
              <img src="../assets/img/power-of-dry/sec03-001.png" alt="">
            </figure>
            <a href="#" class="more-btn uni">VIEW MORE</a>
          </div><!-- /.bg-wrap -->
        </div><!-- /.inner -->
      </section><!-- /.sec03 -->
      <!-- sec3ここまで -->

    </div><!-- /.power-of-dry -->
  </main>
  <!--- /.main -->

  <?php include('../assets/common/footer_nav_global.inc') //フッター読み込み ;?>

</body>

</html>