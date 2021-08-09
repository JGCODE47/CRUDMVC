/* -------------------------------------------------------------------------- */
/*                                  variables                                 */
/* -------------------------------------------------------------------------- */
const user = document.querySelector("#user")
const pass = document.querySelector("#pass")
const button = document.querySelector("#entrar")

button.addEventListener("click", (e)=>{
    if(user.value != "" && pass.value != ""){

    }else{
        alert("Debes agregar datos")
    }

})
