document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll("form").forEach(form => {

        form.addEventListener("submit", e => {

            let valid = true;

            form.querySelectorAll("[required]").forEach(input => {

                removeError(input);

                if (!input.value.trim()) {
                    showError(input, "This field is required");
                    valid = false;
                }

            });

            if (!valid) e.preventDefault();

        });

    });

    document.querySelectorAll("table tbody tr").forEach(row => {

        const statusCell = row.cells[4];
        if (!statusCell) return;

        const status = statusCell.textContent.trim().toLowerCase();

        if (status === "available") row.classList.add("available");
        if (status === "deployed") row.classList.add("deployed");
        if (status === "needs restock") row.classList.add("restock");

    });

});


function showError(input, message) {

    input.classList.add("is-invalid");

    const error = document.createElement("small");
    error.className = "error-text";
    error.innerText = message;

    input.parentNode.appendChild(error);
}

function removeError(input) {

    input.classList.remove("is-invalid");

    const error = input.parentNode.querySelector(".error-text");
    if (error) error.remove();
}


function confirmDelete() {
    return confirm("Delete this kit permanently?");
}
