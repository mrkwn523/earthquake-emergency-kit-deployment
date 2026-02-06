document.addEventListener("DOMContentLoaded", function () {
    // Form validation
    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", function (event) {
            let kitName = form.querySelector("[name='kit_name']");
            let contents = form.querySelector("[name='contents']");

            if (!kitName.value.trim()) {
                alert("Kit Name is required.");
                kitName.focus();
                event.preventDefault();
                return false;
            }

            if (!contents.value.trim()) {
                alert("Contents field cannot be empty.");
                contents.focus();
                event.preventDefault();
                return false;
            }
        });
    });

    // Highlight rows based on status
    const rows = document.querySelectorAll("table tr");
    rows.forEach(row => {
        let statusCell = row.querySelector("td:nth-child(5)");
        if (statusCell) {
            let status = statusCell.textContent.trim();
            if (status === "Available") {
                row.style.backgroundColor = "#d4edda"; // green
            } else if (status === "Deployed") {
                row.style.backgroundColor = "#fff3cd"; // yellow
            } else if (status === "Needs Restock") {
                row.style.backgroundColor = "#f8d7da"; // red
            }
        }
    });
});

// Confirmation before delete
function confirmDelete() {
    return confirm("Are you sure you want to delete this kit?");
}
