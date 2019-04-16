import $ from 'jquery';
window.$ = window.jQuery = $;
require('jquery-visible');
require('slick-carousel');

export default {
  init() {
  	// Wrap embedded objects and force them into 16:9
  	$('iframe, embed, video').not('.ignore-ratio').wrap('<div class="video-container" />');

  	// HEADER: Responsive Nav Toggle
  	$('#responsive-nav-toggle').click(e => {
      e.preventDefault();
  		const $this = $(e.currentTarget);
  		$this.toggleClass('is-active');
      $('#nav-responsive').toggleClass('is-active');
  	});

    // NAV: Scroll to Contact Section
    $('a[href="#contact"]').click(e => {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $('#footer').offset().top - 20
      }, 1666);
      $('#nav-responsive, #responsive-nav-toggle').removeClass('is-active');
    })
  },
  finalize() {
    // FIELDS: Input Field Label Focus
    $('input, textarea').on('focus', e => {
      const $this = $(e.currentTarget);
      $this.closest('.form-row').find('label').addClass('is-active');
      $this.closest('.form-row').find('.wpcf7-not-valid-tip').fadeOut();
    });
    $('input, textarea').on('focusout', e => {
      const $this = $(e.currentTarget);
      $this.closest('.form-row').find('label').removeClass('is-active');
    });
    $('.wpcf7-not-valid-tip').on('click', e => {
      $('body').fadeOut();
    });

    // MODULE: Tile Search
    $('.live-search input').on('keyup', e => {
      const $this = $(e.currentTarget);
      const value = $this.val().toLowerCase();
      $('.tiles-wrap .tile').filter((i,e) => {
        const $this = $(e);
        $this.toggle($this.text().toLowerCase().indexOf(value) > -1);
      });
    });

    // MODULE: Hero Image
    $('.hero-slide-wrap').slick({
      arrows: false,
      fade: true,
      autoplay: true,
      autoplaySpeed: 8000,
      speed: 1500,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            adaptiveHeight: true,
          },
        },
      ],
    });

  	// MODULES: Parallax
  	$(window).on('load resize scroll', () => {
  		const d_scroll = $(window).scrollTop();
  		const w_height = $(window).height();
  		$('.animate-parallax').each((i, e) => {
  			const $this = $(e);
  			const $thisBg = $this.find('.module-bg');
  			const p_position = $this.offset().top;
  			const e_height = $this.outerHeight();
  			const ebg_height = $this.find('.module-bg').outerHeight();
  			const bg_diff = ebg_height - e_height;
  			const dhit_in = p_position - w_height;
  			const dhit_out = p_position + e_height;
  			const dhit_read = p_position - w_height - d_scroll;
  			// Boolean hit Check
  			if (dhit_read <= 0 && d_scroll <= dhit_out) {
  				const per_scrolled = (d_scroll - dhit_in) / (dhit_out - dhit_in);
  				const offset = (bg_diff * per_scrolled);
  				$thisBg.css('transform', `translateY(-${offset}px)`);
  			}
  		});
  	});

  	// MODULES: Animate onScreen
  	$(window).on('load resize scroll', () => {
  		$('.animate-on-enter').each((i, el) => {
  			const $this = $(el);
  			if ($this.visible(true)) {
  				$this.addClass('is-visible');
  			}
  		});
  		$('.animate-on-leave').each((i, el) => {
  			const $this = $(el);
  			if (!$this.visible(true)) {
  				$this.removeClass('is-visible');
  			}
  		});
  	});
  },
};
