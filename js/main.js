$(function () {
  $(".js-header-btn").on("click", function () {
    $(".js-gnav,.js-header-bar").toggleClass("open");
  });
});

$(function () {
  var h = $(window).height();
  $(".js-loader-bg,.js-loader-fade").height(h).css("display", "block"); //ローディング画像を表示
});
$(function () {
  // 読み込み完了したら実行する
  $(".js-loader-fade").delay(600).fadeOut(300); // ローディングをフェードアウト
  $(".js-loader-bg").delay(900).fadeOut(800); // 背景色をフェードアウト
});