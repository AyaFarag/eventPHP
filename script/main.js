$(document).ready(function() {
    
    /*new WOW().init();*/
    
   
   
    
    
    $('#fullpage').fullpage({
        navigation: false,
        loopHorizontal:false,
        css3:false,
        
        
       
        scrollingSpeed: 900,
        
        normalScrollElements: '.scrollable-element',
        
        afterLoad: function(anchorLink, index){
            if(index == 2){
                $('.navbar').addClass('navInverse'); 
            } else if(index == 1){
                $('.navbar').removeClass('navInverse');
            } else if(index == 3){
                $('.navbar').removeClass('navInverse');
            }else if(index == 4){
                $('.navbar').removeClass('navInverse');
            } else if(index == 5){
                $('.navbar').addClass('navInverse');
            } 
        },
        
       lazyLoading: true,
    });
    
   var typed = new Typed('#typed', {
                stringsElement: '#typed-strings',
                typeSpeed: 10,
                loop: true,
                showCursor: false,
                startDelay: 500,
                // backspacing speed
                backSpeed: 30,
		        // time before backspacing
                backDelay: 4000,
});
});
