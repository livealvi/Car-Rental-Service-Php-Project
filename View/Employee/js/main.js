function validateForm() {
  var user_name = document.getElementById("user_name").value;
  var email = document.getElementById("email").value;
  var user_mobile = document.getElementById("user_mobile").value;
  var user_password = document.getElementById("user_password").value;
  var user_password_confirm = document.getElementById(
    "user_password_confirm"
  ).value;

  if (user_name == "" || user_name.length < 5)
    if (
      user_name == "" ||
      email == "" ||
      user_mobile == "" ||
      user_password == "" ||
      user_password_confirm == ""
    ) {
      document.getElementById("message").innerHTML =
        "Please Enter All The Fields";
      document.getElementById("message").style.padding = "10px";
      return false;
    }
  return true;
}
