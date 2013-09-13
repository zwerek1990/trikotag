function deleteItem(id){
	console.log('удалим',id)
}

function addToCart(){
	console.log('добавим в корзину',id)

}

var $window;

$(window).load(function(){
	

});


/*--------Загрузка DOM---------------------------------------------------------------------*/
$(document).ready(function(){

	$window = $(window);

	//на главной слайдер
	$('.fullscreen').blueberry({
		pager:false,
		keynav:true,
		interval:2000,
		duratation:1000
	});

	//слайдер на "О компании"
	$('.blueberry').blueberry({
		// pager:false,
		keynav:true,
		interval:2000,
		duratation:300
	});

	//галерея с кнопками
	$('.fancybox').fancybox({
		padding:0,
		scrolling : 'visible',
		closeBtn : false,
		closeClick : false,
		helpers: {
			buttons	: {},
			title: {
            	type: 'inside',
        	}
		}
	});

	// полная картинка
	$('.fancyfull').fancybox({
		padding: 0,
		fitToView : false,
		helpers: {
			// buttons	: {},
			title: {
            	type: 'inside',
        	}
		}
	});

	// отправка формы ------
	$('.submit').on('click',function(){
		$(this).parent('form').submit();
	})

	// закроем сообщения ------
	$('.message').on('click',function(){
		$(this).hide();
	})

	// card_list ------
	$('ul.card_list li').on('click',function(){
		$this = $(this);//кеш
		//показываем этот
		$this.addClass('active');
		$this.children('.info').slideDown("fast");
		//прячем другие
		$this.siblings('li.active').removeClass('active');
		$this.siblings('li').children('.info').slideUp("fast");
	});


    // эффект параллакса ------        
   	$('.section').each(function(){
     var $parallax_obj = $(this); // Назначаем объект
                    
      	$(window).scroll(function() {
			var yPos = -($window.scrollTop() / 20); 
			var coords = '50% '+ yPos + 'px';
			$parallax_obj.css({ backgroundPosition: coords });
		}); 
 	});	

	/*------ Работа с корзиной ------*/
	
	// выбор размера
	$('#size').change(function(){
		console.log("change to",$(this).val());
		$('.to_cart').addClass('active');
	})


	$('.to_cart').on('click',function(){
		$this = $(this);
		
		if(!$this.hasClass('active')){
			var temp = $this.html();
			$this.html('<span>сначала вам нужно</span>выбрать размер');
			
			setTimeout(function(){
				$this.html(temp);
				console.log(temp);
			},1000)

			return 0;
		}
		alert('gotcha')
		addToCart($this)
		
	});


   	// анимация удаления
   	$('.delete').on('click',function(){
		var $deleting_item = $(this).parent('li');
   		$deleting_item.slideUp('slow')
   	})

});

