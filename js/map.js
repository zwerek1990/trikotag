<<<<<<< HEAD

var myMap, myPlacemark;

var stores = {
  kalinina:     [56.1350,47.2830],
  yarmarka:     [56.1140,47.2485],
  shupashkar:   [56.0985,47.2850],
  kontur:       [56.1290,47.1640],
  passage:      [56.1165,47.4837],
  semiya:       [56.1155,47.4518],
  oktyabr:      [55.4970,46.4151],
  fuchika:      [55.7485,49.2248]
}
var x,y;
function resize_map(){
    var client_w = $(window).width();
    var client_h = $(window).height();
    $map = $('#map');
    if (client_w >= 960){
        $map.width(client_w-480)
        $map.height(client_h);

        $map.css('position','fixed');
        $('.sheet').css({
            width: 480,
            'padding-top': 70
         })

    }else{
        $map.width(client_w)
        $map.height(client_h/2);

        $map.css('position','relative');
        $('.sheet').css({
            width: '100%',
            'padding-top': 0
         })

    }
}
function init () {
    resize_map();
    myMap = new ymaps.Map('map', {
        center: [56.135,47.292],
        zoom: 13
    });

    // myMap.behaviors.enable('scrollZoom') ;
    myMap.controls
        // Кнопка изменения масштаба.
        .add('zoomControl', { left: 5, top: 75 })
        // Список типов карты
        .add('typeSelector',{ left: 130, top: 75 })
        // Стандартный набор кнопок
        .add('mapTools', { left: 35, top: 75 });

    kalinina = new ymaps.Placemark([stores.kalinina[0],stores.kalinina[1]], {
            balloonContentHeader: "Чебоксарская трикотажная фабрика",
            balloonContentBody: "Фабрика, фирменный магазин, отдел продаж, мелкооптовый магазин, телефон: (8352) 30-94-30",
            balloonContentFooter: "улица Калинина, 107, г. Чебоксары",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    yarmarka = new ymaps.Placemark([stores.yarmarka[0],stores.yarmarka[1]], {
            balloonContentHeader: "Магазин в торговом комплексе «Ярмарка»",
            balloonContentBody: "В центре города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине по в торговом комплексе Ярмарка, телефон: (8352) 44-20-83",
            balloonContentFooter: "г. Чебоксары, Ярмарка",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    shupashkar = new ymaps.Placemark([stores.shupashkar[0],stores.shupashkar[1]], {
            balloonContentHeader: "Отдел в универмаге «Шупашкар»",
            balloonContentBody: "фирменный отдел расположен на втором этаже торгового комплекса «Шупашкар», телефон: (8352) 54-50-92",
            balloonContentFooter: "г. Чебоксары, пр. Тракторостроителей 1/34, 2 этаж",
            hintContent: "Чебоксарский трикотаж",

        },{
            preset: 'twirl#tailorShopIcon'
        });

    kontur = new ymaps.Placemark([stores.kontur[0],stores.kontur[1]], {
            balloonContentHeader: "Магазин в торговом центре «Контур»",
            balloonContentBody: "В северо-западном районе города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине в торговом центре «Контур»",
            balloonContentFooter: "г.Чебоксары, Ядринское шоссе, 3",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });
    passage = new ymaps.Placemark([stores.passage[0],stores.passage[1]], {
            balloonContentHeader: "Магазин в торговом центре «Пассаж»",
            balloonContentBody: "В Новочебоксарске приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном в торговом центре «Пассаж», телефон: (8352) 48-32-43",
            balloonContentFooter: "г. Новочебоксарск, ул. Советская, 40",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    semiya = new ymaps.Placemark([stores.semiya[0],stores.semiya[1]], {
            balloonContentHeader: "Торговый отдел ООО 'Чулочно-трикотажная фабрика'' в ТЦ 'Семья'",
            balloonContentBody: "В Новочебоксарске приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном в торговом центре 'Семья', телефон: (8352) 44-48-01",
            balloonContentFooter: "г. Новочебоксарск, ул. Винокурова, 70А",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        }); 

    oktyabr = new ymaps.Placemark([stores.oktyabr[0],stores.oktyabr[1]], {
            balloonContentHeader: "Розничный магазин ООО 'Чулочно-трикотажная фабрика'",
            balloonContentBody: "В Шумерле приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном по улице Октябрьская, 19А, телефон: (83536) 3-01-99",
            balloonContentFooter: "г. Шумерля, ул. Октябрьская, 19А",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    fuchika = new ymaps.Placemark([stores.fuchika[0],stores.fuchika[1]], {
            balloonContentHeader: "Розничный магазин ООО 'Чулочно-трикотажная фабрика'",
            balloonContentBody: "В Казани приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном по улице Фучика, 50, телефон: 8-905-346-07-50",
            balloonContentFooter: "г. Казань, ул. Фучика, 50",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });
    
    myMap.geoObjects.add(kalinina);
    myMap.geoObjects.add(yarmarka);
    myMap.geoObjects.add(shupashkar);
    myMap.geoObjects.add(kontur);
    myMap.geoObjects.add(passage);
    myMap.geoObjects.add(semiya);
    myMap.geoObjects.add(oktyabr);
    myMap.geoObjects.add(fuchika);
}


/*-------При изменении размера окна----------*/
$(window).resize(function() {
   resize_map();
});

/*--------Загрузка DOM------*/
$(document).ready(function(){
    
    ymaps.ready(init);

    $('ul.card_list li').on('click',function(){
    if (myMap.getZoom()!=15) {
        myMap.setZoom(15);
    }
        x = stores[$(this).attr('id')][0];
        y = stores[$(this).attr('id')][1];
        myMap.panTo([x,y], {
            delay:50,
            flying: true
        });
        // $("html, body").animate({scrollTop: 0}, "slow");
    });
});

=======

var myMap, myPlacemark;

var stores = {
  kalinina:     [56.1350,47.2830],
  yarmarka:     [56.1140,47.2485],
  shupashkar:   [56.0985,47.2850],
  kontur:       [56.1290,47.1640],
  passage:      [56.1165,47.4837],
  semiya:       [56.1155,47.4518],
  oktyabr:      [55.4970,46.4151],
  fuchika:      [55.7485,49.2248]
}
var x,y;
function resize_map(){
    var client_w = $(window).width();
    var client_h = $(window).height();
    $map = $('#map');
    if (client_w >= 960){
        $map.width(client_w-480)
        $map.height(client_h);

        $map.css('position','fixed');
        $('.sheet').css({
            width: 480,
            'padding-top': 70
         })

    }else{
        $map.width(client_w)
        $map.height(client_h/2);

        $map.css('position','relative');
        $('.sheet').css({
            width: '100%',
            'padding-top': 0
         })

    }
}
function init () {
    resize_map();
    myMap = new ymaps.Map('map', {
        center: [56.135,47.292],
        zoom: 13
    });

    // myMap.behaviors.enable('scrollZoom') ;
    myMap.controls
        // Кнопка изменения масштаба.
        .add('zoomControl', { left: 5, top: 75 })
        // Список типов карты
        .add('typeSelector',{ left: 130, top: 75 })
        // Стандартный набор кнопок
        .add('mapTools', { left: 35, top: 75 });

    kalinina = new ymaps.Placemark([stores.kalinina[0],stores.kalinina[1]], {
            balloonContentHeader: "Чебоксарская трикотажная фабрика",
            balloonContentBody: "Фабрика, фирменный магазин, отдел продаж, мелкооптовый магазин, телефон: (8352) 30-94-30",
            balloonContentFooter: "улица Калинина, 107, г. Чебоксары",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    yarmarka = new ymaps.Placemark([stores.yarmarka[0],stores.yarmarka[1]], {
            balloonContentHeader: "Магазин в торговом комплексе «Ярмарка»",
            balloonContentBody: "В центре города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине по в торговом комплексе Ярмарка, телефон: (8352) 44-20-83",
            balloonContentFooter: "г. Чебоксары, Ярмарка",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    shupashkar = new ymaps.Placemark([stores.shupashkar[0],stores.shupashkar[1]], {
            balloonContentHeader: "Отдел в универмаге «Шупашкар»",
            balloonContentBody: "фирменный отдел расположен на втором этаже торгового комплекса «Шупашкар», телефон: (8352) 54-50-92",
            balloonContentFooter: "г. Чебоксары, пр. Тракторостроителей 1/34, 2 этаж",
            hintContent: "Чебоксарский трикотаж",

        },{
            preset: 'twirl#tailorShopIcon'
        });

    kontur = new ymaps.Placemark([stores.kontur[0],stores.kontur[1]], {
            balloonContentHeader: "Магазин в торговом центре «Контур»",
            balloonContentBody: "В северо-западном районе города Чебоксары приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине в торговом центре «Контур»",
            balloonContentFooter: "г.Чебоксары, Ядринское шоссе, 3",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });
    passage = new ymaps.Placemark([stores.passage[0],stores.passage[1]], {
            balloonContentHeader: "Магазин в торговом центре «Пассаж»",
            balloonContentBody: "В Новочебоксарске приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном в торговом центре «Пассаж», телефон: (8352) 48-32-43",
            balloonContentFooter: "г. Новочебоксарск, ул. Советская, 40",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    semiya = new ymaps.Placemark([stores.semiya[0],stores.semiya[1]], {
            balloonContentHeader: "Торговый отдел ООО 'Чулочно-трикотажная фабрика'' в ТЦ 'Семья'",
            balloonContentBody: "В Новочебоксарске приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном в торговом центре 'Семья', телефон: (8352) 44-48-01",
            balloonContentFooter: "г. Новочебоксарск, ул. Винокурова, 70А",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        }); 

    oktyabr = new ymaps.Placemark([stores.oktyabr[0],stores.oktyabr[1]], {
            balloonContentHeader: "Розничный магазин ООО 'Чулочно-трикотажная фабрика'",
            balloonContentBody: "В Шумерле приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном по улице Октябрьская, 19А, телефон: (83536) 3-01-99",
            balloonContentFooter: "г. Шумерля, ул. Октябрьская, 19А",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });

    fuchika = new ymaps.Placemark([stores.fuchika[0],stores.fuchika[1]], {
            balloonContentHeader: "Розничный магазин ООО 'Чулочно-трикотажная фабрика'",
            balloonContentBody: "В Казани приобрести товары Чулочно-трикотажной фабрики вы можете в фирменном магазине, расположенном по улице Фучика, 50, телефон: 8-905-346-07-50",
            balloonContentFooter: "г. Казань, ул. Фучика, 50",
            hintContent: "Чебоксарский трикотаж",
        },{
            preset: 'twirl#tailorShopIcon'
        });
    
    myMap.geoObjects.add(kalinina);
    myMap.geoObjects.add(yarmarka);
    myMap.geoObjects.add(shupashkar);
    myMap.geoObjects.add(kontur);
    myMap.geoObjects.add(passage);
    myMap.geoObjects.add(semiya);
    myMap.geoObjects.add(oktyabr);
    myMap.geoObjects.add(fuchika);
}


/*-------При изменении размера окна----------*/
$(window).resize(function() {
   resize_map();
});

/*--------Загрузка DOM------*/
$(document).ready(function(){
    
    ymaps.ready(init);

    $('ul.card_list li').on('click',function(){
    if (myMap.getZoom()!=15) {
        myMap.setZoom(15);
    }
        x = stores[$(this).attr('id')][0];
        y = stores[$(this).attr('id')][1];
        myMap.panTo([x,y], {
            delay:50,
            flying: true
        });
        // $("html, body").animate({scrollTop: 0}, "slow");
    });
});

>>>>>>> 6bd5f7f47edec5b4bb0acca6caad895ea3a0cdc3
