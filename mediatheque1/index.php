<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médiathèque</title>
    <link href="css/styleindex.css" rel="stylesheet" >

</head>

<body>
    
<nav class="navbar" sticky-top>
  
  <a href="#" class="logo">Application de Gestion de Bibliothèque</a> 
 <div class="nav-links">
     <ul>
         <li> <a href="#"> Home</a></li>
         <li> <a href="#">Se déconnecte</a></li>
     </ul> 
 </div>
        <form>
           <input class="form-control me-2" type="search" placeholder="rechercher" aria-label="Search">
           <button class="btn btn-outline-success" type="submit">Rechercher</button>
         </form>
     
</nav>

    <h1>Ajouter un utilisateur</h1>

    <form action="add_user.php" method="post">
        <!-- Champs pour ajouter un utilisateur -->
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="name">Prénom :</label>
        <input type="text" id="name" name="name" required><br>

        <label for="member_id">Numéro carte de membre :</label>
        <input type="text" id="member_id" name="member_id" required><br>

                <button>
                 Ajouter
                </button>
    </form>

    <button id="listeUtilisateursBtn">Liste Utilisateurs</button>
    <div id="resultatUtilisateurs"></div>
    
    <h1>Supprimer un livre</h1>
    <form action="delete_books.php" method="post">
        <!-- Champs pour supprimer un livre -->
        <label for="titre_supprimer">Titre du livre à supprimer :</label>
        <input type="text" id="titre_supprimer" name="title" required>
          <button data-label="Register" class="rainbow-hover">
           <span class="sp">Supprimer</span>
</button>

    </form>
    <div id="successMessage"></div>

    <h1>Emprunter un livre</h1>
    <div id="empruntMessageContainer"></div>
    <form id="empruntForm" action="emprunter.php" method="post">
        <!-- Champs pour emprunter un livre -->
        <label for="title">Titre du livre à emprunter :</label>
        <input type="text" id="title" name="title" required><br>

        <!-- Champs pour l'utilisateur -->
        <label for="nom_emprunteur">Nom de l'emprunteur :</label>
        <input type="text" id="nom_emprunteur" name="nom_emprunteur" required><br>

        <label for="prenom_emprunteur">Prénom de l'emprunteur :</label>
        <input type="text" id="prenom_emprunteur" name="prenom_emprunteur" required><br>

        <!-- Retiré le champ de saisie de la carte membre -->

        <label for="emprunt_date">Date d'emprunt :</label>
        <input type="date" id="emprunt_date" name="emprunt_date" required><br>

        <label for="retour_date">Date de retour :</label>
        <input type="date" id="retour_date" name="retour_date" required><br>

        <button data-label="Register" class="rainbow-hover">
           <span class="sp">Emprunter</span>
    </form> 

    <button id="listeEmpruntsBtn">Découvrez Livres Empruntés</button>


    <div id="resultatEmprunts"></div>


    
<div id="messageContainer"></div>

    
    <button id="catalogueBtn" onclick="loadCatalogue()">Découvrez notre catalogue</button>

    
    
    <div id="catalogueContainer">
        <!-- La liste des livres sera chargée ici via AJAX -->
    </div>

    
    <div id="descriptionContainer"></div>

    
    <h1>Ajouter un livre</h1>
<form id="addBookForm" action="add_book.php" method="post">
        <!-- Champs pour ajouter un livre -->
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" required><br>

        <label for="isbn">Numéro ISBN :</label>
        <input type="text" id="isbn" name="isbn" required><br>

        <label for="authors">Auteurs :</label>
        <input type="text" id="authors" name="authors" required><br>

        <label for="pageCount">Nombre de pages :</label>
        <input type="text" id="pageCount" name="pageCount"><br>

        <label for="categories">Catégorie :</label>
        <input type="text" id="categories" name="categories"><br>

        <label for="shortDescription">Description courte :</label>
        <textarea id="shortDescription" name="shortDescription" rows="4"></textarea><br>

        <label for="longDescription">Description longue :</label>
        <textarea id="longDescription" name="longDescription" rows="10"></textarea><br>

        <br>
        <button>
                 Ajouter
                </button>
        <div id="messageContainer">
    <?php
    // Vérifier si un message est présent dans l'URL
    if (isset($_GET['message'])) {
        echo urldecode($_GET['message']);
    }
    ?>
