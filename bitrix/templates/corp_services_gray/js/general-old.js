var delay = (function () {
  var timer = 0;
  return function (callback, ms) {
    clearTimeout(timer);
    timer = setTimeout(callback, ms);
  };
})();

var calcYMap = {
  from: 'Сыктывка', //[61.6764200, 50.8099400, 'Сыктывка'], //долгота, широта, город
  to: 'Москва',// [37.3854705, 37.3854705, 'Москва'], //долгота, широта, город
  distance: 0,
  map: {},

  /*  coordinate: function (city, type) {
   var currentAd = ymaps.geocode(city, {
   results: 1
   }).then(function (res) {
   var firstGeoObject = res.geoObjects.get(0),
   bounds = firstGeoObject.properties.get('boundedBy');

   if (type == 'from') {
   calcYMap.from[0] = (bounds[0][1] + bounds[1][1]) / 2; //долгота
   calcYMap.from[1] = (bounds[0][1] + bounds[1][1]) / 2; //широта
   calcYMap.from[2] = city; //город

   } else {
   calcYMap.to[0] = (bounds[0][1] + bounds[1][1]) / 2;
   calcYMap.to[1] = (bounds[0][1] + bounds[1][1]) / 2;
   calcYMap.to[2] = city; //город
   }

   console.log(bounds, 'bounds');
   console.log(calcYMap.to, 'calcYMap.to');
   console.log(calcYMap.from, 'calcYMap.from');

   });
   },*/

  init: function () {
    // Создаем модель мультимаршрута.
    var multiRouteModel = new ymaps.multiRouter.MultiRouteModel([calcYMap.from, calcYMap.to], {
      wayPointDraggable: true,
      boundsAutoApply: true
    });

    // Создаем карту с добавленной на нее кнопкой.
    calcYMap.map = new ymaps.Map('calc-ymap', {
      center: [61.6764200, 50.8099400], //Сыктывкар
      zoom: 12,
      controls: []
    }, {
      buttonMaxWidth: 300
    }),

      // Создаем на основе существующей модели мультимаршрут.
      multiRoute = new ymaps.multiRouter.MultiRoute(multiRouteModel, {
        // Путевые точки можно перетаскивать.
        // Маршрут при этом будет перестраиваться.
        wayPointDraggable: true,
        boundsAutoApply: true
      });

    // Подписываемся на события модели мультимаршрута.
    multiRoute.model.events
      .add("requestsuccess", function (event) {
        calcYMap.distance = 0;

        var routes = event.get("target").getRoutes()

        //fromCity = multiRoute.properties._data.waypoints[0].name;
        //toCity = multiRoute.properties._data.waypoints[1].name;

        for (var i = 0, l = routes.length; i < l; i++) {
          if (calcYMap.distance > routes[i].properties.get("distance").value || calcYMap.distance == 0) {
            calcYMap.distance = routes[i].properties.get("distance").value;
          }
        }

        var weight = $("#calc-weight").val();
        if (routes.length > 0) {
          $('.calc-price').html(((parseFloat(calcYMap.distance / 1000) * weight).toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ").replace('.', ',')) + ' руб.');
        } else {
          $('.calc-price').html('Маршрут не найден');
        }
      })
      .add("requestfail", function (event) {
        console.log("Ошибка: " + event.get("error").message);
      });

    calcYMap.map.geoObjects.add(multiRoute);
  },
  destroy: function () {
    calcYMap.map.destroy();
  },
  getSearchResults: function (request, response) {
    console.log(request, response);
    var geocoder = ymaps.geocode(request.term, {
      boundedBy: [[41.20506404457001, 22.648437500000007], [78.84988495150193, -179.1484375]],
      strictBounds: true,
      results: 5,
      json: true
    });
    geocoder.then(
      function (res) {
        var objects = res.GeoObjectCollection.featureMember;
        var data = [];
        for (var i = 0; i < objects.length; i++) {
          var name = objects[i].GeoObject.name;
          var text = objects[i].GeoObject.metaDataProperty.GeocoderMetaData.text;
          data.push({name: name, label: text});
        }
        response(data);
      },
      function (err) {
        //error
      }
    );
  }
};

$(function () {

  //region события калькулятора
  if ($("#calc-map").length > 0) {

    /*$(".autocomplete").autocomplete({
     source: ['Сыктывкар', 'Сызрань', 'Корткерос', 'Визябож', 'Москва', 'Киров'],
     change: function (event, ui) {

     calcYMap.from = $('#calc-from').val();
     calcYMap.to = $('#calc-to').val();

     if (calcYMap.from.length >= 2 && calcYMap.to.length >= 2) {
     calcYMap.destroy();
     calcYMap.init();
     }
     }
     });*/

    $(".autocomplete").autocomplete({
      source: calcYMap.getSearchResults,
      minLength: 3,
      select: function (event, ui) {
        var object = ui.item;
        $(this).val(object.label);

        calcYMap.from = $('#calc-from').val();
        calcYMap.to = $('#calc-to').val();

        if (calcYMap.from.length >= 2 && calcYMap.to.length >= 2) {
          calcYMap.destroy();
          calcYMap.init();
        }
        return false;
      }
    });

    //TODO Если необходимо делать запрос к карте при вводе с клавиатуры
    /*$('#calc-from, #calc-to').on('keyup keydown keypress click', function () {
     calcYMap.from = $('#calc-from').val();
     calcYMap.to = $('#calc-to').val();
     if (calcYMap.from.length >= 2 && calcYMap.to.length >= 2) {

     delay(function () {
     calcYMap.destroy();
     calcYMap.init();
     }, 500);
     }
     });*/

    $("#calc-weight").selectmenu({
      change: function () {
        if (calcYMap.distance > 0) {
          $('.calc-price').html(((parseFloat(calcYMap.distance / 1000) * $('#calc-weight').val()).toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ").replace('.', ',')) + ' руб.');
        }
      }
    });

    /*$('#calc-weight').on('change', function () {
     if (calcYMap.distance > 0) {
     $('.calc-price').html(((parseFloat(calcYMap.distance / 1000) * $('#calc-weight').val()).toFixed(0).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ").replace('.', ',')) + ' руб.');
     }
     });*/

    ymaps.ready(calcYMap.init);
  }
  //endregion

  //region прайс
  if ($('#price-page').length > 0) {

    $('.tabs-slide').owlCarousel({
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 2000,
      loop: false,
      dots: true,
      nav: false,
      items: 1,
      margin: 10,
      mouseDrag: false,
      touchDrag: false,
      animateOut: '',
      animateIn: 'bounce',
      smartSpeed: 450,
      responsive: {
        0: {
          animateOut: '',
          animateIn: 'bounceInDown'
        },
        768: {
          animateOut: 'slideOutDown',
          animateIn: 'flipInX'
        }
      }
    });

    $('.ul-price-tabs li').click(function (e) {
      var dataTabs = $(this).attr('data-tabs'),
        dots = $('.price-tabs .owl-dots');

      $('.ul-price-tabs li').removeClass('active');
      $(this).addClass('active');

      $(dots[0].children[dataTabs]).trigger('click');
    });
  }
  //endregion

  /*region вызов форм*/
  var popup = {
    idForm: '',
    open: function (obj) {

      popup.idForm = $(obj).attr('data-id-form');

      $('#overlay').fadeIn(400,
        function () {
          $('#' + popup.idForm).css('display', 'block').animate({opacity: 1, top: '15%'}, 200);
        });
    },
    close: function (obj) {

      popup.idForm = ($(obj).attr('data-id-form')) ? $(obj).attr('data-id-form') : popup.idForm;

      $('#' + popup.idForm).animate({opacity: 0, top: '5%'}, 200,
        function () {
          $(this).css('display', 'none');
          $('#overlay').fadeOut(400);
        }
      );
    }
  };

  $('.popup-open').click(function () {
    popup.open(this);
    event.preventDefault(); //если ссылка
  });

  $('.popup-close').click(function () {
    popup.close(this);
  });
  /*endregion*/

});