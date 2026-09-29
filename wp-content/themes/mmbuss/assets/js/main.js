/* Mastermind — preloader, sticky header, offcanvas, slider, reveal, counters, FAQ, totop. */
(function () {
	'use strict';

	// Preloader.
	window.addEventListener('load', function () {
		var pre = document.getElementById('mmPreloader');
		if (pre) {
			setTimeout(function () { pre.classList.add('done'); }, 350);
		}
	});
	setTimeout(function () {
		var pre = document.getElementById('mmPreloader');
		if (pre) { pre.classList.add('done'); }
	}, 3500);

	// Sticky header + back-to-top.
	var header = document.getElementById('mmHeader');
	var totop = document.getElementById('mmToTop');
	function onScroll() {
		var y = window.scrollY || 0;
		if (header) { header.classList.toggle('is-sticky', y > 8); }
		if (totop) { totop.classList.toggle('show', y > 700); }
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();
	if (totop) {
		totop.addEventListener('click', function () {
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	}

	// Offcanvas menu.
	var burger = document.getElementById('mmBurger');
	var panel = document.getElementById('mmOffcanvas');
	var overlay = document.getElementById('mmOffcanvasOverlay');
	var closeBtn = document.getElementById('mmOffcanvasClose');
	function setMenu(open) {
		if (panel) { panel.classList.toggle('open', open); }
		if (overlay) { overlay.classList.toggle('open', open); }
		if (burger) { burger.setAttribute('aria-expanded', open ? 'true' : 'false'); }
		document.body.style.overflow = open ? 'hidden' : '';
	}
	if (burger) { burger.addEventListener('click', function () { setMenu(true); }); }
	if (closeBtn) { closeBtn.addEventListener('click', function () { setMenu(false); }); }
	if (overlay) { overlay.addEventListener('click', function () { setMenu(false); }); }
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape') { setMenu(false); }
	});

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
			timer = setInterval(function () { go(current + 1); }, 6500);
		}
		if (prev) { prev.addEventListener('click', function () { go(current - 1); restart(); }); }
		if (next) { next.addEventListener('click', function () { go(current + 1); restart(); }); }
		restart();
	}

	// FAQ accordion.
	document.querySelectorAll('.mm-faq-item').forEach(function (item) {
		var q = item.querySelector('.mm-faq-q');
		var a = item.querySelector('.mm-faq-a');
		if (!q || !a) { return; }
		q.addEventListener('click', function () {
			var open = item.classList.contains('open');
			document.querySelectorAll('.mm-faq-item.open').forEach(function (other) {
				other.classList.remove('open');
				var oa = other.querySelector('.mm-faq-a');
				if (oa) { oa.style.maxHeight = null; }
			});
			if (!open) {
				item.classList.add('open');
				a.style.maxHeight = a.scrollHeight + 'px';
			}
		});
		// First item open by default.
		if (item.classList.contains('open')) {
			a.style.maxHeight = a.scrollHeight + 'px';
		}
	});

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
