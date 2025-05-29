<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;
use App\Blocks\ExampleBlock;

class ThemeServiceProvider extends SageServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		parent::register();
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();

		// CUSTOM POST TYPE OFERTA
		add_action('init', function () {
			register_post_type('offer', [
				'label' => 'Oferta',
				'public' => true,
				'has_archive' => true,
				'rewrite' => ['slug' => 'oferta'],
				'supports' => ['title', 'editor', 'thumbnail'],
				'show_in_rest' => true,
				'menu_icon' => 'dashicons-list-view',
			]);
		});

		// USATAWIENIA MOTYWU
		add_action('acf/init', function () {
			if (function_exists('acf_add_options_page')) {
				acf_add_options_page([
					'page_title' => 'Ustawienia motywu',
					'menu_title' => 'Ustawienia motywu',
					'menu_slug'  => 'theme-settings',
					'capability' => 'edit_posts',
					'redirect'   => false,
				]);
				/* 	acf_add_options_page([
					'page_title' => 'Oferta',
					'menu_title' => 'Oferta',
					'menu_slug'  => 'offer',
					'capability' => 'edit_posts',
					'parent_slug' => '',
					'redirect'   => false,
				]); */
			}
		});

		add_filter('sage/acf-composer/blocks', function () {
			return [
				\App\Blocks\TextImage::class,
				\App\Blocks\Hero::class,
				\App\Blocks\HomeAbout::class,
				\App\Blocks\Cards::class,
			];
		});
	}
}
