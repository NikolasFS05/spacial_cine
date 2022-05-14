var divAlerta = document.getElementById("alerta");

function comprobarClave(){
    password = document.register.contrasenia.value;
    passwordV  = document.register.contraseniaV.value;

    if (password != passwordV) {
        divAlerta.innerHtml = divAlerta.innerHTML + '<div> Contraseñas diferentes </div>';
    }
}