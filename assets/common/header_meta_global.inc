
<link rel="shortcut icon" href="/brand/common/favicon-ml.png">
<link rel="icon" sizes="192x192" href="/brand/common/favicon-ml.png">
    
<!-- <link rel="stylesheet" type="text/css" href="/brand/common/bootstrap.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="/brand/common/hosokawa.css" /> -->

<script src="https://www.millet.jp/brand/common/bootstrap.min.js"></script>
<script src="https://www.millet.jp/contents/packages/customizedPC/js/scripts_hk.js"></script>
<script src="https://www.millet.jp/brand/common/jquery-3.3.1.min.js"></script>

 <script>
    $(function() {
      var box = $("#rollStopRespNav");
      var boxTop = box.offset().top;
      $(window).scroll(function() {
        if ($(window).scrollTop() >= boxTop) {
          box.addClass("navbar-fixed-top");
        } else {
          box.removeClass("navbar-fixed-top");
        }
      });
    });
  </script>






<link rel="stylesheet" href="https://milletonline.itembox.design/system/fs_style.css">
<link rel="stylesheet" href="https://milletonline.itembox.design/generate/theme4/fs_original.css">
  

<link rel="stylesheet" href="https://milletonline.itembox.design/item/asset/css/mf_style_common.css"/>
<link rel="stylesheet" href="https://milletonline.itembox.design/item/asset/css/mf_style_hf.css"/>
<link rel="stylesheet" href="https://milletonline.itembox.design/item/asset/css/jquery-ui.min.css"/>
<link rel="stylesheet" href="https://milletonline.itembox.design/item/asset/css/jquery-ui.structure.min.css"/>
<link rel="stylesheet" href="https://milletonline.itembox.design/item/asset/css/jquery-ui.theme.min.css"/>
<link rel="stylesheet" href="https://milletonline.itembox.design/item/asset/css/slick.css"/>
<link rel="stylesheet" href="https://milletonline.itembox.design/item/asset/css/popup_style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"/>
<script src="https://milletonline.itembox.design/item/asset/js/jquery-3.4.1.min.js"></script>
<script src="https://milletonline.itembox.design/item/asset/js/jquery-ui.min.js"></script>
<script src="https://milletonline.itembox.design/item/asset/js/slick.min.js"></script>
<script src="https://milletonline.itembox.design/item/asset/js/popup_func.js"></script>





<!-- 共通JS↓↓ -->
<script>

  $(function(){


    /* SPハンバーガーメニュー開閉
    ----------------------------------------------------------------*/
    $(".js-sp-menu-click").click(function(){
      if ($(".head-sp-hamburger").hasClass("is-active")){
        $(".head-sp-hamburger").removeClass("is-active");
        $("html").css("overflow", "auto");
      } else {
        $(".head-sp-hamburger").addClass("is-active");
        $("html").css("overflow", "hidden");
      }
    });

    /* SPリストメニュー開閉
    ----------------------------------------------------------------*/
    $(".js-sp-listitem-click").click(function(){
      if ($(this).parent("li").hasClass("open")){
        $(this).parent("li").removeClass("open");
        $(this).parent("li").addClass("close");
      } else {
        $(this).parent("li").removeClass("close");
        $(this).parent("li").addClass("open");
      }
      return false;
    });

  });

  /* ウィンドウサイズによるmainの上margin調整
  ----------------------------------------------------------------*/
  $(window).on('load resize', function(){
    var w = $(window).outerWidth();
    var size_m = 980;
    var size_s = 768;
    if (w < size_s) {
      $("main").css("margin-top", $(".head-news-parts").outerHeight() + 20 + "px");
    } else if (w < size_m) {
      var sp_head_height = $(".head-news-parts").outerHeight() + $(".head-sp").outerHeight();
      $("main").css("margin-top", sp_head_height + 20 + "px");
      $("#header .head-sp").css("top", $(".head-news-parts").outerHeight() + "px");
    } else {
      $("main").css("margin-top", "0px");
      $("#header .head-sp").css("top", $(".head-news-parts").outerHeight() + "px");
    }
  });

</script>
<!-- 共通JS↑↑ -->


<style>


#header .head-sp { position:relative;}


@font-face {
  font-family: Knockout-28JuniorFeathrwt;
  src: url();
  src: url(?#iefix) format("embedded-opentype"), url() format("woff"), url() format("truetype");
  font-weight: 400;
  font-style: normal
}
@font-face {
  font-family: KnockoutHTF26JuniorFlyweight;
  src: url();
  src: url(?#iefix) format("embedded-opentype"), url() format("woff"), url() format("truetype");
  font-weight: 400;
  font-style: normal
}
</style>
