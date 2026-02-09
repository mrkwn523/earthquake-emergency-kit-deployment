document.addEventListener("DOMContentLoaded", function () {
    // Basic form checking
    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", function (event) {
            // Kit Type selection (radio buttons)
            let kitTypeSelected = form.querySelector("input[name='kit_type']:checked");
            if (!kitTypeSelected) {
                alert("Please select a Kit Type.");
                event.preventDefault();
                return false;
            }

            // Location field (text input)
            let locationInput = form.querySelector("[name='location']");
            if (!locationInput.value.trim()) {
                alert("Location is required.");
                locationInput.focus();
                event.preventDefault();
                return false;
            }

            // Status field (dropdown menu)
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

// Ask confirmation before removing data
function confirmDelete() {
    return confirm("Are you sure you want to delete this kit?");
}
