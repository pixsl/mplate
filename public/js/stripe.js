$(document).ready(function() {
    Stripe.setPublishableKey('pk_03nFn7uqPT7KyptDIyD7RcRQOjceq');

    $('#subscription-form button').on('click', function() {
        var form                = $('#subscription-form');
        var submit              = form.find('button');
        var submitInitialText   = submit.text();

        submit.attr('disabled', 'disabled').text('Just one moment...');

        Stripe.card.createToken(form, function(status, response) {
            var token;

            if(response.error) {
                form.find('.stripe-errors').text(response.error.message).show();
                submit.removeAttr('disabled');
                submit.text(submitInitialText);
            } else {
                token = response.id;
                form.append($('<input type="hidden" name="token" />').val(token));
                form.submit();
            }
        });
    });

    $('#swap-form button').on('click', function() {
        var form                = $('#swap-form');
        var submit              = form.find('button');
        var submitInitialText   = submit.text();

        submit.attr('disabled', 'disabled').text('Just one moment...');

        form.submit();

    });
});