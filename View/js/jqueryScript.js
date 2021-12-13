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



});