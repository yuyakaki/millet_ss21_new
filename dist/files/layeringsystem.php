<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include('common/header_meta_global.inc') //メニュー読み込み ;?>

  <link rel="stylesheet" type="text/css" href="common/foundation.css" />
  <link rel="stylesheet" type="text/css" href="common/modaal.min.css" />
  <link rel="stylesheet" type="text/css" href="common/16bs.css" />
  <link rel="stylesheet" type="text/css" href="https://www.millet.jp/brand/common/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="common/base.css" />
  <link rel="stylesheet" type="text/css" href="common/project.css" />
  <link rel="stylesheet" type="text/css" href="common/fw.css" />
  <!-- common -->
  <link rel="stylesheet" type="text/css" href="common/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="common/hosokawa.css" />
  <!-- リセット用css -->
  <link rel="stylesheet" type="text/css" href="common/style.css">
  <link rel="stylesheet" type="text/css" href="common/reset.css" />
  <!-- ski2020CSS -->
  <link rel="stylesheet" type="text/css" href="common/ski2020.css" />
  <!-- ss21 -->
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/layering-system.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- common -->
  <script src="common/bootstrap.min.js"></script>
  <script src="common/common.js"></script>
  <script src="common/modaal.min.js"></script>
  <script src="common/modal.js"></script>
  <!-- tabSwitch -->
  <script src="js/tabSwitch.js"></script>

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
  <title>LAYERING SYSTEM</title>
</head>

<body>

  <?php include('common/header_nav_global.inc') //ヘッダー読み込み ;?>

