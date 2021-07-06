$(document).ready( function () {
    $('#dt_products').DataTable({
        language : spanishJson
    });
});

function deleteProduct(id){
    if(confirm("¿Esta seguro de borrar este producto?, esta acción no se podra revertir")){
        $.ajax({
            type:'GET',
            url: route_url+"Productos/deleteProduct/"+id,
        }).done(function(){
            location.href = route_url+"Productos/managmentProducts";
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            console.log( 'Ha ocurrido un error' );
        });
    }
}