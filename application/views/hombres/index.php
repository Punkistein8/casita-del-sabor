<h1 class="text-center mt-10 mb-5 font-sans text-5xl font-bold tracking-tight text-gray-900">Platillos de <span
    class="inline-block text-teal-400">Entrada</span></h1>
<div class="flex justify-center">
  <button type="button" class="bg-teal-600 px-5 py-3 rounded-md text-white hover:bg-teal-700 transition-all ease-in-out"
    data-te-toggle="modal" data-te-target="#exampleModal">Agregar Platillo</button>
</div>

<!-- NUEVO MODAL -->
<div data-te-modal-init
  class="fade fixed left-0 top-0 z-[1055] hidden h-full w-full mx-auto overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none ">
    <div data-te-modal-dialog-ref
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current pointer-events-none relative w-full translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[750px]">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-800 rounded-t-md">
        <h5 class="flex justify-center text-xl text-center font-medium leading-normal text-black"
          id="exampleModalLabel">
          Agregar un nuevo platillo de entrada
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <form method="post" id="formularioGuardarPrendaHombre">
          <ul class="flex flex-col gap-3">
            <li class="flex flex-col justify-center">
              <label class="text-black" for="nombre">Nombre</label>
              <input class="p-2 rounded-md border-2 border-black" type="text" name="nombre_ph" id="nombre">
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="precio">Precio</label>
              <input class="border-2 border-black p-2 rounded-md" type="text" name="precio_ph" id="precio">
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="tipo">Tipo</label>
              <select class="p-2 rounded-md" id="tipo" name="tipo_ph">
                <option value="">- Seleccione una opción -</option>
                <option value="Barato">Barato</option>
                <option value="Costoso">Costoso</option>
              </select>
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="foto">Foto</label>
              <input class="border-2 border-black p-2 rounded-md" type="text" name="foto_ph" id="foto">
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="descripcion">Descripcion</label>
              <textarea class="border-2 border-black p-2 rounded-md" type="text" name="descripcion_ph"
                id="descripcion"></textarea>
            </li>
          </ul>
          <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-800 rounded-b-md">
            <button type="button"
              class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
              data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">Cerrar</button>
            <button type="submit"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
              id="botonAgregarPrendaHombre">Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- NUEVO MODAL -->

