<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <!-- Header component -->
        <?php require_once(__DIR__ . '/components/header.php'); ?>

        <h1 class="text-center mt-5 mb-5">Contactez nous</h1>

        <form action="submit_contact.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>

                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">

                <p id="email-help" class="form-text">Nous ne revendrons pas votre email.</p>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>

                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
            </div>

            <div class="mb-3">
                <label for="screenshot" class="form-label">Votre capture d'écran</label>
                
                <input type="file" class="form-control" id="screenshot" name="screenshot" />
            </div>

            <button type="submit" class="btn btn-primary m-auto d-block">Envoyer</button>
        </form>
    </div>

    <!-- Footer component -->
    <?php require_once(__DIR__ . '/components/footer.php'); ?>
</body>


</html>