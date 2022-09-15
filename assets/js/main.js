//const play_video = url => lity(url);

/* var t_curr_item = null
$(document).ready(function () {
    var owl = $('.owl-carousel')
    var arrow_left = "<svg width='55' height='23' viewBox='0 0 55 23' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0.706947 10.7599C0.121162 11.3457 0.121162 12.2954 0.706947 12.8812L10.2529 22.4272C10.8387 23.0129 11.7884 23.0129 12.3742 22.4272C12.96 21.8414 12.96 20.8916 12.3742 20.3058L3.88893 11.8206L12.3742 3.33527C12.96 2.74949 12.96 1.79974 12.3742 1.21395C11.7884 0.628164 10.8387 0.628164 10.2529 1.21395L0.706947 10.7599ZM54.4059 10.3206L1.76761 10.3206L1.76761 13.3206L54.4059 13.3206L54.4059 10.3206Z' fill='black'/></svg>"
    var arrow_right = "<svg width='55' height='23' viewBox='0 0 55 23' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M54.2933 10.5184C54.8791 11.1042 54.8791 12.054 54.2933 12.6398L44.7474 22.1857C44.1616 22.7715 43.2118 22.7715 42.626 22.1857C42.0402 21.5999 42.0402 20.6502 42.626 20.0644L51.1113 11.5791L42.626 3.09382C42.0402 2.50803 42.0402 1.55828 42.626 0.972496C43.2118 0.386709 44.1616 0.386709 44.7474 0.972496L54.2933 10.5184ZM0.59436 10.0791L53.2326 10.0791L53.2326 13.0791L0.59436 13.0791L0.59436 10.0791Z' fill='black'/></svg>"
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        margin: 0,
        nav: true,
        navText: [arrow_left, arrow_right],
        items: 1,
        dots: false,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: '#1'
    });
});
 */


$('.submit-qoute-btn').click(function () {
    $.ajax({
        url: $('.qoute-form').attr('action'),
        data: $('.qoute-form :input').serializeArray(),
        type: "POST",
        success: function (result) {
            if (result != null) {
                const res = $.parseJSON(result);
                if (res.success) {
                    console.log(res);
                }
            } else {
                console.log('error')
            }
        }
    });
})