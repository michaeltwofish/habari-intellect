(function($){ 

	//Finding min and max values in array from http://snippets.dzone.com/posts/show/769
	Array.prototype.min = function(){ 
		return Math.min.apply({},this)
	};
	Array.prototype.max = function(){ 
		return Math.max.apply({},this)
	};

	$.fn.masonry = function() {
		this.filter(function(){
			return !/^(\s+)*$/.test(this.textContent); // filters out empty walls
			})
			.each(function() {
				var wall = $(this);
				var brick = wall.children();

				wall.wrapInner('<div class=\"masonryWrap\"></div>');
				var mWrap = wall.children('.masonryWrap');

				var brickW = brick.outerWidth(true);
				var brickColCount = Math.floor( mWrap.width() / brickW ) ;
				
				var colH=new Array();
				for ( i=0; i < brickColCount; i++) {
					colH[ i ] =  0 ;
				}		
				
				mWrap.css({ position: 'relative' });
				
				brick.css({
						float: 'none',
						position: 'absolute',
						display: 'block'
					})
					.each(function(){
						for ( i=brickColCount-1; i > -1; i-- ) {
							if ( colH[ i ] == colH.min() ) {
								var thisCol = i;
							}
						}
						$(this).css({
							top: colH[ thisCol ],
							left: brickW * thisCol
						});
						colH[ thisCol ] += $(this).outerHeight(true);
					});
				
				mWrap.height( colH.max() );
				return this; 
			}); 
	};
})(jQuery);