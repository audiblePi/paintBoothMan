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
    $('.search-wrapper .type').val("please-select");
    $('.search-wrapper .sizes').val('please-select');


    $('.search-wrapper .filter-by').change(function(){
        $('.woo-wrap .woocommerce').hide();
        $('.search-wrapper .sizes').attr('disabled', true);
        if ($(this).val() == 'type'){
            $('.search-wrapper .type').val("please-select");
            $('.search-wrapper select.sizes').val("please-select");

            $('.search-wrapper .type').attr('disabled', false);
    		$('.search-wrapper .manufacturer').css('display', 'none');
    		$('.search-wrapper .type').css('display', 'block');
    	}
    	if ($(this).val() == 'manufacturer'){
            $('.search-wrapper .type').val("please-select");
            $('.search-wrapper select.sizes').val("please-select");

    		$('.search-wrapper .manufacturer').attr('disabled', false);
    		$('.search-wrapper .type').css('display', 'none');
    		$('.search-wrapper .manufacturer').css('display', 'block');
            $('.man-wrapper').load("/wp-content/themes/paintBoothMan/assets/ajax/man-list.html");
    	}
    });

    $('.search-wrapper .type').change(function(){
        getCategory($(this).val());
    });

    $(document).on("change",".search-wrapper .manufacturer",function(e){        
        getCategory($(this).val());
    });

    $(document).on("change",".search-wrapper .sizes",function(e){
        showThisSize($(this).val());
    });

    function getCategory(c){
        $('.size-wrapper').html('<select class="sizes" "style=display:none" disabled><option value="please-select">Loading...</option></select>');
        $('.search-wrapper .sizes').val('please-select');
        $('.search-wrapper .sizes').attr('disabled', true);
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
                getSizes(c);
            }
        });
    }

    function getSizes(c){
        console.log('getting sizes');
        post_data = { 'myAction'  : 'size','category'  : c};
        $.ajax({
            type: 'post',
            url: '/wp-content/themes/paintBoothMan/assets/ajax/ajax.php',
            data: post_data,
            dataType: "text",
            success: function (text) {
                $('.size-wrapper').html(text);
                $('.search-wrapper .sizes').attr('disabled', false);
            }
        });
    }

    function showThisSize(s){
        var temp = "product-cat-" + s;
        $('.woocommerce ul.products li').each(function(){
            $(this).hide();
            if ($(this).hasClass(temp)){
                $(this).removeClass('first');
                $(this).removeClass('last');
                $(this).show();
            }
        });
        $('.woo-wrap .woocommerce').show();
    }
});