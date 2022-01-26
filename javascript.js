$(document).ready(function () {
    vratiSveUcenike();
    dodajNovogUcenika();
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