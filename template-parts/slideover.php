<script>
	document.addEventListener('DOMContentLoaded', function () {
		const hamburger = document.querySelectorAll('.js-hamburger');
		const overlay = document.querySelector('.js-overlay');
		const slideover = document.querySelector('.js-slideover');
		const slideover_wrapper = document.querySelector('.js-slideover-wrapper');
		const slideover_close_button = document.querySelector('.js-slideover-close-button');

		hamburger.forEach(element => {
			element.addEventListener('click', () => {
				open_slideover();
			});
		});

		slideover_close_button.addEventListener('click', () => {
			close_slideover();
		});

		overlay.addEventListener('click', () => {
			close_slideover();
		});

		function open_slideover() {
			slideover_wrapper.classList.remove('hidden');
			slideover_wrapper.classList.add('block');
			setTimeout(function() {
				slideover.classList.remove('-translate-x-full');
				slideover.classList.add('translate-x-0');
				overlay.classList.remove('js-hide');
				overlay.classList.add('js-show');
				const event = new Event('slideover-open');
				document.dispatchEvent(event);
			}, 0);
		}

		function close_slideover() {
			overlay.classList.remove('js-show');
			overlay.classList.add('js-hide');
			slideover.classList.remove('translate-x-0');
			slideover.classList.add('-translate-x-full');
			setTimeout(function() {
				slideover_wrapper.classList.remove('block');
				slideover_wrapper.classList.add('hidden');
				const event = new Event('slideover-close');
				document.dispatchEvent(event);
			}, 500);
		}
	}, false);
</script>

<!-- This example requires Tailwind CSS v2.0+ -->
<section class="js-slideover-wrapper fixed inset-0 overflow-hidden z-50 hidden" role="dialog" aria-modal="true">
	<div class="absolute inset-0 overflow-hidden">
		<!--
		  Background overlay, show/hide based on slide-over state.

		  Entering: "ease-in-out duration-500"
			From: "opacity-0"
			To: "opacity-100"
		  Leaving: "ease-in-out duration-500"
			From: "opacity-100"
			To: "opacity-0"
		-->
		<div class="js-overlay c-slideover-overlay" aria-hidden="true"></div>

		<div class="absolute inset-y-0 left-0 pr-10 max-w-full flex">
			<!--
			  Slide-over panel, show/hide based on slide-over state.

			  Entering: "transform transition ease-in-out duration-500 sm:duration-700"
				From: "translate-x-full"
				To: "translate-x-0"
			  Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
				From: "translate-x-0"
				To: "translate-x-full"
			-->
			<div class="js-slideover w-screen max-w-md    transform transition -translate-x-full ease-in-out duration-300">
				<div class="relative h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
					<div class="absolute z-10 right-0 px-4 sm:px-6">
						<button class="js-slideover-close-button mt-1 flex justify-center items-center bg-white rounded text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
							<span class="sr-only"><?php _e( 'Close panel', 'rvn' ); ?></span>
							<!-- Heroicon name: outline/x -->
							<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>
					<div class="relative flex-1 px-4 sm:px-6 space-y-12">
						<?php if ( ! dynamic_sidebar( apply_filters( 'rvn_slideover_sidebar', 'sidebar-slideover' ) ) ) : ?>
							<?php the_widget( 'RVN_Stacknav_Widget' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
