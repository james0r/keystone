(function( $ ) {

    $( '.cmb-type-font select' ).each(function() {

        $(this).higooglefonts({
            theme: 'default cmb-font-select2',
            selectedCallback:function(e){
                console.log(e);
            },
            loadedCallback:function(font){
                /*/////// This is where you should apply font.///////
                /////////////////////////////////////////////////////*/
                $("#paragraph").css("font-family", font); // Change the font-family of the #paragraph
            }
        });
    });

})(jQuery);