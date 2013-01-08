$(document).ready(function() {
    
    $('.confirm').bind('click', function() {
        if (confirm("Czy na pewno chcesz wykonać żądaną operację?") != true) {
            return false;
        } 
    });
    
});