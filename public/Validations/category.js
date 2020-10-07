function validation() {

    let name;

    name = document.getElementById("name").value;

    if (name === "") {
        alert("El nombre no puede ser vacio");
        return false;
    }
    else if (name < 1) {
        alert("El nombre como minimo debe de tener 1 caracter");
        return false;
    }
}
