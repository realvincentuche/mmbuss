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
	var main = document.getElementById('content');
	var menuOpen = false;
	var previousFocus = null;
	function setMenu(open) {
		if (!panel || !burger || menuOpen === open) { return; }
		menuOpen = open;
		if (panel) { panel.classList.toggle('open', open); }
		if (overlay) { overlay.classList.toggle('open', open); }
		if (burger) { burger.setAttribute('aria-expanded', open ? 'true' : 'false'); }
		if (burger) { burger.setAttribute('aria-label', open ? 'Close menu' : 'Open menu'); }
		panel.setAttribute('aria-hidden', open ? 'false' : 'true');
		panel.inert = !open;
		if (overlay) { overlay.inert = !open; }
		if (main) { main.inert = open; }
		document.body.style.overflow = open ? 'hidden' : '';
		if (open) {
			previousFocus = document.activeElement;
			if (closeBtn) { closeBtn.focus(); }
		} else if (previousFocus && previousFocus.focus) {
			previousFocus.focus();
		}
	}
	if (burger) { burger.addEventListener('click', function () { setMenu(true); }); }
	if (closeBtn) { closeBtn.addEventListener('click', function () { setMenu(false); }); }
	if (overlay) { overlay.addEventListener('click', function () { setMenu(false); }); }
	document.addEventListener('keydown', function (e) {
		if (!menuOpen) { return; }
		if (e.key === 'Escape') {
			e.preventDefault();
			setMenu(false);
		}
		if (e.key === 'Tab' && panel) {
			var focusable = panel.querySelectorAll('a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])');
			if (!focusable.length) { return; }
			var first = focusable[0];
			var last = focusable[focusable.length - 1];
			if (e.shiftKey && document.activeElement === first) {
				e.preventDefault();
				last.focus();
			} else if (!e.shiftKey && document.activeElement === last) {
				e.preventDefault();
				first.focus();
			}
		}
	});

	// Hero slider.
	var slider = document.getElementById('mmSlider');
	if (slider) {
		var slides = Array.prototype.slice.call(slider.querySelectorAll('.mm-slide'));
		var dotsWrap = slider.querySelector('.mm-slider-dots');
		var current = 0;
		var timer = null;
		var paused = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

		slides.forEach(function (_, i) {
			var d = document.createElement('button');
			d.className = 'mm-slider-dot' + (i === 0 ? ' active' : '');
			d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
			d.setAttribute('aria-current', i === 0 ? 'true' : 'false');
			d.addEventListener('click', function () { go(i); restart(); });
			dotsWrap.appendChild(d);
		});
		var dots = Array.prototype.slice.call(dotsWrap.querySelectorAll('.mm-slider-dot'));

		function go(i) {
			slides[current].classList.remove('active');
			slides[current].setAttribute('aria-hidden', 'true');
			slides[current].inert = true;
			dots[current].classList.remove('active');
			dots[current].setAttribute('aria-current', 'false');
			current = (i + slides.length) % slides.length;
			slides[current].classList.add('active');
			slides[current].setAttribute('aria-hidden', 'false');
			slides[current].inert = false;
			dots[current].classList.add('active');
			dots[current].setAttribute('aria-current', 'true');
		}
		function restart() {
			if (timer) { clearInterval(timer); }
			timer = null;
			if (!paused) {
				timer = setInterval(function () { go(current + 1); }, 8000);
			}
		}
		slider.addEventListener('mouseenter', function () {
			if (timer) { clearInterval(timer); timer = null; }
		});
		slider.addEventListener('mouseleave', restart);
		slider.addEventListener('focusin', function () {
			if (timer) { clearInterval(timer); timer = null; }
		});
		slider.addEventListener('focusout', function (e) {
			if (!slider.contains(e.relatedTarget)) { restart(); }
		});
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
				var oq = other.querySelector('.mm-faq-q');
				var oa = other.querySelector('.mm-faq-a');
				if (oq) { oq.setAttribute('aria-expanded', 'false'); }
				if (oa) { oa.style.maxHeight = null; }
			});
			if (!open) {
				item.classList.add('open');
				q.setAttribute('aria-expanded', 'true');
				a.style.maxHeight = a.scrollHeight + 'px';
			} else {
				q.setAttribute('aria-expanded', 'false');
			}
		});
		// First item open by default.
		if (item.classList.contains('open')) {
			q.setAttribute('aria-expanded', 'true');
			a.style.maxHeight = a.scrollHeight + 'px';
		}
	});
	// Recalc open answer height after fonts/resize so text never clips.
	window.addEventListener('resize', function () {
		document.querySelectorAll('.mm-faq-item.open .mm-faq-a').forEach(function (oa) {
			oa.style.maxHeight = oa.scrollHeight + 'px';
		});
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
}());
