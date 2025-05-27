@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
@endphp

<section data-gsap-anim="section" class="home-about c-main {{ $sectionClass }}">
	<div class="">
		@if (!empty($about1['image']))
		<img src="{{ $about1['image']['url'] }}" alt="{{ $about1['image']['alt'] ?? '' }}">
		@endif

		@if (!empty($about1['title']))
		<h2>{{ $about1['title'] }}</h2>
		@endif

		@if (!empty($about1['content']))
		<div class="prose">{!! $about1['content'] !!}</div>
		@endif

		@if (!empty($about1['cta']))
		<a href="{{ $about1['cta']['url'] }}" target="{{ $about1['cta']['target'] ?? '_self' }}">
			{{ $about1['cta']['title'] }}
		</a>
		@endif
	</div>

	<div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center">
		@if (!empty($about2['image2']))
		<img src="{{ $about2['image2']['url'] }}" alt="{{ $about2['image2']['alt'] ?? '' }}">
		@endif

		<div>
			@if (!empty($about2['title2']))
			<h2>{{ $about2['title2'] }}</h2>
			@endif

			@if (!empty($about2['content2']))
			<div class="prose">{!! $about2['content2'] !!}</div>
			@endif

			@if (!empty($about2['cta2']))
			<a class="main-btn" href="{{ $about2['cta2']['url'] }}" target="{{ $about2['cta2']['target'] ?? '_self' }}">
				{{ $about2['cta2']['title'] }}
			</a>
			@endif
		</div>
	</div>

</section>