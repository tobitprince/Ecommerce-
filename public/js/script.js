

function onClickMenu()
{
	document.getElementById('menu-bar').classList.toggle('change');
	document.getElementById('nav').classList.toggle('change-btn');

}



$(document).ready(function()
{ 
	$('#gallery-center').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',


  gallery:
  {
  	enabled:true
  }
  // other options
});

  $(window).scroll(function(){
      let position=$(this).scrollTop();

      if(position>=718)
      {
        $('#back-to-top').addClass('scrollTop');
        
      }
      else
      {
        $('#back-to-top').removeClass('scrollTop');
      }


    });

  $('.navi a, .header-link,#back-to-top').click(function(link){

  link.preventDefault();
  let target=$(this).attr('href');
  $('html,body').stop().animate({
  scrollTop:$(target).offset().top-25


  },3000);





});

  $(".hgg,.info").ripples({
  dropRadius: 25,
  perturbance: 0.6,
  
});


});