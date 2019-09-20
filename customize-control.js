(function() {
  var api = wp.customize;

  api.bind('ready', function() {

    // 記事一覧部分のレイアウト：非表示
    if (api.control('archive-layout')) {
      api.control('archive-layout').container.remove();
      api.control.remove('archive-layout');
    }
    if (api.control('post-entries-layout')) {
      api.control('post-entries-layout').container.remove();
      api.control.remove('post-entries-layout');
    }

    // 個別投稿ページのレイアウト：非表示
    api.control('singular-post-layout').container.remove();
    api.control.remove('singular-post-layout');

    // ヘッダーレイアウト：非表示
    api.control('header-layout').container.remove();
    api.control.remove('header-layout');

    // パンくずリストの位置：非表示
    api.control('breadcrumbs-position').container.remove();
    api.control.remove('breadcrumbs-position');

    // ヘッダー位置：非表示
    api.control('header-position').container.remove();
    api.control.remove('header-position');

    // ヘッダーの位置設定をモバイルのみに適用：非表示
    api.control('header-position-only-mobile').container.remove();
    api.control.remove('header-position-only-mobile');

    // デフォルトページヘッダー画像：非表示
    api.control('default-page-header-image').container.remove();
    api.control.remove('default-page-header-image');

    // 投稿ページでのアイキャッチ画像の表示方法：非表示
    api.control('post-eyecatch').container.remove();
    api.control.remove('post-eyecatch');

    // 固定ページでのアイキャッチ画像の表示方法：非表示
    api.control('page-eyecatch').container.remove();
    api.control.remove('page-eyecatch');
  });
})(jQuery);
