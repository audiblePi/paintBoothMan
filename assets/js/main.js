jQuery(function($){
    $('.wpcf7 .your-first-name input').attr('placeholder', 'First');
    $('.wpcf7 .your-last-name input').attr('placeholder', 'Last');
    $('.wpcf7 .your-city input').attr('placeholder', 'City');
    $('.wpcf7 .your-state input').attr('placeholder', 'State');
    $('.wpcf7 .your-address1 input').attr('placeholder', 'Address 1');
    $('.wpcf7 .your-address2 input').attr('placeholder', 'Address 2');
    $('.wpcf7 .your-zip input').attr('placeholder', 'Zip Code');
    $('.wpcf7 .your-country input').attr('placeholder', 'Country');
    $('.wpcf7 .your-phone input').attr('placeholder', 'Phone');
    $('.wpcf7 .your-email input').attr('placeholder', 'E-mail');
    $('.wpcf7 .your-message textarea').attr('placeholder', 'Message');
    $('.menu-container .icon-menu').click(function(e){$('.mobile-menu-container').slideToggle(200);});
    $('.menu-item-has-children > a').attr('onclick', 'return false');
	$('.menu-container .menu-item-has-children').hover(
		function(){$(this).children('.sub-menu').slideDown(200);},
        function(){$(this).children('.sub-menu').slideUp(200);}
	);
	$('.search-form #s').attr('placeholder', 'SEARCH');
	$('.bxslider').bxSlider({
		minSlides: 5,
		maxSlides: 5,
		slideWidth: 500,
		slideMargin: 10,
		controls: false,
		moveSlides: 1,
		pager: 1
	});

    $('.filter-by').val('default');

    $('.search-wrapper .filter-by').change(function(){
        $('.search-wrapper .sizes').attr('disabled', true);
        if ($(this).val() == 'type'){
            $('.search-wrapper .type').attr('disabled', false);
    		$('.search-wrapper .manufacturer').css('display', 'none');
    		$('.search-wrapper .type').css('display', 'block');
    	}
    	if ($(this).val() == 'manufacturer'){
    		$('.search-wrapper .manufacturer').attr('disabled', false);
    		$('.search-wrapper .type').css('display', 'none');
    		$('.search-wrapper .manufacturer').css('display', 'block');
            $('.man-wrapper').load("/wp-content/themes/paintBoothMan/assets/ajax/man-list.html");
    	}
    });

    $('.search-wrapper .type').change(function(){
        $('.search-wrapper .sizes').attr('disabled', false);
        getCategory($(this).val());
        getSizes($(this).val());
    });

    $(document).on("change",".search-wrapper .manufacturer",function(e){        
        getCategory($(this).val());
        getSizes($(this).val());
    });

    $(document).on("change",".search-wrapper .sizes",function(e){
        showThisSize($(this).val());//refactor!!
    });

    function getCategory(c){
        $('.woo-wrap').html('<div class="pre-loader"></div>');
        $('.woo-wrap .woocommerce').hide();
        post_data = { 'myAction'  : 'category','category'  : c};
        $.ajax({
           type: 'post',
           url: '/wp-content/themes/paintBoothMan/assets/ajax/ajax.php',
           data: post_data,
           dataType: "text",
           success: function (text) {
                $('.woo-wrap').html(text);
                $('.woo-wrap .woocommerce').hide();
                setTimeout(function(){$('.woo-wrap .woocommerce').fadeIn(200);}, 200);
            }
        });
    }

    function getSizes(c){
        post_data = { 'myAction'  : 'size','category'  : c};
        $.ajax({
           type: 'post',
           url: '/wp-content/themes/paintBoothMan/assets/ajax/ajax.php',
           data: post_data,
           dataType: "text",
           success: function (text) {$('.size-wrapper').html(text);}
        });
    }

    function showThisSize(s){
        var temp = "product-cat-" + s;
        console.log(temp);
        $('.woocommerce ul.products li').each(function(){
            $(this).fadeOut(200);
            if ($(this).hasClass(temp)){
                $(this).removeClass('first');
                $(this).removeClass('last');
                $(this).delay(210).fadeIn(200);
            }
        });
    }
});