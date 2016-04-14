var main = function(){
    $('.ui.dropdown').dropdown({on: 'hover'});
    $('.item').click(function(){
        $('.item').removeClass('active');
        $(this).toggleClass('active');
    });
    $('.ui.checkbox')
      .checkbox()
    ;
    $('.ui.modal')
    .modal('show')
    ;
    // $('.with-hover').mouseenter(function(){
    //     $(this).animate({marginTop: "-4px"});
    // });
    // $('.with-hover').mouseleave(function(){
    //     $(this).animate({marginTop: "0px"});
    // });
    // $('.icon.header').mouseenter(function(){
    //     $(this).fadeOut("slow")
    //     ;        
    // })

};
$(document).ready(main);