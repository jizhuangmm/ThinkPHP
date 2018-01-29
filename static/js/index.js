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
 var hei = parseInt( $('.header').height());
$('.banner').css({
    height: h - hei + 'px'
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
        left: '50px'
    })
});
//划过显示导航

//返回顶部
$('.top').on('click', function () {
    $('body').animate({
        scrollTop: '0'
    })
    i = 0;
});
//设置明星车型划过效果
$('.starCar dl dt img').hover(function(){
    $(this).css({
        transform : 'scale(1.3)'
    })
    $(this).css({
        transition : 'all 0.3s linear'
    })
},function(){
   $(this).css({
        transform : 'scale(1)'
    })
    $(this).css({
        transition : 'all 0.3s linear'
    }) 
})


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

//全屏滚动
$(window).one('mousewheel', mouse_);

function bodyScroll(num) {
    $('body').animate({
        scrollTop: i * h + 'px'
    })
}

function mouse_(event) {
    if (event.deltaY < 0) {
        if (i == 4) {
            i = 4;
        } else {
            i++;
        }
        bodyScroll(i);
    } else {

        if (i == 0) {
            i = 0;
        } else {
            i--;
        }
        bodyScroll(i);
    }
    setTimeout(function () {
        $(window).one('mousewheel', mouse_)
    }, 100)
};

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

window.onload = function() {
  var mySwiper = new Swiper('.swiper-container', {
    loop : true,
    autoplay : 3000,
    pagination : '.swiper-pagination',
    paginationClickable : true,
    speed : 500,
    nextButton : '.swiper-button-next',
    prevButton : '.swiper-button-prev',
  })
  $(window).on('scroll', function() {
    
    if (i == 0) {
      var mySwiper = new Swiper('.swiper-container', {
        loop : true,
        autoplay : 3000,
        pagination : '.swiper-pagination',
        paginationClickable : true,
        speed : 500,
        nextButton : '.swiper-button-next',
        prevButton : '.swiper-button-prev',
      })
    } else {
      var mySwiper = new Swiper('.swiper-container', {
        loop : true,
        pagination : '.swiper-pagination',
        paginationClickable : true,
        speed : 500,
        nextButton : '.swiper-button-next',
        prevButton : '.swiper-button-prev',
      })
    }
  })
}