$(function(){

    $('[data-filter]').on('click',function(){
        var target = $(this).data('filter')
        $('.item').hide()
        $('.item'+target).show().style.transition = "all 2s";
    })
    
    $('.all').on('click',function(){
        $('.item').show()
    })
})