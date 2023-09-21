<li id="noPrendas" class="text-center text-gray-700 text-2xl font-bold pb-4">No hay prendas en el carrito</li>
<?php if ($listaAlcoholes) : ?>
  <?php foreach ($listaAlcoholes as $licor) : ?>
    <li id="elemento<?php echo $licor->id_alc ?>" class="hidden">
      <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start flex">
        <img src="<?php echo $licor->foto_alc ?>" alt="Imagen" class="w-full rounded-lg sm:w-40" />
        <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
          <div class="mt-5 sm:mt-0">
            <h2 class="text-xl font-bold text-gray-900"><?php echo $licor->nombre_alc ?></h2>
            <p class="mt-1 text-lg text-gray-700 font-extrabold">$ <?php echo $licor->precio_alc ?></p>
          </div>
        </div>
      </div>
    </li>
  <?php endforeach; ?>
<?php else : ?>
  <li class="text-center text-gray-700 text-2xl font-bold">No hay prendas en el carrito</li>
<?php endif; ?>



<script>
  $('#botonPagarProductos').click((e) => {
    console.log(listaAlcoholes);
    <?php if ($listaAlcoholes) : ?>
      <?php foreach ($listaAlcoholes as $licor) : ?>
        if (listaAlcoholes.includes(<?php echo $licor->id_alc; ?>)) {
          $('#noPrendas').addClass('hidden');
          $('#elemento<?php echo $licor->id_alc; ?>').removeClass('hidden');
        } else {
          $('#elemento<?php echo $licor->id_alc; ?>').addClass('hidden');
        }
      <?php endforeach; ?>
    <?php endif; ?>
  })
</script>