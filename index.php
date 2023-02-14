<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Checkout example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">



<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
 

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="cinco.png" alt="" width="100" height="100">
      <h2>Checkout form</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">--</span>
          <span class="badge bg-primary rounded-pill">*</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">2023 Cinco de Mayo Mixer</h6>
              <small class="text-muted">Brief description</small>
            </div>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong><?php $FEE ?></strong>
          </li>



        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Info</h4>
        <form class="needs-validation" novalidate name="signup" action="topaypal.php", method="post" >
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="fname">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required name="lname">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

           <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@gmail.com" name="email">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>

            <div class="col-12" >
              <label type="hidden" for="gender" class="form-label"> <span class="text-muted"></span></label>
              <input type="hidden" class="form-control" id="email" value="*" placeholder="M/F" name="gender">
              <div class="invalid-feedback">
                Please enter a valid gender.
              </div>
            </div>
            <div class="col-12" >
              <label for="ntrp" class="form-label"> <span class="text-muted"></span></label>
              <input type="hidden" class="form-control" id="ntrp" value="3.76" placeholder="3.5" name="ntrp">
              <div class="invalid-feedback">
                Please enter a valid gender.
              </div>
            </div>
            <div class="col-12" >
              <label type="hidden" for="member" class="form-label"> <span class="text-muted"></span></label>
              <input type="hidden" class="form-control" id="member" value="Y" placeholder="Y" name="member">
              <div class="invalid-feedback">
                Please enter a valid gender.
              </div>
            </div>
            <div class="col-12" >
              <label for="event" class="form-label"> <span class="text-muted"></span></label>
              <input type="hidden" class="form-control" id="event" value="2023 Cinco" placeholder="3.5" name="event">
              <div class="invalid-feedback">
                Please enter a valid gender.
              </div>
            </div>

            <div class="col-12" >
              <label type="hidden" for="fee" class="form-label"> <span class="text-muted"></span></label>
              <input type="hidden" class="form-control" id="fee" value="2.456" name="fee">
              <div class="invalid-feedback">
                Please enter a valid gender.
              </div>
            </div> 

          </div>

 
          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
 
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

  <p>
  <div class="container">
    <h2>Entries</h2>
    <style>
  tr{
      width: 70%;
      display: inline-table;
      height:7px;                // <-- the rows height 

  }
  td{
    font-size: .7em;

  }
    </style>
    <table class="table table-bordered table-striped table-condensed">
      <thead>


        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include "includes.inc";
           $query = "select * from mixer_pending order by custom desc";
           //echo $query;

           $con = DBMembership();
           
           $qr=mysqli_query($con,$query);
           
           while ($row = mysqli_fetch_assoc($qr)) {  
            echo "<tr>";
            echo '<td style="width:30%">';
            echo $row['fname'];
            echo '<td style="width:30%">';
            echo $row['lname'];
            echo '<td style="width:30%">';
            echo $row['email'];
            echo '<td style="width:30%">';
            echo $row['date'];


            echo "</tr>";
          }      


        ?>

      </tbody>
    </table>
  </div>




  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2023 Santa Clara Tennis Club</p>
  <!--
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  -->
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>



</html>
