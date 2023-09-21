<div class="flex flex-col justify-center align-middle items-center">

  <h1 class="text-center mt-10 mb-5 font-sans text-5xl font-bold tracking-tight text-gray-900">Solicitudes de <span
      class="inline-block text-teal-400">compra</span></h1>


  <div class="relative overflow-x-auto shadow-md sm:rounded-lg  mt-10 mb-10">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            #
          </th>
          <th scope="col" class="px-6 py-3">
            Id Productos
          </th>
          <th scope="col" class="px-6 py-3">
            Fecha Solicitud
          </th>
          <th scope="col" class="px-6 py-3">
            Nombres Cliente
          </th>
          <th scope="col" class="px-6 py-3">
            Apellidos Cliente
          </th>
          <th scope="col" class="px-6 py-3">
            Cédula Cliente
          </th>
          <th scope="col" class="px-6 py-3">
            Tipo de Producto
          </th>
          <th scope="col" class="px-6 py-3">
            Id Usuario Solicitante
          </th>
          <?php if ($this->session->userdata('usuario')->tipo_usu != 'user'): ?>
            <th scope="col" class="px-6 py-3">
              Accion
            </th>

          <?php endif; ?>

        </tr>
      </thead>
      <tbody>
        <?php if ($listaSolicitudes): ?>
          <?php foreach ($listaSolicitudes as $solicitud): ?>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $solicitud->id_soC ?>
              </th>
              <td class="px-6 py-4">
                <?php echo $solicitud->listaProds_soC ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $solicitud->fechaCreac_soC ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $solicitud->nombre_soC ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $solicitud->apellidos_soC ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $solicitud->cedula_soC ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $solicitud->tipoProd_soC ?>
              </td>
              <td class="px-6 py-4">
                <?php echo $solicitud->fk_id_usuario ?>
              </td>
              <?php if ($this->session->userdata('usuario')->tipo_usu != 'user'): ?>
                <td class="px-6 py-4">
                  <button id="solventarSolicitud<?php echo $solicitud->id_soC ?>"
                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline bg-yellow-100 hover:bg-yellow-300 py-1 px-4 rounded-md">Solventar</button>
                </td>
              <?php endif; ?>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

</div>

<script>
  <?php if ($listaSolicitudes): ?>
    <?php foreach ($listaSolicitudes as $solicitud): ?>
      $('#solventarSolicitud<?php echo $solicitud->id_soC ?>').click((e) => {
        $.ajax({
          url: '<?php echo site_url('admins/solventarsolicitud/') . $solicitud->id_soC ?>',
          type: 'POST',
          dataType: 'json',
          success: function (response) {
            if (response.status == 'success') {
              Swal.fire({
                icon: 'success',
                title: 'Solicitud solventada',
                text: response.message,
                showConfirmButton: false,
                timer: 1500
              }).then(() => {
                location.reload()
              })
            } else {
              Swal.fire({
                icon: 'error',
                title: 'Error al solventar la solicitud',
                text: response.message,
                showConfirmButton: false,
                timer: 1500
              })
            }
          },
          error: function () {
            Swal.fire({
              icon: 'error',
              title: 'Error al solventar la solicitud',
              text: 'Error AJAX',
              showConfirmButton: false,
              timer: 1500
            })
          }
        })
      })
    <?php endforeach; ?>
  <?php endif; ?>
</script>