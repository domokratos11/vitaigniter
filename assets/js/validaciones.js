/**
 * Script de validaciones para sistema
 * 
 */
/**
 * 
 * @param {type} url la url con el id del elemento a eliminar
 * @param {type} el modulo para saber que se elimina
 * @param {type} Indicativo del elemento propio a eliminar
 * @returns {undefined}
 */
function eliminar(url,controlador,nombre){
    var c=confirm("Esta a punto de eliminar el "+controlador+": "+nombre+" \nå¤šDesea proseguir?");
    if(c){
        location.href=url;
    }
}