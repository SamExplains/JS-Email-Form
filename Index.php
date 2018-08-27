<?php include "resources/includes/header.php" ?>

<div class="container centerer animated fadeIn" id="form-container" >

  <div class="row" id="form-container-row">

    <div class="col-12 container-border"></div>

    <div class="col-md-6 col-10 mx-auto text-center">
      <h5 class="mt-4" id="welcome-message"><b>Welcome</b> To Email Buddy</h5>
      <div class="alert alert-warning mt-md-4 mt-4 Work-Sans-Semi-Bold">Try Sending An Email To A Friend.</div>
    </div>

    <div class="col-12 p-md-5 p-3 m-md-3 m-sm-0" id="content-container">
      <form>
        <div class="form-group">
          <label for="email">Email address <small style="color: var(--cabaret)">* Required</small></label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="subject">Subject  <small style="color: var(--cabaret)">* Required</small></label>
          <input type="text" class="form-control" id="subject" placeholder="A funny witty title">
        </div>
        <div class="form-group">
          <label for="message">Mesasge  <small style="color: var(--cabaret)">* Required</small></label>
          <textarea class="form-control" id="message" placeholder="Maybe how you're day has been going?" rows="3"></textarea>
        </div>
      </form>
    </div> <!--#content-container-->

    <div class="col-12 container-border"></div>

    <!-- Bottom of form container ( 3 buttons) -->
    <div class="col-12 text-center p-4 mx-auto" id="form-bottom-container">
      <div class="row">
        <!-- Send Button -->
        <button class="col-md-4 col-12 btn btn-light form-bottom-button my-auto" type="submit" id="send-button">
          <img src="resources/img/149063.svg" width="30" alt="">
          <br>
          <small class="Work-Sans-Light">Send</small>
        </button>
        <div class="col-md-4 col-12 form-bottom-button my-auto" >
          <img src="resources/img/buddy.svg" width="30" alt="">
          <br>
          <small class="Work-Sans-Semi-Bold">Email Buddy</small>
        </div>
        <!-- Reset Button -->
        <button class="col-md-4 col-12 btn btn-light form-bottom-button my-auto" id="reset-button">
          <img src="resources/img/151956.svg"  width="30" alt="">
          <br>
          <small class="Work-Sans-Light">Reset</small>
        </button>
      </div>
    </div>

    <div class="col-md-3 col-6 centerer">
      <div class="text-center rounded send-animation" style="background-color: rgba(71, 93, 109, .65);" id="gif-container">
        <img class="animated infinite slideInLeft" src="resources/img/sending.svg" width="80" alt="">
      </div>
    </div>


  </div> <!-- .row -->

</div> <!-- .container-->

<?php include "resources/includes/footer.php"; ?>
