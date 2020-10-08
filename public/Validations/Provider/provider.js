function validation() {

    let code, name;

    code = document.getElementById("code").value;
    name = document.getElementById("name").value;

    if (code === "") {
        alert("El codigo no puede ser vacio");
        return false;
    }
    else if(code.length < 1) {
        alert("El codigo no puede ser menor a 1");
        return false;
    }

    if (name === "") {
        alert("El nombre no puede ser vacio");
        return false;
    }
}
