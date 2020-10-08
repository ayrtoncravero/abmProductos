function validation() {

    let code, quantity;

    code = document.getElementById("code").value;
    quantity = document.getElementById("quantity").value;

    if (code === "") {
        alert("El codigo no puede ser vacio");
        return false;
    }

    if (quantity === "") {
        alert("La cantidad no puede ser vacio");
        return false;
    }
    else if (quantity.length < 1) {
        alert("La cantidad minima es 1");
        return false;
    }
}
