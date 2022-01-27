<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="stil.css">
    <title>Document</title>
</head>

<body>

    <div>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand" style="margin-left: 900px; font-size: 25px;">CRUD Operacije</a>
            </div>
    </div>

    <div class="container" style="margin-top:50px;">
        <table class="table table-hover table-bordered table-striped" id="tbl-srt" style="padding-top: 10px;">
            <thead class="thead-dark table-info">
                <tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Adresa</th>
                    <th>Email</th>
                    <th>Razredni</th>
                    <th>Škola</th>
                    <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("Baza.php");
                $baza = new Baza('skolaucenici');
                $query = "select uk.id, uk.ime, uk.prezime, uk.adresa, uk.email, r.r_ime, r.r_prezime, s.naziv from ucenik uk join razredni r on uk.razredni_id=r.id join skola s on r.skola_id=s.id";
                $baza->ExecuteQuery($query);

                while ($ucenik = $baza->getResult()->fetch_object()) :
                ?>
                    <tr>
                        <td><?php echo $ucenik->id; ?></td>
                        <td><?php echo $ucenik->ime;  ?></td>
                        <td><?php echo $ucenik->prezime;  ?></td>
                        <td><?php echo $ucenik->adresa;  ?></td>
                        <td><?php echo $ucenik->email;  ?></td>
                        <td><?php echo $ucenik->r_ime . " " . $ucenik->r_prezime;  ?></td>
                        <td><?php echo $ucenik->naziv;  ?></td>
                        <td>
                            <button class="btn btn-primary" id="dugmeIzmeni" value="<?php echo $ucenik->id; ?>">Izmeni</button>
                            <button class="btn btn-danger" id="dugmeObrisi" value="<?php echo $ucenik->id; ?>">Obriši</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="javascript.js"></script>
</body>

</html>