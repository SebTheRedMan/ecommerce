let links = document.querySelectorAll("[data-changeVerified]");

// On boucle sur les liens
for(let link of links){
    // On met un écouteur d'évènements
    link.addEventListener("click", function(e){
        // On empêche la navigation
        e.preventDefault();

        // On demande confirmation
        if(confirm("Voulez-vous changer la vérification de l\'utilisateur ?")){
            // On envoie la requête ajax
            fetch(this.dataset.ajax, {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({"_token": this.dataset.token})
            }).then(response => response.json())
            .then(data => {
                if ($('#' + this.id).is(':checked')) {
                    $('#' + this.id).prop('checked', false);
                } else {
                    $('#' + this.id).prop('checked', true);
                }
            })
        }
    });
}
