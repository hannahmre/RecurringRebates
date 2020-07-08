var signUpButton = document.getElementById("signUp");
var signInButton = document.getElementById("signIn");
var container = document.getElementById("container");

// signUpButton.addEventListener("click", container_add);
// signInButton.addEventListener("click", container_remove);
signInButton.addEventListener("click", container_add);
signUpButton.addEventListener("click", container_remove);



function container_add() {
    container.classList.add("right-panel-active");
}

function container_remove() {
    container.classList.remove("right-panel-active");
}



var signupform = document.getElementsByClassName("signup_form");

create_acc_button.addEventListener("click", handleSubmit);

function handleSubmit() {
    var name = document.forms["signup_form"]["acc_name"].value;

}