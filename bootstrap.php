<?php
// ヘッダーレイアウト：1行
add_filter( 'theme_mod_header-layout', function( $option ) {
	return '1row';
} );

// ヘッダー位置：固定
add_filter( 'theme_mod_header-position', function( $option ) {
	return 'sticky';
} );

// ヘッダー位置設定：モバイルのみに適用
add_filter( 'theme_mod_header-position-only-mobile', function( $option ) {
	return true;
} );

// 記事一覧部分のレイアウト：リッチメディア
add_filter( 'theme_mod_archive-layout', function( $option ) {
	return 'rich-media';
} );

// パンくずリストの位置：デフォルト
add_filter( 'theme_mod_breadcrumbs-position', function( $option ) {
	return 'default';
} );

// デフォルトページヘッダー画像
add_filter( 'theme_mod_default-page-header-image', function( $image ) {
	return plugins_url( 'img/default-page-header.jpg', __FILE__ );
} );

// 固定ページでのアイキャッチ画像の表示方法：なし
add_filter( 'theme_mod_page-eyecatch', function( $image ) {
	return 'none';
} );

// 投稿ページでのアイキャッチ画像の表示方法：ページヘッダーの上にタイトルを表示
add_filter( 'theme_mod_post-eyecatch', function( $image ) {
	return 'title-on-page-header';
} );

// 個別投稿ページ（固定ページ、投稿ページ）のレイアウト
add_filter( 'theme_mod_singular-post-layout', function( $image ) {
	return 'right-sidebar';
} );

// ページヘッダーのアイキャッチ画像サイズ：フルサイズ
add_filter( 'snow_monkey_page_header_thumbnail_size', function( $size ) {
	return 'full';
} );

// カスタマイザーの設定値を CSS に適用
add_action( 'wp', function() {
	$cfs = \Inc2734\WP_Customizer_Framework\Customizer_Framework::styles();

	$cfs->register(
		[
			'strong',
			'b',
		],
		[
			'background: linear-gradient(transparent 60%, ' . $cfs->rgba( get_theme_mod( 'accent-color' ), .3 ) . ' 0)',
			]
		);

	$cfs->register(
		[
			'.l-title-top-widget-area > .c-widget .c-widget__title',
			'.l-contents-bottom-widget-area > .c-widget .c-widget__title',
			'.l-archive-top-widget-area > .c-widget .c-widget__title',
			'.c-entry-aside .c-entry-aside__title',
		],
		[
			'background: repeating-linear-gradient(-45deg, ' . $cfs->rgba( get_theme_mod( 'accent-color' ), .2 ) . ', ' . $cfs->rgba( get_theme_mod( 'accent-color' ), .2 ) . ' 2px, #f7f7f7 2px, #f7f7f7 4px);',
			]
		);

	$cfs->register(
		[
			'.c-entry__header::after',
			'.l-footer .l-footer-widget-area__item > .c-widget .c-widget__title::after',
			'.l-sidebar-widget-area > .c-widget .c-widget__title::after',
			'.c-section__title::after, .wpac-section__title::after',
		],
		[
			'border-bottom: solid 3px ' . get_theme_mod( 'accent-color' ),
			]
		);

	$cfs->register(
		[
			'.c-copyright',
		],
		[
			'background-color: ' . get_theme_mod( 'accent-color' ),
			]
		);
} );
