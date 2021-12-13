$(document).ready(function(){
    $('.nav-item').hover(
        function(){
            $(this).addClass('nav-item-hover');
        },
        function(){
            $(this).removeClass('nav-item-hover');
        }
    );

    $('.dropdown').hover(
        function(){
            $(this).addClass('dropdown-hover');
        },
        function(){
            $(this).removeClass('dropdown-hover');
        }
    );

    $('.dropdown').click(
        function(){
            $('.dropdown-content').slideToggle();
        }
    );

    $("input").focus(
        function()
        {
            $(this).css("background-color", "lightgray");
        }
    );

    $("input").blur(
        function(){
            $(this).css("background-color", "white");
        }
    );

});