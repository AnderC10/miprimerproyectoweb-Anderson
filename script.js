document.getElementById("registroForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const clave = document.getElementById("clave").value;
    const confirmar = document.getElementById("confirmar").value;
    const mensaje = document.getElementById("mensaje");

    if (clave !== confirmar) {
        mensaje.textContent = "❌ Las contraseñas no coinciden.";
        mensaje.style.color = "red";
    } else {
        mensaje.textContent = "✅ Registro exitoso.";
        mensaje.style.color = "green";
        this.reset();
    }
});
