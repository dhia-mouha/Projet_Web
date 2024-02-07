function validatedateofbirth() {
    var elementDate = document.getElementById("dateNaissance");
    var elementValue = new Date(elementDate.value);
    const date_aujourdhui = new Date();

    if (elementValue >= date_aujourdhui) {
        alert("Date incorrecte!");
    } else {
        alert("Date valide");
    }
}

var formelement = document.getElementById("inscriptionForm");
var nameElement = document.getElementById("nom");
var prenomelement = document.getElementById("prenom");
var passelement = document.getElementById("password");
var phoneelement = document.getElementById("telephone");

formelement.addEventListener("submit", function (event) {
    event.preventDefault();
    validateName();
    validatePassword();
    validatePhone();
    validatePrenom();
    validatedateofbirth();
});

function validateName() {
    var nameValue = nameElement.value;
    var pattern = /^[a-zA-Z]+$/;
    var nameError = document.getElementById("nameError");

    if (!nameValue.match(pattern) || nameValue.length < 1) {
        nameError.innerHTML =
            "<span style='color: red;'> Nom ne doit contenir que des lettres et doit avoir au moins 1 caractère </span>";
    } else {
        nameError.innerHTML = "<span style='color: green;'>Correct</span>";
    }
}

function validatePrenom(){
    var prenomValue =prenomelement.value;
    var prenomPattern = /[A-Za-z]{2,}/;
    var prenomError = document.getElementById("prenomError")
    if (!prenomValue.match(prenomPattern) || PrenomValueValue.length < 1) {
        prenomError.innerHTML="<span style='color :red' > Prenom ne doit contenir que des lettres et doit avoir au moins 1 caractère </span>";
    }
    else{
        prenomError.innerHTML="<span style='color :green'>Correct</span>"
      }
}


function validatePhone(){
    var PhoneValue=phoneelement.value;
    var telephonePattern = /[0-9]{8}/;
    var phoneError = document.getElementById("phoneError")
    if (!PhoneValue.match(telephonePattern)) {
        phoneError.innerHTML="<span style='color :red' >Veuillez entrer un numero valide (numero uniquement/8 chiffres) </span>"
    }
    else{
        phoneError.innerHTML="<span style='color :green'>Correct</span>"
    }
}

function validatePassword(){
    var passwordValue=passelement.value;
    var passwordPattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    var passError = document.getElementById("passError")
    if (!passwordValue.match(passwordPattern)) {
        passError.innerHTML="<span style='color :red' >veuillez entrer un mdp valide</span>"
    }
    else{
        passError.innerHTML="<span style='color :green'>Correct</span>"
    }
}
