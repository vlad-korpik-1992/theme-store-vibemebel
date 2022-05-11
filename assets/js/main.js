$(document).ready(function() {

  /* Edit breadcrumbs link*/
  $("a[href*='shop']")
   .each(function()
   { 
      this.href = this.href.replace(/shop/, 
         "product-category");
   });

   $("span[itemprop='name']")
   .each(function()
   { 
      this.innerHTML = this.innerHTML.replace('Товары', 'Каталог');
   });

   $("a[href*='category/novosti']")
   .each(function()
   { 
      this.href = this.href.replace(/category/, 
         "");
   });

  $('.cart__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.cart__sliderprev'
  });
  $('.cart__sliderprev').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    infinite: true,
    asNavFor: '.cart__slider',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 6
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 575,
        settings: {
          dots: false,
          slidesToShow: 4,
          centerMode: false
        }
      },
      {
        breakpoint: 424,
        settings: {
          dots: false,
          slidesToShow: 3,
          centerMode: false
        }
      },
      {
        breakpoint: 374,
        settings: {
          dots: false,
          slidesToShow: 2,
          centerMode: false
        }
      }
    ]
  });

  /* scrollto */

  $('.scrollto a').on('click', function scroll(e) {
		e.preventDefault();
		let href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top - 150
		}, {
			duration: 370,
			easing: "linear"
		});
		$('.menu__list').removeClass('menu__list_active');
		$('body').removeClass('body_fixed');
		return false;
	});

  /* Popup form*/

  $('.cart__content__btn').click(function (e) {
		  e.preventDefault();
      $( ".popup" ).toggleClass('open');
	});

  $('.popup__header_close').click(function (e) {
		  e.preventDefault();
      $( ".popup" ).toggleClass('open');
      $('#ajax__form').trigger('reset');
      $("#status__error").empty()
	});

  $('.popup__area').click(function (e) {
    e.preventDefault();
    $( ".popup" ).toggleClass('open');
    $('#ajax__form').trigger('reset');
    $("#status__error").empty()
  });

  /* Product sending miscalculation*/

  $('#product-send').click(function(e){
    e.preventDefault();
    x = document.getElementById('modalname').value;
    if (x === "") {
      document.getElementById('status__error').textContent = "Укажите Ваше имя";
      return false;
    }
    x = document.getElementById('modalphone').value;
    if (x === "") {
      document.getElementById('status__error').textContent = "Укажите Ваш номер телефона";
      return false;
    } else {
      let re = /^\+375[0-9]{9}$/g;
      if(!re.test(x)){
          document.getElementById('status__error').textContent = "Укажите номер телефона в формате +375ХХХХХХХХХ";
          return false;
      }
    }
    x =  document.getElementById('messages').value;
      if (x === "") {
        document.getElementById('status__error').textContent = "Вы не указали товар который Вас интересует";
        return false;
    }
    $('#status__error').removeClass("error");
    document.getElementById('status__error').textContent = "Отправка...";

    const formProductData = {
      'productName': $('textarea[name=letter]').val(),
      'firstname': $('input[name=modalname]').val(),
      'phone': $('input[name=modalphone]').val(),
    };

    $.ajax({
      url: '/wp-content/themes/vibemebel/product-send.php',
      type: "POST",
      data: formProductData,
      success: function() {
          $('#ajax__form').trigger('reset');
          $('#status__error').text("Ваше сообщение отправлено!");
          setTimeout(function () {
            $('#status__error').text("").addClass("error");
          }, 2000);
      },
      error: function (jqXHR) {
          $('#status__error').text(jqXHR);
      }
    });
  });

  /* Ajax sending mail */

  $('#ajax-send').click(function(e) {
    e.preventDefault();
    x =  document.getElementById('firstname').value;
    if (x === "") {
        document.getElementById('status_form').textContent = "Укажите Ваше имя";
        return false;
    }
    x =  document.getElementById('phone').value;
    if (x === "") {
        document.getElementById('status_form').textContent = "Укажите Ваш номер телефона";
        return false;
    } else {
        let re = /^\+375[0-9]{9}$/g;
        if(!re.test(x)){
            document.getElementById('status_form').textContent = "Укажите номер телефона в формате +375ХХХХХХХХХ";
            return false;
        }
    }
    x =  document.getElementById('messages').value;
      if (x === "") {
        document.getElementById('status_form').textContent = "Вы не указали товар который Вас интересует";
        return false;
    }

    $('#status_form').removeClass("error");
    document.getElementById('status_form').textContent = "Отправка...";

    const formData = {
        'firstname': $('input[name=firstname]').val(),
        'phone': $('input[name=phone]').val(),
        'letter': $('textarea[name=letter]').val(),
    };

    $.ajax({
        url: "../wp-content/themes/vibemebel/send.php",
        type: "POST",
        data: formData,
        success: function() {
            $('#letter__form').trigger('reset');
            $('#status_form').text("Ваше сообщение отправлено!");
            setTimeout(function () {
              $('#status_form').text("").addClass("error");
            }, 2000);
        },
        error: function (jqXHR) {
            $('#status_form').text(jqXHR);
        }
    });
});

});
/*Ajaxify header cart items count in Woocommerce*/
$(document.body).trigger('wc_fragment_refresh');

/*Input value country BY*/
$('input[name=billing_country]').val("Беларусь");
$("#billing_country").attr('readonly', 'readonly');

/* Header fixed */
$(function() {
 let header = $('.header');
 let hederHeight = header.height();
 $(window).scroll(function() {
  let height = $(window).scrollTop();
   if($(this).scrollTop() > 1) {
    header.addClass('header_fixed');
    $('body').css({
       'paddingTop': hederHeight+'px'
    });
   } else {
    header.removeClass('header_fixed');
    $('body').css({
     'paddingTop': 0
    })
   }
 });
});