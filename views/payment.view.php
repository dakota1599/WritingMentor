<?php 
//Browser tab title info
$title="Pay";
//Direct to this pages css file
$css="pay.css";
//Custom nav information
$nav="Make a Payment";
//Custom Body Size for the Footer
$body="100vh";

//Pulls in the header partial.
require "views/partials/header.partial.php";

?>

<!--This is the payment page.  The user will pay here using paypal or a debit/credit card.-->
<div class="row-1">
    <!--Header-->
    <h1 class="gen-headers pay-header fg-primary" style="margin-bottom:0;">Checkout</h1>
    <p class="money">$<?=$string_num?></p>
    <br>
    <br>
    <!--PayPal Payment Stuff.-->
    <div class="pay-div">
        <div id="paypal-button-container"></div>
        <script
            src="https://www.paypal.com/sdk/js?client-id=AVfZ7T_1Xm3GuQCjLran9uiJTHDylOcNMXxjvoGLmPjeo8-s74_RJ7_RSBEBBjXTPNEQP-sQHsZGbEfy&currency=USD"
            data-sdk-integration-source="button-factory"></script>
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
                            value: '<?=$amt?>'
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
    </div>
</div>

<!--Footer-->
<?php require 'views/partials/footer.partial.php';?>