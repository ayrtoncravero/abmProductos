function validation() {

    let search;

    search = document.getElementById("search").value;

    if (search === "") {
        alert("El campo de la busqueda no puede ser vacio");
        return false;
    }
}
