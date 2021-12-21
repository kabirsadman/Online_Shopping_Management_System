function validate(){
  var name = document.getElementById("name").value;
  var uid = document.getElementById("uid").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");

  error_message.style.padding = "10px";

  var text;
  if(name.length < 10){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }

  if(isNaN(uid) || uid.length != 10){
    text = "Please Enter valid UserID";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 20){
    text = "Please Enter More Than 20 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}
