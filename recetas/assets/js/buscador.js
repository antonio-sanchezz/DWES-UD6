$(function(){

    $("#buscador").on("keyup", function(){
        var buscar = $("#buscador").val();

        $.ajax({
            type: "post",
            url: "?controller=recetas&action=buscadorRecetas&nombre=" + buscar,
            data: {
                busqueda: buscar
            },
            success: function(data){
                if (buscar != "") {
                    $("#resultados").html(data);
                } else {
                    $("#resultados").empty();
                }
            }
        })

    })

});
