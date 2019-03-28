$(function(){
    timeout = setTimeout(function() {
        document.getElementById('online-icon').style.backgroundColor='orange';
    }, 3000);
});

$(document).on('mousemove', function(){
    document.getElementById('online-icon').style.backgroundColor='green';
});