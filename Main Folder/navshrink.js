$(window).scroll(function(){
  if($(document).scrollTop()>50){
    $('#myHeader').addClass('shrink');
  }
  else{
    $('#myHeader').removeClass('shrink');
  }
});
