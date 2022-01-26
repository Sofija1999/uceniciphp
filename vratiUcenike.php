<?php

require('Baza.php');
$baza = new Baza();

?>

<table class="table table-hover table-bordered table-striped ">
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
                    <button class="btn btn-primary" id="dugmeIzmeni">Izmeni</button>
                    <button class="btn btn-danger" id="dugmeObrisi">Obriši</button>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>