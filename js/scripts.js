jQuery(document).ready(function($) {
	setTimeout(function(){
	jQuery('.grid').masonry({
		// options
		itemSelector: '.grid-item',
		gutter: 10,
		percentPosition: true
		
		// columnWidth: 200
	});},200);
	//setTimeout(function(){jQuery('.contenedor').fadeOut(1000,"linear");},1500);
	jQuery(document).scroll(function(e){
		if(jQuery("#cargar .more").size()>0){
			if (element_in_scroll("#cargar .more") && !loading) {
				loading = true;
				jQuery('.more').trigger('click');
			}
		}
	});
	jQuery('.more').click(function(){
		$.ajax({
			url: 		"/wp-admin/admin-ajax.php",
			data:		{page:	++paged,action: "get_post_lazy"},
			beforeSend:	function(){
				$('#bowlG').show();
			},
			success: function(response){
				if(response == ""){
					$('#bowlG').hide();
					jQuery("#cargar").html('<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only"> Stop: </span> Se han cargado todas las entradas</div>');
					loadgin = false;
				}else{
					jQuery('.grid').append(response);
					jQuery( '.grid' ).masonry( 'reloadItems' );
					setTimeout(function(){
						jQuery( '.grid' ).masonry( 'layout' );
						$('#bowlG').fadeOut(1000,"linear");
						loading = false;
					},300);
				}
			}
		});
	});
});//JSON.parse
var loading = false;
function element_in_scroll(elem){
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
(function() {
	var state = document.readyState;
	if(state === 'interactive' || state === 'complete') {
		jQuery('.contenedor').fadeOut(1000,"linear");
		clearTimeout(arguments.callee);
	}
	else setTimeout(arguments.callee, 300);
})();