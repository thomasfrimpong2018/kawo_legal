//ajax functionality added

$(document).ready(function () {

$('#search').keyup(function(){

var name=$(this).val();
$.post('get_startups.php',{name:name},function(data){

    $('div#back-result').css({'display':'block'});
    $('div#back-result').html(data);

});

});    





});
