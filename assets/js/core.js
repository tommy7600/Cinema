$(document).ready(function() {
    
    $('.confirm').bind('click', function() {
        if (confirm("Czy na pewno chcesz usunąć ten seans?") != true) {
            return false;
        } 
    });    
    
    $('tooltip').tooltip();   
        
//    $('#datepicker').datepicker({dateFormat:'yy-mm-dd'});
   
   $('#myModal').modal();
    
    
});