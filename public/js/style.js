function filter(status) {
    document.querySelectorAll(".filter").forEach(function (item) {
        if (item.innerText == status) {
            return item.classList.add("active");
        } else {
            return item.classList.remove("active");
        }
    });
}

function border() {
    document.querySelectorAll("#Anulada").forEach(function (item) {
        return item.classList.add("border-danger");
    });

    document.querySelectorAll("#Pagada").forEach(function (item) {
        return item.classList.add("border-success");
    });

    document.querySelectorAll("#Pendiente").forEach(function (item) {
        return item.classList.add("border-warning");
    });
}
