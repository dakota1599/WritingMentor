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

<!--This is the GET page so the user can enter in their owed amount.-->
<div class="row-1">
    <h1 class="gen-headers fg-primary pay-header">Set Payment Amount</h1>
    <form action="/pay" method="post" id="form">
        <table>
            <tbody>
                <!--Amount input row.-->
                <tr>
                    <td>
                        <input name="amt" id="amt" placeholder="Amount" class="w3-input input" type="number" min="1.00" step="1.00">
                    </td>
                </tr>
                <!--Submit button row.-->
                <tr>
                    <td>
                        <button type="button" onclick="checkAmt()" class="button-Shadow">Proceed to Checkout</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>


<!--Footer-->
<?php require 'views/partials/footer.partial.php';?>