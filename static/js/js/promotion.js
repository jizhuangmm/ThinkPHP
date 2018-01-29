 $('.see').click(function(){
            var height=$(".tabslider").height();

            var ul=$(this).prev('.ul_img').clone();
            var yuanul=$(this).prev('.ul_img');
            var mt=yuanul.children().eq(0).css("margin-top");

            $(".tabslider").height(height+yuanul.height());
            ul.children().css({
                marginTop:"120px"
            });
            $(this).prev('.ul_img').after(ul);
            ul.children().animate({
                marginTop:mt
            }, 800 );
        });