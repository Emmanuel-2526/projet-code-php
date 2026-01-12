document.getElementById('serviceForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const newService = document.getElementById('newService').value;

    fetch('addService.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'service=' + encodeURIComponent(newService)
    })
    .then(response => {
        if (!response.ok) throw new Error("Erreur lors de l'ajout");
        return response.text();
    })
    .then(service => {
        const li = document.createElement('li');
        li.textContent = service;
        document.getElementById('serviceList').appendChild(li);
        document.getElementById('newService').value = '';
    })
    .catch(error => {
        alert(error.message);
    });
});
