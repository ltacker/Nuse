$(document).ready(function() {
    // Lorsque je soumets le formulaire
    $('#preferenceForm').on('submit', function(e) {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
        alert('Test');
        var $this = $(this); // L'objet jQuery du formulaire

        // Je récupère les valeurs
        var name = $('#name').val();
        // Je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(name === '') {
            alert('Les champs doivent êtres remplis');
        } else {
            // Envoi de la requête HTTP en mode asynchrone
            $.ajax({
                url: Routing.generate('addlike'),
                type: 'POST',
                data: $this.serialize(),
                dataType: 'json',
                //success: function(html) {
                //    alert(html);
                //}
            });
        }
    });
});
