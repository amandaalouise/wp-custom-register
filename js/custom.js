jQuery(document).ready(function ($) {

    $(document).ready(function () {

        $(".chosen-select").chosen();

        $('#pais_de_nascimento').chosen();

        $('#pais_de_residencia').chosen();

        $('#formacao_academica').chosen();

        $('#cep').on("focusout", function () {

            $.ajax({
                url: "https://viacep.com.br/ws/" + $(this).val() + "/json/",
                type: 'GET'
            }).done(function (data) {

                console.log(data);

                $("#logradouro").val(data.logradouro);
                $("#bairro").val(data.bairro);
                $("#cidade").val(data.localidade);
                $("#estado").val(data.uf);

            }).fail(function (jqXHR, textStatus, msg) {

                alert("Não foi possível encontrar o CEP");

            });
        });
        
    });

});