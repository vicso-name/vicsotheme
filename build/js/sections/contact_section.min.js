document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('input, textarea').forEach(element => {
        const formRow = element.closest('.form-row');
        if (!formRow) return;

        const label = formRow.querySelector('.contact-form__label, .textarea-label');
        if (!label) return;

        addEvents(element, label);
    });

    function addEvents(element, label) {
        element.addEventListener('focus', () => label.classList.add('active'));
        element.addEventListener('blur', () => {
            if (!element.value.trim()) {
                label.classList.remove('active');
            }
        });
        if (element.value.trim()) {
            label.classList.add('active');
        }
    }

    document.querySelectorAll("form").forEach(form => {
        const submitButton = form.querySelector(".wpcf7-submit");
        const acceptanceCheckbox = form.querySelector("input[name='acceptance-policy']");
        const acceptanceError = form.querySelector(".contact-form__error-message");

        if (!acceptanceCheckbox || !submitButton) return;

        submitButton.removeAttribute("disabled");

        acceptanceCheckbox.addEventListener("change", function () {
            if (acceptanceCheckbox.checked) {
                acceptanceError.style.display = "none";
            }
        });

        submitButton.addEventListener("click", function (event) {
            if (!acceptanceCheckbox.checked) {
                event.preventDefault();
                acceptanceError.style.display = "block";
            }
        });
    });


});