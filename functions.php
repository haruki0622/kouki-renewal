<?php

/** 管理画面メニュー表示変更 */ 
function remove_menus () {
  if (!current_user_can('edit_dashboard')) { 
  // 管理者以下のユーザーの場合メニューをunsetする
  remove_menu_page('wpcf7');  // Contact Form 7
  global $menu;
  unset($menu[25]);  //コメント
  unset($menu[59]);  //メニューの線2
  unset($menu[60]);  // テーマ
  unset($menu[65]);  // プラグイン 
  unset($menu[70]);  // プロフィール
  unset($menu[75]);  // ツール
  unset($menu[80]);  // 設定
  unset($menu[90]);  // メニューの線3
  }
}
add_action('admin_menu', 'remove_menus');