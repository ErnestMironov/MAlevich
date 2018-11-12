import WOW from "wow.js";


var wow = new WOW();




function showDash () {
  if($(".block-2__list").length){
    var dash = document.querySelector(".block-2__list");
    var dashOffset = dash.getBoundingClientRect()
    if(dashOffset.top < (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight) / 4){
      dash.classList.add("block-2__list_animate");
    }
  }
} 

// function glassRotate () {
  //   var glassOffset = glass.getBoundingClientRect();
  //   var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  //   let halfWindow = (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight) / 2;
  //   let rotate =  (scrollTop + halfWindow - $(".block-2__glass").offset().top) / - (halfWindow / 150) ;
  //   console.log($(".block-2__glass").offset().top)
  //   console.log(halfWindow)
  //   if((glassOffset.top < halfWindow)){
    //     if(rotate > -90){
      //       $(".block-2__glass-wrapper").css("transform", "rotate( " + rotate + "deg) translateX(" + rotate/-4 +"px)"); 
      //     }
      //   }else{
        //     $(".block-2__glass-wrapper").css("transform", "rotate(0deg)"); 
        //   }
        // }
function glassRotate () {
  if($(".block-2__glass-wrapper").length){
    var glass = document.querySelector(".block-2__glass");
    var glassOffset = glass.getBoundingClientRect();
    let halfWindow = (window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight) / 2;
    if(glassOffset.top < halfWindow){
      $(".block-2__glass-wrapper").addClass("glass-fall"); 
    }
  }
}
        
        
        window.onscroll = function() {
          showDash();
  glassRotate ();
}

window.onload = function(){ 
  wow.init(); 
}