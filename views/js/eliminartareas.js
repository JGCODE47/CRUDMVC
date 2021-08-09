'use strict';
window.onload = function() {
    const eliminar = document.querySelectorAll("#eliminar");
    eliminar.forEach(del=>{
        del.addEventListener("click", (e)=>{
            e.preventDefault()
            const ajaxDeleteTarea = new XMLHttpRequest(); 
            ajaxDeleteTarea.open("POST", "ajax/eliminarTarea.php"); 
            const datos = new FormData();
            datos.append("id_tarea", del.getAttribute("ideliminar"))
            ajaxDeleteTarea.onreadystatechange = function() {//Call a function when the state changes.
                if(ajaxDeleteTarea.readyState == 4 && ajaxDeleteTarea.status == 200) {
                if(JSON.parse(ajaxDeleteTarea.responseText) == "ok"){              
    
                            
                     window.location="http://localhost/CRUDMVC/ver";
                  
                }else{
                    alert("algun error al crear la tarea")
                
    
                }
            }
            }
            ajaxDeleteTarea.send(datos);
        })
    })
  };


