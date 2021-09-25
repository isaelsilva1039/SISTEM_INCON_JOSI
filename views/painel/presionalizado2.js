$(function() {
    $("#pesquisa2").keyup(function() {
        var pesquisa2 = $(this).val();

        if (pesquisa2 != '') {
            var dados = {
                palavra: pesquisa2
            }
            $.post('proc_pesq_usuario.php', dados, function(retorna) {
                $(".resultado2").html(retorna);
            });
        }
    });
});