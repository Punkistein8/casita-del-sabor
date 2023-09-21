<footer class="bg-gray-900">
  <h3 class="text-white text-center text-xl pt-4">La Casita del Sabor ©</h3>
  <p class="text-white text-center text-xs py-2 pb-4">2022 - 2023</p>
</footer>
<!-- <script src="https://cdn.tailwindcss.com/3.3.0"></script> -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

<!-- confirmar flashdata -->
<script>
  <?php if ($this->session->flashdata('error')): ?>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: '<?php echo $this->session->flashdata('error'); ?>',
    })
    // verificar flashdata
  <?php elseif ($this->session->flashdata('success')): ?>
    Swal.fire({
      icon: 'success',
      title: 'Bienvenido',
      text: '<?php echo $this->session->flashdata('success'); ?>',
    })

  <?php endif; ?>
</script>

</body>

</html>