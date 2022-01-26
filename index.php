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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noviUcenik">Dodaj</button>
                    <hr style="height: 1px; color: black; background-color: black;">
                    <div class="card-body">
                        <div id="ucenici-tabela" class="text-dark thead-dark">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Novi učenik modalna forma -->
    <div class="modal" id="noviUcenik">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-primary">Novi učenik</h3>
                </div>
                <div class="modal-body">
                    <form class="my-1">
                        <div class="form-group">
                            <label for="ime" class="text-dark">Ime:</label>
                            <input type="text" class="form-control" id="ime">
                        </div>
                        <div class="form-group">
                            <label for="prezime" class="text-dark">Prezime: </label>
                            <input type="text" class="form-control" id="prezime">
                        </div>
                        <div class="form-group">
                            <label for="adresa" class="text-dark">Adresa: </label>
                            <input type="text" class="form-control" id="adresa">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-dark">Email: </label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="razredni" class="text-dark">Razredni: </label>
                            <select id="razredni" class="form-control">
                                <?php
                                $query = "select id, r_ime, r_prezime from razredni";
                                $baza->ExecuteQuery($query);
                                while ($razredni_red = $baza->getResult()->fetch_object()) :
                                ?>
                                    <option value="<?php echo $razredni_red->id; ?>"><?php echo $razredni_red->r_ime . " " . $razredni_red->r_prezime; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnDodaj">Dodaj učenika</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Zatvori</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Izmena učenika modalna forma -->
    <div class="modal" id="izmenaUcenika">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-primary">Izmena učenika</h3>
                </div>
                <div class="modal-body">
                    <form class="my-1">
                        <input type="hidden" class="form-control my-2" id="id_izmena">
                        <div class="form-group">
                            <label for="ime_izmena" class="text-dark">Ime:</label>
                            <input type="text" class="form-control" id="ime_izmena">
                        </div>
                        <div class="form-group">
                            <label for="prezime_izmena" class="text-dark">Prezime: </label>
                            <input type="text" class="form-control" id="prezime_izmena">
                        </div>
                        <div class="form-group">
                            <label for="adresa_izmena" class="text-dark">Adresa: </label>
                            <input type="text" class="form-control" placeholder="" id="adresa_izmena">
                        </div>
                        <div class="form-group">
                            <label for="email_izmena" class="text-dark">Email: </label>
                            <input type="email" class="form-control" id="email_izmena">
                        </div>
                        <div class="form-group">
                            <label for="razredni_izmena" class="text-dark">Razredni: </label>
                            <select id="razredni_izmena" class="form-control">
                                <?php
                                $query = "select id, r_ime, r_prezime from razredni";
                                $baza->ExecuteQuery($query);
                                while ($razredni_red = $baza->getResult()->fetch_object()) :
                                ?>
                                    <option value="<?php echo $razredni_red->id; ?>"><?php echo $razredni_red->r_ime . " " . $razredni_red->r_prezime; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btnIzmeni">Sačuvaj izmene</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Izađi</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>