import tinymce from "tinymce/tinymce";

// Tema e iconos
import "tinymce/icons/default";
import "tinymce/themes/silver/theme";

// Skins
import "tinymce/skins/ui/oxide/skin.css";

// Plugins
import "tinymce/plugins/advlist";
import "tinymce/plugins/autolink";
import "tinymce/plugins/lists";
import "tinymce/plugins/link";
import "tinymce/plugins/image";
import "tinymce/plugins/charmap";
import "tinymce/plugins/preview";
import "tinymce/plugins/fullscreen";
import "tinymce/plugins/code";
import "tinymce/plugins/searchreplace";
import "tinymce/plugins/wordcount";

// Inicialización
tinymce.init({
    selector: "textarea.tinymce-editor",
    plugins:
        "advlist autolink lists link image charmap preview fullscreen code searchreplace wordcount",
    toolbar:
        "undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | code fullscreen",
    skin: false,
    content_css: false,
    menubar: false,
});
