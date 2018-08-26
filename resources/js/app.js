console.log('Script loaded in!');

/* Variables */
const sendButton = $('#send-button'), email = $('#email'), subject = $('#subject'), message = $('#message');

eventListeners();

function eventListeners() {

  document.addEventListener('DOMContentLoaded', appInit);

  email.addEventListener('blur', validateField);
  subject.addEventListener('blur', validateField);
  message.addEventListener('blur', validateField);

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
  
}
