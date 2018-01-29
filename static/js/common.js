var p = 0,
    timer,
    i = 0,
    h = $(window).height(),
    starX,
    endX,
    moveX,
    count = $('.starCar dl').length,
    num = count - 4;
//设置banner高度为一屏
$('.banner').css({
    height: h - $('.header').height() + 'px'
})
$('.star-car').css({
    height: h + 'px'
});
$('.news').css({
    height: h + 'px'
});
$('.user').css({
    height: h - $('.new-zi').height() - 1 + 'px'
})

document.documentElement.style.fontSize = document.documentElement.clientWidth / 16.8 + 'px';
//当可视窗口大小变化时页面适应
$(window).on('resize', function () {
    document.documentElement.style.fontSize = document.documentElement.clientWidth / 16.8 + 'px';
});
//设置侧边悬浮窗划过效果
$('.aside p').hover(function () {
    var idx = $(this).index();
    $('.aside span').eq(idx).stop().animate({
        left: '-320%'
    })
}, function () {
    var idx = $(this).index();
    $('.aside span').eq(idx).stop().animate({
        left: '0'
    })
});
//当滚动时设置导航固定
$(window).on('scroll', function () {
    var scr = $(window).scrollTop(),
        h = $('.header').height();
    if (scr > 0) {
        $('.header').addClass('fix').css({
            opacity: '0'
        });
        $('.header2').show();
    } else if (scr < h) {
        $('.header').removeClass('fix').css({
            opacity: '1'
        })
        $('.header2').hide();
    }
});
//划过显示导航
// $('.header').hover(function () {
//     $(this).css({
//         opacity: '0'
//     })
// }, function () {
//     if ($(window).scrollTop() == 0) {

//     } else {
//         $(this).css({
//             opacity: '1'
//         })
//         return false;
//     }
// });
$('.header').hover(function () {
    $(this).animate({
        opacity: '1'
    },"slow")
}, function () {
    if ($(window).scrollTop() == 0) {

    } else {
        $(this).stop(true).animate({
            opacity: '0'
        },"slow")
        return false;
    }
});
//返回顶部
$('.top').on('click', function () {
    $('body').animate({
        scrollTop: '0'
    })
    i = 0;
});


//定义两个函数 为标题显示动画
function showP(box) {
    $(box).children('p').stop().animate({
        bottom: '0'
    });
};

function hideP(box, h) {
    $(box).children('p').stop().animate({
        bottom: -h + 'px'
    })
};
$('.news').on('mouseover', 'div', function () {
    var that = $(this);
    showP(that)
});
$('.news').on('mouseout', 'div', function () {
    var that = $(this),
        h = $(this).children('p').height();
    hideP(that, h)
});
$('.user-o').on('mouseover', function () {
    var that = $(this);
    showP(that)
});
$('.user-o').on('mouseout', function () {
    var that = $(this),
        h = $(this).children('p').height();
    hideP(that, h)
});

$('.user-t-t').on('mouseover', function () {
    var that = $(this);
    showP(that)
});
$('.user-t-t').on('mouseout', function () {
    var that = $(this),
        h = $(this).children('p').height();
    hideP(that, h)
})

function transLate(w) {
    $('.starCar').css({
        'transform': 'translateX(' + w + '%)'
    });
    $('.starCar').css({
        'transition': 'all 0.04s linear'
    });
};
$('.star-right').hover(function () {
    timer = setInterval(function () {
        if (count > 4) {
            num = count - 4;
        } else {
            num = 0;
        }
        if (p < (-35 - num * 25)) {
            p == -35 - num * 25;
            clearInterval(timer)
        } else {
            p -= 1;
        }
        transLate(p)
    }, 40)
}, function () {
    clearInterval(timer)
})
$('.star-left').hover(function () {
    timer = setInterval(function () {

        if (p > 35) {
            p == 35;
            clearInterval(timer)
        } else {
            p += 1;
        }
        transLate(p)
    }, 40)
}, function () {
    clearInterval(timer);
});
//拖动
$('.starCar dl').on('mousedown', function (e) {
    e = e || window.event;
    starX = e.pageX;
    $('.starCar dl').on('mousemove', function (e) {
        e = e || window.event;
        endX = e.pageX;
        moveX = p + ((endX - starX) / $('.starCar').width()) * 100;
        if (moveX > 35) moveX = 35;
        if (moveX < (-35 - num * 25)) moveX = (-35 - num * 25);
        $('.starCar').css({
            transform: 'transLateX(' + moveX + '%)'
        })
        $('.starCar').css({
            transition: 'all 0.1s linear'
        })
    });
});
$('.starCar dl').on('mouseup', function () {
    p = moveX;
    $('.starCar dl').unbind("mousemove");
});

//点击显示城市列表
$('.city').on('click', function () {
    if ($(this).attr('data-id') == 0) {
        $(this).addClass('bg').addClass('bor_bot_no');
        $(this).attr('data-id', '1');
        $(this).children('img').css({
            transform: 'rotate(180deg)'
        });
        $(this).children('img').css({
            transition: 'all 0.3s linear'
        });
        $('.citylist').slideDown();
    } else if ($(this).attr('data-id') == 1) {
        $(this).removeClass('bg').removeClass('bor_bot_no');
        $(this).attr('data-id', '0');
        $(this).children('img').css({
            transform: 'rotate(360deg)'
        });
        $(this).children('img').css({
            transition: 'all 0.3s linear'
        });
        $('.citylist').slideUp();
    }
});
//点击搜索框
$('.search').on('click', function () {
    $(this).hide();
    $('.search2').fadeIn();
})
$('.new-three-o').hover(function(){
    $(this).addClass('now')
},function(){
    $(this).removeClass('now')
})
$('.weixin').hover(function(){
    $(this).attr('src','../../../../static/img/weixin2.png')
},function(){
    $(this).attr('src','../../../../static/img/weixin.png')
})
$('.tcat').hover(function(){
    $(this).attr('src','../../../../static/img/cat2.png')
},function(){
    $(this).attr('src','../../../../static/img/cat.png')
})
$('.swiper-button-prev').hover(function(){
    $(this).css({opacity : 1})
},function(){
    $(this).css({opacity : 0.5})
})
$('.swiper-button-next').hover(function(){
    $(this).css({opacity : 1})
},function(){
    $(this).css({opacity : 0.5})
})


$('.pinCar').on("mouseenter",function(){
    $('.tab-bor-top').show("slow"); 
    $('.pin-car').fadeIn("slow"); 
})



$('.pin-car').on("mouseleave",function(){
    $('.tab-bor-top').hide("slow"); 
    $('.pin-car').fadeOut("slow"); 
})