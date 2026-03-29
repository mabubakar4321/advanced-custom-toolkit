document.addEventListener("DOMContentLoaded", function () {

    const input = document.querySelector('input[name="act_message"]');

    if (input) {
        input.addEventListener("input", function () {
            this.style.borderColor = "#6a0dad";
        });
    }

});