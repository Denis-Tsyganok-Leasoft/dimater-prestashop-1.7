<h1>{l s='Your order at %s' sprintf=[$shop.name] mod='dimater'}</h1>

<h1>{l s='Unexpected payment error' mod='dimater'}</h1>

<div class="error">
    <p><b>{l s='Unfortunately there was a problem processing your payment.' mod='dimater'}</b></p>
    <p><a href="{$checkout_url}">{l s='Please click here to try again.' mod='dimater'}</a></p>
</div>
