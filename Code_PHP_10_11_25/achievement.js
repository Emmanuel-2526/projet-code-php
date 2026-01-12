document.getElementById('achievementForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const newAchievement = document.getElementById('newAchievement').value;

    fetch('addAchievement.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ achievement: newAchievement })
    })
    .then(response => {
        if (!response.ok) throw new Error("Erreur lors de l'ajout de la réalisation");
        return response.json();
    })
    .then(data => {
        const li = document.createElement('li');
        li.textContent = data.achievement;
        document.getElementById('achievementList').appendChild(li);
        document.getElementById('newAchievement').value = '';
    })
    .catch(error => {
        alert(error.message);
    });
});
