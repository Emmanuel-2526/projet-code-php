document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("companyForm");
    const input = document.getElementById("newCompanyName");
    const display = document.getElementById("companyDisplay");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const newName = input.value;

        fetch("updateCompanyName.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "companyName=" + encodeURIComponent(newName)
        })
        .then(response => response.text())
        .then(data => {
            display.textContent = data;
        })
        .catch(error => {
            console.error("Erreur AJAX :", error);
        });
    });
});
