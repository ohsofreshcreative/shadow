@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
@endphp

<section data-gsap-anim="section" class="example-block c-main {{ $sectionClass }}">
	@if (!empty($hero['image']))
	<img data-gsap-element="header" src="{{ $hero['image']['url'] }}" alt="{{ $hero['image']['alt'] ?? '' }}" class="mb-4 my-element">
	@endif

	<h2 data-gsap-element="header" class="pt-26 w-2/3 text-2xl font-bold">{{ $hero['title'] }}</h2>

	<div data-gsap-element="header" class="mt-2 prose">
		{!! $hero['content'] !!}
	</div>

	@if (!empty($hero['cta']))
	<a data-gsap-element="header" class="main-btn" href="{{ $hero['cta']['url'] }}" target="{{ $hero['cta']['target'] }}">{{ $hero['cta']['title'] }}</a>
	@endif

	<!-- 	<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
  </div>

  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div> -->

</section>