$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    /*$('body').on('click', '.bt-apagar-contato', function (){
        if(confirm("Deseja apagar o contato " + $(this).data('apelido') + "?" )){
            return true;
        }else{
            return false;
        }
    });

    $('body').on('click', '.bt-apagar-telefone', function (){
        if(confirm("Deseja apagar o telefone " + $(this).data('telefone') + "?" )){
            return true;
        }else{
            return false;
        }
    });*/

    $("#deleteModal").on("show.bs.modal", function(e) {
        var link = $(e.relatedTarget);
        $(this).find(".modal-body").load(link.attr("href"));
    });
});
