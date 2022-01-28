$(function(){
    $('.eliminar').click(function(){
        var tr = $(this).closest('tr');
        var id = $(this).attr('id');

        $.ajax({
            url: "?controller=recetas&action=eliminar&id="+ id,
            cache: false,
            success:function(){
                tr.remove();
            }
        });
    });              
}); 