<main class="main">

  <div class="layeringSystem">

    <div class="inner sp-p0">

      <!-- mv -->
      <div class="mv">

        <!-- mvTxt -->
        <div class="mvTxt">
          <h1 class="mvTxt-ttl uni">LAYERING<br>SYSTEM</h1>
          <p class="mvTxt-subTtl _axis">ドライのチカラを<br class="sp">最大限に引き出す<br>レイヤリングシステム</p>
        </div><!-- mvTxt -->

      </div><!-- /mv -->

    </div>

    <!-- gnav -->
    <nav class="gnav">

      <div class="inner sp-p0">

        <!-- gnavList -->
        <ul class="gnavList">
          <li class="gnavList-item uni js-active">ALPINE<span class="_axis">アルパイン</span></li>
          <li class="gnavList-item uni">TREKKING<span class="_axis">トレッキング</span></li>
          <li class="gnavList-item uni">HIKING<span class="_axis">ハイキング</span></li>
          <li class="gnavList-item uni">EXPLORING<span class="_axis">旅</span></li>
        </ul><!-- gnavList -->

      </div>

    </nav><!-- /gnav -->

    <div class="panel _alpine js-show">
      <!-- sec01 -->
      <section class="sec01">

        <div class="inner sp-p0">

          <!-- chead -->
          <div class="chead">
            <p class="chead-topTxt uni">MILLET SS21<br>LAYERING SYSTEM</p>
            <p class="chead-btmTxt _axis">アルパイン<span class="uni">ALPINE</span></p>
          </div>

        </div>

      </section><!-- sec01 -->

      <!-- sec02 -->
      <section class="sec02">

        <div class="inner">

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">1</span>アンダーウェア<span>肌からの汗を素早く吸い上げる<br
                  class="sp">次世代のアンダーウェア</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_023.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC MESH<br>NS CREW</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_024.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC MESH<br>BOXER</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_025.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD DRYNAMIC MESH<br>TANK TOP</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_004.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD DRYNAMIC MESH<br>SHORT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">2</span>ベースレイヤー<span>動きやすく透湿性抜群のベースレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_026.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TRILOGY DELTA ORI TS<br>SS M</p><a href="#"
                      class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_027.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TRILOGY FRAGMENT ZIP<br>SS M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_028.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">MORPHO ZIP LS<br>M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni  _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_008.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD KUHTAI WOOL ZIP<br>LS</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">3</span>サーマルレイヤー<span>蒸れを防いで暖かいサーマルレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_029.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TRILOGY LIGHTGRID<br>HOODIE M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_030.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">K LIGHTGRID JKT<br>M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_031.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">K LIGHTGRID JKT<br>W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->
          <!-- pdc -->
          <article class="pdc mb0">
            <h2 class="pdc-ttl"><span class="pdcNum uni">4</span>シェル<span>雨風しのぎながらゴワゴワしない圧倒的動きやすさを誇るシェル。</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_032.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TRILOGY V ICON DUAL GTX<br>PRO J M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                    <!--
                -->
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_033.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TRILOGY GTX PRO<br>PANT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_034.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON 50000<br>ST TREK PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_035.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON TOUGH ST<br>EXPLORE PANT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_019.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_020.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

        </div>

      </section><!-- sec02 -->

    </div>

    <div class="panel _trekking">
      <!-- sec01 -->
      <section class="sec01">

        <div class="inner sp-p0">

          <!-- chead -->
          <div class="chead">
            <p class="chead-topTxt uni">MILLET SS21<br>LAYERING SYSTEM</p>
            <p class="chead-btmTxt _axis">トレッキング<span class="uni">TREKKING</span></p>
          </div>

        </div>

      </section><!-- sec01 -->

      <!-- sec02 -->
      <section class="sec02">

        <div class="inner">

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">1</span>アンダーウェア<span>肌からの汗を素早く吸い上げる<br
                  class="sp">次世代のアンダーウェア</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_001.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC MESH<br>SS</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_002.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC MESH<br>BOXER</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_003.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD DRYNAMIC MESH<br>SS</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_004.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD DRYNAMIC MESH<br>SHORT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">2</span>ベースレイヤー<span>動きやすく透湿性抜群のベースレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_005.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">KUHTAI WOOL<br>ZIP LS</p><a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_006.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">HEATHER MESH CREW<br>SS M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_007.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">ARPI SHIRT LS<br>J M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni  _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_008.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD KUHTAI WOOL ZIP<br>LS</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_009.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">HEATHER MESH CREW<br>LS W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_010.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">ARPI SHIRT<br>LS J W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">3</span>サーマルレイヤー<span>蒸れを防いで暖かいサーマルレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_011.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LOKKA HOODIE<br>M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_012.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LOKKA JKT<br>M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_013.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LOKKA HOODIE<br>W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_014.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LOKKA JKT<br>W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->
          <!-- pdc -->
          <article class="pdc mb0">
            <h2 class="pdc-ttl"><span class="pdcNum uni">4</span>シェル<span>雨風しのぎながらゴワゴワしない圧倒的動きやすさを誇るシェル。</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_015.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON 50000<br>ST JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                    <!--
                -->
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_016.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON 50000<br>ST PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_017.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON 50000<br>ST TREK PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_018.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">BREATHER WILDER<br>LIGHT JKT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_019.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_020.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_021.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST TREK PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_022.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">BREATHER WILDER<br>LIGHT JKT W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

        </div>

      </section><!-- sec02 -->

    </div>

    <div class="panel _hiking">
      <!-- sec01 -->
      <section class="sec01">

        <div class="inner sp-p0">

          <!-- chead -->
          <div class="chead">
            <p class="chead-topTxt uni">MILLET SS21<br>LAYERING SYSTEM</p>
            <p class="chead-btmTxt _axis">ハイキング<span class="uni">HIKING</span></p>
          </div>

        </div>

      </section><!-- sec01 -->

      <!-- sec02 -->
      <section class="sec02">

        <div class="inner">

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">1</span>アンダーウェア<span>肌からの汗を素早く吸い上げる次世代のアンダーウェア</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC THROUGH<br>V SS M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC THROUGH<br>SHORT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LDRYNAMIC THROUGH<br>U SS W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC THROUGH<br>SHORT W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">2</span>ベースレイヤー<span>動きやすく透湿性抜群のベースレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_036.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ CREW<br>LS M</p><a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_037.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ SHIRT<br>SS M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni  _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_038.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ CREW<br>LS W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_039.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ SHIRT<br>SS W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">3</span>サーマルレイヤー<span>蒸れを防いで暖かいサーマルレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_012.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LLOKKA JKT<br>M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_014.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LOKKA JKT<br>W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->
          <!-- pdc -->
          <article class="pdc mb0">
            <h2 class="pdc-ttl"><span class="pdcNum uni">4</span>シェル<span>雨風しのぎながらゴワゴワしない圧倒的動きやすさを誇るシェル。</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_015.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON 50000<br>ST JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                    <!--
                -->
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_040.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON 50000<br>ST TREK PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_041.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">BIONNASSAY STRETCH<br>JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_019.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_042.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST TREK PANT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_043.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">BREATHER WILDER<br>LIGHT JKT W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_044.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD BIONNASSAY<br>STRETCH JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

        </div>

      </section><!-- sec02 -->

    </div>

    <div class="panel _exploring">
      <!-- sec01 -->
      <section class="sec01">

        <div class="inner sp-p0">

          <!-- chead -->
          <div class="chead">
            <p class="chead-topTxt uni">MILLET SS21<br>LAYERING SYSTEM</p>
            <p class="chead-btmTxt _axis">旅<span class="uni">EXPLORING</span></p>
          </div>

        </div>

      </section><!-- sec01 -->

      <!-- sec02 -->
      <section class="sec02">

        <div class="inner">

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">1</span>アンダーウェア<span>肌からの汗を素早く吸い上げる次世代のアンダーウェア</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC THROUGH<br>V NS M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC THROUGH<br>SHORT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC THROUGH<br>TANK W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_ques.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">DRYNAMIC THROUGH<br>SHORT W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">2</span>ベースレイヤー<span>動きやすく透湿性抜群のベースレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_036.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ CREW<br>LS M</p><a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_006.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">HEATHER MESH CREW<br>SS M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_037.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ SHIRT<br>SS M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_007.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">ARPI SHIRT<br>LS J M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni  _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_038.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ CREW<br>LS W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_009.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">HEATHER MESH CREW<br>LS W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_039.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">WASHI+ SHIRT<br>SS W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_010.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">ARPI SHIRT<br>LS J W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

          <!-- pdc -->
          <article class="pdc">
            <h2 class="pdc-ttl"><span class="pdcNum uni">3</span>サーマルレイヤー<span>蒸れを防いで暖かいサーマルレイヤー</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_012.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LOKKA JKT<br>M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_014.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LOKKA JKT<br>W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->
          <!-- pdc -->
          <article class="pdc mb0">
            <h2 class="pdc-ttl"><span class="pdcNum uni">4</span>シェル<span>雨風しのぎながらゴワゴワしない圧倒的動きやすさを誇るシェル。</span></h2>
            <ul class="pdc-body">

              <!-- pdcBox -->
              <li class="pdcBox _bdr">
                <h3 class="pdcBox-ttl uni">MEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_045.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON TOUGH<br>ST FIELD JKT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                    <!--
                -->
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_046.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON TOUGH<br>ST COAT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_047.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">BREATHER WILDER<br>LIGHT JKT M</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

              <!-- pdcBox -->
              <li class="pdcBox">
                <h3 class="pdcBox-ttl uni _women">WOMEN</h3>
                <ul class="pdcBox-list">

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_048.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">LD TYPHON 50000<br>ST JKT</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_049.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">TYPHON TOUGH<br>ST COAT W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                  <!-- pdcItem -->
                  <li class="pdcItem">
                    <figure><img src="img/layeringsystem/pic_pdcItem_043.png" alt=""></figure>
                    <p class="pdcItem-ttl uni">BREATHER LIGHT<br>COAT W</p>
                    <a href="#" class="detailBtn _axis">商品詳細へ</a>
                  </li><!-- pdcItem -->

                </ul>
              </li><!-- pdcBox -->

            </ul>
          </article><!-- pdc -->

        </div>

      </section><!-- sec02 -->

    </div>

  </div>
</main>
<!-- footer読み込み -->
<?php include('../assets/common/footer_nav_global.inc') //フッター読み込み ;?>