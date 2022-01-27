$(document).ready(function () {
    vratiSveUcenike();
    dodajNovogUcenika();
    obrisiUcenika();
    prikaziUcenika();
    izmeniUcenika();
    $('#tbl-srt').DataTable();
});

function vratiSveUcenike() {

    $.ajax(
        {
            url: 'vratiUcenike.php',

            success: function (result) {
                {
                    $('#ucenici-tabela').html(result);
                }
            }
        }
    )
}

function dodajNovogUcenika() {

    $(document).on('click', '#btnDodaj', function () {

        var Ime = $('#ime').val();
        var Prezime = $('#prezime').val();
        var Adresa = $('#adresa').val();
        var Email = $('#email').val();
        var Razredni = $('#razredni').val();

        $.ajax(
            {
                url: 'dodaj.php',
                method: 'post',
                data: { P_Ime: Ime, P_Prezime: Prezime, P_Adresa: Adresa, P_Email: Email, P_Razredni: Razredni },
                success: function (result) {
                    vratiSveUcenike();
                }
            });
    })

}

function obrisiUcenika() {

    $(document).on('click', '#dugmeObrisi', function () {

        var idUcenika = $(this).attr('value');
        $.ajax({
            url: 'obrisi.php',
            method: 'post',
            data: { P_idUcenika: idUcenika },
            success: function (result) {
                vratiSveUcenike();
            }
        })
    })
}


function prikaziUcenika() {

    $(document).on('click', '#dugmeIzmeni', function () {

        var idUcenika = $(this).attr('value');

        $.ajax({
            url: 'prikaziUcenika.php',
            method: 'post',
            data: { P_id: idUcenika },
            dataType: 'JSON',

            success: function (result) {
                $('#izmenaUcenika').modal('show');
                $('#id_izmena').val(result['id']);
                $('#ime_izmena').val(result['ime']);
                $('#prezime_izmena').val(result['prezime']);
                $('#adresa_izmena').val(result['adresa']);
                $('#email_izmena').val(result['email']);
                $('#razredni_izmena').val(result['razredni_id']);
            }
        });
    })
}


function izmeniUcenika() {

    $(document).on('click', '#btnIzmeni', function () {

        var id = $('#id_izmena').val();
        var ime = $('#ime_izmena').val();
        var prezime = $('#prezime_izmena').val();
        var adresa = $('#adresa_izmena').val();
        var email = $('#email_izmena').val();
        var razredni = $('#razredni_izmena').val();

        $.ajax({
            url: 'azurirajUcenika.php',
            method: 'post',
            data: {
                P_id: id,
                P_ime: ime,
                P_prezime: prezime,
                P_adresa: adresa,
                P_email: email,
                P_razredni: razredni,
            },

            success: function (result) {
                vratiSveUcenike();
                $('#izmenaUcenika').modal('hide');
            }
        })
    });
}