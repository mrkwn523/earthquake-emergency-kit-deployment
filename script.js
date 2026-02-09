document.addEventListener("DOMContentLoaded", function () {

    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", function (event) {
            //kit selecttion
            let kitTypeSelected = form.querySelector("input[name='kit_type']:checked");
            if (!kitTypeSelected) {
                alert("Please select a Kit Type.");
                event.preventDefault();
                return false;
            }

            //location selection
            let locationInput = form.querySelector("[name='location']");
            if (!locationInput.value.trim()) {
                alert("Location is required.");
                locationInput.focus();
                event.preventDefault();
                return false;
            }

            //status selection
            let statusSelect = form.querySelector("[name='status']");
            if (!statusSelect.value.trim()) {
                alert("Please select a Status.");
                statusSelect.focus();
                event.preventDefault();
                return false;
            }
        });
    });
});

// Confirmation before delete
function confirmDelete() {
    return confirm("Are you sure you want to delete this kit?");
}
