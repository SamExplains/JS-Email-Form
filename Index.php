<?php include "resources/includes/header.php" ?>

<div class="container centerer animated fadeIn" id="form-container" style="margin-top: 3rem !important;">

  <div class="row" style="height: 100vh !important;">

    <div class="col-12 container-border"></div>

    <div class="col-md-6 col-10 mx-auto text-center">
      <h5 id="welcome-message"><b>Welcome</b> To Email Buddy</h5>
      <div class="alert alert-warning mt-md-4 mt-4 Work-Sans-Semi-Bold">Try Sending An Email To A Friend.</div>
    </div>

    <div class="col-12 p-md-5 p-3 m-md-3 m-sm-0" id="content-container">
      <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
    </div> <!--#content-container-->

    <div class="col-12 container-border"></div>

    <!-- Bottom of form container ( 3 buttons) -->
    <div class="col-12 text-center p-4 mx-auto" id="form-bottom-container">
      <div class="row">
        <div class="col-md-4 col-12 form-bottom-button my-auto">
          <img src="resources/img/149063.svg" width="30" alt="">
          <br>
          <small class="Work-Sans-Light">Send</small>
        </div>
        <div class="col-md-4 col-12 form-bottom-button my-auto">
          <img src="resources/img/buddy.svg" width="30" alt="">
          <br>
          <small class="Work-Sans-Semi-Bold">Email Buddy</small>
        </div>
        <div class="col-md-4 col-12 form-bottom-button my-auto">
          <img src="resources/img/151956.svg"  width="30" alt="">
          <br>
          <small class="Work-Sans-Light">Reset</small>
        </div>
      </div>
    </div>


  </div> <!-- .row -->

</div> <!-- .container-->

<?php include "resources/includes/footer.php"; ?>
