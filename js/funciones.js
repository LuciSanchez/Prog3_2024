function askDeleteStudent(Id){
    alertify.confirm("eliminar datos", "¿Estas seguro que queres borrar este registro?"),
    deletestudent(id),
    function(){alertufy.erro('cancelado');});
}
function deleteStudent(id){
    $.ajax({
        type:"POST",
        url:"studencontroller.php",
        data:"operation=delete&id"+id,
        success: function(result){
            if (result==1){
                alertify.success("El proceso se ejecuto correctamente");
            } else { 
                alertify.error("El proceso no pudo realizarce");
            }
        }
    });
}