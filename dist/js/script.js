var table;
$('document').ready(function() {

    table=$('#listaEnderecos').DataTable({
        "ajax": "../modelo/ControllerEnderecos.php",
        "language": {
            "sEmptyTable": "Nenhum registro cadastrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum endereço encontrado",
            "sSearch": "Pesquisar",
            "paginate": {
                "previous": "Anterior",
                "next": "Próximo",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }

        }
    });

    $("#cep").mask("99999-999");
    $("#modal-mensagem").modal({ backdrop: false, keyboard: false,show:false });

    $("#cep").blur(function (event) {
        event.preventDefault();
        let cep = $('[name="cep"]').val();

        if(cep.trim() != ""){
            $.ajax({

                url: "../modelo/ControllerEnderecos.php?acao=getCep&cep=" + cep,
                type: "GET",
                dataType: "xml",
                beforeSend: ()=> {
                    $("#modal-mensagem").modal("show");
                    $("#modal-mensagem .modal-title").text("Buscar cep informado!").css("display", "block");
                    $("#modal-mensagem p").text("buscando cep...").attr("class", "text-color");
                    $("#modal-mensagem .modal-footer").css("display", "none");
                    setTimeout(() => {
                        $("#modal-mensagem").modal("hide");
                    }, 2000);
                },
                success: function (data) {
                  
                    if ($(data).find("erro").text()){
                        $("#modal-mensagem").modal("show");
                        $("#modal-mensagem .modal-title").css("display", "none");
                        $("#modal-mensagem p").text("CEP não encontrado!").attr("class", "alert alert-danger");
                        $("#modal-mensagem .modal-footer").css("display", "none");
                        setTimeout(function() {
                        $("#modal-mensagem").modal("hide");
                        }, 2000);
                    }else{
                        $('[name="cep"]').val($(data).find("cep").text());
                        $('[name="localidade"]').val($(data).find("localidade").text());
                        $('[name="uf"]').val($(data).find("uf").text());
                        $('[name="logradouro"]').val($(data).find("logradouro").text());
                        $('[name="bairro"]').val($(data).find("bairro").text());
                        $('[name="complemento"]').val($(data).find("complemento").text());
                        $('[name="unidade"]').val($(data).find("unidade").text());
                        $('[name="gia"]').val($(data).find("gia").text());
                        $('[name="ibge"]').val($(data).find("ibge").text());
                    }
                },
                error: function (xhr, textStatus, error) {
                    if(xhr.responseText){
                        $("#modal-mensagem").modal("show");
                        $("#modal-mensagem .modal-title").css("display", "none");
                        $("#modal-mensagem p").text("Erro ! Esse cep de endereço já foi consultado e está registrado no banco de dados!!").attr("class", "alert alert-danger");
                        $("#modal-mensagem .modal-footer").css("display", "none");
                        setTimeout(function() {
                        $("#form")[0].reset();
                        $("#modal-mensagem").modal("hide");
                        }, 3000);
                    }
                }
            });
        }

    });

    $(document).on("submit", "#form", function (event) {
        event.preventDefault();

        let dataForm = $("#form").serializeArray();
        let url = "../modelo/ControllerEnderecos.php?acao=add";

        $.ajax({
            url: url,
            type: "POST",
            data: dataForm,
            dataType: "text",
            beforeSend: ()=> {
                $("#modal-mensagem").modal("show");
                $("#modal-mensagem .modal-title").text("Adicionando Endereço!").css("display", "block");;
                $("#modal-mensagem p").text("salvando...").attr("class", "text-color");
                $("#modal-mensagem .modal-footer").css("display", "none");
                setTimeout(() => {
                    $("#modal-mensagem").modal("hide");
                }, 2000);
            },
            success: function (data) {
               $("#modal-mensagem").modal("show");
               $("#modal-mensagem .modal-title").css("display", "none");
                if (data.indexOf("Erro") != -1){
                    $("#modal-mensagem p").text(data).attr("class", "alert alert-danger");
                    setTimeout(function() {
                      $("#modal-mensagem").modal("hide");
                    }, 2000);
                }else{

                    $("#modal-mensagem p").text(data).attr("class", "alert alert-success");
                    setTimeout(function() {
                      $("#modal-mensagem").modal("hide");
                      location.replace("listaEnderecos.php");
                    }, 2000);
                }
                $("#modal-mensagem .modal-footer").css("display", "none");

            },
            error: function (xhr, testStatus, error) {
                console.log("erro no servidor");
            }
        });
    });

});
