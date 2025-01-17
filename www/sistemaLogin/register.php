<?php
require_once "autoloader.php";
$security = new Security();
$registerMessage = $security->doRegister();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="form/view.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div id="form_container" class="card">
                <div class="card-header">
                    <h1 class="text-center">Registro</h1>
                </div>
                <div class="card-body">
                    <form class="appnitro" method="post" action="">
                        <div class="form_description">
                            <h2>Login</h2>
                            <h4><?=$registerMessage?></h4>
                            <p></p>
                        </div>
                        <div class="mb-3">
                            <label for="userName" class="form-label">User Name</label>
                            <input name="userName" class="form-control" type="text" maxlength="255" value="">
                        </div>
                        <div class="mb-3">
                            <label for="userPassword" class="form-label">User Password</label>
                            <input name="userPassword" class="form-control" type="password" maxlength="255" value="">
                        </div>
                        <div class="mb-3">
                            <input id="saveForm" class="btn btn-primary" type="submit" name="submit" value="Register">
                        </div>
                    </form>
                    <div id="footer">
                        Generated by <a href="http://www.floridauniversitaria.es">DAW1</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="form/view.js"></script>

</body>
</html>
