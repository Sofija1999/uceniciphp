$(document).ready(function () {
    vratiSveUcenike();
    dodajNovogUcenika();
    obrisiUcenika();
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
