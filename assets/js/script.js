/**
 * script.js
 */


(function($) {


  $(document).ready(function(){



    $("#menu_trigger, #menu_overlay").click(function(){

       $("body").toggleClass("menu--active");
      //  $("#header_module").toggleClass("is--active");

   });

    $('img').load(function(){
        $(".masonry").masonry();
    });
    $(".masonry").masonry();

   });

    $(window).load(function() {
      $('#slideshow').flexslider({
        namespace: "flex-",             //{NEW} String: Prefix string attached to the class of every element generated by the plugin
        selector: "> div.item",       //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
        animation: "fade",              //String: Select your animation type, "fade" or "slide"
        easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
        direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
        reverse: false,                 //{NEW} Boolean: Reverse the animation direction
        animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
        startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        slideshow: true,                //Boolean: Animate slider automatically
        slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds
        initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
        randomize: false,               //Boolean: Randomize slide order
      });

    });


})( jQuery );
