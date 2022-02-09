function valida() {
    if (document.querySelector("#user-input") === "" && document.querySelector("#password-input") === ""){
        window.alert("os campos estão vazios")
    }else if(document.querySelector("#user-input") != "admin" && document.querySelector("#password-input") != "123"){
        window.alert("senha ou usuário incorretos")
    }else{
        window.location.href("../inicio.php")
    }
}