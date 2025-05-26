<section data-gsap-anim="section" class="example-block c-main">
	@if ($image)
	<img data-gsap-element="header" src="{{ $image['url'] }}" alt="{{ $image['alt'] ?? '' }}" class="mb-4 my-element">
	@endif

	<h2 data-gsap-element="header" class="text-2xl font-bold">{{ $title }}</h2>

	<div data-gsap-element="header" class="mt-2 prose">
		{!! $content !!}
	</div>
	@if ($cta)
		<a data-gsap-element="header" class="main-btn" href="{{ $cta['url'] }}" target="{{ $cta['target'] }}">{{ $cta['title'] }}</a>
	@endif

	<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
  </div>

  <!-- Pagination i nawigacja (opcjonalnie) -->
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

</section>