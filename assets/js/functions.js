jQuery(document).ready(function($) {  
   
  // Adicionando classe ACTIVE no Painel(Collapse) da página -> Perguntas Frequentes
   $('.card-header h5 a').click(function() {
    $('.card-header').removeClass('active');

    //If the panel was open and would be closed by this click, do not active it
    if(!$(this).closest('.card').find('.panel-collapse').hasClass('in'))
        $(this).parents('.card-header').addClass('active');
  });


  //  // Start Header Animation
  // $(window).scroll(function () {
  //   if ($(document).scrollTop() == 0) {
  //     $('.dbn-header-menu').removeClass('tiny'); 
  //   } else {
  //     $('.dbn-header-menu').addClass('tiny');  
  //   }
  // });
 

 
  // // Start One Page Scrolling 
  // $('.dbn-header-menu').singlePageNav({      
  //   offset: 130,
  //   filter: ':not(.external)', 
  // });
 
  //   $('.navbar .nav a').on('click', function(){ 
  //       if($('.navbar-toggle').css('display') !='none'){
  //           $(".navbar-toggle").trigger( "click" ); 
  //       }
  //   });
    

});