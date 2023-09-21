<li id="noPrendas" class="text-center text-gray-700 text-2xl font-bold pb-4">No hay bebidas en el carrito</li>
<?php if ($listaMujeres): ?>
  <?php foreach ($listaMujeres as $prendaMujer): ?>
    <li id="elemento<?php echo $prendaMujer->id_pm ?>" class="hidden">
      <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start flex">
        <img src="<?php echo $prendaMujer->foto_pm ?>" alt="Imagen" class="w-full rounded-lg sm:w-40" />
        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
          <div class="mt-5 sm:mt-0">
            <h2 class="text-xl font-bold text-gray-900">
              <?php echo $prendaMujer->nombre_pm ?>
            </h2>
            <p class="mt-1 text-lg text-gray-700 font-extrabold">$
              <?php echo $prendaMujer->precio_pm ?>
            </p>
            <p>
              <?php echo $prendaMujer->descripcion_pm ?>
            </p>
          </div>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
<?php else: ?>
  <li class="text-center text-gray-700 text-2xl font-bold">No hay bebidas en el carrito</li>
<?php endif; ?>



<script>
  $('#botonPagarProductos').click((e) => {
    console.log(listaMujeres);
    <?php if ($listaMujeres): ?>
      <?php foreach ($listaMujeres as $prendaMujer): ?>
        if (listaMujeres.includes(<?php echo $prendaMujer->id_pm; ?>)) {
          $('#noPrendas').addClass('hidden');
          $('#elemento<?php echo $prendaMujer->id_pm; ?>').removeClass('hidden');
        } else {
          $('#elemento<?php echo $prendaMujer->id_pm; ?>').addClass('hidden');
        }
      <?php endforeach; ?>
    <?php endif; ?>
  })
</script>