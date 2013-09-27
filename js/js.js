function deleteItem(id){
	console.log('удалим',id)
}
function ajaxAddToCart(id,size){
	console.log('добавим в корзину',id,size);
	
	id = id||0;
	size=size||0;
	if (!id || !size){ return 0 };

	return $.ajax({
	  	type: "POST",
	  	url: "/ajax/addToCart.php",
	  	data: { 'id': id, 'size': size },
	  	dataType: "html"
	}).done(function(message) {
	  	console.log('ajax add successfully done with ',message);
	});
}

function ajaxDeleteFromCart(id,size){
	console.log('удалим из корзины',id);
	
	id = id||0;
	size = size||0;
	if (!id || !size){ return 0 };

	return $.ajax({
	  	type: "POST",
	  	url: "/ajax/deleteFromCart.php",
	  	data: { 'id': id, 'size': size },
	  	dataType: "html"
	}).done(function(message) {
	  	console.log('ajax delete successfully done with ',message);
	  	return 1;
	});
}
function ajaxUpdateCart(id,size,num){
	console.log("меняем количество ",id,size,' на ',num);
	
	id = id || 0;
	size = size || 0;
	num = num || 0;
	if (!id || !size){ return 0 };

	$.ajax({
		type: "POST",
		url: "ajax/updateCart.php",
		data: { 'id': id, 'size': size, 'num':num },
		dataType:"html"
	}).done(function(message){
		console.log('ajax update successfully to ',num);
	})

}

var $window;
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
			var yPos = -($window.scrollTop() / 10); 
			var coords = yPos + 'px';
			$parallax_obj.css({ backgroundPositionY: coords });
		}); 
 	});	

   	function hover_change(element){
   		var temp = element.getAttribute('data-hover');
   		element['data-hover'] = element.src;
   		element.src = temp;
   		console.log('change',element.src,element['data-hover'])
   	}


	/*------ Работа с корзиной ------*/
	var timeout_button_active;
	// выбор размера
	$('#size').change(function(){
		var price = $('#product_price').html();	
		clearTimeout(timeout_button_active);
		$('.to_cart').removeClass('success')
			.addClass('active')
			.html('Добавить в заказ<span>Всего за '+price+'</span>')
	})


	// добавить в карзину
	$('.to_cart').on('click',function(){
		$this = $(this);
		
		if($this.hasClass('active')){
			ajaxAddToCart($this.data('id'),$('#size').val());
			$this.removeClass('active').addClass('success').html('Товар в корзине<span><a href="/cart.php">посмотрите свою корзину</a></span>');

			timeout_button_active = setTimeout(function(){
				$('.to_cart').removeClass('success')
					.addClass('active')
					.html('Добавить в заказ<span>Всего за '+$('#product_price').html()+'</span>')
			},2000)
		}

	});

	// изменение количества
	$('.cart_num').change(function(){
		$this = $(this);
		$item = $this.parent().parent('.cart_desc').parent('li');

		id = $item.data('id');
		size = $item.data('size');

		// поправляем ввод (если неправильный то 0)
		var num = $this.val();
		num = isNaN(parseInt(num)) ? 0 : parseInt(num);
		$this.val(num);

		ajaxUpdateCart(id,size,num);
	})

   	// удаления
   	$('.delete').on('click',function(){
		var $deleting_item = $(this).parent('li');
   		ajaxDeleteFromCart($deleting_item.data('id'),$deleting_item.data('size'))
   		$deleting_item.slideUp('slow');
   	})

});

