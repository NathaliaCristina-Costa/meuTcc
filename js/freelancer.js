$(document).ready(function(){
    $('#listaServico').hide();
    $('#categoria').change(function(){
        if($(this).val() == 'evento') {
            $('#evento').hide(); 
        
        }
    });

    $('#categoria').change();
});
