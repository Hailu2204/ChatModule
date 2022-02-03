
loadChat()

setInterval(function(){
    loadChat()
},1000);

function loadChat(){
    $.post('messages.php?action=getMessages',function(response){
        
        var scrollpos = $('#chat').scrollTop();
        var scrollpos = parseInt(scrollpos)+520;
        var scrollHeight = $('#chat').prop('scrollHeight');


        $('#chat').html(response);


        if( scrollpos < scrollHeight){
            
        }else{
            $('#chat').scrollTop($('#chat').prop('scrollHeight'));
        }
    });
}

$('.materialize-textarea').keyup(function(e){
    if(e.which == 13){
        $('form').submit();
    }
});

$('form').submit(function(){
    
    var message = $('.materialize-textarea').val();

    $.post('messages.php?action=sendMessage&message='+message, function(
        response){
            if(response == 1 ){
                document.getElementById('formid').reset();
                loadChat()
            }
        });
        return false;
});
