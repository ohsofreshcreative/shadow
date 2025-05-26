<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ExampleBlock extends Block
{
	public $name = 'Example';
	public $description = 'Przykładowy blok ACF2';
	public $category = 'formatting';
	public $icon = 'smiley';
	public $keywords = ['example', 'demo'];
	public $mode = 'edit'; // lub 'preview'
	public $supports = [
		'align' => false,
		'mode' => false,
		'jsx' => true,
	];

	public function fields()
	{
		$example = new FieldsBuilder('example');

		$example
			->setLocation('block', '==', 'acf/example') // ważne!
			->addText('block-title', [
				'label' => 'Tytuł',
				'required' => 0,
			])
			->addAccordion('accordion1', [
				'label' => 'Zaawansowane opcje2',
				'open' => false,
				'multi_expand' => true,
			])
			->addImage('image', [
				'label' => 'Obraz',
				'return_format' => 'array', // lub 'url', lub 'id'
				'preview_size' => 'medium',
			])
			->addText('title', ['label' => 'Tytuł'])
			->addWysiwyg('content', [
				'label' => 'Treść',
				'tabs' => 'all', // 'visual', 'text', 'all'
				'toolbar' => 'full', // 'basic', 'full'
				'media_upload' => true,
			])
			->addLink('cta', [
				'label' => 'Przycisk',
				'return_format' => 'array',
			]);

		return $example;
	}

	public function with()
	{
		return [
			'image' => get_field('image'),
			'title' => get_field('title'),
			'content' => get_field('content'),
			'cta' => get_field('cta'),
		];
	}
}
