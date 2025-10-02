document.addEventListener("change", function (e) {
    if (e.target.classList.contains("file-imagen")) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) =>
                (document.getElementById("imageview").src = e.target.result);
            reader.readAsDataURL(file);
            document.getElementById("imageview").style.display = "block";
        }
    }
});
