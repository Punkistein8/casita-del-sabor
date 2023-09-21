<li id="noPrendas" class="text-center text-gray-700 text-2xl font-bold pb-4">No hay platos fuertes en el carrito</li>
<?php if ($listaTecnologias): ?>
  <?php foreach ($listaTecnologias as $tecnologia): ?>
    <li id="elemento<?php echo $tecnologia->id_tec ?>" class="hidden">
      <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start flex">
        <img src="<?php echo $tecnologia->foto_tec ?>" alt="Imagen" class="w-full rounded-lg sm:w-40" />
        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
          <div class="mt-5 sm:mt-0">
            <h2 class="text-xl font-bold text-gray-900">
              <?php echo $tecnologia->nombre_tec ?>
            </h2>
            <p class="mt-1 text-lg text-gray-700 font-extrabold">$
              <?php echo $tecnologia->precio_tec ?>
            </p>
            <p>Marca:
              <?php echo $tecnologia->marca_tec ?>
            </p>
          </div>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
<?php else: ?>
  <li class="text-center text-gray-700 text-2xl font-bold">No hay platos fuertes en el carrito</li>
<?php endif; ?>



<script>
  $('#botonPagarProductos').click((e) => {
    console.log(listaTecnologias);
    <?php if ($listaTecnologias): ?>
      <?php foreach ($listaTecnologias as $tecnologia): ?>
        if (listaTecnologias.includes(<?php echo $tecnologia->id_tec; ?>)) {
          $('#noPrendas').addClass('hidden');
          $('#elemento<?php echo $tecnologia->id_tec; ?>').removeClass('hidden');
        } else {
          $('#elemento<?php echo $tecnologia->id_tec; ?>').addClass('hidden');
        }
      <?php endforeach; ?>
    <?php endif; ?>
  })
</script>