<!-- Modal Agregar -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="modalAgregarPrenda" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-800 rounded-t-md">
        <h5 class="flex justify-center text-xl text-center font-medium leading-normal text-black"
          id="exampleModalLabel">
          Agregar una nuevo platillo de entrada
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <form method="post" id="formularioGuardarPrendaHombre">
          <ul class="flex flex-col gap-3">
            <li class="flex flex-col justify-center">
              <label class="text-black" for="nombre">Nombre</label>
              <input class="p-2 rounded-md border-2 border-black" type="text" name="nombre_ph" id="nombre">
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="precio">Precio</label>
              <input class="border-2 border-black p-2 rounded-md" type="text" name="precio_ph" id="precio">
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="tipo">Tipo</label>
              <select class="p-2 rounded-md" id="tipo" name="tipo_ph">
                <option value="">- Seleccione una opción -</option>
                <option value="Pantalon">Pantalón</option>
                <option value="Camiseta">Camiseta</option>
                <option value="Camisa">Camisa</option>
                <option value="Chaqueta">Chaqueta</option>
                <option value="Zapatos">Zapatos</option>
              </select>
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="foto">Foto</label>
              <input class="border-2 border-black p-2 rounded-md" type="text" name="foto_ph" id="foto">
            </li>
            <li class="flex flex-col justify-center">
              <label class="text-black" for="descripcion">Descripcion</label>
              <textarea class="border-2 border-black p-2 rounded-md" type="text" name="descripcion_ph"
                id="descripcion"></textarea>
            </li>
          </ul>
          <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-800 rounded-b-md">
            <button type="button"
              class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
              data-bs-dismiss="modal">Cerrar</button>
            <button type="submit"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
              id="botonAgregarPrendaHombre">Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="flex flex-wrap justify-center">
  <?php foreach ($listaHombres as $prendaHombre): ?>
    <div class="flex">
      <div class="flex flex-col gap-1">

        <a href="<?php echo site_url('hombres/cargarDatosPrenda') . '/' . $prendaHombre->id_ph ?>"
          aria-label="Editar Platillo"
          class="hint--left hint--rounded hover:scale-110 transition-all ease-in-out cursor-pointer z-10 translate-x-20 translate-y-6 relative flex justify-center items-center bg-teal-600 hover:bg-teal-700 w-12 h-12 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="absolute w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
          </svg>
        </a>

        <a id="botonEliminarPrendaHombre<?php echo $prendaHombre->id_ph ?>" aria-label="Borrar Platillo"
          class="hint--left hint--rounded hover:scale-110 transition-all ease-in-out cursor-pointer z-10 translate-x-20 translate-y-6 relative flex justify-center items-center bg-red-600 hover:bg-red-700 w-12 h-12 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="absolute w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
          </svg>
        </a>
      </div>
      <div class="flex justify-center">
        <div id="card"
          class="flex-prendaHombre max-w-xs rounded-lg m-10 bg-slate-100 shadow-lg hover:scale-105 transition-all ease-in-out cursor-pointer">
          <img class="w-full rounded-t-xl max-h-fit" src="<?php echo $prendaHombre->foto_ph ?>" alt="" />
          <div class="p-6 flex flex-col justify-start">
            <h5 id="nombre-prenda" class="text-gray-900 text-xl font-medium mb-2">
              <?php echo $prendaHombre->nombre_ph ?>
            </h5>
            <p class="text-gray-700 text-base mb-4">
              <?php echo $prendaHombre->descripcion_ph ?>
            </p>
            <p id="precio" class="text-gray-600 text-xl font-bold">$
              <?php echo $prendaHombre->precio_ph ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script>
  $('#botonAgregarPrendaHombre').click(function (e) {
    $('#formularioGuardarPrendaHombre').validate({
      rules: {
        nombre_ph: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
        descripcion_ph: {
          required: true,
          minlength: 3,
          maxlength: 100
        },
        precio_ph: {
          required: true,
          number: true,
          min: 1,
          max: 999999
        },
      },
      messages: {
        nombre_ph: {
          required: "El nombre es obligatorio",
          minlength: "El nombre debe tener al menos 3 caracteres",
          maxlength: "El nombre debe tener como máximo 50 caracteres",
        },
        descripcion_ph: {
          required: "La descripción es obligatoria",
          minlength: "La descripción debe tener al menos 3 caracteres",
          maxlength: "La descripción debe tener como máximo 100 caracteres"
        },
        precio_ph: {
          required: "El precio es obligatorio",
          number: "El precio debe ser un número",
          min: "El precio debe ser mayor a 0",
          max: "El precio debe ser menor a 999999"
        },
      },
      submitHandler: function (form) {
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('hombres/guardarPrendaHombre') ?>",
          data: $(form).serialize(), //obtener los names del formulario
          dataType: "json",
          success: function (data) {
            if (data.response == 'success') {
              Swal.fire({
                icon: 'success',
                title: 'Platillo guardado',
                text: 'El platillo se guardó correctamente',
                showConfirmButton: false,
                timer: 1500
              }).then(function () {
                location.reload();
              });
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ocurrió un error al guardar la prenda',
                showConfirmButton: false,
                timer: 1500
              });
            }
          }
        })
      }
    })
  });
</script>

<script>
  <?php if ($listaHombres): ?>
    <?php foreach ($listaHombres as $prendaHombre): ?>
      $('#botonEliminarPrendaHombre<?php echo $prendaHombre->id_ph; ?>').click((event) => {
        event.preventDefault();
        Swal.fire({
          title: '¿Estás seguro?',
          text: "¡No podrás revertir esto!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: '¡Sí, bórralo!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              type: "POST",
              url: "<?php echo site_url('hombres/eliminarHombre/') . $prendaHombre->id_ph; ?>",
              dataType: "json",
              success: function (data) {
                if (data.response == 'success') {
                  <?php
                  // enviarEmail('juan.barba5400@utc.edu.ec', 'Prenda eliminada', 'La prenda se eliminó correctamente');
                  ?>
                  Swal.fire({
                    icon: 'success',
                    title: 'Platillo eliminado',
                    text: 'El platillo se eliminó correctamente',
                    showConfirmButton: false,
                    timer: 1500
                  }).then(function () {
                    location.reload();
                  });
                } else {
                  Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocurrió un error al eliminar el platillo',
                    showConfirmButton: false,
                    timer: 1500
                  });
                }
              }
            })
          }
        })
      })
    <?php endforeach; ?>
  <?php endif; ?>
</script>

<style>
  #card:hover #nombre-prenda {
    color: teal;
  }
</style>