var regTexte50 = new RegExp("^[a-zA-Z0-9'-àéèêâûùë]{1,50}$");
var regMail = new RegExp("^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$");
var regCP = new RegExp("^[0-9]{5}$");
var regTelephone = new RegExp("^[0-9]{10,}$");
var regAdresse = new RegExp("^[a-zA-Z0-9'-àéèêâûùë]{5,}$");
var regPassword = new RegExp("^[a-zA-Z0-9'-àéèêâûùë!?:&]{1,50}$")

var cli_nom = document.getElementById("cli_nom");

cli_nom.addEventListener("blur", function() {
    if (regTexte50.test(cli_nom.value)) {
        cli_nom.classList.remove("KO");
        cli_nom.classList.add("OK");
        document.getElementById("aideCli_nom").textContent = "";
    } else {
        document.getElementById("aideCli_nom").textContent = "Champs incorrect";
        document.getElementById("aideCli_nom").style.color = "red";
        cli_nom.classList.remove("OK");
        cli_nom.classList.add("KO");
    }
});

var cli_prenom = document.getElementById("cli_prenom");

cli_prenom.addEventListener("blur", function() {
    if (regTexte50.test(cli_prenom.value)) {
        cli_prenom.classList.remove("KO");
        cli_prenom.classList.add("OK");
        document.getElementById("aideCli_prenom").textContent = "";
    } else {
        document.getElementById("aideCli_prenom").textContent = "Champs incorrect";
        document.getElementById("aideCli_prenom").style.color = "red";
        cli_prenom.classList.remove("OK");
        cli_prenom.classList.add("KO");
    }
});

var cli_rue = document.getElementById("cli_rue");

cli_rue.addEventListener("blur", function() {
    if (regTexte50.test(cli_rue.value)) {
        cli_rue.classList.remove("KO");
        cli_rue.classList.add("OK");
        document.getElementById("aideCli_rue").textContent = "";
    } else {
        document.getElementById("aideCli_rue").textContent = "Champs incorrect";
        document.getElementById("aideCli_rue").style.color = "red";
        cli_rue.classList.remove("OK");
        cli_rue.classList.add("KO");
    }
});

var cli_ville = document.getElementById("cli_ville");

cli_ville.addEventListener("blur", function() {
    if (regTexte50.test(cli_ville.value)) {
        cli_ville.classList.remove("KO");
        cli_ville.classList.add("OK");
        document.getElementById("aideCli_ville").textContent = "";
    } else {
        document.getElementById("aideCli_ville").textContent = "Champs incorrect";
        document.getElementById("aideCli_ville").style.color = "red";
        cli_ville.classList.remove("OK");
        cli_ville.classList.add("KO");
    }
});

var cli_pays = document.getElementById("cli_pays");

cli_pays.addEventListener("blur", function() {
    if (regTexte50.test(cli_pays.value)) {
        cli_pays.classList.remove("KO");
        cli_pays.classList.add("OK");
        document.getElementById("aideCli_pays").textContent = "";
    } else {
        document.getElementById("aideCli_pays").textContent = "Champs incorrect";
        document.getElementById("aideCli_pays").style.color = "red";
        cli_pays.classList.remove("OK");
        cli_pays.classList.add("KO");
    }
});

var CP = document.getElementById("cli_code_postal");

CP.addEventListener("blur", function() {
    if (regCP.test(CP.value)) {
        CP.classList.remove("KO");
        CP.classList.add("OK");
        document.getElementById("aideCli_code_postal").textContent = "";
    } else {
        CP.classList.remove("OK");
        CP.classList.add("KO");
        document.getElementById("aideCli_code_postal").textContent = "Entrez le code postal sur 5 chiffres SVP!!!";
        document.getElementById("aideCli_code_postal").style.color = "red";
    }
});

var mail = document.getElementById("cli_email");

mail.addEventListener("change", function() {
    console.log('change mail');

    if (regMail.test(mail.value)) {
        mail.classList.remove("KO");
        mail.classList.add("OK");
        document.getElementById("aideCli_email").textContent = "";
        console.log('change mail2');

    } else {
        document.getElementById("aideCli_email").textContent = "Votre adresse mail est incorrect";
        document.getElementById("aideCli_email").style.color = "red";
        mail.classList.remove("OK");
        mail.classList.add("KO");
    }
});

var phone = document.getElementById("cli_telephone");

phone.addEventListener("blur", function() {
    if (regTelephone.test(phone.value)) {
        phone.classList.remove("KO");
        phone.classList.add("OK");
        document.getElementById("aideCli_telephone").textContent = "";
    } else {
        document.getElementById("aideCli_telephone").textContent = "Le numéro doit comporter uniquement 10 chiffres";
        document.getElementById("aideCli_telephone").style.color = "red";
        phone.classList.remove("OK");
        phone.classList.add("KO");
    }
});

var cli_password = document.getElementById("cli_password");

cli_password.addEventListener("blur", function() {
    if (regPassword.test(cli_password.value)) {
        cli_password.classList.remove("KO");
        cli_password.classList.add("OK");
        document.getElementById("aideCli_password").textContent = "";
    } else {
        document.getElementById("aideCli_password").textContent = "Le mot de passe doit contenir entre 3 et 255 caractères";
        document.getElementById("aideCli_password").style.color = "red";
        cli_password.classList.remove("OK");
        cli_password.classList.add("KO");
    }
});

var cli_password2 = document.getElementById("cli_password2");

cli_password2.addEventListener("blur", function() {
    if (cli_password2.value == cli_password.value) {
        cli_password2.classList.remove("KO");
        cli_password2.classList.add("OK");
        document.getElementById("aideCli_password2").textContent = "";
    } else {
        document.getElementById("aideCli_password2").textContent = "Vos mots de passe ne sont pas identiques";
        document.getElementById("aideCli_password2").style.color = "red";
        cli_password2.classList.remove("OK");
        cli_password2.classList.add("KO");
    }
});





// phone.addEventListener("mouseover", function() {
//     document.getElementById("aidePhone").textContent = "Le numéro doit comporter uniquement 10 chiffres";
//     document.getElementById("aidePhone").style.color = "grey";
// });

// phone.addEventListener("mouseout", function() {
//     document.getElementById("aidePhone").textContent = "";
// });

// var langage = document.getElementById("choix");

// langage.addEventListener("change", function() {
//     if (langage.value != "Choisissez") {
//         if (document.getElementById("area").value.indexOf(langage.value) == -1) {
//             document.getElementById("area").textContent += (langage.value) + "\n";
//         }
//     }
// });


document.getElementById("submit").addEventListener("click", function(e) {
    console.log("test")
    if (regTexte50.test(cli_nom.value) && regTexte50.test(cli_prenom.value) && regTexte50.test(cli_rue.value) && regCP.test(CP.value) && regTexte50.test(cli_ville.value) && regTexte50.test(cli_pays.value) && regMail.test(mail.value) && regTelephone.test(phone.value) && regPassword.test(cli_password.value) && (cli_password.value == cli_password2.value)) {
        window.alert("Votre formulaire a bien été envoyé!!!");
    } else {
        e.preventDefault();
        window.alert("Veuillez vérifier votre formulaire avant envoi.");
    }
});