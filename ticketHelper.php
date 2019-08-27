<!DOCTYPE html>
<html lang="en">

<!--WebLink: none
https://medium.com/5000-things/learning-from-lego-a-step-forward-in-modular-web-design-d8ff953f45a8-->

<head>
  <title>Home</title>
  <?php include 'includes.php'; ?>
</head>

<body>
  <!--Include the nav-bar menu-->
  <?php include 'ticketHelperMenu.php'; ?>

  <div class="wrap">
    <h2 class="title">
      Billing Center
    </h2>


    <!--<button class="btn-show">Toggle Border</button>-->
    <div class="container card">
      <div class="flex row structure">
        <div class="flex row structure-1">
          <div class="flex element a">
            <div class="content">
              <!--Subscription section-->
              Supscription Pricing<br><br>
              <!--<h6>-->
                  <table>
                    <tr>
                      <th>Plan</th>
                      <th>Price</th>
                    </tr>
                    <tr>
                      <td>Basic</td>
                      <td>$10</td>
                    </tr>
                    <tr>
                      <td>Pro</td>
                      <td>$30</td>
                    </tr>
                    <tr>
                      <td>Ultra</td>
                      <td>$60</td>
                    </tr>
                    <tr>
                      <td>Elite Ultra</td>
                      <td>$100</td>
                    </tr>
                  </table>
                <!--</h6>-->
              </div>
            </div>
            <!--Add-ons section-->
            <div class="flex col structure-1-2-1">
              <div class="flex element b">
                <div class="content">
                  Add-on Pricing<br><br>
                  <table>
                    <tr>
                      <th>Add-On</th>
                      <th>Price</th>
                    </tr>
                    <tr>
                      <th>Messaging</th>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Phone Number</td>
                      <td>$5 (Monthly)</td>
                    </tr>
                    <tr>
                      <td>1,000 Texts</td>
                      <td>$5 (Monthly)</td>
                    </tr>
                    <tr>
                      <td>2,000 Texts</td>
                      <td>$10 (Monthly)</td>
                    </tr>
                    <tr>
                      <th>Domain</th>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Registration</td>
                      <td>$20 (Annual)</td>
                    </tr>
                    <tr>
                      <td>Private Registration</td>
                      <td>$10 (Annual)</td>
                    </tr>
                    <tr>
                      <td>Hosting/td>
                      <td>$5 (Monthly)</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <!--END Add-ons section-->
            <!--Volume Discount section-->
            <div class="flex element c">
              <div class="content">
                Volume Pricing Monthly<br><br>
                  <table>
                    <tr>
                      <th>Plan</th>
                      <th>Price</th>
                      <th>Units</th>
                    </tr>
                    <tr>
                      <th>Basic</th>
                      <td>$10 (per/u)</td>
                      <td>1-10</td>
                    </tr>
                    <tr>
                      <td>20% off</td>
                      <td>$8 (per/u)</td>
                      <td>11-30</td>
                    </tr>
                    <tr>
                      <th>Pro</th>
                      <td>$30 (per/u)</td>
                      <td>1-10</td>
                    </tr>
                    <tr>
                      <td>20% off</td>
                      <td>$24 (per/u)</td>
                      <td>11-30</td>
                    </tr>
                  </table>
              </div>
            </div>
            <!--END Volume Discount section-->

          </div>
        </div>
      </div>
    </div>

</body>
</html>
