<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
    <title>PHP domaći</title>
</head>

<body class="badge-dark">

    <?php
    include("Baza.php");
    $baza = new Baza('skolaucenici');
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-title mt-5 text-center">
                    <hr style="height: 1px; color: black; background-color: black;">
                    <h2 class="text-center text-dark"> Učenici</h2>
                    <button type="button" class="btn btn-primary">Dodaj</button>
                    <hr style="height: 1px; color: black; background-color: black;">
                    <div class="card-body">
                        <div id="ucenici-tabela" class="text-dark thead-dark">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>