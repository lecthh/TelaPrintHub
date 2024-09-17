function togglePasswordVisibility(inputId, eyeIconId) {
    const input = document.getElementById(inputId);
    const eyeIcon = document.getElementById(eyeIconId);

    if (input.type === "password") {
        input.type = "text";
        eyeIcon.querySelector('#open-eye').classList.remove('hidden');
        eyeIcon.querySelector('#closed-eye').classList.add('hidden');
    } else {
        input.type = "password";
        eyeIcon.querySelector('#open-eye').classList.add('hidden');
        eyeIcon.querySelector('#closed-eye').classList.remove('hidden');
    }
}