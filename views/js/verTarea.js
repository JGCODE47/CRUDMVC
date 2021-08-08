/* -------------------------------------------------------------------------- */
/*                                  variables                                 */
/* -------------------------------------------------------------------------- */
const verTareas = document.querySelector("#verTareas");





/* -------------------------------------------------------------------------- */
/*                             ajax llamar tareas                             */
/* -------------------------------------------------------------------------- */
const ajaxVerTarea = new XMLHttpRequest(); 
ajaxVerTarea.open("POST", "ajax/verTarea.php"); 
ajaxVerTarea.onreadystatechange = function() {//Call a function when the state changes.
    if(ajaxVerTarea.readyState == 4 && ajaxVerTarea.status == 200) {
    if(JSON.parse(ajaxVerTarea.responseText) != ""){
      const tareas = JSON.parse(ajaxVerTarea.responseText); 
      tareas.forEach(val=>{
        verTareas.innerHTML+=
        '<div class="col-md-3">'+
        '<div class="card">'+
                '<div class="card-header">'+
                    'TAREAS'+
                '</div>'+
                '<div class="card-body">'+
                    '<p>'+
                    '<form>'+
                    '<div class="mb-3">'+
                        '<label for="exampleInputEmail1" class="form-label">Nombre tarea</label>'+
                        '<input type="text" class="form-control" id="nombretU" value="'+val.nombre+'" aria-describedby="emailHelp">'+
                    '</div>'+
                    '<div class="mb-3">'+
                        '<label for="exampleInputPassword1" class="form-label">Describa la tarea</label>'+
                        '<div class="form-floating">'+
                    '<textarea class="form-control" placeholder="Leave a comment here" id="descripciontU">'+val.descripcion+'</textarea>'+
                    '<label for="floatingTextarea">Descripcion</label>'+
                    '</div>'+
                  
                    '</div>'+
                    '<div class="mb-3">'+
                        '<label for="exampleInputEmail1" class="form-label">Fecha tarea</label>'+
                        '<input type="date" class="form-control" id="fechatU" value="'+val.fecha+'" aria-describedby="emailHelp">'+
                    '</div>'+

                    '<button class="btn btn-primary" id="idActualizar" >Actualizar</button>'+
                    ' '+
                    '<button  class="btn btn-danger" idEliminar="'+val.id_tareas+'" id="eliminar" >Eliminar</button>'+
                    '</form>'+                   
                '</p> '+                   
                '</div>'+

            '</div>'+
            '<br>'+
        '</div>'
        
      })

      
    }else{
        alert("no existe ninguna tarea")
    

    }
}
}
ajaxVerTarea.send();



