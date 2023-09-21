<h1 class="text-center mt-10 mb-5 font-sans text-5xl font-bold tracking-tight text-gray-900">Platos <span
    class="inline-block text-teal-400">Fuertes</span></h1>
<div class="flex justify-center">
  <button type="button" id="botonPagarProductos"
    class="bg-teal-600 px-5 py-3 rounded-md text-white hover:bg-teal-700 transition-all ease-in-out"
    data-te-toggle="modal" data-te-target="#exampleModal">Pagar Productos</button>
</div>

<!-- NUEVO MODAL -->
<div data-te-modal-init
  class="fade fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div data-te-modal-dialog-ref
    class="pointer-events-none relative w-full translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[750px]">
    <div
      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
      <div
        class="bg-white flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
        <!--Modal title-->
        <h5 class="text-xl font-medium leading-normal text-neutral-800" id="exampleModalLabel">
          Pagar los siguientes productos
        </h5>
        <!--Close button-->
        <button type="button"
          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
          data-te-modal-dismiss aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <!--Modal body-->
      <div class="relative flex-auto p-4 bg-white" data-te-modal-body-ref>
        <form method="post" id="formularioIngresarCompra">
          <ul class="flex flex-col gap-3" id="contenedorProductosCarrito">
            <!-- Aqui se renderizan los productos -->
          </ul>
          <input required type="hidden" name="listaProds_soC" id="listaProds_soC" value="">
          <input required type="hidden" name="tipoProd_soC" id="tipoProd_soC" value="platosFuertes">
          <input required type="hidden" name="fk_id_usuario" id="fk_id_usuario"
            value="<?php echo $this->session->userdata('usuario')->id_usu ?>">

          <li class="flex flex-col justify-center">
            <label class="text-black" for="nombre_soC">Sus nombres</label>
            <input class="p-2 rounded-md border-2 border-black" type="text" name="nombre_soC" id="nombre_soC">
          </li>
          <li class="flex flex-col justify-center">
            <label class="text-black" for="apellidos_soC">Sus apellidos</label>
            <input class="p-2 rounded-md border-2 border-black" type="text" name="apellidos_soC" id="apellidos_soC">
          </li>
          <li class="flex flex-col justify-center">
            <label class="text-black" for="cedula_soC">Su cédula</label>
            <input class="p-2 rounded-md border-2 border-black" type="text" name="cedula_soC" id="cedula_soC">
          </li>
          <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-800 rounded-b-md">
            <button type="button"
              class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
              data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">Cerrar</button>
            <button type="submit" id="botonSolicitarCompra"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
              id="botonAgregarPrendaHombre">¡Solicitar Compra!</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- NUEVO MODAL -->

<!-- Modal Agregar -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="modalPagarProductos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog relative w-full pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-800 rounded-t-md">
        <h5 class="flex justify-center text-xl text-center font-medium leading-normal text-black"
          id="exampleModalLabel">
          Pagar los siguientes productos
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <form method="post" id="formularioIngresarCompra">
          <ul class="flex flex-col gap-3" id="contenedorProductosCarrito">
            <!-- Aqui se renderizan los productos -->
          </ul>
          <input required type="hidden" name="listaProds_soC" id="listaProds_soC" value="">
          <input required type="hidden" name="tipoProd_soC" id="tipoProd_soC" value="platosFuertes">
          <input required type="hidden" name="fk_id_usuario" id="fk_id_usuario"
            value="<?php echo $this->session->userdata('usuario')->id_usu ?>">

          <li class="flex flex-col justify-center">
            <label class="text-black" for="nombre_soC">Sus nombres</label>
            <input class="p-2 rounded-md border-2 border-black" type="text" name="nombre_soC" id="nombre_soC">
          </li>
          <li class="flex flex-col justify-center">
            <label class="text-black" for="apellidos_soC">Sus apellidos</label>
            <input class="p-2 rounded-md border-2 border-black" type="text" name="apellidos_soC" id="apellidos_soC">
          </li>
          <li class="flex flex-col justify-center">
            <label class="text-black" for="cedula_soC">Su cédula</label>
            <input class="p-2 rounded-md border-2 border-black" type="text" name="cedula_soC" id="cedula_soC">
          </li>
          <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-800 rounded-b-md">
            <button type="button"
              class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
              data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" id="botonSolicitarCompra"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
              id="botonAgregarPrendaHombre">¡Solicitar Compra!</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="flex flex-wrap justify-center">
  <?php foreach ($listaTecnologias as $tecnologia): ?>
    <!-- Asignar un id a cada card para luego compararlo con el de la lista y ver si ya esta en la lista y renderizar condicinalmente -->
    <div class="flex" id="<?php echo $tecnologia->id_tec ?>">
      <div class="flex flex-col gap-1">

        <a aria-label="Añadir al carrito" id="botonProductoID<?php echo $tecnologia->id_tec; ?>"
          class="hint--left hint--rounded hover:scale-110 transition-all ease-in-out cursor-pointer z-10 translate-x-20 translate-y-6 relative flex justify-center items-center bg-orange-400 hover:bg-orange-600 w-12 h-12 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="absolute w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
          </svg>
        </a>
        <a aria-label="Quitar del carrito" id="botonProductoIDQuitar<?php echo $tecnologia->id_tec; ?>"
          class="hint--left hint--rounded hover:scale-110 transition-all ease-in-out cursor-pointer z-10 translate-x-20 translate-y-6 relative flex justify-center items-center bg-red-500 hover:bg-red-700 w-12 h-12 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="absolute w-6 h-6 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
          </svg>
        </a>

      </div>
      <div class="flex justify-center">
        <div id="card"
          class="flex-tecnologia max-w-xs rounded-lg m-10 bg-slate-100 shadow-lg hover:scale-105 transition-all ease-in-out cursor-pointer">
          <img class="w-full rounded-t-xl max-h-fit" src="<?php echo $tecnologia->foto_tec ?>" alt="" />
          <div class="p-6 flex flex-col justify-start">
            <h5 id="nombre-prenda" class="text-gray-900 text-xl font-medium mb-2">
              <?php echo $tecnologia->nombre_tec ?>
            </h5>
            <p class="text-gray-700 text-base mb-4">
              <?php echo $tecnologia->marca_tec ?>
            </p>
            <p id="precio" class="text-gray-600 text-xl font-bold">$
              <?php echo $tecnologia->precio_tec ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<style>
  #card:hover #nombre-prenda {
    color: teal;
  }
