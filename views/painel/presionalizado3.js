$(function() {
    $("#pesquisa3").keyup(function() {
        var pesquisa = $(this).val();

        if (pesquisa != '') {
            var dados = {
                palavra: pesquisa
            }
            $.post('proc_pesq_tipo_erro.php', dados, function(retorna) {
                $(".resultado3").html(retorna);
            });
        }
    });
});