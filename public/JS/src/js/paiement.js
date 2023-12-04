Stripe.setPublishableKey('pk_test_51O8dlqEsVbso3S5eylnt8JpQ99ZbBKZlGFWDDdN8aUAk5V4sGZpeRpXZ5w8IcMWn5IgSLrEYZtysCflBni12PADC00qO5a5oQa'); // clé public

// event.preventDefault();
var $form=$('#validationForm');

$form.submit(function(event) {
    $('#charge-error').addClass('hidden');
    // desactivena dol ny btn ref ts valide ny processus (formulaire)
    // ialina ny mipotritra indroa ny btn rehetra mantsy

    $form.find('button').prop('disabled',true);
    
    // console.log('Card Number:', $('#card-number').val());
    // console.log('CVC', $('#card-cvc').val());
    // console.log('Expiration month', $('#card-expiry-month').val());
    // console.log('Expiration year', $('#card-expiry-year').val());
    // console.log('Name', $('#card-name').val());

    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);

    return false;  
    // atao return false satria ts azo atao ny manao transaction nef juste frontend fotsiny ny atao    
});

function stripeResponseHandler(status, response) {
    // function maka ny erreur de pariment fotsiny   (validation general)
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message); 
        // miactiver ny btn rehetra
        $form.find('button').prop('disabled', false);
    }
    else{
        // maka ny id anle strpe
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        $form.get(0).submit();
    }
}