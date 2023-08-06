function validateForm() {
    var nameInput = document.getElementById("name");
    var surNameInput = document.getElementById("surName");
    var emailInput = document.getElementById("email");
    var nameError = document.getElementById("nameError");
    var emailError = document.getElementById("emailError");

    var namePattern = /^[a-zA-ZğüşıöçĞÜŞİÖÇ]+$/;
    var surNamePattern = /^[a-zA-ZğüşıöçĞÜŞİÖÇ]+$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!namePattern.test(nameInput.value)) {
        nameError.innerText = "Sadece Harf Kullanabilirsiniz.";
        return false;
    } else {
        nameError.innerText = "";
    }
    if (!surNamePattern.test(surNameInput.value)) {
        surNameError.innerText = "Sadece Harf Kullanabilirsiniz.";
        return false;
    } else {
        surNameError.innerText = "";
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
    document.getElementById("surName").value = "";
    document.getElementById("email").value = "";
    document.getElementById("message").value = "";
    document.getElementById("cinsiyet").value = "erkek";
    document.getElementById("yer1").checked = false;
    document.getElementById("yer2").checked = false;
    document.getElementById("yer3").checked = false;
    document.getElementById("yer4").checked = false;
    document.getElementById("yer5").checked = false;
    document.getElementById("dil1").checked = false;
    document.getElementById("dil2").checked = false;
    document.getElementById("dil3").checked = false;
    document.getElementById("dil4").checked = false;
    document.getElementById("p1").checked = false;
    document.getElementById("p2").checked = false;
    document.getElementById("p3").checked = false;
    document.getElementById("p4").checked = false;
}
