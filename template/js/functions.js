jQuery(function($) {
	$('.single-item').slick({
        autoplay: true,
        arrows: true,
		pauseOnHover: true,
		pauseOnFocus: false,
        autoplaySpeed: 4000,
		fade: false,
		cssEase: 'ease',
    });

    $(".nav_a").on('click', function(e){
    	$(".nav_a").removeClass('active');
    	$(this).addClass('active');
    	e.preventDefault();
    	var attr = $(this).attr('href');
    	var offset = $(attr).offset().top;
    	$('html, body').animate({
    		scrollTop: offset - 34
    	}, 500);
    });

    
	function onScroll(){
	    var scroll_top = $(document).scrollTop() + 150;
	    $(".nav_a").each(function(){
	        var hash = $(this).attr("href");
	        var target = $(hash);
	        if (target.position().top <= scroll_top
	        	 && target.position().top + target.outerHeight() > scroll_top) {
	            $(".nav_a.active").removeClass("active");
	            $(this).addClass("active");
	        } else {
	            $(this).removeClass("active");
	        }
	    });
	}

    $(document).on('scroll', function(){
    	var docH = $(this).scrollTop();
    	if(docH >= 169) {
    		$('nav').addClass('fixed');
    		$('body').css('padding-top', '36px');
    	}
    	else {
    		$('nav').removeClass('fixed');
    		$('body').css('padding-top', '');
    	}
    	onScroll();
    });

    // maskphone
    var phone = document.getElementById('telephone');
    var maskOptions = { mask: '+{7}(000)-000-00-00' }
    var mask = new IMask(phone, maskOptions);

    // send form
    $('.field-js').on('input', function(){ $(this).css('box-shadow', 'none'); });
    $('.form').submit(function(e){
        e.preventDefault();
        var error=0;
        $(".form").find(".field-js").each(function() {               
            if(!$(this).val())
            {
                $(this).css('boxShadow', 'inset 0 0 15px rgba(255, 61, 61, 0.9)');
                error=1;
            }  
        });        
        if(error==1){
            $("#order-result" ).css({                
                "color": "rgb(255,61,61)"
            });
            $("#order-result").html("<span>Пожалйста, заполните обязательные поля!</span>");
            return false;
        }
        else {
            ajax_post();
        }
    });

    function ajax_post() {
        $.ajax({
            url: "../mail/callback-form.php",
            type: "POST",
            data: $(".form").serialize(),
            success: function(response) {
                $("#order-result" ).css({                
                    "color": "#261200"
                });
                $("#order-result").html("<span>Спасибо за Вашу заявку!<br /> Наш специалист свяжется с Вами в ближайшее время.</span>");            
                $('.field-js').val('');
            },
            error: function(response) {
              UIkit.modal.alert("К сожалению, ваш запрос не выполнен из-за проблем на сервере. Пожалуйста, попробуйте повторить немного позднее или позвоните нам по телефону.");
           }
        });
    }

    // politicus
    $(".politic_p span").on("click", function(){
        $(".politicus_wrapper, .politicus").fadeIn(300);
    });
    $(document).keydown(function(e) {
        if(e.which == 27)
        {
            $(".politicus_wrapper, .politicus").fadeOut(300);
        }
    });
    $(".close, .politicus_wrapper").on("click", function(){
        $(".politicus_wrapper, .politicus").fadeOut(300);
    });
    $(".politicus").on("click", function(){
        return false;
    });

    // mobile effects
    $(".open_nav").on('click', function(){
        $(this).toggleClass('close_nav');
        $(this).parent().toggleClass('visible');
    });
});