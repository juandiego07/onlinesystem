var elemento = document.getElementById("date");
var f = new Date();
var dd = parseInt(f.getDate());
var mm = parseInt(f.getMonth()) + 1;
var yy = parseInt(f.getYear()) + 1900;
dd = dd < 10 ? "0" + dd.toString() : dd.toString();
mm = mm < 10 ? "0" + mm.toString() : mm.toString();
var date = yy.toString() + "-" + mm + "-" + dd;
elemento.value = date;
document.getElementById("expiration_date").min = date;

var tax_base = document.getElementById("tax_base");
var amount = document.getElementById("amount");
tax_base.onkeyup = handleChange1;
function handleChange1(e) {
    var result = parseInt(e.target.value) + parseInt(tax.value);
    amount.value = result.toString();
}

var tax = document.getElementById("tax");
tax.onkeyup = handleChange2;
function handleChange2(e) {
    var result = parseInt(e.target.value) + parseInt(tax_base.value);
    amount.value = result.toString();
}

