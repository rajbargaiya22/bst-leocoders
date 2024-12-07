jQuery(document).ready(function($) {
    $('#load-more').on('click', function() {
        var button = $(this);
        var currentPage = parseInt(button.attr('data-current-page')) || 1;
        var totalPosts = parseInt(button.attr('data-total-posts')) || 8;
        var newTotalPosts = totalPosts + 8; // Increase by 8 with each click

        $.ajax({
            url: load_more_params.ajax_url,
            type: 'POST',
            data: {
                action: 'load_more_events',
                page: currentPage + 1,
                posts_per_page: newTotalPosts,
            },
            beforeSend: function() {
                button.text('Loading...');
            },
            success: function(response) {
                if (response === 'no_more_posts') {
                    button.text('No more posts').prop('disabled', true);
                } else {
                    $('#event-container').append(response);
                    button.text('More image')
                        .attr('data-current-page', currentPage + 1)
                        .attr('data-total-posts', newTotalPosts);
                }
            },
        });
    });
});
