(($) => {
	const $window = $(window),
		  $body = $('body'),
		  $sidebar = $('#sidebar');
  
	// Breakpoints.
	breakpoints({
	  xlarge:   [ '1281px',  '1680px' ],
	  large:    [ '981px',   '1280px' ],
	  medium:   [ '737px',   '980px'  ],
	  small:    [ '481px',   '736px'  ],
	  xsmall:   [ null,      '480px'  ]
	});
  
	// IE flexbox workarounds.
	if (browser.name === 'ie') {
	  $body.addClass('is-ie');
	}
  
	// Initial animations on page load.
	$window.on('load', () => {
	  setTimeout(() => $body.removeClass('is-preload'), 100);
	});
  
	// Forms.
	$('form').on('click', '.submit', (event) => {
	  event.stopPropagation();
	  event.preventDefault();
	  $(event.currentTarget).parents('form').submit();
	});
  
	// Sidebar.
	if ($sidebar.length > 0) {
	  const $sidebar_a = $sidebar.find('a');
  
	  $sidebar_a
		.addClass('scrolly')
		.on('click', function() {
		  const $this = $(this);
  
		  if ($this.attr('href').charAt(0) !== '#') return;
  
		  $sidebar_a.removeClass('active');
		  $this.addClass('active').addClass('active-locked');
		})
		.each(function() {
		  const $this = $(this),
				id = $this.attr('href'),
				$section = $(id);
  
		  if ($section.length < 1) return;
  
		  // Scrollex.
		  $section.scrollex({
			mode: 'middle',
			top: '-20vh',
			bottom: '-20vh',
			initialize: () => $section.addClass('inactive'),
			enter: () => {
			  $section.removeClass('inactive');
  
			  if (!$sidebar_a.filter('.active-locked').length) {
				$sidebar_a.removeClass('active');
				$this.addClass('active');
			  } else if ($this.hasClass('active-locked')) {
				$this.removeClass('active-locked');
			  }
			}
		  });
		});
	}
  
	// Scrolly links.
	$('.scrolly').scrolly({
	  speed: 1000,
	  offset: () => {
		if (breakpoints.active('<=large') && !breakpoints.active('<=small') && $sidebar.length > 0) {
		  return $sidebar.height();
		}
		return 0;
	  }
	});
  
	// Spotlights and Features sections omitted for brevity, apply similar refactoring as above.
  
  })(jQuery);
  