<?php 

$cost = 5;
?>

<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AVfZ7T_1Xm3GuQCjLran9uiJTHDylOcNMXxjvoGLmPjeo8-s74_RJ7_RSBEBBjXTPNEQP-sQHsZGbEfy&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    paypal.Buttons({
        style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'paypal',
            
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?=$cost?>'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            });
        }
    }).render('#paypal-button-container');
</script>


    
</script>