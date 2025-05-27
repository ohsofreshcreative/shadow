<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class TextImage extends Block
{
	public $name = 'Treść oraz zdjęcie';
	public $description = 'Treść oraz zdjęcie';
	public $slug = 'text-image';
	public $category = 'formatting';
	public $icon = 'align-pull-left';
	public $keywords = ['tresc', 'zdjecie'];
	public $mode = 'edit'; 
	public $supports = [
		'align' => false,
		'mode' => false,
		'jsx' => true,
	];

	public function fields()
	{
		$text_image = new FieldsBuilder('text-image');

		$text_image
			->setLocation('block', '==', 'acf/text-image') // ważne!
			->addText('block-title', [
				'label' => 'Tytuł',
				'required' => 0,
			])
			->addAccordion('accordion1', [
				'label' => 'Treść oraz zdjęcie',
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

		return $text_image;
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
