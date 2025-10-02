import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import { Spanish } from "flatpickr/dist/l10n/es.js";

// Inicialización básica
flatpickr(".date-picker", {
    dateFormat: "d/m/Y",
    locale: Spanish,
});
