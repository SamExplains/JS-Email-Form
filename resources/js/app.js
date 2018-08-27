console.log('Script loaded in!');

/* Variables */
const sendButton = $('#send-button'), email = $('#email'), subject = $('#subject'),
                   message = $('#message'), resetButton = $('#reset-button'),
                   emailForm = $('#content-container'), gifContainer = $('#gif-container');

eventListeners();

function eventListeners() {

  document.addEventListener('DOMContentLoaded', appInit);

  email.blur(validateField);
  subject.blur(validateField);
  message.blur(validateField);

  // Checking to make sure button is disabled
  sendButton.click('submit', function (e) {
    sendEmail(e);
    gifContainer.removeClass('send-animation');
  });


  // Reset Button
  resetButton.click(function () {
    console.log("Reset Clicked");
    email.val('');
    subject.val('');
    message.val('');
    sendButton.prop("disabled", true);
  })

}

function appInit() {
  //Disable button when initializing app
  sendButton.prop("disabled", true);

}

function sendEmail(e){
  e.preventDefault();
  console.log(e.target);
  console.log(gifContainer);

  //Time function to remove the GIF container.
  setTimeout(function () {
    gifContainer.addClass('send-animation');
    email.val('');
    subject.val('');
    message.val('');
    sendButton.prop("disabled", true);
  }, 3000);

}

function validateField() {
  let errors;

  // Check the length of the field.
  validateLength(this);

  //Check for a valid email. B4 already can do this but a double check perhaps.
  console.log('Input Type: ' + this.type);
  switch (this.type){
    case 'email':
      checkValidEmail(this);
      break;
    case 'subject':
      break;
    case 'message':
      break;
  }


  //Checking for errors
  errors = document.querySelectorAll('.error');
  console.log(errors);
  console.error('Total Errors Found ' + errors);

  //Check that all the inputs are not empty
  if(email.value !== '' && subject.value !== '' && message.value !== ''){
    if (errors.length === 0){
      //Re-enable the Send Button
      sendButton.toggleClass('animated bounce');
      sendButton.prop("disabled", false);
    } else {
      // sendButton.toggleClass('animated bounce');
      sendButton.prop("disabled", true);
    }
  }

}

function validateLength(field) {
  const fieldLength = field.value.length;
  console.log(fieldLength);

  if(fieldLength > 0) {
    field.classList.add('valid-input');
    field.classList.remove('error')
  }  else {
    field.classList.add('error')
  }


}

function checkValidEmail(field) {
  let emailText = field.value;
  console.log(emailText);
  //Check email to see if it contains email sigh '@'

  if (emailText.indexOf('@') !== -1){
    field.classList.add('valid-input');
    field.classList.remove('error')
  } else {
    field.classList.remove('valid-input');
    field.classList.add('error')
  }


}

