jQuery(document).ready(function($){
    $('#loginform').prepend('<h2>Sign In</h2>').prepend($('h1')).addClass('formbg');
    $('h1 a').attr('href', 'http://moveabletype.org').attr('title', 'Powered by Moveable Type');
    $('input').removeClass('input');
    $('.forgetmenot').append($('#rememberme'));
    $('.submit').after($('#nav'));
    $('input[type=submit]').val('Sign In');
});
