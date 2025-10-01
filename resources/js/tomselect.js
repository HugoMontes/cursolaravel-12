import TomSelect from "tom-select";
import "tom-select/dist/css/tom-select.css";

// Inicializar
document.addEventListener("DOMContentLoaded", function () {
    // Tom Select
    new TomSelect(".tom-select", { placeholder: "Seleccione..." });
});
