const formularios_ajax = document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e){
  e.preventDefault();

  let data = new FormData(this);
  let method = this.getAttribute("method");
  let action = this.getAttribute("action");
  let tipo = this.getAttribute("data-form");

  let encabezados = new Headers();

  let config = {
    method: method,
    headers: encabezados,
    mode: 'cors',
    cache: 'no-cache',
    body: data
  }

  let texto_alerta;

  if(tipo==="guardar"){
    texto_alerta="Los datos se guardaran en el sistema";
  }else if(tipo==="eliminar"){
    texto_alerta="Los datos fueron eliminados completamente";
  }else if(tipo==="actualizar"){
    texto_alerta="Los datos fueron actualizados";
  }else if(tipo==="buscar"){
    texto_alerta="Se eliminara el termino de busqueda";
  }else if(tipo==="loans"){
    texto_alerta="¿Desea remover los datos seleccionados?";
  }else{
    texto_alerta="¿Quiere realizar la operacion solicitada?";
  }

  Swal.fire({
    title: 'Estas seguro',
    text: texto_alerta,
    showCancelButton: true,
    icon: 'question',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.value) {
         fetch(action,config)
         .then(respuesta=> respuesta.json())
         .then(respuesta => {
            return alertas_ajax(respuesta);
         });
    }
  });
} 

formularios_ajax.forEach(formularios => {
        formularios.addEventListener("submit", enviar_formulario_ajax);
});

function alertas_ajax(alerta){
    if(alerta.Alerta==="simple"){
        Swal.fire({
            icon: 'error',
            title: alerta.Titulo,
            text: alerta.Texto,
            icon: alerta.icon,
            confirmButtonText: "Aceptar"
          });
    }else if(alerta.Alerta==="recargar"){
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            icon: alerta.icon,
            confirmButtonText: "Aceptar"
          }).then((result) => {
            if (result.value) {
                 location.reload();
            }
          });
    }else if (alerta.Alerta==="limpiar") {
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            icon: alerta.icon,
            confirmButtonText: "Aceptar"
          }).then((result) => {
            if (result.value) {
                document.querySelector(".FormularioAjax").reset();
            }
          });
    }else if(alerta.Alerta==="redireccionar"){
        window.location.href=alerta.URL;
    }
}
