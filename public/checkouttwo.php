
<div id="main">
    <form id="SignupForm" name="checkoutForm" stripe-form="stripeCallback" ng-submit="onSubmit()" data-abide>
        <fieldset>
            <legend>Personal Information</legend>

            <div class="row">

                <div class="col-lg-4">
                    <input ng-model="name" type="text" placeholder="First Name">
                </div>

                <div class="col-lg-4">
                    <input ng-model="lastname" type="text" placeholder="Last Name">
                </div>

                <div class="col-lg-4">
                    <input ng-model="email" type="text" placeholder="Email">
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <input ng-model="name" type="text" placeholder="Address">
                </div>

                <div class="col-lg-3">
                    <input ng-model="lastname" type="text" placeholder="City">
                </div>

                <div class="col-lg-1">
                    <input ng-model="email" value="CA" type="text" placeholder="CA">
                </div>

                <div class="col-lg-2">
                    <input ng-model="email" type="text" placeholder="Zip Code">
                </div>

            </div>
        </fieldset>
        <fieldset>
            <legend>Delivery Information</legend>

            <div class="row">
                <div class="col-lg-6">
                    <input ng-model="name" type="text" placeholder="Address">
                </div>

                <div class="col-lg-3">
                    <input ng-model="lastname" type="text" placeholder="City">
                </div>

                <div class="col-lg-1">
                    <input ng-model="email" value="CA" type="text" placeholder="CA">
                </div>

                <div class="col-lg-2">
                    <input ng-model="email" type="text" placeholder="Zip Code">
                </div>

            </div>
        </fieldset>
        <fieldset>
            <legend>Terms & Conditions</legend>


        </fieldset>
        <fieldset>
            <legend>Review & Checkout</legend>
            <div class="col-lg-6" ng-class="{error: checkoutForm.number.$invalid}">
                <div>
                    <input ng-model="number" name="number" payments-format="card" payments-validate="card"
                           placeholder="Card Number" type="text"/>
                </div>
                <small class="error">Invalid card number</small>
            </div>
            <div class="col-lg-3" ng-class="{error: checkoutForm.expiry.$invalid}">
                <div>
                    <input ng-model="expiry" name="expiry" payments-format="expiry" payments-validate="expiry"
                           placeholder="Expiry" type="text"/>
                </div>
                <small class="error">Invalid date.</small>
            </div>
            <div class="col-lg-3" ng-class="{error: checkoutForm.cvc.$invalid}">
                <div>
                    <input ng-model="cvc" name="cvc" payments-format="cvc" payments-validate="cvc"
                           placeholder="CVC" type="text"/>
                </div>
                <small class="error">Invalid CVC.</small>
            </div>

        </fieldset>
        <hr />

        <div class="clearfix">

            <div class="right" style="padding-top:15px;padding-right: 28px;">
                <button class="cancel cancel-button" ng-click="$dismiss(cancel);">Cancel</button>
                <button type="submit" class="submit-button" id="submit" ng-disabled="checkoutForm.$invalid">Place Order</button>
            </div>
        </div>

        <alert ng-if="stripeError" type="'alert'" close="hideAlerts()">
            Stripe returned an error: {{stripeError}}
        </alert>

        <alert ng-if="stripeToken" close="hideAlerts()">
            Stripe successfully acquired! Token: {{stripeToken}}
        </alert>
    </form>
</div>
<script type="text/javascript" src="{{ asset('formToWizard.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#SignupForm").formToWizard({ submitButton: 'submit' })
    });
</script>