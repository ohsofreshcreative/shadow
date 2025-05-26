<header x-data="{ mobileOpen: false }" class="masthead fixed-top top-0 bg-white shadow-md relative z-50">

	<!-- Desktop Header -->
	<div class="c-main hidden md:flex items-center justify-between h-full p-4 mx-auto">
		<a class="brand shrink-0" href="{{ home_url('/') }}">
			@if ($logo)
			<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] ?? 'Logo' }}" class="h-10 w-auto">
			@else
			<span class="text-xl font-bold">{{ $siteName }}</span>
			@endif
		</a>
		@if (has_nav_menu('primary_navigation'))
		<nav class="nav-primary ml-6" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
			{!! wp_nav_menu([
			'theme_location' => 'primary_navigation',
			'menu_class' => 'nav flex gap-x-5 lg:gap-x-8 text-sm font-medium items-center',
			'container' => false,
			'echo' => false,
			]) !!}
		</nav>
		@endif
	</div>

	<!-- Mobile Header Bar -->
	<div class="mobile-menu fixed-top md:hidden flex items-center justify-between p-4">
		<a class="brand shrink-0" href="{{ home_url('/') }}">
			@if ($logo)
			<img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] ?? 'Logo' }}" class="h-8 w-auto">
			@else
			<span class="text-lg font-bold">{{ $siteName }}</span>
			@endif
		</a>
		<button
			@click.stop="mobileOpen = !mobileOpen"
			class="p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
			aria-expanded="mobileOpen"
			aria-controls="mobile-menu-panel">
			<span class="sr-only">Otwórz menu główne</span>
			<svg x-show="!mobileOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
			</svg>
			<svg x-show="mobileOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" style="display: none;">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			</svg>
		</button>
	</div>

	<!-- Mobile Menu Panel -->
	<div
		id="mobile-menu-panel"
		x-show="mobileOpen"
		@click.away="mobileOpen = false"
		@keydown.escape.window="mobileOpen = false"
		x-transition:enter="transition ease-out duration-200"
		x-transition:enter-start="opacity-0 transform translate-x-full"
		x-transition:enter-end="opacity-100 transform translate-x-0"
		x-transition:leave="transition ease-in duration-150"
		x-transition:leave-start="opacity-100 transform translate-x-0"
		x-transition:leave-end="opacity-0 transform translate-x-full"
		class="mobile-menu fixed top-0 right-0 bottom-0 w-full h-full bg-white shadow-xl z-[51] overflow-y-auto md:hidden" {{-- ZMIANA: Usunięto style="display: none;" i zmieniono z-40 na z-[51] --}}
		aria-label="Menu mobilne">
		<div class="p-4">
			<div class="flex items-center justify-between mb-6">
				<span class="text-lg font-semibold">Menu</span>
				<button
					@click="mobileOpen = false"
					class="p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
					<span class="sr-only">Zamknij menu</span>
					<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>

			@if (has_nav_menu('primary_navigation'))
			<nav class="flex flex-col space-y-1">
				{!! wp_nav_menu([
				'theme_location' => 'primary_navigation',
				'menu_class' => 'nav-mobile flex flex-col space-y-1',
				'container' => false,
				'echo' => false,
				]) !!}
			</nav>
			@endif

			<div class="mt-8 pt-6 border-t border-gray-200">
				<a href="/kontakt/" class="block w-full px-4 py-3 text-center text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-md shadow">
					Umów konsultację
				</a>
			</div>
		</div>
	</div>
</header>