function validateForm() {
    var nameInput = document.getElementById("name");
    var emailInput = document.getElementById("email");
    var nameError = document.getElementById("nameError");
    var emailError = document.getElementById("emailError");

    var namePattern = /^[A-Z a-zğüşıöçĞÜŞİÖÇ]+$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!namePattern.test(nameInput.value)) {
        nameError.innerText = "Sadece Harf Kullanabilirsiniz.";
        return false;
    } else {
        nameError.innerText = "";
    }

    if (!emailPattern.test(emailInput.value)) {
        emailError.innerText = "Geçerli Bir Email Adresi Giriniz.";
        return false;
    } else {
        emailError.innerText = "";
    }

    return true;
}

function clearForm() {
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("message").value = "";
    document.getElementById("cinsiyet").value = "erkek";
    document.getElementById("yer1").checked = false;
    document.getElementById("yer2").checked = false;
    document.getElementById("yer3").checked = false;
    document.getElementById("yer4").checked = false;
    document.getElementById("yer5").checked = false;
    document.getElementById("language1").checked = false;
    document.getElementById("language2").checked = false;
    document.getElementById("language3").checked = false;
    document.getElementById("language4").checked = false;
    document.getElementById("p1").checked = false;
    document.getElementById("p2").checked = false;
    document.getElementById("p3").checked = false;
    document.getElementById("p4").checked = false;
}