<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
    integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
    integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_es_AR.min.js"
    integrity="sha512-GeSntDGvwA7jlY4DzjOfRFBTOobiQbg7KRJx4z6ooI+RhE/DbJZgBeulgl9WpjJwcv2LXF/ZdsxRZeHe1fAcZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
    integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
    integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/localization/messages_es_AR.min.js"
    integrity="sha512-GeSntDGvwA7jlY4DzjOfRFBTOobiQbg7KRJx4z6ooI+RhE/DbJZgBeulgl9WpjJwcv2LXF/ZdsxRZeHe1fAcZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css" rel="stylesheet">
  </link>
  <link rel="icon" type="image/x-icon" href="https://img.icons8.com/doodle/512/america.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hint.css/2.7.0/hint.min.css" />

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" /> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" /> -->

  <!-- NUEVO -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
  <script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        fontFamily: {
          sans: ["Roboto", "sans-serif"],
          body: ["Roboto", "sans-serif"],
          mono: ["ui-monospace", "monospace"],
        },
      },
      corePlugins: {
        preflight: false,
      },
    };
  </script>
  <!-- NUEVO -->

  <script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <title>Casita del Sabor</title>

</head>

<body>
  <nav class="bg-gray-900">
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="relative flex items-center justify-between">
        <a href="<?= base_url() ?>" aria-label="Company" title="Company" class="inline-flex items-center">
          <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"
            class="w-10 text-teal-accent-400 text-emerald-600">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path fill="#2dd4bf"
                d="M128 352.576V352a288 288 0 0 1 491.072-204.224 192 192 0 0 1 274.24 204.48 64 64 0 0 1 57.216 74.24C921.6 600.512 850.048 710.656 736 756.992V800a96 96 0 0 1-96 96H384a96 96 0 0 1-96-96v-43.008c-114.048-46.336-185.6-156.48-214.528-330.496A64 64 0 0 1 128 352.64zm64-.576h64a160 160 0 0 1 320 0h64a224 224 0 0 0-448 0zm128 0h192a96 96 0 0 0-192 0zm439.424 0h68.544A128.256 128.256 0 0 0 704 192c-15.36 0-29.952 2.688-43.52 7.616 11.328 18.176 20.672 37.76 27.84 58.304A64.128 64.128 0 0 1 759.424 352zM672 768H352v32a32 32 0 0 0 32 32h256a32 32 0 0 0 32-32v-32zm-342.528-64h365.056c101.504-32.64 165.76-124.928 192.896-288H136.576c27.136 163.072 91.392 255.36 192.896 288z">
              </path>
            </g>
          </svg>
          <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Casita del Sabor</span>
        </a>
        <?php if ($this->session->userdata('usuario')): ?>
          <?php $usuario = $this->session->userdata('usuario') ?>
          <div class="flex gap-2">
            <div class="flex justify-center">
              <div>

                <?php if ($this->session->userdata('usuario')->tipo_usu == 'user'): ?>
                  <!-- BOTON DE USUARIO LOGEADO CONDICIONAL CON DROPDOWN PARA TIPO usuario -->
                  <div class="relative" data-te-dropdown-ref>
                    <a class="flex gap-5 bg-teal-600 px-5 py-3 rounded-md text-white hover:bg-teal-700 transition-all ease-in-out"
                      href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
                      data-te-ripple-init data-te-ripple-color="light">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                      </svg>
                      <?php echo $usuario->nombre_usu; ?>
                      <span class="ml-2 w-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                          <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                        </svg>
                      </span>
                    </a>
                    <ul
                      class="absolute z-[1000] float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                      aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                      <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-200 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                          href="<?php echo site_url('admins/solicitudescompra') ?>" data-te-dropdown-item-ref>Ver
                          solicitudes de compra</a>
                      </li>
                    </ul>
                  </div>
                  <!-- BOTON DE USUARIO LOGEADO CONDICIONAL CON DROPDOWN PARA TIPO usuario -->
                <?php else: ?>
                  <!-- BOTON DE USUARIO LOGEADO CONDICIONAL CON DROPDOWN PARA TIPO ADMIN -->
                  <div class="relative" data-te-dropdown-ref>
                    <a class="flex gap-5 bg-teal-600 px-5 py-3 rounded-md text-white hover:bg-teal-700 transition-all ease-in-out"
                      href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
                      data-te-ripple-init data-te-ripple-color="light">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                      </svg>
                      <?php echo $usuario->nombre_usu; ?>
                      <span class="ml-2 w-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                          <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                        </svg>
                      </span>
                    </a>
                    <ul
                      class="absolute z-[1000] float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                      aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                      <li>
                        <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-200 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                          href="<?php echo site_url('admins/solicitudescompra') ?>" data-te-dropdown-item-ref>Ver
                          solicitudes de compra</a>
                      </li>
                    </ul>
                  </div>
                  <!-- BOTON DE USUARIO LOGEADO CONDICIONAL CON DROPDOWN PARA TIPO ADMIN -->
                <?php endif; ?>
              </div>
            </div>


            <a href="<?= base_url('index.php/Login/cerrarLogin'); ?>"
              class="flex gap-5 bg-red-600 px-5 py-3 rounded-md text-white hover:bg-red-700 transition-all ease-in-out"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
              </svg>
              Cerrar Sesión</a>
          </div>
        <?php else: ?>
          <a href="<?= base_url('index.php/Login'); ?>"
            class="bg-teal-600 px-5 py-3 rounded-md text-white hover:bg-teal-700 transition-all ease-in-out">Login</a>
        <?php endif; ?>

        <?php if ($this->session->userdata('usuario') && $this->session->userdata('usuario')->tipo_usu == 'admin'): ?>
          <ul class="flex items-center  space-x-8 lg:flex">
            <li><a href="<?= base_url('index.php/Hombres/indexPriv') ?>"
                class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Entradas</a>
            </li>
            <li><a href="<?= base_url('index.php/Mujeres/indexPriv') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Bebidas</a>
            </li>
            <li><a href="<?= base_url('index.php/Tecnologias/indexPriv') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Platos
                Fuertes</a>
            </li>
            <!-- <li><a href="<?= base_url('index.php/Alcoholes/indexPriv') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Postres</a>
            </li> -->
          </ul>
        <?php elseif ($this->session->userdata('usuario') && $this->session->userdata('usuario')->tipo_usu == 'user'): ?>
          <ul class="flex items-center  space-x-8 lg:flex">
            <li><a href="<?= base_url('index.php/Hombres/indexUsuario') ?>"
                class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Entradas</a>
            </li>
            <li><a href="<?= base_url('index.php/Mujeres/indexUsuario') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Bebidas</a>
            </li>
            <li><a href="<?= base_url('index.php/Tecnologias/indexUsuario') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Platos
                Fuertes</a>
            </li>
            <!-- <li><a href="<?= base_url('index.php/Alcoholes/indexUsuario') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Postres</a>
            </li> -->
          </ul>
        <?php else: ?>
          <ul class="flex items-center  space-x-8 lg:flex">
            <li><a href="<?= base_url('index.php/Hombres') ?>"
                class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Entradas</a>
            </li>
            <li><a href="<?= base_url('index.php/Mujeres') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Bebidas</a>
            </li>
            <li><a href="<?= base_url('index.php/Tecnologias') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Platos
                Fuertes</a>
            </li>
            <!-- <li><a href="<?= base_url('index.php/Alcoholes') ?>"
                class=" font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-400">Postres</a>
            </li> -->
          </ul>
        <?php endif; ?>

      </div>
    </div>
  </nav>