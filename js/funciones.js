function askDeleteStudent(Id){
    alertify.confirm("eliminar datos", "¿Estas seguro que queres borrar este registro?",
    function(){deletestudent(id);},
    function(){alertufy.erro('cancelado');});
}
function deleteStudent(id){
    $.ajax({
        type:"POST",
        url:"../controler/student.controller.php",
        data:"operation=delete&id"+id,
        success: function(result){
            if (result==1){
                alertify.success("El proceso se ejecuto correctamente");
                location.reload();
            } else { 
                alertify.error("El proceso no pudo realizarce");
            }
        }
    });
}