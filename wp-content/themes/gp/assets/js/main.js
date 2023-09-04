$(function(){

    $('.item').magnificPopup({
        type: 'image'
        // other options
        });
        
    $('[data-to]').on('click',function(e){
        e.preventDefault()
        var sTarget = $(this).data('to')
        var sectionOffset = $(sTarget).offset().top
        $('html,body').animate({scrollTop:sectionOffset},1000)
    })

    $('.home-url').on('click',function(e){
        e.preventDefault()
        var sectionOffset = $('.home').offset().top - 100
        $('html,body').animate({scrollTop:sectionOffset},1000)
    })
    $('.services-url').on('click',function(e){
        e.preventDefault()
        var sectionOffset = $('.services').offset().top - 100
        $('html,body').animate({scrollTop:sectionOffset},1000)
    })
    $('.rates-url').on('click',function(e){
        e.preventDefault()
        var sectionOffset = $('.pricing').offset().top - 100
        $('html,body').animate({scrollTop:sectionOffset},1000)
    })
    $('.testimonials-url').on('click',function(e){
        e.preventDefault()
        var sectionOffset = $('.testimonials').offset().top - 100
        $('html,body').animate({scrollTop:sectionOffset},1000)
    })
    $('.gallery-url').on('click',function(e){
        e.preventDefault()
        var sectionOffset = $('.gallery').offset().top - 100
        $('html,body').animate({scrollTop:sectionOffset},1000)
    })
    $('.contact-url').on('click',function(e){
        e.preventDefault()
        var sectionOffset = $('.contact').offset().top - 100
        $('html,body').animate({scrollTop:sectionOffset},1000)
    })

})