</div>
        
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        var catalogueVisible = false; // Variable pour suivre l'état de la liste des livres

        function loadCatalogue() {
            // Vérifier si la liste des livres est visible
            if (catalogueVisible) {
                // Si elle est visible, la cacher
                $('#catalogueContainer').html('');
                catalogueVisible = false;
            } else {
                // Si elle n'est pas visible, charger dynamiquement la liste des livres
                $.ajax({
                    url: 'catalogue.php',
                    method: 'GET',
                    success: function (data) {
                        $('#catalogueContainer').html(data);
                        catalogueVisible = true;
                    },
                    error: function () {
                        alert('Erreur lors du chargement du catalogue.');
                    }
                });
            }
        }

        $(document).ready(function () {
    var listeEmpruntsVisible = false;

    $('#listeEmpruntsBtn').click(function () {
        // Vérifier si la liste des emprunts est visible
        if (listeEmpruntsVisible) {
            // Si elle est visible, la cacher
            $('#resultatEmprunts').html('');
            listeEmpruntsVisible = false;
        } else {
            // Si elle n'est pas visible, charger dynamiquement la liste des emprunts
            $.ajax({
                url: 'liste_livres_empruntes.php',
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Construire le tableau HTML avec les données JSON
                    var tableHtml = '<table border="1"><thead><tr><th>ID Emprunt</th><th>Titre du Livre</th><th>Nom de l\'Emprunteur</th><th>Date d\'Emprunt</th><th>Date de Retour</th></tr></thead><tbody>';

                    // Parcourir les données et construire chaque ligne du tableau
                    data.forEach(function (emprunt) {
                        tableHtml += '<tr><td>' + emprunt.id + '</td><td>' + emprunt.title + '</td><td>' + emprunt.nom_emprunteur +  '</td><td>' + emprunt.emprunt_date + '</td><td>' + emprunt.retour_date + '</td></tr>';
                    });

                    tableHtml += '</tbody></table>';

                    // Afficher le tableau dans une zone de la page
                    $('#resultatEmprunts').html(tableHtml);
                    listeEmpruntsVisible = true;
                },
                error: function () {
                    alert('Erreur lors du chargement de la liste des livres empruntés.');
                }
            });
        }
    });
});


        $(document).ready(function () {
    // Intercepter la soumission du formulaire de suppression
    $('form[action="delete_books.php"]').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: 'delete_books.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Afficher le message de succès
                    $('#successMessage').html('<p>' + response.message + '</p>');
                } else {
                    // Afficher le message d'erreur
                    alert(response.message);
                }
            },
            error: function () {
                alert('Erreur lors de la communication avec le serveur.');
            }
        });
    });
});
        $(document).ready(function () {
            function loadDescription(title, button) {
                // Récupérer le conteneur de la description
                var descriptionContainer = button.closest('tr').next('.description-container');

                // Vérifier si la description est déjà visible
                if (descriptionContainer.length > 0) {
                    // Si elle est visible, la cacher et retirer l'attribut personnalisé
                    descriptionContainer.remove();
                    button.removeAttr('data-description-visible');
                } else {
                    // Charger dynamiquement la longueDescription via AJAX
                    $.ajax({
                        url: 'load_description.php',
                        method: 'GET',
                        data: { title: title },
                        success: function (data) {
                            // Créer un conteneur pour la description s'il n'existe pas
                            descriptionContainer = $('<tr class="description-container">')
                                .append('<td colspan="3"><p>' + data + '</p></td>');

                            // Insérer la longueDescription après la ligne du titre du livre correspondant
                            button.closest('tr').after(descriptionContainer);

                            // Ajouter un attribut pour indiquer que la description est visible
                            button.attr('data-description-visible', true);
                        },
                        error: function () {
                            alert('Erreur lors du chargement de la description.');
                        }
                    });
                }
            }

            // Utiliser la délégation d'événements pour les boutons générés dynamiquement
            $(document).on('click', '.description-btn', function () {
                var title = $(this).data('title');
                loadDescription(title, $(this));
            });
        });

        $(document).ready(function () {
            var listeUtilisateursVisible = false;

            $('#listeUtilisateursBtn').click(function () {
                // Vérifier si la liste des utilisateurs est visible
                if (listeUtilisateursVisible) {
                    // Si elle est visible, la cacher
                    $('#resultatUtilisateurs').html('');
                    listeUtilisateursVisible = false;
                } else {
                    // Si elle n'est pas visible, charger dynamiquement la liste des utilisateurs
                    $.ajax({
                        url: 'liste_utilisateurs.php',
                        method: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            // Construire le tableau HTML avec les données JSON
                            var tableHtml = '<table border="1"><thead><tr><th>ID Utilisateur</th><th>Nom</th><th>Prénom</th><th>Carte Membre</th><th>Livre Emprunté</th></tr></thead><tbody>';

                            // Parcourir les données et construire chaque ligne du tableau
                            data.forEach(function (utilisateur) {
                                tableHtml += '<tr><td>' + utilisateur.id_utilisateur + '</td><td>' + utilisateur.nom + '</td><td>' + utilisateur.prenom + '</td><td>' + utilisateur.carte_membre + '</td><td>' + (utilisateur.livre_emprunte ? utilisateur.livre_emprunte : 'Aucun') + '</td></tr>';
                            });

                            tableHtml += '</tbody></table>';

                            // Afficher le tableau dans une zone de la page
                            $('#resultatUtilisateurs').html(tableHtml);
                            listeUtilisateursVisible = true;
                        },
                        error: function () {
                            alert('Erreur lors du chargement de la liste des utilisateurs.');
                        }
                    });
                }
            });
        });

        $(document).ready(function () {
        // Intercepter la soumission du formulaire d'emprunt
        $('#empruntForm').submit(function (e) {
            e.preventDefault(); // Empêcher le formulaire de se soumettre normalement

            // Envoyer les données du formulaire via AJAX
            $.ajax({
                url: 'emprunter.php',
                method: 'POST',
                data: $(this).serialize(), // Envoie les données du formulaire
                dataType: 'json', // Attend une réponse JSON du serveur
                success: function (response) {
                    console.log(response); // Ajoutez cette ligne
    $('#messageContainer').html('<p>' + response.message + '</p>');
    if (response.success) {
        $('#empruntForm')[0].reset();
    }
                    // Mettre à jour le messageContainer avec le message reçu
                    $('#messageContainer').html('<p>' + response.message + '</p>');

                    // Effacer le formulaire si l'emprunt est réussi
                    if (response.success) {
                        $('#empruntForm')[0].reset();
                    }
                },
                error: function () {
                    alert('Erreur lors de la communication avec le serveur.');
                }
            });
        });
    });

    </script>
    <footer>
    <p>Copyright © 2023 DWWM</p>
    </footer>
</body>

</html>
