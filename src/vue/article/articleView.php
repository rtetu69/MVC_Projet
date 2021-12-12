<?php
    use App\model\Article;
    use App\repository\ArticleRepository;
?>

<!DOCTYPE html>
<html>
<title>MiniProjet - Karim & Romain</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-content w3-sand" style="max-width:100%">

    <div class="w3-container w3-margin">
        <form action="index.php?route=articleControllers&action=createArticle" class="w3-container w3-card-4 w3-light-grey" method="post">
            <h2 class="w3-center">Ajouter un article</h2>
            <p class="w3-center" style="font-style: italic; color:grey;">Renseigner les différents champs pour pouvoir ajouter un article.</p>

            <p><label>Nom de l'article :</label>
                <input class="w3-input w3-border" name="nom" id="nom" placeholder="Entrez le nom de l'article ..." type="text">
            </p>

            <p><label>Prix de l'article :</label>
                <input class="w3-input w3-border" name="prix" id="prix" placeholder="Entrez le prix de l'article ..." type="text">
            </p>
            <button class="w3-btn w3-margin-bottom w3-grey" type="submit">Enregistrer</button>
        </form>
    </div>
    
    <div class="w3-container w3-margin">
        <table class="w3-table-all w3-card-4 w3-striped w3-bordered w3-border w3-centered  w3-hoverable">
            <tr class="w3-grey">
                <th>Nom de l'article</th>
                <th>Prix de l'article</th>
                <th>Date de mise en ligne</th>
                <th>Options</th>
            </tr>

            <?php
            $article = new Article();
            $articleRepository = new ArticleRepository();

            $articles = $articleRepository->getAllArticles();

            foreach ($articles as $article) {
            ?>
            <tr>
                <td><?= $articles->getNom() ?></td>
                <td><?= $articles->getPrix() ?></td>
                <td><?= $articles->getCreatedAt()->format('Y-m-d H:i:s') ?></td>
                <td><button><i class="fa fa-close"></i></button> <button><i class="fa fa-refresh"></i></button></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <div class="w3-black w3-center w3-padding-24"><a>Mini Projet - Karim & Romain</a></div>

</body>

</html>