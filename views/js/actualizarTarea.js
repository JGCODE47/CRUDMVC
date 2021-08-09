'use strict';
window.addEventListener("load", function(){
    const actualizar = document.querySelectorAll("#idActualizar");  
    actualizar.forEach(up => {
        up.addEventListener("click", (e) => {
            e.preventDefault()        
            const nombreTarea = document.querySelector("#nombretU")
            const descripcionTarea = document.querySelector("#descripciontU")
            const fecha = document.querySelector("#fechatU")
        
            const ajaxUpdateTarea = new XMLHttpRequest();
            ajaxUpdateTarea.open("POST", "ajax/actualizarTarea.php");
            const datos = new FormData();
            datos.append("nombre", nombreTarea.value)
            datos.append("descripcion", descripcionTarea.value)
            datos.append("fecha", fecha.value)
            datos.append("id_tarea", up.getAttribute("idActualizar"))
            ajaxUpdateTarea.onreadystatechange = function () {
                if (ajaxUpdateTarea.readyState == 4 && ajaxUpdateTarea.status == 200) {
                    if (JSON.parse(ajaxUpdateTarea.responseText) == "ok") {

                        window.location="http://localhost/CRUDMVC/ver";

                    } else {
                        alert("algun error al crear la tarea")


                    }
                }
            }
            ajaxUpdateTarea.send(datos);
        })
    })

}) 
   

    
   

