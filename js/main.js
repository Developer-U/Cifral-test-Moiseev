'use srtict';

jQuery (function($) {

  // Попап наши клиенты

  $('.clients-gallery__link').click(function(e) {
    e.preventDefault(); 
    
    $('.clients-gallery__more').addClass('clients-gallery__more_open');
    });
  
    $('.clients-gallery__сlose').click(function(e) {
    e.preventDefault(); 
      
    $('.clients-gallery__more').removeClass('clients-gallery__more_open');
  });

});


  /*---Контактная форма в попапе Let’s Talk---*/

jQuery(document).ready(function($) {	
	$('#FormPopupConnect').submit(function() {
		var formData = new FormData();		
		var userName = $('#FormPopupConnect input[name="first_name"]').val();    
    var email = $('#FormPopupConnect input[name="email"]').val();		
			
    formData.append('first_name', userName);    
    formData.append('message', $('#FormPopupConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "mailing.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, 
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.noteConnect .note').html(result);
      $('.noteConnect .note').show();

      $("#FormPopupConnect").find('input, textarea').each(function() {
        $(this).val('');
      });   
      
      setTimeout(function() {
        $('.ContactFormPopup .note').hide();
        $('.ContactFormPopup').removeClass('ContactFormPopup_open');
      }, 3000);              
      
    }

    
    });	 
    
    return false;    

	});
});

/*---Логика всплывашки---*/

jQuery(function($) {
  $('.our-clients__button').click(function(e) {
  e.preventDefault();  
  
  $('.ContactFormPopup').addClass('ContactFormPopup_open');
  });

  $('.ContactFormClose').click(function(e) {
  e.preventDefault(); 
    
  $('.ContactFormPopup').removeClass('ContactFormPopup_open');
  });


  // burger

  $('.headerBurger').click(function(e) {
    e.preventDefault(); 
    
    $('.header-menu').addClass('header-menu_open');
    });
  
    $('.headerNavClose').click(function(e) {
    e.preventDefault(); 
      
    $('.header-menu').removeClass('header-menu_open');
    });
  
    $('.bottom-bar__link').click(function(e) {
            
    $('.header-menu').removeClass('header-menu_open');
  });

  $(window).bind('scroll',function(e){
    parallaxScroll();
  });
  
  function parallaxScroll(){
      var scrolled = $(window).scrollTop();
      $('.ellips1').css('top',(0-(scrolled*.25))+'60%');
      $('.ellips2').css('top',(0-(scrolled*.25))+'95%');
      $('.ellips3').css('top',(0-(scrolled*.25))+'1%');
      $('.ellips4').css('top',(0-(scrolled*.15))+'90%');
      $('.ellips5').css('top',(0-(scrolled*.10))+'20%');
  }
 
});


/*---Контактная форма на странице Contact Us---*/

jQuery(document).ready(function($) {	
  $('#FormConnect').submit(function() {
    var formData = new FormData();		
    var userName = $('#FormConnect input[name="first_name"]').val();    
    var email = $('#FormConnect input[name="email"]').val();		
      
    formData.append('first_name', userName);    
    formData.append('message', $('#FormConnect textarea').val());
    formData.append('email', email);

    console.log(formData);		  

    $.ajax({
    url: "mailing.php",
    type: "POST",
    dataType : "json", 
    cache: false,
    contentType: false,
    processData: false,  
    data: formData, 
    success: function(msg) {
      if(msg == 'Message has been sent') {
      result = '<div class="ok2"><h3>Спасибо, Ваша заявка принята!<br />Мы с Вами свяжемся в ближайшее время.</h3></div>';
      
      
      }
      
      
      else {result = msg;}
      $('.note2').html(result);

      $("#FormConnect").find('input, textarea').each(function() {
        $(this).val('');
      });   
      
      setTimeout(function() {
        $('.our-contacts__right .note2').hide();
      }, 3000);              
      
    }

    
    });	 
    
    return false;    

  });
});
