function validation() {

    let search;

    search = document.getElementById("search").value;

    if (search === "") {
        alert("El campo de la busqueda no puede ser vacio");
        return false;
    }
    else if (search.includes(" ")) {
        alert("El campo no puede contener espacios vacios");
        return false;
    }
}
