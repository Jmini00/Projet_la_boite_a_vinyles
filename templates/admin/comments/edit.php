<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition commentaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto p-5">
        <div class="d-flex justify-content-between align-items-center pb-5">
            <h1>Administration</h1>
            <a href="/laboiteavinyles/admin" class="btn btn-primary">Accueil Administration</a>
        </div>


        <!-- Message d'erreur -->
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <!-- Message de succès -->
        <?php if (isset($success)) : ?>
            <div class="alert alert-success">
                <?= $success; ?>
            </div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="username" class="form-label">Membre</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $comment->getUserName(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="useremail" class="form-label">Email</label>
                <input type="text" class="form-control" id="useremail" name="useremail" value="<?= $comment->getUserEmail(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="vinyl" class="form-label">Vinyle</label>
                <input type="text" class="form-control" id="vinyl" name="vinyl" value="<?= $comment->getVinyleId(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Date</label>
                <input type="text" class="form-control" id="date" name="date" value="<?= $comment->getCommentDate()->format('d.m.Y'); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="contenu" class="form-label">Commentaire</label>
                <input type="text" class="form-control" id="contenu" name="contenu" value="<?= $comment->getContent(); ?>" readonly>
            </div>
            <div class="mb-3">
                <?php if ($comment->getStatus() === 1) : ?>
                    <p>Status actif</p>
                    <input type="radio" id="actif" name="status" value="1" checked>
                    <label for="actif" class="form-label">Actif</label><br>
                    <input type="radio" id="block" name="status" value="00">
                    <label for="block" class="form-label">Bloqué</label><br>
                <?php else : ?>
                    <p>Statut bloqué</p>
                    <input type="radio" id="actif" name="status" value="1">
                    <label for="actif" class="form-label">Actif</label><br>
                    <input type="radio" id="block" name="status" value="00" checked>
                    <label for="block" class="form-label">Bloqué</label><br>
                <?php endif; ?>
            </div>
            <div>
                <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
            </div>
            <div class="mt-4">
                <button class="btn btn-success">Modifier le commentaire</button>
                <a href="/laboiteavinyles/admin" class="btn btn-light ml-5">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>