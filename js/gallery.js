
var client_w,client_h,step;
var $gal,$li,$big_images;
// var target_left=0;
var moving = false;


function widthHeight(){
	client_w=$(this).width();
	client_h=$(this).height();
}

function init(){	
	//укажим тип тип больших картинок
	if (client_w/client_h>1){
		$gal.addClass('horisontal');
	}else{
		$gal.addClass('vertical');
	}
	$('.desc h3:first-child').addClass('active')
		.next('.goods').css('display','block');
}
function update(){
	//ширина галереи
	$gal.width($li.length*client_w);	
	//ширина блока легенды
	var desc_width;
	$li.width(client_w);

	if (client_w/client_h>1){
		//если горизонтальный экран
		//фото во всю высоту
		$('.vertical').removeClass('vertical')
			.addClass('horisontal');
		$big_images.height(client_h);


		$gal.children('li').each(function() {
			$this = $(this);
			//расчитаем ширину легенды
			desc_width =  Math.ceil( client_w - $this.children('.big_image').width() - 1);
			//выбираем ширину описания товара
			if (desc_width > 780){
				good_width = '14.5%';
			}else if(desc_width > 650){
				good_width = '18%';
			}else if(desc_width > 520){
				good_width = '23%';
			}else if(desc_width > 390){
				good_width = '31%';
			}else if(desc_width > 260){
				good_width = '48%';
			}else{
				good_width = '100%';
			}
			$this.children('.desc').width(desc_width)
				.children('.goods').children('li').width(good_width);
		});

	}else{
		//если вертикальный экран
		$('.topline').css({background:"url('/style/img/back.png')"});
		// $this.children('.big_image').width(client_h);
		// $this.children('.big_image').css('width','auto');
		//фото во всю ширину
		$big_images.height('');
		$('.horisontal').removeClass('horisontal')
			.addClass('vertical');	
		$('.desc').width('');
	}
}

function move_gallery(dir){
	var time = 800;
	if (dir == 'right'){
		//вправо
		if($gal.slide < $gal.slides_total-1){
    		if (!moving){
				moving = true;
				
				setTimeout(function(){$gal.slide++;moving = false;},time/2);
				$gal.animate({
	    			left: "-="+client_w
	    		},time,function(){
	    			moving = false;
	    		});
			}
		}
	}else{
		//влево
		if($gal.slide > 0){
			if (!moving){
				// alert('left')
				moving = true;

				setTimeout(function(){$gal.slide--;moving = false;},time/2);
				$gal.animate({
	    			left: "+="+client_w
	    		},time,function(){
		    		moving = false;
	    		});
			}
		}
	}
}
/*-------Готовы все картинки------------------------*/
$(window).load(function(){
	update();
})
/*-------При изменении размера окна---------------*/
$(window).resize(function() {
	widthHeight();
	update();
});

/*--------Загрузка DOM-----------*/
$(document).ready(function(){
	$gal=$('.collection_slider');
	$gal.slide = 0;
	$gal.slides_total = $gal.children().length;
	$li = $('.collection_slider > li');
	$big_images = $('.big_image');
	
	widthHeight();
	init();
	
	// Гармошка 
	$('.collection_slider h3').on('click',function(){
		$this = $(this);			
		if($this.hasClass('active')){
			$this.removeClass('active');
			$this.next('ul.goods').slideUp('fast');
		}else{
			$this.addClass('active');
			$this.next('ul.goods').slideDown('fast');
		}
	});

	// Прокрутка описания
	$(".desc").on('mousewheel',function(event, delta) {
	    $this = $(this);
	    //только если в режиме горизонтального экрана
	    height = $this.height();
	    offset = parseInt($(this).css('margin-top'));
	    if (!$gal.hasClass('vertical')){
	    	//для горизонтальных экранов
		    if (delta < 0 ){
		    	if (offset > client_h - height - 60){
		    		$(this).animate({marginTop: "-=50" },10);
		    	}
		    }else{
		    	if (offset <= -50){
		    	   	$(this).animate({marginTop: "+=50" },10);
				}
		    }
		}else{
			//для вертикальных экранов
		    if (delta < 0 ){
		    	if (offset > client_h - $this.prev('.big_image').height() - 70 - height){
		    		$(this).animate({marginTop: "-=50" },10);
		    	}
		    }else{
		    	if (offset <= -50){
		    	   	$(this).animate({marginTop: "+=50" },10);
				}
		    }
		}
	});

	// Перемещения слайдов
	$('#to_left').on('click',function(){
		move_gallery('left')
	});
	$('#to_right').on('click',function(){
		move_gallery('right')
	});
	$("body").keydown(function(e) {
		if(e.keyCode == 37) { // left
			move_gallery('left')
		}
		else if(e.keyCode == 39) { // right
			move_gallery('right')
		}
	});
});
