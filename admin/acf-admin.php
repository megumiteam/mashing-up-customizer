<?php
new MashingUpCustomizerACFAdminSetup();
class MashingUpCustomizerACFAdminSetup extends MashingUpCustomizerInit {

	public function __construct() {
		parent::__construct();
		add_action( 'acf/init', array( $this, 'acf_init' ), 11 );

	}
	function acf_init() {
		$common_page = acf_add_options_page(array(
			'page_title' => __( '共通設定', $this->domain ),
			'menu_title' => __( '共通設定', $this->domain ),
			'menu_slug'  => 'mu-commmon-settings',
			'capability' => 'edit_users',
			'position'   => 60,
			'icon_url'   => 'dashicons-admin-appearance',
			'redirect'   => true,
			'autoload'   => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'ヘッダー', $this->domain ),
			'menu_title'  => __( 'ヘッダー', $this->domain ),
			'menu_slug'   => 'header',
			'parent_slug' => $common_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'コンタクト', $this->domain ),
			'menu_title'  => __( 'コンタクト', $this->domain ),
			'menu_slug'   => 'contact',
			'parent_slug' => $common_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'フッター', $this->domain ),
			'menu_title'  => __( 'フッター', $this->domain ),
			'menu_slug'   => 'footer',
			'parent_slug' => $common_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'チケットバナー', $this->domain ),
			'menu_title'  => __( 'チケットバナー', $this->domain ),
			'menu_slug'   => 'ticket',
			'parent_slug' => $common_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'メルマガ', $this->domain ),
			'menu_title'  => __( 'メルマガ', $this->domain ),
			'menu_slug'   => 'mailmagazine',
			'parent_slug' => $common_page['menu_slug'],
			'autoload'    => true,
		));
		$option_page = acf_add_options_page(array(
			'page_title' => __( 'フロントページ設定', $this->domain ),
			'menu_title' => __( 'フロントページ設定', $this->domain ),
			'menu_slug'  => 'mu-front-page-settings',
			'capability' => 'edit_users',
			'position'   => 60,
			'icon_url'   => 'dashicons-admin-appearance',
			'redirect'   => true,
			'autoload'   => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'ロゴ', $this->domain ),
			'menu_title'  => __( 'ロゴ', $this->domain ),
			'menu_slug'   => 'logo',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'メインビジュアル', $this->domain ),
			'menu_title'  => __( 'メインビジュアル', $this->domain ),
			'menu_slug'   => 'main-visual',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'イベント概要', $this->domain ),
			'menu_title'  => __( 'イベント概要', $this->domain ),
			'menu_slug'   => 'event-summary',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'WHY ATTEND?', $this->domain ),
			'menu_title'  => __( 'WHY ATTEND?', $this->domain ),
			'menu_slug'   => 'why-attend',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'スピーカー', $this->domain ),
			'menu_title'  => __( 'スピーカー', $this->domain ),
			'menu_slug'   => 'speaker',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'AWARD', $this->domain ),
			'menu_title'  => __( 'AWARD', $this->domain ),
			'menu_slug'   => 'award',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'BUY TICHKETS', $this->domain ),
			'menu_title'  => __( 'BUY TICHKETS', $this->domain ),
			'menu_slug'   => 'buy-tickets',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'MAP', $this->domain ),
			'menu_title'  => __( 'MAP', $this->domain ),
			'menu_slug'   => 'map',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'COMMENTS', $this->domain ),
			'menu_title'  => __( 'COMMENTS', $this->domain ),
			'menu_slug'   => 'comments',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
		acf_add_options_sub_page(array(
			'page_title'  => __( 'スポンサーグループ', $this->domain ),
			'menu_title'  => __( 'TOPに表示するスポンサーグループ', $this->domain ),
			'menu_slug'   => 'select-sponsor',
			'parent_slug' => $option_page['menu_slug'],
			'autoload'    => true,
		));
	}
}
