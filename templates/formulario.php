<!DOCTYPE html>
<html>
<head>
    <title>Calculadora IMC - Desafio Inicial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
    body {
        padding-top: 50px;
    }
    .principal {
        padding: 40px 15px;
        text-align: center;
    }
    .form{
        padding:  20px;
        border: 1px solid #ccc;
    }
</style>

<div class="container">
    <div class="principal">
        <div class="row">
            <h1>Calculadora de IMC</h1>
            <form action="" method="post" accept-charset="utf-8" class="form">
                <div class="form-group">
                    <input name="peso" type="text" class="form-control" placeholder="Peso:">
                </div>
                <div class="form-group">
                    <input name="altura" type="text" class="form-control" placeholder="Altura:">
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    </div>
</div>
<h1> @result</h1>
<script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>