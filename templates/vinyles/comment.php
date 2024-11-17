<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout de commentaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto p-5">
    <div class="d-flex justify-content-between align-items-center pb-5">
                <h1>Publier un commentaire</h1>
                <a href="/laboiteavinyles/vinyles" class="btn btn-primary">Tous les vinyles</a>
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
                <div><label for="comment" class="form-label">Commentez ce vinyle</label></div>
                <textarea class="form-control" id="comment" cols="50" rows="5" name="comment"></textarea>
            </div>
            <div>
                <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>"> 
            </div>
            <div class="mt-4">
            <button class="btn btn-primary">
                Publier
            </button>
            <a href="/laboiteavinyles" class="btn btn-light ml-3">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>