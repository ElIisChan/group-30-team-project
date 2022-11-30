<?php include("header.php"); ?>

    <div class="checkout">
        <div class="checkout_wrap">
          <div class="row">

            <div class="col-xs-4">
              <!--PRODUCT-->
              <div data-ng-app='' data-ng-init='quantity=1;price=30'>

                <h5 class="price-color">Total Amount</h5>
                <h4 class="price-color">Guest Checkout<h4>

                       <p class="price-color-heading"> Days: <input type='number' ng-model='quantity' style="background-color: rgba(255, 255, 255, 0.048); border:1px solid rgba(255, 255, 255, 0.514); color: white; border-radius:8px;box-shadow: 2px 2px 10px rgb(54, 0, 0) ;padding-top:6px; padding-bottom: 6px ;" ></p>
                       <p class="price-color-heading"> Price: 0£ <input type='number' ng-model='price' style='display:none ;'></p>


                        <p class="total-amount" ><b>Amount to pay:</b> {{quantity * price }}£ </p>
                </div>
            </div>

            <div class="col-xs-8">
              <!--CHECKOUT-->
              <div class="product_arrow">
                <div class="triangle-left"></div>
              </div>
              <div class="checkout_details">
                <div class="col-xs-12">
                  <h1 class="checkout_title">Credit Card Detail</h1>
                  <form class="checkout_form" action="confirmation-page.html" method="POST">
                    <input type="name" placeholder="Customer Full Name" name="card-name">
                    <input class="cc-number" type="text" placeholder="Card Number" maxlength="20" name="card-number">
                    <div class="row">
                      <div class="col-xs-6">
                        <input class="cc-exp" type="name" placeholder="Card Expiry" name="exp-date">
                      </div>
                      <div class="col-xs-6">
                        <input class="cc-cvc" type="number" placeholder="CVV" name="card-cvv">
                      </div>
                    </div>
                    <a href=""></a>
                    <button class="checkout_pay" type "button" value="submit">Pay &raquo;</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


</body>
</html>
