$(document).ready(function(){
    
    $('input:button').click(function(){
        var data=$('form:first').serialize();
        $.post(
         'skrypt.php',
         data,
         function(data){
            $('#odp').html(data).show();
        }
        );
    });
    
});