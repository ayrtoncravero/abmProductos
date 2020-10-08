function validation() {

    let code, product, quantity;

    code = document.getElementById("code").value;
    product = document.getElementById("product").value;
    quantity = document.getElementById("quantity").value;

    if (code === "") {
        alert("El codigo no puede ser vacio");
        return false;
    }

    if (product === "") {
        alert("El producto no puede ser vacio");
        return false;
    }

    if (quantity === "") {
        alert("La cantidad no puede ser vacia");
        return false;
    }
    else if (quantity.length < 1) {
        alert("La cantidad como minimo debe de ser 1")
        return false;
    }
}