</style>

<script>
  let listaTecnologias = [];
</script>

<script>
  $('#botonPagarProductos').click((e) => {
    $('#listaProds_soC').val(listaTecnologias)
  })
</script>

<script>
  <?php if ($listaTecnologias): ?>
    <?php foreach ($listaTecnologias as $tecnologia): ?>
      $('#botonProductoIDQuitar<?php echo $tecnologia->id_tec; ?>').hide()
    <?php endforeach; ?>
  <?php endif; ?>
</script>

<script>
  <?php if ($listaTecnologias): ?>
    <?php foreach ($listaTecnologias as $tecnologia): ?>
      //Logica para que cuando se clicke en añadir al carrito, se añada el id del producto a la lista, y los botones se muestren o escondan
      $('#botonProductoID<?php echo $tecnologia->id_tec; ?>').click(function () {
        $('#botonProductoIDQuitar<?php echo $tecnologia->id_tec; ?>').show()
        $('#botonProductoID<?php echo $tecnologia->id_tec; ?>').hide()
        //agregar el id del producto a la lista
        listaTecnologias.push(<?php echo $tecnologia->id_tec ?>);
        console.log(listaTecnologias);
        Swal.fire({
          position: 'top-end',
          title: 'Agregado al carrito',
          text: `El producto "<?php echo $tecnologia->nombre_tec; ?>" se ha agregado al carrito`,
          icon: 'success',
          showConfirmButton: false,
          timer: 1000,
          timerProgressBar: true,
        })
      });

      //Logica para que cuando se clicke en quitar del carrito, se quite el id del producto a la lista, y los botones se muestren o escondan
      $('#botonProductoIDQuitar<?php echo $tecnologia->id_tec; ?>').click(function () {
        $('#botonProductoID<?php echo $tecnologia->id_tec; ?>').show()
        $('#botonProductoIDQuitar<?php echo $tecnologia->id_tec; ?>').hide()
        //eliminar ese elemento de la lista
        listaTecnologias = listaTecnologias.filter((element) => element != <?php echo $tecnologia->id_tec ?>)
        console.log(listaTecnologias);
        Swal.fire({
          position: 'top-start',
          title: 'Eliminado del carrito',
          text: `El producto "<?php echo $tecnologia->nombre_tec; ?>" se ha eliminado del carrito`,
          icon: 'info',
          showConfirmButton: false,
          timer: 1000,
          timerProgressBar: true,
        })
      });
                <?php endforeach; ?> <?php endif; ?>
</script>

<script>
  let spinner = `<div class="d-flex justify-content-center" style="padding: 50px 0;"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>`;
  $('#contenedorProductosCarrito').html(spinner)
  $('#contenedorProductosCarrito').load('<?php echo site_url('tecnologias/listaCarrito') ?>')
</script>

<!-- submit del formulario -->

<script>
  $('#botonSolicitarCompra').click((e) => {
    // e.preventDefault();
    $('#formularioIngresarCompra').validate({
      rules: {
        nombre_soC: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
        apellidos_soC: {
          required: true,
          minlength: 3,
          maxlength: 50
        },
        cedula_soC: {
          required: true,
          minlength: 10,
          maxlength: 10
        },
        listaProds_soC: {
          required: true,
          minlength: 1,
        },
        fk_id_usuario: {
          required: true
        },
      },
      messages: {
        nombre_soC: {
          required: "Por favor ingrese su nombre",
          minlength: "El nombre debe tener al menos 3 caracteres",
          maxlength: "El nombre debe tener como máximo 50 caracteres"
        },
        apellidos_soC: {
          required: "Por favor ingrese su apellido",
          minlength: "El apellido debe tener al menos 3 caracteres",
          maxlength: "El apellido debe tener como máximo 50 caracteres"
        },
        cedula_soC: {
          required: "Por favor ingrese su cédula",
          minlength: "La cédula debe tener 10 caracteres",
          maxlength: "La cédula debe tener 10 caracteres"
        },
        listaProds_soC: {
          required: "Por favor seleccione al menos un producto"
        },
        fk_id_usuario: {
          required: "Por favor inicie sesión para realizar la compra"
        },
      },
      submitHandler: function (form) {
        $.ajax({
          url: '<?php echo site_url('SolicitudesCompra/insertarSolicitudCompra') ?>',
          type: 'POST',
          data: $('#formularioIngresarCompra').serialize(),
          dataType: 'json',
          success: function (data) {
            if (data.response == 'success') {
              Swal.fire({
                title: 'Compra realizada',
                text: data.response.message,
                icon: 'success',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
              })
              $('#modalPagarProductos').modal('hide')
            } else {
              Swal.fire({
                title: 'Error',
                text: data.response.message,
                icon: 'error',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
              })
            }
          }
        })
      }
    })
  })
</script>