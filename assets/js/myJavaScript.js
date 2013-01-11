$("a.movieDescription").bind('click', function() {
    $('#movieDescription .modal-header h3').html('');
    $('#movieDescription .modal-body p').html('');
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: "Searcher/ajax",
        dataType : 'json',
        data: {
            movieId : id
        },
        success : function(json) {
            $('#movieDescription .modal-header h3').html(json['title']);
            $('#movieDescription .modal-body p').html(json['description']);
        }
    });
});