
$(document).ready(function(){
    $.ajaxSetup({ cache: false });
        $('#mac').keyup(function(){
            $('#result').html('');
             $('#state').val('');
var searchField = $('#mac').val();
var expression = new RegExp(searchField, "i");
$.getJSON('data.json', function(data) {
$.each(data, function(key, value){
    if (value.mac.search(expression) != -1 )
    {
    $('#result').append('<li class="list-group-item link-class"> ' +value.mac+ ' </li>');
    }
            });   
        });
});

$('#result').on('click', 'li', function() {
        var click_text = $(this).text().split('|');
            $('#mac').val($.trim(click_text[0]));
            $("#result").html('');
    });
});

