$( function() {
    var cache = {};

    $('#search-input').autocomplete({
        minLength: 1,
        source: function( request, response ) {
            var term = request.term;

            if (term in cache) {
                response(cache[term]);
                return;
            }

            $('#search-input').addClass('working');

            $.ajax({
                url: baseUrl + '/game/search?title=' + term,
                dataType: 'json',
                success: function( data, status, xhr ) {
                    data = $.map(data.data, function(item) {
                        return {
                            title: item.title,
                            platform: item.platform,
                            image_url: item.images.square_small
                        };
                    })

                    cache[term] = data;

                    response(data);
                    $('#search-input').addClass('working');
                },
                error: function () {
                    response([]);
                }
            }).done(function(){
                $('#search-input').removeClass('working');
            });
        },
        create: function() {            
            $(this).data('ui-autocomplete')._renderItem  = function (ul, item) {
                return $( '<li class="clearfix">' )
                    .append('<div class="float-left cover" style="background-image: url('+item.image_url+')"></div>')
                    .append('<div class="float-left"><span>' + item.title + '</span><span>' + item.platform + '</span></div>')
                    .appendTo( ul );
            };
        },
        messages: {
            noResults: '',
            results: function() {}
        },
        focus: function (event, ui) {
            event.preventDefault();
        }
    })
});