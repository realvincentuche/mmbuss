/* Mastermind — preloader, sticky header, mobile nav, slider, reveal, counters. */
(function () {
	'use strict';

	// Preloader.
	window.addEventListener('load', function () {
		var pre = document.getElementById('mmPreloader');
		if (pre) {
			setTimeout(function () { pre.classList.add('done'); }, 350);
		}
	});
	// Safety: never trap the user behind the preloader.
	setTimeout(function () {
		var pre = document.getElementById('mmPreloader');
		if (pre) { pre.classList.add('done'); }
	}, 3500);

	// Sticky header shadow.
	var header = document.getElementById('mmHeader');
	function onScroll() {
		if (!header) { return; }
		header.classList.toggle('is-sticky', window.scrollY > 8);
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	// Mobile nav.
	var toggle = document.getElementById('mmNavToggle');
	var nav = document.getElementById('mmNav');
	if (toggle && nav) {
		toggle.addEventListener('click', function () {
			var open = nav.classList.toggle('open');
			toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
		});
		nav.addEventListener('click', function (e) {
			if (e.target.tagName === 'A') {
				nav.classList.remove('open');
				toggle.setAttribute('aria-expanded', 'false');
			}
		});
	}

	// Hero slider.
	var slider = document.getElementById('mmSlider');
	if (slider) {
		var slides = Array.prototype.slice.call(slider.querySelectorAll('.mm-slide'));
		var dotsWrap = slider.querySelector('.mm-slider-dots');
		var prev = slider.querySelector('[data-slide="prev"]');
		var next = slider.querySelector('[data-slide="next"]');
		var current = 0;
		var timer = null;

		slides.forEach(function (_, i) {
			var d = document.createElement('button');
			d.className = 'mm-slider-dot' + (i === 0 ? ' active' : '');
			d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
			d.addEventListener('click', function () { go(i); restart(); });
			dotsWrap.appendChild(d);
		});
		var dots = Array.prototype.slice.call(dotsWrap.querySelectorAll('.mm-slider-dot'));

		function go(i) {
			slides[current].classList.remove('active');
			dots[current].classList.remove('active');
			current = (i + slides.length) % slides.length;
			slides[current].classList.add('active');
			dots[current].classList.add('active');
		}
		function restart() {
			if (timer) { clearInterval(timer); }
			timer = setInterval(function () { go(current + 1); }, 6000);
		}
		if (prev) { prev.addEventListener('click', function () { go(current - 1); restart(); }); }
		if (next) { next.addEventListener('click', function () { go(current + 1); restart(); }); }
		restart();
	}

	// Reveal on scroll.
	var revealEls = document.querySelectorAll('.reveal');
	if ('IntersectionObserver' in window && revealEls.length) {
		var io = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (en.isIntersecting) {
					en.target.classList.add('in');
					io.unobserve(en.target);
				}
			});
		}, { threshold: 0.12 });
		revealEls.forEach(function (el) { io.observe(el); });
	} else {
		revealEls.forEach(function (el) { el.classList.add('in'); });
	}

	// Animated counters.
	var counters = document.querySelectorAll('[data-count]');
	if ('IntersectionObserver' in window && counters.length) {
		var cio = new IntersectionObserver(function (entries) {
			entries.forEach(function (en) {
				if (!en.isIntersecting) { return; }
				var el = en.target;
				cio.unobserve(el);
				var target = parseFloat(el.getAttribute('data-count'));
				var suffix = el.getAttribute('data-suffix') || '';
				var start = null;
				var dur = 1400;
				function tick(ts) {
					if (!start) { start = ts; }
					var p = Math.min((ts - start) / dur, 1);
					el.textContent = Math.round(target * p) + suffix;
					if (p < 1) { requestAnimationFrame(tick); }
				}
				requestAnimationFrame(tick);
			});
		}, { threshold: 0.4 });
		counters.forEach(function (el) { cio.observe(el); });
	}
}());
