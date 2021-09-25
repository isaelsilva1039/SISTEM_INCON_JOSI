$(function() {
    $("#pesquisa").keyup(function() {
        var pesquisa = $(this).val();

        if (pesquisa != '') {
            var dados = {
                palavra: pesquisa
            }
            $.post('proc_pesq_usuario.php', dados, function(retorna) {
                $(".resultado").html(retorna);
            });
        }
    });
});