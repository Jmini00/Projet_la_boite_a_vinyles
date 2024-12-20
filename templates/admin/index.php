<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/admin.js" defer></script>
</head>

<body>
    <div class="container mx-auto p-4">
        <div class="d-flex justify-content-between align-items-center pb-5">
            <h1>Administration</h1>
            <a href="/laboiteavinyles/" class="btn btn-primary btn-sm">Accueil</a>
        </div>

        <!-- Message de succès -->
        <?php if (isset($_GET['success'])) : ?>
            <div class="alert alert-success">
                <?= $_GET['success']; ?>
            </div>
        <?php endif; ?>

        <div class="container mx-auto">
            <h2 id="members-btn" class="btn btn-outline-dark btn-sm">Liste membres</h2>
            <table id="members-list" class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Membres</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rôle</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td class="py-4"><?= $user->getId(); ?></td>
                            <td class="py-4"><?= $user->getUsername(); ?></td>
                            <td class="py-4"><?= $user->getFirstname(); ?></td>
                            <td class="py-4"><?= $user->getLastname(); ?></td>
                            <td class="py-4"><?= $user->getEmail(); ?></td>
                            <td class="py-4"><?= $user->getRole(); ?></td>
                            <td class="py-4"><?= $user->getStatus(); ?></td>
                            <td class="py-3">
                                <a href="/laboiteavinyles/admin/edit/user?id=<?= $user->getId(); ?>" class="btn btn-outline-secondary btn-sm">
                                    Editer
                                </a>
                                <!--<a href="/laboiteavinyles/admin/delete/user?id=<?= $user->getId(); ?>" class="btn btn-outline-danger"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">
                                    Supprimer
                                </a>-->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <h2 id="artists-btn" class="btn btn-outline-dark btn-sm">Liste artistes</h2>
            <a href="/laboiteavinyles/admin/new/artist" class="btn btn-success btn-sm">Nouvel Artiste</a>
        </div>
        <table id="artists-list" class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Pays</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artists as $artist) : ?>
                    <tr>
                        <td class="py-4"><?= $artist->getId(); ?></td>
                        <td class="py-4"><?= $artist->getName(); ?></td>
                        <td class="py-4"><?= mb_strimwidth($artist->getDescription(), 0, 75, '...'); ?></td>
                        <td class="py-4"><?= $artist->getCountry(); ?></td>
                        <td class="py-3">
                            <a href="/laboiteavinyles/admin/edit/artist?id=<?= $artist->getId(); ?>" class="btn btn-outline-secondary">
                                Editer
                            </a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <h2 id="countries-btn" class="btn btn-outline-dark btn-sm">Liste pays</h2>
            <a href="/laboiteavinyles/admin/new/country" class="btn btn-success btn-sm">Nouveau Pays</a>
        </div>
        <table id="countries-list" class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($countries as $country) : ?>
                    <tr>
                        <td class="py-4"><?= $country->getId(); ?></td>
                        <td class="py-4"><?= $country->getName(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <h2 id="category-btn" class="btn btn-outline-dark btn-sm">Liste catégories</h2>
            <a href="/laboiteavinyles/admin/new/category" class="btn btn-success btn-sm">Nouvelle Catégorie</a>
        </div>
        <table id="category-list" class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td class="py-4"><?= $category->getId(); ?></td>
                        <td class="py-4"><?= $category->getName(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <hr>
        <div class="d-flex justify-content-between align-items-center">
            <h2 id="vinyls-btn" class="btn btn-outline-dark btn-sm">Liste vinyles</h2>
            <a href="/laboiteavinyles/admin/new/vinyle" class="btn btn-success btn-sm">Nouveau Vinyle</a>
            <a href="/laboiteavinyles/admin/new/tracklist" class="btn btn-success btn-sm">Nouveaux Morceaux</a>
        </div>
        <table id="vinyls-list" class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre Album</th>
                    <th scope="col">Artiste</th>
                    <th scope="col">Sortie</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vinyls as $vinyl) : ?>
                    <tr>
                        <td class="py-4"><?= $vinyl->getId(); ?></td>
                        <td class="py-4"><?= $vinyl->getName(); ?></td>
                        <td class="py-4"><?= $vinyl->getArtiste(); ?></td>
                        <td class="py-4"><?= $vinyl->getReleaseDate(); ?></td>
                        <td class="py-4"><?= $vinyl->getCategorie(); ?></td>
                        <td class="py-3">
                            <a href="/laboiteavinyles/admin/edit/vinyle?id=<?= $vinyl->getId(); ?>" class="btn btn-outline-secondary">
                                Editer
                            </a>
                            <!--<a href="/laboiteavinyles/admin/delete/vinyle?id=<?= $vinyl->getId(); ?>" class="btn btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le vinyle ?')">
                                Supprimer
                            </a>-->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <hr>
        <h2 id="comments-btn" class="btn btn-outline-dark btn-sm">Liste commentaires</h2>
        <table id="comments-list" class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Vinyle</th>
                    <th scope="col">Date</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comments as $comment) : ?>
                    <tr>
                        <td class="py-4"><?= $comment->getId(); ?></td>
                        <td class="py-4"><?= $comment->getUserName(); ?></td>
                        <td class="py-4"><?= $comment->getVinyleId(); ?></td>
                        <td class="py-4"><?= $comment->getCommentDate()->format('d.m.Y'); ?></td>
                        <td class="py-4"><?= $comment->getStatus(); ?></td>
                        <td class="py-3">
                            <a href="/laboiteavinyles/admin/edit/comment?id=<?= $comment->getId(); ?>" class="btn btn-outline-secondary">
                                Editer
                            </a>
                            <a href="/laboiteavinyles/admin/delete/comment?id=<?= $comment->getId(); ?>" class="btn btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le commentaire ?')">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>