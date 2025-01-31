function showContainer() {
  document.querySelector(".container-auth-login").style.display = "flex";
  document.querySelector(".container-auth-register").style.display = "none";
}

function showContainer_reg() {
  document.querySelector(".container-auth-login").style.display = "none";
  document.querySelector(".container-auth-register").style.display = "flex";
}

function closeWindow(){
  document.querySelector(".container-auth-login").style.display = "none";
  document.querySelector(".container-auth-register").style.display = "none";
}