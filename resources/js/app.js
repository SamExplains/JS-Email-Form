console.log('Script loaded in!');

/* Variables */
const sendButton = $('#send-button'), email = $('#email'), subject = $('#subject'), message = $('#message');

eventListeners();

function eventListeners() {

  document.addEventListener('DOMContentLoaded', appInit);

  email.blur(validateField);
  subject.blur(validateField);
  message.blur(validateField);

  // Checking to make sure button is disabled
  sendButton.click(function () {
    console.log("Clicked");
  });
}

function appInit() {
  //Disable button when initializing app
  sendButton.prop("disabled", true);

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