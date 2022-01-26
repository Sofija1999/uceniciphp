$(document).ready(function () {
    vratiSveUcenike();
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