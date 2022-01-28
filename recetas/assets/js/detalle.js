$(function(){

    $('.detalle').click(function(){

        var idReceta = $(this).attr('id');
    
        $.ajax({
            url: "?controller=recetas&action=mostrarUno&id="+ idReceta,
            type:"POST",
            dataType:"html",
            data:{id:idReceta},
            success:function(data){
                $(".modal").html(data);
            }
        });

    });

});