function validation() {

    let code, name, description, price, provider, category;

    code = document.getElementById("code").value;
    name = document.getElementById("name").value;
    description = document.getElementById("description").value;
    price = document.getElementById("price").value;
    provider = document.getElementById("provider").value;
    category = document.getElementById("category").value;

    if (code === "") {
        alert("El codigo no puede ser vacio");
        return false;
    }
    else if (code.length < 1) {
        alert("El codigo no puede ser menor a 1");
        return false;
    }
    else if (code.length > 6) {
        alert("El codigo no puede ser mayor a 6");
        return false;
    }

    if (name === "") {
        alert("El nombre no puede ser vacio");
        return false;
    }
    else if (name.length < 1) {
        alert("El nombre como minimo debe de tener 1 caracter");
        return false;
    }

    if (description === "") {
        alert("La descripcion no puede ser vacia");
        return false;
    }
    else if (description.length < 1) {
        alert("La descripcion como minimo debe de tener 1 caracter");
        return false;
    }

    if (price === "") {
        alert("El precio no puede ser vacio");
        return false;
    }
    else if (price.length < 1) {
        alert("El precio como minimo debe de tener 1 caracter");
        return false;
    }

    if (provider === "") {
        alert("El proveedor no puede ser vacio");
        return false;
    }

    if (category === "") {
        alert("La categoria no puede ser vacia");
        return false;
    }
}
