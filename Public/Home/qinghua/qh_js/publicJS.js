/**
 * lyy Created by admin on 16-5-31.
 */

$(document).ready(function(){
  $('.menu-li span').click(function(){
    var ulObj = $(this).next('ul');
    if(ulObj.is(':hidden')){
      $(this).next('ul').slideDown();
      $(this).addClass('cur');
    }else{
      $(this).next('ul').slideUp();
      $(this).removeClass('cur');
    }
  });

  $('.erji-li').hover(function(){
    $(this).find('.erji-box').fadeIn();
  },function(){
    $(this).find('.erji-box').fadeOut();
  });

  $('.menu-sec a').hover(function(){
    var ind = $(this).index();
    var $obj = $(this).parent().parent().find('.erjiDesc');
    $obj.eq(ind).css({display:'block'}).siblings('.erjiDesc').css({display:'none'})
  });
})
