/*
|--------------------------------------------------------------------------
| DeleteComicElement JS
|--------------------------------------------------------------------------
|
| General JS file to view a pop-up after the
| submit on the form for 
| the elimination of a file.
|
*/

const formElements = document.querySelectorAll("form[data-form-destroy]");

formElements.forEach((formEl) => {
    formEl.addEventListener("submit", function (e) {
        e.preventDefault();
        const formElName = formEl.getAttribute("data-element-name");
        const confirmPopUp = confirm(
            `Are tou sure you want to delete ${formElName}`
        );
        if (confirmPopUp) this.submit();
    });
});
