$(function(){
var slidesToshow_val = 5;
var slidesToshow_leng = $('ul li').length;
  if(slidesToshow_leng > slidesToshow_val){
    slidesToshow_val = slidesToshow_leng;
  }
 $('#slick01').slick({
   slidesToShow:slidesToshow_val,
   autoplay:true,
   autoplaySpeed:1800,
   centerMode:true,
 });
});
