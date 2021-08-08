/* -------------------------------------------------------------------------- */
/*                                  variables                                 */
/* -------------------------------------------------------------------------- */
const crear = document.querySelector("#creartarea")
const nombreTarea = document.querySelector("#nombret")
const descripcionTarea = document.querySelector("#descripciont")
const fecha = document.querySelector("#fechat")


crear.addEventListener("click", (e)=>{
    e.preventDefault()
    if(nombreTarea.value != "" && descripcionTarea.value !=""){
        const ajaxCreaTarea = new XMLHttpRequest(); 
        ajaxCreaTarea.open("POST", "ajax/crearTarea.php"); 
        const datos = new FormData();
        datos.append("nombre", nombreTarea.value);
        datos.append("descripcion", descripcionTarea.value);
        datos.append("fecha", fecha.value);
        ajaxCreaTarea.onreadystatechange = function() {//Call a function when the state changes.
            if(ajaxCreaTarea.readyState == 4 && ajaxCreaTarea.status == 200) {
            if(JSON.parse(ajaxCreaTarea.responseText) == "ok"){
                alert("la tarea se creo correctamente")

                        
                  window.location="http://localhost/CRUDMVC/crear";
              
            }else{
                alert("algun error al crear la tarea")
            

            }
        }
        }
        ajaxCreaTarea.send(datos);
    }else{
        alert("Debes Agregar datos")
    }

})
