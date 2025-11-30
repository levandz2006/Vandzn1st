// Hiện/ẩn mật khẩu
document.addEventListener('DOMContentLoaded', function() {
    var toggle = document.getElementById('togglePassword');
    var input = document.getElementById('loginPassword');
    var icon = document.getElementById('togglePasswordIcon');
    if (toggle && input) {
        toggle.addEventListener('click', function() {
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            }
        });
    }
});