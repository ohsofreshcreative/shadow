@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
@endphp

<section data-gsap-anim="section" class="cards -smt {{ $sectionClass }}">
	<div class="__wrapper c-main">
		<div class="">
			
			@if (!empty($tiles['title']))
			<h1 class="__txt font-medium text-center mb-10">{{ strip_tags($tiles['title']) }}</h1>
			@endif

			@if (!empty($tiles['repeater']))
			<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

				@foreach ($tiles['repeater'] as $item)
				<div class="__card text-center">
					<img class="mx-auto m-img" src="{{ $item['card_image']['url'] }}" alt="{{ $item['card_image']['alt'] ?? '' }}" />
					<h6 class="">{{ $item['card_title'] }}</h6>
					<p class=" ">{{ $item['card_title'] }}</p>
				</div>
				@endforeach
			</div>
			@endif

		</div>
	</div>

</section>