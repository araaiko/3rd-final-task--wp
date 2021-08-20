// 横スクロールメニューの矢印をクリックでメニューの両端に移動する
jQuery(function () {
    jQuery('.js-scroll-right').click(function (e) {
        jQuery('.js-global-nav').animate({
            scrollLeft: 799.64
        }, 500, 'swing');
    });

    jQuery('.js-scroll-left').click(function (e) {
        jQuery('.js-global-nav').animate({
            scrollLeft: 0
        }, 500, 'swing');
    });
});

// 横スクロールメニューの左右の矢印を表示/非表示にする
jQuery('.js-global-nav').on("scroll", function () {
    var scrollPosition = jQuery(".js-global-nav").scrollLeft();
    var maxPosition = jQuery('.js-global-nav').get(0).scrollWidth - jQuery('.js-global-nav').get(0).clientWidth;

    // 左の矢印の表示/非表示
    if (0 < scrollPosition) {
        jQuery('.js-scroll-left').fadeIn();
    } else {
        jQuery('.js-scroll-left').fadeOut();
    };

    // 右の矢印の表示/非表示
    if (scrollPosition === maxPosition) {
        jQuery('.js-scroll-right').fadeOut();
    } else {
        jQuery('.js-scroll-right').fadeIn();
    };
    return false;
});