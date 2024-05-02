const selectChoix = document.getElementById('motif');
selectChoix.addEventListener("change", function () {
    const selectedValue = selectChoix.value;
    console.log("Option sélectionnée:" + selectedValue);
    localStorage.setItem('selectedValue', selectedValue);
});

// Fonction pour afficher les créneaux disponibles pour une date donnée
function showAvailableSlots(date) {
    // Obtenir le jour de la semaine (0 pour dimanche, 1 pour lundi, ..., 6 pour samedi)
    const dayOfWeek = new Date(date).getDay();

    // Vérifier si c'est un jour de semaine (lundi à vendredi)
    const isWeekday = dayOfWeek >= 1 && dayOfWeek <= 5;

    // Si c'est un samedi ou un dimanche, ne pas afficher de créneaux disponibles
    if (!isWeekday) {
        const availableSlotsDiv = document.getElementById('available-slots');
        availableSlotsDiv.innerHTML = "<p>Aucun créneau disponible pour les weekends.</p>";
        return;
    }

    // Définir les heures d'ouverture et de fermeture
    const openingHour = 9; // Ouverture à 9h
    const closingHour = 18;

    // Créer des créneaux toutes les trente minutes de l'heure d'ouverture à l'heure de fermeture
    const availableSlots = [];
    for (let hour = openingHour; hour < closingHour; hour++) {
        for (let minute = 0; minute < 60; minute += 30) {
            availableSlots.push(`${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`);
        }
    }

    // Afficher les créneaux disponibles dans la div "available-slots"
    const availableSlotsDiv = document.getElementById('available-slots');
    availableSlotsDiv.innerHTML = '';
    const ul = document.createElement('ul');
    availableSlots.forEach(slot => {
        const li = document.createElement('li');
        li.textContent = slot;
        ul.appendChild(li);
    });
    availableSlotsDiv.appendChild(ul);
}


// Exemple de l'utilisation de la fonction pour afficher les créneaux disponibles pour une date donnée
const dateInput = document.getElementById('datecalendar');
dateInput.addEventListener('change', function () {
    const selectedDate = this.value;
    showAvailableSlots(selectedDate);
});
