<li id="noPrendas" class="text-center text-gray-700 text-2xl font-bold pb-4">No hay platillos en el carrito</li>
<?php if ($listaHombres): ?>
  <?php foreach ($listaHombres as $prendaHombre): ?>
    <li id="elemento<?php echo $prendaHombre->id_ph ?>" class="hidden">
      <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start flex">
        <img src="<?php echo $prendaHombre->foto_ph ?>" alt="Imagen" class="w-full rounded-lg sm:w-40" />
        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
          <div class="mt-5 sm:mt-0">
            <h2 class="text-xl font-bold text-gray-900">
              <?php echo $prendaHombre->nombre_ph ?>
            </h2>
            <p class="mt-1 text-lg text-gray-700 font-extrabold">$
              <?php echo $prendaHombre->precio_ph ?>
            </p>
            <p>
              <?php echo $prendaHombre->descripcion_ph ?>
            </p>
          </div>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
<?php else: ?>
  <li class="text-center text-gray-700 text-2xl font-bold">No hay platillos en el carrito</li>
<?php endif; ?>



<script>
  $('#botonPagarProductos').click((e) => {
    console.log(listaHombres);
    <?php if ($listaHombres): ?>
      <?php foreach ($listaHombres as $prendaHombre): ?>
        if (listaHombres.includes(<?php echo $prendaHombre->id_ph; ?>)) {
          $('#noPrendas').addClass('hidden');
          $('#elemento<?php echo $prendaHombre->id_ph; ?>').removeClass('hidden');
        } else {
          $('#elemento<?php echo $prendaHombre->id_ph; ?>').addClass('hidden');
        }
      <?php endforeach; ?>
    <?php endif; ?>
  })
</script>