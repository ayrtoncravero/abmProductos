function validation() {

    let code, name;

    code = document.getElementById("code");
    name = document.getElementById("name");

    if (code === "") {
        alert("El codigo no puede ser vacio");
        return false;
    }
    else if(code.length < 1) {
        alert("El codigo no puede ser menor a 1");
        return false;
    }
    else if(code.length > 6) {
        alert("El codigo no puede ser mayor a 6");
        return false;
    }

    if (name === "") {
        alert("El nombre no puede ser vacio");
        return false;
    }
}
