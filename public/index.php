<?php

require_once "../clases/Producto.php";
require_once "../config/conexion.php";


$producto = new Producto();
$lista = $producto->obtenerProductos();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lulú, el mundo del arte</title>
    <link href="../assets/img/logo-lulu.png" rel="icon" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-cyan": "#00BFFF",
                        "primary-pink": "#FF1493",
                        "primary-yellow": "#FFD700",
                        "background-light": "#FFFFFF",
                        "background-dark": "#1a1a1a",
                        "text-dark": "#221810",
                        "text-light": "#f8f7f6",
                    },
                    fontFamily: {
                        display: ["Epilogue"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        lg: "1rem",
                        xl: "1.5rem",
                        full: "9999px",
                    },
                },
            },
        };
    </script>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Epilogue%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" onload="this.rel='stylesheet'" rel="stylesheet" />
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-text-dark dark:text-text-light">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <header class="flex flex-col md:flex-row items-center justify-between whitespace-nowrap border-b border-primary-cyan/20 dark:border-primary-cyan/30 px-4 sm:px-6 lg:px-10 py-4">
            <div class="flex items-center justify-between w-full md:w-auto">
                <div class="flex items-center gap-3 text-primary-pink md:hidden">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="#00BFFF"></path>
                    </svg>
                    <img src="" alt="">
                </div>
                <button class="md:hidden" id="menu-toggle">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex items-center justify-center flex-1 gap-4 lg:gap-6 mt-4 md:mt-0 w-full" id="mobile-menu">
                <a class="text-sm font-medium hover:text-primary-cyan transition-colors text-center" href="#">INICIO</a>
                <a class="text-sm font-medium hover:text-primary-cyan transition-colors text-center" href="#">PRODUCTOS</a>
                <a class="text-sm font-medium hover:text-primary-cyan transition-colors text-center" href="#">GALERÍA</a>
                <div class="flex items-center justify-center w-32 h-21 rounded-full  mx-4">
                    <img src="../assets/img/logo-lulu.png" alt="Logo lulú">
                </div>
                <a class="text-sm font-medium hover:text-primary-cyan transition-colors text-center" href="#">EVENTOS</a>
                <a class="text-sm font-medium hover:text-primary-cyan transition-colors text-center" href="#">CONTACTO</a>
                <a class="text-sm font-medium hover:text-primary-cyan transition-colors text-center" href="#">LULÚ COLOMBIA</a>
            </nav>
        </header>
        <main class="flex-1 bg-white">
            <div class="mx-auto">
                <div class="@container">
                    <div class="p-0 @480px]:p-4">
                        <div class="relative flex min-h-[300px] sm:min-h-[600px] flex-col items-center justify-center gap-6 bg-cover bg-center bg-no-repeat p-4" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%), url("../assets/img/486487615_671562898784838_3336608059475271290_n.jpg");'>
                            <div class="flex flex-col gap-2 text-center text-white">
                                <h1 class="text-4xl sm:text-5xl font-black tracking-tighter @[480px]:text-6xl" style="text-shadow: 2px 2px 4px #FF1493;">Crea algo único</h1>
                                <p class="max-w-xl text-base font-normal text-white/90 @[480px]:text-lg px-4 sm:px-0">Transforma tus ideas en productos personalizados de alta calidad. Desde mugs hasta camisetas, diseña lo que quieras.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="py-32 bg-primary-cyan/10 my-8">
                    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="pb-8 pt-5 text-2xl font-bold tracking-tight text-center text-primary-pink">Productos destacados</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                            <div class="flex flex-col gap-3 group">
                                <div class="drop-shadow-[0_0_6px_rgba(0,0,0,1)] aspect-square w-full rounded-lg bg-cover bg-center transition-transform group-hover:scale-105" style='background-image: url("../assets/img/Mug_ceramica-sinfondo.png");'></div>
                                <h3 class="text-center text-base font-semibold text-primary-pink">Mugs</h3>
                            </div>
                            <div class="flex flex-col gap-3 group">
                                <div class="drop-shadow-[0_0_6px_rgba(0,0,0,1)] aspect-square w-full rounded-lg bg-cover bg-center transition-transform group-hover:scale-105" style='background-image: url("../assets/img/Libreta-sinfondo.png");'></div>
                                <h3 class="text-center text-base font-semibold text-primary-pink">Libretas</h3>
                            </div>
                            <div class="flex flex-col gap-3 group">
                                <div class="drop-shadow-[0_0_6px_rgba(0,0,0,1)] aspect-square w-full rounded-lg bg-cover bg-center transition-transform group-hover:scale-105" style='background-image: url("../assets/img/camiseta-sinfondo.png");'></div>
                                <h3 class="text-center text-base font-semibold text-primary-pink">Camisetas</h3>
                            </div>
                            <div class="flex flex-col gap-3 group">
                                <div class="drop-shadow-[0_0_6px_rgba(0,0,0,1)] aspect-square w-full rounded-lg bg-cover bg-center transition-transform group-hover:scale-105" style='background-image: url("../assets/img/Lapicero_plastico_sinfondo.png");'></div>
                                <h3 class="text-center text-base font-semibold text-primary-pink">Lapiceros</h3>
                            </div>
                            <div class="flex flex-col gap-3 group">
                                <div class="drop-shadow-[0_0_6px_rgba(0,0,0,1)] aspect-square w-full rounded-lg bg-cover bg-center transition-transform group-hover:scale-105" style='background-image: url("../assets/img/boton_sinfondo.png");'></div>
                                <h3 class="text-center text-base font-semibold text-primary-pink">Botones</h3>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="py-12 bg-primary-yellow/20 my-8">
                    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="pb-4 pt-5 text-2xl font-bold tracking-tight text-center text-primary-pink">Nuestros Productos</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 ">

                            <?php foreach (array_slice($lista, 0, 6) as $item): ?>

                                <div class="flex flex-col gap-4 group p-4 border rounded">
                                    <div class="mx-auto px-5 w-48 md:w-64 aspect-square bg-cover bg-center rounded-lg transition-transform group-hover:scale-105 border-4 border-white justify-items-center" style='background-image: url("../assets/img/<?= htmlspecialchars($item['imagen']) ?>")'></div>
                                    <div class="flex flex-col">
                                        <h3 class="text-base font-bold text-primary-pink"><?= htmlspecialchars($item['nombre_producto']) ?></h3>
                                        <p class="text-sm w-2/2 text-text-dark/80 dark:text-text-light/80 mt-1"><?= htmlspecialchars($item['descripcion']) ?></p>
                                        <p class="text-lg font-bold text-primary-cyan mt-2">$<?= number_format($item['precio'], 2) ?></p>
                                    </div>
                                </div>
                            <?php endforeach?>
                        </div>

                        <div class="mt-10 text-center">
                            <a class="inline-block bg-primary-pink text-white font-semibold px-6 py-3 rounded-lg hover:bg-primary-cyan transition-colors " href="#"> Explora la Colección Completa </a>
                        </div>

                </section>
                <section class="py-20 bg-white relative">
                    <div class="absolute inset-0 bg-cover bg-center opacity-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCrbU_C0zUWeAUx50Lf-9TaiqtbPPCVgbQ_6ldXKf0rOs1hfuWzoS2cxrU_GlqdpkVVNWI5u_pgINuBD0jjBr1RozGwziU2Js224TdCQILcGdfJzrorWrzscHlrDFFImJb4YJfOfGAG6V26-fyIJQInwk212NPcfWLcZhOAwfCo2fFotXAGkFymNTep1bGKxQ4aNDRFzAvlcNAyLao4YqtUu3GpxYUFBxo0vTRpxF0NPR7VbNLXHgNcvu8GLiGaVJRGsT37_s3DxFQ");'></div>
                    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight md:text-5xl lg:text-6xl">
                            <span class="text-yellow-400">Lulú</span>
                            <span class="text-blue-800">Colombia</span>
                        </h2>
                        <p class="mt-4 max-w-3xl mx-auto text-lg sm:text-xl text-gray-700">Un viaje por la cultura y el color de Colombia a través de nuestros productos.</p>
                        <div class="mt-12 grid gap-8 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border-2 border-transparent hover:border-yellow-400">
                                <div class="flex-shrink-0">
                                    <img alt="Mug con diseño de orquídea" class="h-48 w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTgD7887ScIn-umTckqrWs-QSbAdti_hBnG_ntdjFEDBL37cygboRsYNmu6zOtPL-AVfcFIUIfFvXwDoPkXYR0fWxStVCvoPLbl-Ax8p3MrIuc-X020D7VLjLlF_f3Pym7EA9xE-HALLkZ8Q7soDBgdnQCvQgXLda6uiE9t7EsEaRtg3D_lGEQ9fpy404b64zua66PmxAbLd6Rvqt-ZWVfmOGo6XHcbONKdXiQQQx5YHhMOrs5dUJaLVmAMF6UpxXs8ddyaNwrYIQ" />
                                </div>
                                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-blue-800">
                                            <a class="hover:underline" href="#">Mugs</a>
                                        </p>
                                        <a class="block mt-2" href="#">
                                            <p class="text-xl font-semibold text-gray-900">El Sabor del Café</p>
                                            <p class="mt-3 text-base text-gray-600">Un mug inspirado en la flor nacional, la orquídea, y el aroma de nuestro café. Un sorbo de Colombia cada mañana.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border-2 border-transparent hover:border-red-600">
                                <div class="flex-shrink-0">
                                    <img alt="Camiseta con diseño de Carnaval de Barranquilla" class="h-48 w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDdYXadnoyTSJK2SVrQpciho2zr7N3HfxxQWecV0ugFnE6evTWYX9h3oJzIdfbftE3eE3r1ESeSV0Lu9aYi3r-1YqetBM3lp-vJcFppC1_wrTLAbGTIIWi2W6Pp9uPNM5yDlkOmMQR1FokH2faBCh2Fd43gxeqxVJiGd0wft0JLciE1bBgSzqXViizFsdm20R-tggpeO1vcPmT7OI3nfGSPoDu4h5_Iau8cEjZUvsuQ1WJYLgyZDFp1OSbL_Kb8FIlO8Qcx0IfUMs" />
                                </div>
                                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-red-600">
                                            <a class="hover:underline" href="#">Camisetas</a>
                                        </p>
                                        <a class="block mt-2" href="#">
                                            <p class="text-xl font-semibold text-gray-900">La Alegría del Carnaval</p>
                                            <p class="mt-3 text-base text-gray-600">Viste la fiesta y el color del Carnaval de Barranquilla. Diseños que celebran la vida y la tradición de nuestra gente.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 border-2 border-transparent hover:border-green-600">
                                <div class="flex-shrink-0">
                                    <img alt="Gorra con diseño de Chiva Colombiana" class="h-48 w-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXk8uL0nPX5ecRLW7a8Ke2SivnQFbwtX5Qwfiq8V-PajpyMYgt4M70gF5ph98-BU2GfYu2iqhETTM5k1sWgYnsi3OeYNMdBfiNWEc21evpLsmBKa3QgZ7WaXYSQD2FsSdw7siyG76mi6IWBqcwKEc0NIj26mNsBgNo__zOT-n7oMYXlK77EW3l7IcDPxLr21vl3-H9tW657_ygvYIkC2bLn-RV6KGzaSrssj2OnfKqbx3EiLHVym0tJsgcdTFsCkubEyXaLZw25mc" />
                                </div>
                                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-green-600">
                                            <a class="hover:underline" href="#">Gorras</a>
                                        </p>
                                        <a class="block mt-2" href="#">
                                            <p class="text-xl font-semibold text-gray-900">Rutas de Mi Tierra</p>
                                            <p class="mt-3 text-base text-gray-600">Una gorra que te lleva por los caminos de Colombia en una chiva colorida. El accesorio perfecto para tus aventuras.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <a class="inline-block bg-gradient-to-r from-yellow-400 via-blue-800 to-red-600 text-white font-bold rounded-full py-3 px-8 text-lg hover:shadow-2xl hover:scale-105 transform transition-all duration-300" href="#"> Explora la Colección Completa </a>
                        </div>
                    </div>
                </section>
                <section class="py-12 bg-white">
                    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="pb-4 pt-5 text-2xl font-bold tracking-tight text-center text-primary-pink">Eventos Destacados</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="flex flex-col gap-4 bg-primary-cyan/10 p-6 rounded-xl">
                                <div class="w-full aspect-video bg-cover bg-center rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQzfIdMlGnoXIfoWxTNhi9bbV9cURTEIZ-zJwsqN3lo4OVzUztYROT4IE8JAewPPevqkSf8oT6QN-5VJK1VCA_AegzIXVNk-JRq-2J9exM7-wnKfPZ4VR3MYISjfCs6bk9mthCrxzqjGR0PIJQzH6LvwMxIsT2ERnxE1R-4zEQo0QDR34VD0W0uz2BFpAhIbKJd4AWCYx8YaG-oA2SThBKjPtKrIcKBPMoIUddhc40Tppw_P-IkhsA-Ic4ZDUdIRRN_M7c0fXf5jY");'></div>
                                <div class="flex flex-col">
                                    <h3 class="text-xl font-bold text-primary-cyan">Lanzamiento de Marca en Coworking Central</h3>
                                    <p class="text-base text-text-dark/80 dark:text-text-light/80 mt-1">Celebramos el lanzamiento de una nueva marca de ropa urbana con camisetas y gorras personalizadas en un evento vibrante en el corazón de la ciudad.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 bg-primary-yellow/20 p-6 rounded-xl">
                                <div class="w-full aspect-video bg-cover bg-center rounded-lg" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQzfIdMlGnoXIfoWxTNhi9bbV9cURTEIZ-zJwsqN3lo4OVzUztYROT4IE8JAewPPevqkSf8oT6QN-5VJK1VCA_AegzIXVNk-JRq-2J9exM7-wnKfPZ4VR3MYISjfCs6bk9mthCrxzqjGR0PIJQzH6LvwMxIsT2ERnxE1R-4zEQo0QDR34VD0W0uz2BFpAhIbKJd4AWCYx8YaG-oA2SThBKjPtKrIcKBPMoIUddhc40Tppw_P-IkhsA-Ic4ZDUdIRRN_M7c0fXf5jY");'></div>
                                <div class="flex flex-col">
                                    <h3 class="text-xl font-bold text-primary-yellow">Feria de Emprendimiento Local</h3>
                                    <p class="text-base text-text-dark/80 dark:text-text-light/80 mt-1">Participamos en la feria anual de emprendedores, mostrando nuestra variedad de productos personalizables y conectando con la comunidad creativa local.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-12 bg-primary-pink/5 my-10">
                    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h2 class="pb-8 pt-5 text-3xl font-bold tracking-tight text-center text-primary-pink">Galería de Creaciones</h2>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="group relative overflow-hidden rounded-lg">
                                <img alt="Mug personalizado con foto familiar" class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110" src="../assets/img/Galeria/galeria-mugs.png" />
                                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/50 transition-colors flex items-center justify-center">
                                    <p class="text-white text-sm sm:text-base md:text-lg font-bold opacity-0 group-hover:opacity-100 transition-opacity">Mug Familiar</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg">
                                <img alt="Mug personalizado con foto familiar" class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110" src="../assets/img/Galeria/galeria_camiseta.png" />
                                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/50 transition-colors flex items-center justify-center">
                                    <p class="text-white text-sm sm:text-base md:text-lg font-bold opacity-0 group-hover:opacity-100 transition-opacity">Camisetas personalizadas</p>
                                </div>
                            </div>

                            <div class="group relative overflow-hidden rounded-lg">
                                <img alt="Mug personalizado con foto familiar" class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110" src="../assets/img/Galeria/galeria-Termo-aluminio.png" />
                                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/50 transition-colors flex items-center justify-center">
                                    <p class="text-white text-lg font-bold opacity-0 group-hover:opacity-100 transition-opacity">Termos Aluminio</p>
                                </div>
                            </div>

                            <div class="group relative overflow-hidden rounded-lg">
                                <img alt="Mug personalizado con foto familiar" class="aspect-square w-full object-cover transition-transform duration-300 group-hover:scale-110" src="../assets/img/Galeria/galeria-tula-textil.png" />
                                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/50 transition-colors flex items-center justify-center">
                                    <p class="text-white text-lg font-bold opacity-0 group-hover:opacity-100 transition-opacity">Tulas Textiles</p>
                                </div>
                            </div>

                        </div>


                        <div class="mt-10 text-center">
                            <a class="inline-block bg-primary-pink text-white font-semibold px-6 py-3 rounded-lg hover:bg-primary-cyan transition-colors " href="#">Mira más aquí</a>
                        </div>
                </section>
                <section class="py-16 bg-primary-cyan/5 my-10">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center">
                            <h2 class="text-3xl font-bold text-primary-pink">¿Tienes una idea? ¡Hablemos!</h2>
                            <p class="mt-4 text-lg text-text-dark/80">Envíanos tus consultas o ven a visitarnos. Estamos aquí para ayudarte a crear.</p>
                        </div>
                        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 items-start ">
                            <form action="#" class="grid grid-cols-1 gap-y-6" method="POST">
                                <div>
                                    <label class="sr-only" for="full-name">Nombre completo</label>
                                    <input autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-pink focus:border-primary-pink border-gray-300 rounded-md" id="full-name" name="full-name" placeholder="Nombre completo" type="text" />
                                </div>
                                <div>
                                    <label class="sr-only" for="email">Email</label>
                                    <input autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-pink focus:border-primary-pink border-gray-300 rounded-md" id="email" name="email" placeholder="Email" type="email" />
                                </div>
                                <div>
                                    <label class="sr-only" for="message">Mensaje</label>
                                    <textarea class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-pink focus:border-primary-pink border border-gray-300 rounded-md" id="message" name="message" placeholder="Tu idea o pregunta" rows="4"></textarea>
                                </div>
                                <div>
                                    <button class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary-pink hover:bg-primary-pink/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-pink transition-colors" type="submit">Enviar Mensaje</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer class="bg-primary-pink/10 text-text-dark dark:bg-primary-pink/20 dark:text-text-light py-12 px-4 sm:px-6 lg:px-10">
            <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold text-primary-pink mb-4">Contacto</h3>
                    <p class="text-sm">Calle Falsa 123, Bogotá, Colombia</p>
                    <p class="text-sm">info@personalizeit.com</p>
                    <p class="text-sm">+57 300 123 4567</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-primary-pink mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a class="hover:text-primary-cyan" href="#">Inicio</a>
                        </li>
                        <li>
                            <a class="hover:text-primary-cyan" href="#">Productos</a>
                        </li>
                        <li>
                            <a class="hover:text-primary-cyan" href="#">Preguntas Frecuentes</a>
                        </li>
                        <li>
                            <a class="hover:text-primary-cyan" href="#">Sobre Nosotros</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-primary-pink mb-4">Legal</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a class="hover:text-primary-cyan" href="#">Términos y Condiciones</a>
                        </li>
                        <li>
                            <a class="hover:text-primary-cyan" href="#">Política de Privacidad</a>
                        </li>
                        <li>
                            <a class="hover:text-primary-cyan" href="#">Política de Envíos</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-primary-pink mb-4">Síguenos</h3>
                    <div class="flex space-x-4">
                        <a class="text-text-dark dark:text-text-light hover:text-primary-cyan" href="#">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.494v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.323-1.325z"></path>
                            </svg>
                        </a>
                        <a class="text-text-dark dark:text-text-light hover:text-primary-cyan" href="#">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"></path>
                            </svg>
                        </a>
                        <a class="text-text-dark dark:text-text-light hover:text-primary-cyan" href="#">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.296 1.634 4.208 3.803 4.649-.6.162-1.22.203-1.832.124.582 1.868 2.268 3.233 4.27 3.27-1.825 1.428-4.121 2.15-6.628 2.15-.431 0-.858-.025-1.274-.075 2.361 1.513 5.164 2.396 8.177 2.396 9.857 0 15.255-8.157 15.255-15.255 0-.233-.005-.466-.015-.697.97-.698 1.82-1.564 2.49-2.585z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-primary-pink/30 text-center text-sm">
                <p>© Lulú, el mundo del arte. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            var menu = document.getElementById("mobile-menu");
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden");
                menu.classList.add("flex", "flex-col", "items-center", "w-full", "py-4", "gap-4");
            } else {
                menu.classList.add("hidden");
                menu.classList.remove("flex", "flex-col", "items-center", "w-full", "py-4", "gap-4");
            }
        });
    </script>
</body>

</html>