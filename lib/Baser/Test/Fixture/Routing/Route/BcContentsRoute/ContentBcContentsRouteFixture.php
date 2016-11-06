<?php
/**
 * ContentFixture
 */
class ContentBcContentsRouteFixture extends BaserTestFixture {

/**
 * Name of the object
 *
 * @var string
 */
	public $name = 'Content';
	
/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => '',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '1',
			'url' => '/',
			'site_id' => '0',
			'alias_id' => null,
			'main_site_content_id' => null,
			'parent_id' => null,
			'lft' => '1',
			'rght' => '84',
			'level' => '0',
			'title' => 'baserCMS inc. [デモ]',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => 'default',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => null,
			'modified_date' => null,
			'site_root' => 1,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-29 18:02:53',
			'modified' => '2016-07-29 18:04:23'
		),
		array(
			'id' => '2',
			'name' => 'm',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '2',
			'url' => '/m/',
			'site_id' => '1',
			'alias_id' => null,
			'main_site_content_id' => '1',
			'parent_id' => '1',
			'lft' => '4',
			'rght' => '13',
			'level' => '1',
			'title' => 'baserCMS inc.｜ケータイ',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => 'default',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => null,
			'modified_date' => '2016-11-04 16:34:47',
			'site_root' => 1,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-29 18:02:53',
			'modified' => '2016-11-04 16:39:37'
		),
		array(
			'id' => '3',
			'name' => 's',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '3',
			'url' => '/s/',
			'site_id' => '2',
			'alias_id' => null,
			'main_site_content_id' => '1',
			'parent_id' => '1',
			'lft' => '14',
			'rght' => '25',
			'level' => '1',
			'title' => 'baserCMS inc.｜スマホ',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => 'default',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => null,
			'modified_date' => '2016-11-04 16:42:25',
			'site_root' => 1,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-29 18:02:53',
			'modified' => '2016-11-04 16:42:25'
		),
		array(
			'id' => '4',
			'name' => 'index',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '1',
			'url' => '/index',
			'site_id' => '0',
			'alias_id' => null,
			'main_site_content_id' => null,
			'parent_id' => '1',
			'lft' => '26',
			'rght' => '27',
			'level' => '1',
			'title' => 'トップページ',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-29 18:13:03',
			'modified_date' => '2016-11-04 16:56:43',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-29 18:13:03',
			'modified' => '2016-11-04 16:56:43'
		),
		array(
			'id' => '6',
			'name' => 'service',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '4',
			'url' => '/service/',
			'site_id' => '0',
			'alias_id' => null,
			'main_site_content_id' => null,
			'parent_id' => '1',
			'lft' => '30',
			'rght' => '35',
			'level' => '1',
			'title' => 'サービス',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-29 18:14:33',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-29 18:14:33',
			'modified' => '2016-07-29 18:14:54'
		),
		array(
			'id' => '8',
			'name' => 'index',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '4',
			'url' => '/m/index',
			'site_id' => '1',
			'alias_id' => null,
			'main_site_content_id' => '4',
			'parent_id' => '2',
			'lft' => '2',
			'rght' => '3',
			'level' => '2',
			'title' => 'トップページ',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-29 18:18:05',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-29 18:18:06',
			'modified' => '2016-07-29 18:19:05'
		),
		array(
			'id' => '9',
			'name' => 'contact',
			'plugin' => 'Mail',
			'type' => 'MailContent',
			'entity_id' => '1',
			'url' => '/service/contact/',
			'site_id' => '0',
			'alias_id' => null,
			'main_site_content_id' => null,
			'parent_id' => '6',
			'lft' => '33',
			'rght' => '34',
			'level' => '2',
			'title' => 'お問い合わせ',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-30 21:51:49',
			'modified_date' => '2016-11-04 16:44:27',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-30 21:51:49',
			'modified' => '2016-11-04 16:44:53'
		),
		array(
			'id' => '10',
			'name' => 'news',
			'plugin' => 'Blog',
			'type' => 'BlogContent',
			'entity_id' => '1',
			'url' => '/news/',
			'site_id' => '0',
			'alias_id' => null,
			'main_site_content_id' => null,
			'parent_id' => '1',
			'lft' => '28',
			'rght' => '29',
			'level' => '1',
			'title' => '新着情報',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-31 15:01:41',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-31 15:01:41',
			'modified' => '2016-07-31 15:02:16'
		),
		array(
			'id' => '11',
			'name' => 'service1',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '3',
			'url' => '/service/service1',
			'site_id' => '0',
			'alias_id' => null,
			'main_site_content_id' => null,
			'parent_id' => '6',
			'lft' => '31',
			'rght' => '32',
			'level' => '2',
			'title' => 'サービス１',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-31 16:46:32',
			'modified_date' => '2016-11-04 16:53:18',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-07-31 16:46:32',
			'modified' => '2016-11-04 16:55:28'
		),
		array(
			'id' => '14',
			'name' => 'index',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '1',
			'url' => '/s/index',
			'site_id' => '2',
			'alias_id' => '4',
			'main_site_content_id' => '4',
			'parent_id' => '3',
			'lft' => '15',
			'rght' => '16',
			'level' => '2',
			'title' => 'トップページ',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-29 18:13:03',
			'modified_date' => '2016-11-04 16:56:43',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-08-12 00:55:34',
			'modified' => '2016-11-04 16:56:44'
		),
		array(
			'id' => '15',
			'name' => 'news',
			'plugin' => 'Blog',
			'type' => 'BlogContent',
			'entity_id' => '1',
			'url' => '/s/news/',
			'site_id' => '2',
			'alias_id' => '10',
			'main_site_content_id' => '10',
			'parent_id' => '3',
			'lft' => '17',
			'rght' => '18',
			'level' => '2',
			'title' => '新着情報',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-08-12 00:55:48',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-08-12 00:55:48',
			'modified' => '2016-11-04 16:42:25'
		),
		array(
			'id' => '16',
			'name' => 'service',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '4',
			'url' => '/s/service/',
			'site_id' => '2',
			'alias_id' => null,
			'main_site_content_id' => '6',
			'parent_id' => '3',
			'lft' => '19',
			'rght' => '24',
			'level' => '2',
			'title' => 'サービス',
			'description' => '',
			'eyecatch' => '',
			'author_id' => null,
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-08-12 00:55:57',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-08-12 00:55:57',
			'modified' => '2016-11-04 16:42:25'
		),
		array(
			'id' => '23',
			'name' => 'en',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '5',
			'url' => '/en/',
			'site_id' => '3',
			'alias_id' => null,
			'main_site_content_id' => '1',
			'parent_id' => '1',
			'lft' => '36',
			'rght' => '47',
			'level' => '1',
			'title' => 'baserCMS inc.｜English',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => 'default',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:35:39',
			'modified_date' => '2016-11-04 16:40:34',
			'site_root' => 1,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:35:39',
			'modified' => '2016-11-04 16:40:34'
		),
		array(
			'id' => '24',
			'name' => 'sub',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '6',
			'url' => '/sub/',
			'site_id' => '4',
			'alias_id' => null,
			'main_site_content_id' => '1',
			'parent_id' => '1',
			'lft' => '48',
			'rght' => '59',
			'level' => '1',
			'title' => 'baserCMS inc.｜サブドメイン',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => 'default',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:36:38',
			'modified_date' => '2016-11-04 16:41:14',
			'site_root' => 1,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:36:38',
			'modified' => '2016-11-04 16:41:14'
		),
		array(
			'id' => '25',
			'name' => 'another.com',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '7',
			'url' => '/another.com/',
			'site_id' => '5',
			'alias_id' => null,
			'main_site_content_id' => '1',
			'parent_id' => '1',
			'lft' => '60',
			'rght' => '71',
			'level' => '1',
			'title' => 'baserCMS inc.｜別ドメイン',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => 'default',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:38:36',
			'modified_date' => '2016-11-04 16:42:01',
			'site_root' => 1,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:38:36',
			'modified' => '2016-11-04 16:42:02'
		),
		array(
			'id' => '26',
			'name' => 'contact',
			'plugin' => 'Mail',
			'type' => 'MailContent',
			'entity_id' => '1',
			'url' => '/s/service/contact/',
			'site_id' => '2',
			'alias_id' => '9',
			'main_site_content_id' => '9',
			'parent_id' => '16',
			'lft' => '22',
			'rght' => '23',
			'level' => '3',
			'title' => 'お問い合わせ',
			'description' => '',
			'eyecatch' => '',
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-30 21:51:49',
			'modified_date' => '2016-11-04 16:44:27',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:44:28',
			'modified' => '2016-11-04 16:44:53'
		),
		array(
			'id' => '27',
			'name' => 'news',
			'plugin' => 'Blog',
			'type' => 'BlogContent',
			'entity_id' => '2',
			'url' => '/m/news/',
			'site_id' => '1',
			'alias_id' => null,
			'main_site_content_id' => '10',
			'parent_id' => '2',
			'lft' => '5',
			'rght' => '6',
			'level' => '2',
			'title' => '新着情報',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:45:50',
			'modified_date' => '2016-11-04 16:46:19',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:45:50',
			'modified' => '2016-11-04 17:31:12'
		),
		array(
			'id' => '29',
			'name' => 'news',
			'plugin' => 'Blog',
			'type' => 'BlogContent',
			'entity_id' => '3',
			'url' => '/en/news/',
			'site_id' => '3',
			'alias_id' => null,
			'main_site_content_id' => '10',
			'parent_id' => '23',
			'lft' => '39',
			'rght' => '40',
			'level' => '2',
			'title' => '新着情報',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:47:27',
			'modified_date' => '2016-11-04 16:47:34',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:47:27',
			'modified' => '2016-11-04 16:47:35'
		),
		array(
			'id' => '30',
			'name' => 'news',
			'plugin' => 'Blog',
			'type' => 'BlogContent',
			'entity_id' => '4',
			'url' => '/sub/news/',
			'site_id' => '4',
			'alias_id' => null,
			'main_site_content_id' => '10',
			'parent_id' => '24',
			'lft' => '51',
			'rght' => '52',
			'level' => '2',
			'title' => '新着情報',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:47:50',
			'modified_date' => '2016-11-04 16:48:05',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:47:51',
			'modified' => '2016-11-04 16:48:06'
		),
		array(
			'id' => '31',
			'name' => 'news',
			'plugin' => 'Blog',
			'type' => 'BlogContent',
			'entity_id' => '5',
			'url' => '/another.com/news/',
			'site_id' => '5',
			'alias_id' => null,
			'main_site_content_id' => '10',
			'parent_id' => '25',
			'lft' => '63',
			'rght' => '64',
			'level' => '2',
			'title' => '新着情報',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:48:33',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:48:33',
			'modified' => '2016-11-04 16:51:17'
		),
		array(
			'id' => '32',
			'name' => 'service',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '8',
			'url' => '/en/service/',
			'site_id' => '3',
			'alias_id' => null,
			'main_site_content_id' => '6',
			'parent_id' => '23',
			'lft' => '41',
			'rght' => '46',
			'level' => '2',
			'title' => 'サービス',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:49:17',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:49:17',
			'modified' => '2016-11-04 16:49:17'
		),
		array(
			'id' => '33',
			'name' => 'service1',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '8',
			'url' => '/en/service/service1',
			'site_id' => '3',
			'alias_id' => null,
			'main_site_content_id' => '11',
			'parent_id' => '32',
			'lft' => '42',
			'rght' => '43',
			'level' => '3',
			'title' => 'サービス１',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:49:18',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:49:18',
			'modified' => '2016-11-04 16:50:49'
		),
		array(
			'id' => '34',
			'name' => 'service',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '9',
			'url' => '/sub/service/',
			'site_id' => '4',
			'alias_id' => null,
			'main_site_content_id' => '6',
			'parent_id' => '24',
			'lft' => '53',
			'rght' => '58',
			'level' => '2',
			'title' => 'サービス',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:49:33',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:49:33',
			'modified' => '2016-11-04 16:49:34'
		),
		array(
			'id' => '35',
			'name' => 'service1',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '9',
			'url' => '/sub/service/service1',
			'site_id' => '4',
			'alias_id' => null,
			'main_site_content_id' => '11',
			'parent_id' => '34',
			'lft' => '54',
			'rght' => '55',
			'level' => '3',
			'title' => 'サービス１',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:49:34',
			'modified_date' => '2016-11-04 16:49:41',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:49:34',
			'modified' => '2016-11-04 16:49:41'
		),
		array(
			'id' => '36',
			'name' => 'service',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '10',
			'url' => '/another.com/service/',
			'site_id' => '5',
			'alias_id' => null,
			'main_site_content_id' => '6',
			'parent_id' => '25',
			'lft' => '65',
			'rght' => '70',
			'level' => '2',
			'title' => 'サービス',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:50:11',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:50:11',
			'modified' => '2016-11-04 16:50:11'
		),
		array(
			'id' => '38',
			'name' => 'service',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '11',
			'url' => '/m/service/',
			'site_id' => '1',
			'alias_id' => null,
			'main_site_content_id' => '6',
			'parent_id' => '2',
			'lft' => '7',
			'rght' => '12',
			'level' => '2',
			'title' => 'サービス',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:52:09',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:52:09',
			'modified' => '2016-11-04 16:52:09'
		),
		array(
			'id' => '39',
			'name' => 'contact',
			'plugin' => 'Mail',
			'type' => 'MailContent',
			'entity_id' => '1',
			'url' => '/m/service/contact/',
			'site_id' => '1',
			'alias_id' => '9',
			'main_site_content_id' => '9',
			'parent_id' => '38',
			'lft' => '10',
			'rght' => '11',
			'level' => '3',
			'title' => 'contact',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:52:09',
			'modified_date' => '2016-11-04 16:52:13',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:52:09',
			'modified' => '2016-11-04 16:52:13'
		),
		array(
			'id' => '40',
			'name' => 'contact',
			'plugin' => 'Mail',
			'type' => 'MailContent',
			'entity_id' => '1',
			'url' => '/en/service/contact/',
			'site_id' => '3',
			'alias_id' => '9',
			'main_site_content_id' => '9',
			'parent_id' => '32',
			'lft' => '44',
			'rght' => '45',
			'level' => '3',
			'title' => 'contact',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:52:22',
			'modified_date' => '2016-11-04 16:52:26',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:52:22',
			'modified' => '2016-11-04 16:52:26'
		),
		array(
			'id' => '41',
			'name' => 'contact',
			'plugin' => 'Mail',
			'type' => 'MailContent',
			'entity_id' => '1',
			'url' => '/sub/service/contact/',
			'site_id' => '4',
			'alias_id' => '9',
			'main_site_content_id' => '9',
			'parent_id' => '34',
			'lft' => '56',
			'rght' => '57',
			'level' => '3',
			'title' => 'contact',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:52:39',
			'modified_date' => '2016-11-04 16:52:47',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:52:39',
			'modified' => '2016-11-04 16:52:47'
		),
		array(
			'id' => '42',
			'name' => 'contact',
			'plugin' => 'Mail',
			'type' => 'MailContent',
			'entity_id' => '1',
			'url' => '/another.com/service/contact/',
			'site_id' => '5',
			'alias_id' => '9',
			'main_site_content_id' => '9',
			'parent_id' => '36',
			'lft' => '68',
			'rght' => '69',
			'level' => '3',
			'title' => 'contact',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:52:56',
			'modified_date' => '2016-11-04 16:53:00',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:52:56',
			'modified' => '2016-11-04 16:53:00'
		),
		array(
			'id' => '43',
			'name' => 'service1',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '10',
			'url' => '/m/service/service1',
			'site_id' => '1',
			'alias_id' => null,
			'main_site_content_id' => '11',
			'parent_id' => '38',
			'lft' => '8',
			'rght' => '9',
			'level' => '3',
			'title' => 'サービス１',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:54:55',
			'modified_date' => '2016-11-04 16:55:02',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:54:55',
			'modified' => '2016-11-04 16:55:03'
		),
		array(
			'id' => '44',
			'name' => 'service1',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '3',
			'url' => '/s/service/service1',
			'site_id' => '2',
			'alias_id' => '11',
			'main_site_content_id' => '11',
			'parent_id' => '16',
			'lft' => '20',
			'rght' => '21',
			'level' => '3',
			'title' => 'サービス１',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-07-31 16:46:32',
			'modified_date' => '2016-11-04 16:53:18',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:55:12',
			'modified' => '2016-11-04 16:55:28'
		),
		array(
			'id' => '45',
			'name' => 'service1',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '11',
			'url' => '/another.com/service/service1',
			'site_id' => '5',
			'alias_id' => null,
			'main_site_content_id' => '11',
			'parent_id' => '36',
			'lft' => '66',
			'rght' => '67',
			'level' => '3',
			'title' => 'サービス１',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:55:40',
			'modified_date' => '2016-11-04 16:55:56',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:55:40',
			'modified' => '2016-11-04 16:55:56'
		),
		array(
			'id' => '46',
			'name' => 'index',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '12',
			'url' => '/en/index',
			'site_id' => '3',
			'alias_id' => null,
			'main_site_content_id' => '4',
			'parent_id' => '23',
			'lft' => '37',
			'rght' => '38',
			'level' => '2',
			'title' => 'トップページ',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:56:53',
			'modified_date' => '2016-11-04 16:56:58',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:56:53',
			'modified' => '2016-11-04 16:56:58'
		),
		array(
			'id' => '47',
			'name' => 'index',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '13',
			'url' => '/sub/index',
			'site_id' => '4',
			'alias_id' => null,
			'main_site_content_id' => '4',
			'parent_id' => '24',
			'lft' => '49',
			'rght' => '50',
			'level' => '2',
			'title' => 'トップページ',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:57:11',
			'modified_date' => '2016-11-04 16:57:15',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:57:11',
			'modified' => '2016-11-04 16:57:15'
		),
		array(
			'id' => '48',
			'name' => 'index',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '14',
			'url' => '/another.com/index',
			'site_id' => '5',
			'alias_id' => null,
			'main_site_content_id' => '4',
			'parent_id' => '25',
			'lft' => '61',
			'rght' => '62',
			'level' => '2',
			'title' => 'トップページ',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 16:57:26',
			'modified_date' => '2016-11-04 16:57:30',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 16:57:26',
			'modified' => '2016-11-04 16:57:30'
		),
		array(
			'id' => '49',
			'name' => 'another.com/s',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '12',
			'url' => '/another.com/s/',
			'site_id' => '6',
			'alias_id' => null,
			'main_site_content_id' => '25',
			'parent_id' => '1',
			'lft' => '72',
			'rght' => '83',
			'level' => '1',
			'title' => 'baserCMS inc.｜別ドメインスマートフォン',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => 'default',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 19:41:47',
			'modified_date' => null,
			'site_root' => 1,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 19:41:47',
			'modified' => '2016-11-04 19:41:48'
		),
		array(
			'id' => '50',
			'name' => 'index',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '15',
			'url' => '/another.com/s/index',
			'site_id' => '6',
			'alias_id' => null,
			'main_site_content_id' => '48',
			'parent_id' => '49',
			'lft' => '73',
			'rght' => '74',
			'level' => '2',
			'title' => 'トップページ',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 19:42:43',
			'modified_date' => '2016-11-04 19:42:56',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 19:42:43',
			'modified' => '2016-11-04 19:42:56'
		),
		array(
			'id' => '51',
			'name' => 'news',
			'plugin' => 'Blog',
			'type' => 'BlogContent',
			'entity_id' => '6',
			'url' => '/another.com/s/news/',
			'site_id' => '6',
			'alias_id' => null,
			'main_site_content_id' => '31',
			'parent_id' => '49',
			'lft' => '75',
			'rght' => '76',
			'level' => '2',
			'title' => '新着情報',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 19:43:45',
			'modified_date' => '2016-11-04 19:43:52',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 19:43:45',
			'modified' => '2016-11-04 19:43:52'
		),
		array(
			'id' => '52',
			'name' => 'service',
			'plugin' => 'Core',
			'type' => 'ContentFolder',
			'entity_id' => '13',
			'url' => '/another.com/s/service/',
			'site_id' => '6',
			'alias_id' => null,
			'main_site_content_id' => '36',
			'parent_id' => '49',
			'lft' => '77',
			'rght' => '82',
			'level' => '2',
			'title' => 'サービス',
			'description' => null,
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => null,
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 19:44:11',
			'modified_date' => null,
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 19:44:11',
			'modified' => '2016-11-04 19:44:11'
		),
		array(
			'id' => '53',
			'name' => 'service1',
			'plugin' => 'Core',
			'type' => 'Page',
			'entity_id' => '16',
			'url' => '/another.com/s/service/service1',
			'site_id' => '6',
			'alias_id' => null,
			'main_site_content_id' => '45',
			'parent_id' => '52',
			'lft' => '78',
			'rght' => '79',
			'level' => '3',
			'title' => 'サービス１',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 19:44:11',
			'modified_date' => '2016-11-04 19:44:17',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 19:44:11',
			'modified' => '2016-11-04 19:44:17'
		),
		array(
			'id' => '54',
			'name' => 'contact',
			'plugin' => 'Mail',
			'type' => 'MailContent',
			'entity_id' => '2',
			'url' => '/another.com/s/service/contact/',
			'site_id' => '6',
			'alias_id' => null,
			'main_site_content_id' => '42',
			'parent_id' => '52',
			'lft' => '80',
			'rght' => '81',
			'level' => '3',
			'title' => 'contact',
			'description' => '',
			'eyecatch' => null,
			'author_id' => '1',
			'layout_template' => '',
			'status' => 1,
			'publish_begin' => null,
			'publish_end' => null,
			'self_status' => 1,
			'self_publish_begin' => null,
			'self_publish_end' => null,
			'exclude_search' => 0,
			'created_date' => '2016-11-04 19:44:33',
			'modified_date' => '2016-11-04 19:44:42',
			'site_root' => 0,
			'deleted_date' => null,
			'deleted' => 0,
			'exclude_menu' => 0,
			'blank_link' => 0,
			'created' => '2016-11-04 19:44:33',
			'modified' => '2016-11-04 19:44:42'
		),
	);

}
