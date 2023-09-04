    //Header Animation (Auto play)
    var header1 = anime({
        targets: '.header-group',
        translateY:['-50vw',0],
        duration:2000,
        rotateX:360,
        delay:anime.stagger(100),
        easing:'easeInOutQuart',
        autoplay:true,
        loop:false
    })
    var header2 = anime({
        targets: '.img-layer',
        translateX:['-100vw',0],
        duration:1000,
        delay:anime.stagger(300),
        easing:'easeInOutQuart',
        autoplay:true,
        loop:false
    })

    //Live Services Transition
    var tl1 = anime.timeline({
        duration: 1000,
        easing: 'easeInOutQuart',
        autoplay: false,
    })
    tl1.add({
        targets: '.service',
        translateX: ['-100vw', 0],
        delay: anime.stagger(300, {start: 500}),
        duration: 1000,
    })
    tl1.add({
        targets:'.service .service-ttl',
        scale: [2,1],
        opacity: [0,1]
    })
    tl1.add({
        targets:'.service .service-desc',
        scale: [2,1],
        opacity: [0,1]
    })
    var services = $('.services').offset().top
    var hasPlayed = false
    $(document).on('scroll',function(){
        var scrollTop = $(document).scrollTop()
        var progress = (scrollTop-services+300)/100
        tl1.seek(tl1.duration * progress)
    })

    //Live Prices Transition
    var tl2 = anime.timeline({
        duration: 1000,
        easing: 'easeInOutQuart',
        autoplay: false,
    })
    tl2.add({
        targets: '.price-card .price-ttl',
        translateX: ['-100vw', 0],
        delay: anime.stagger(300, {start: 500}),
        duration: 1000,
    })
    tl2.add({
        targets:'.price-card .price-desc',
        scale: [2,1],
        opacity: [0,1]
    })
    tl2.add({
        targets:'.price-card .price-img',
        scale: [2,1],
        opacity: [0,1]
    })
    var pricing = $('.pricing').offset().top
    var hasPlayed = false
    $(document).on('scroll',function(){
        var scrollTop = $(document).scrollTop()
        var progress = (scrollTop-pricing+300)/100
        tl2.seek(tl2.duration * progress)
    })

    //Live Testimonials Transition
    var tl3 = anime.timeline({
        duration: 1000,
        easing: 'easeInOutQuart',
        autoplay: false,
    })
    tl3.add({
        targets: '.testimonial',
        translateX: ['-100vw', 0],
        delay: anime.stagger(300, {start: 500}),
        duration: 1000,
    })
    var testimonials = $('.testimonials').offset().top
    var hasPlayed = false
    $(document).on('scroll',function(){
        var scrollTop = $(document).scrollTop()
        var progress = (scrollTop-testimonials+300)/100
        tl3.seek(tl3.duration * progress)
    })

    //Contact Form Animations
    var animeForm1 = anime({
        targets: '.contact-form label',
        translateX:['-50vw',0],
        duration:1000,
        delay:anime.stagger(300),
        easing:'easeInOutQuart',
        autoplay:false,
        loop:false
    })
    var animeForm2 = anime({
        targets: '.contact-form input',
        translateX:['-50vw',0],
        duration:1000,
        delay:anime.stagger(300),
        easing:'easeInOutQuart',
        autoplay:false
    })
    var animeForm3 = anime({
        targets: '.contact-form select',
        translateX:['-50vw',0],
        duration:1000,
        delay:anime.stagger(300),
        easing:'easeInOutQuart',
        autoplay:false,
        loop:false
    })
    var animeForm4 = anime({
        targets: '.contact-form textarea',
        scale:[2,1],
        opacity:[0,1],
        duration:4000,
        easing:'easeInOutQuart',
        autoplay:false
    }) 
    var animeForm5 = anime({
        targets: '.contact-form button',
        scale:[2,1],
        opacity:[0,1],
        duration:4000,
        easing:'easeInOutQuart',
        autoplay:false
    })
    var sContact = $('.contact-wrap').offset().top
    var hasPlayed = false
    $(document).on('scroll',function(){
        var scrollTop = $(document).scrollTop()
        if(scrollTop >= sContact - 800 && hasPlayed == false){
            animeForm1.play()
            animeForm2.play()
            animeForm3.play()
            animeForm4.play()
            animeForm5.play()
            hasPlayed = true
        }
    })