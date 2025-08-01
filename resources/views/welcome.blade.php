<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth;
        }

        .blob {
            aspect-ratio: 1;
            background: red;
            clip-path: shape(from 21.33% 65.62%, curve to 11.91% 48.60% with 15.53% 58.85%, curve to 12.93% 27.62% with 8.28% 38.35%, curve to 30.02% 18.76% with 17.57% 16.89%, curve to 51.17% 17.62% with 42.46% 20.63%, curve to 70.28% 17.28% with 59.88% 14.60%, curve to 89.00% 28.91% with 80.67% 19.96%, curve to 88.13% 47.96% with 97.33% 37.85%, curve to 81.70% 71.63% with 78.94% 58.08%, curve to 72.20% 86.96% with 84.46% 85.19%, curve to 51.25% 82.70% with 59.95% 88.73%, curve to 34.85% 74.53% with 42.56% 76.66%, curve to 21.33% 65.62% with 27.13% 72.39%);
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"></script>

    <!-- and it's easy to individually load additional languages -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/languages/go.min.js"></script>

    <script>
        hljs.highlightAll();
    </script>
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
</head>

<body>

    {{-- <header class="flex justify-between items-center px-10">
        <img src="{{ asset('img/logo.png') }}" alt="Logo RJ ENTERPRISES" class="w-24">
        <nav>
            <a href="">
                Home
                <i class="fa-solid fa-house"></i>
            </a>
            <a href="">
                Productos
                <i class="fa-solid fa-box"></i>
            </a>
            <a href="">
                Api-Rest
                <i class="fa-solid fa-code"></i>
            </a>
            <a href="">
                Registrarse
                <i class="fa-solid fa-right-to-bracket"></i>
            </a>
        </nav>
        <div class="px-2">
            <label class="swap swap-rotate">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" class="theme-controller" value="synthwave" />

                <!-- sun icon -->
                <svg class="swap-off h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>

                <!-- moon icon -->
                <svg class="swap-on h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>
            </label>
        </div>
    </header> --}}
    {{-- <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <a href="{{ url('auth/google') }}"
            class="flex items-center bg-white border border-gray-300 rounded-lg shadow-md px-6 py-2 text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="800px" height="800px" viewBox="-0.5 0 48 48" version="1.1">
                <title>Google-color</title>
                <desc>Created with Sketch.</desc>
                <defs> </defs>
                <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Color-" transform="translate(-401.000000, -860.000000)">
                        <g id="Google" transform="translate(401.000000, 860.000000)">
                            <path
                                d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24"
                                id="Fill-1" fill="#FBBC05"> </path>
                            <path
                                d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333"
                                id="Fill-2" fill="#EB4335"> </path>
                            <path
                                d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667"
                                id="Fill-3" fill="#34A853"> </path>
                            <path
                                d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24"
                                id="Fill-4" fill="#4285F4"> </path>
                        </g>
                    </g>
                </g>
            </svg>
            <span>Continuar con Google</span>
        </a>
        <a href="{{ url('auth/github') }}">
        <button class="bg-gray-800 text-white px-4 py-2 rounded">
            Login con GitHub
        </button>
    </a>
    </div> --}}
    <div class="">
        <header id="inicio" class="absolute inset-x-0 top-0 z-50">
            <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">RJ ENTERPRISES</span>
                        <img src="{{ asset('img/logo.png') }}" alt="" class="h-20 w-auto"
                            style="filter: drop-shadow(1px 1px 20px rgba(0, 94, 255, 0.461))" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#inicio" class="text-sm/6 font-semibold text-gray-900 active:border-b-2">Incio</a>
                    <a href="#como" class="text-sm/6 font-semibold text-gray-900">Como empezar ?</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Documentación</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Acceder<span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div role="dialog" aria-modal="true" class="lg:hidden">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                                alt="" class="h-8 w-auto" />
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div aria-hidden="true"
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
                </div>
            </div>
            <div class="mx-auto  py-32 sm:py-48 lg:py-32">
                <div class="flex justify-around items-center py-0 px-40 mt-0">
                    <div class="text-center">
                        <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Acceso
                            a
                            más de 100 millones de datos reales</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Explora información
                            detallada sobre millones de productos en segundos</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Iniciar Ahora</a>
                            <a href="#" class="text-sm/6 font-semibold text-gray-900">Probar <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    {{-- <img src="{{ asset('img/971.jpg') }}" class="blob h-[70vh]"> --}}
                </div>

                {{-- <svg id="barcode"></svg>
                <script>
                    // Generar código de barras para Coca Cola
                    JsBarcode("#barcode", "0070847010500", {
                        format: "EAN13",
                        lineColor: "#000",
                        width: 2,
                        height: 100,
                        displayValue: true
                    });
                </script> --}}
                <div class="w-full px-36 mt-20">
                    <!-- Descripción -->
                        <p class="text-gray-800 text-base leading-relaxed mb-4">
                            Para acceder a este endpoint es necesario incluir tu
                            <span class="font-semibold text-blue-600">API Key</span> en los encabezados de la petición
                            utilizando <span class="italic">Bearer Token</span>.
                        </p>

                        <div class="bg-gray-100 border-l-4 border-blue-500 text-gray-700 p-3 mb-5 rounded">
                            <p class="text-sm">
                                <span class="font-semibold">Ejemplo de encabezado:</span>
                            </p>
                            <pre class="bg-gray-800 text-gray-100 text-sm p-3 rounded mt-2 overflow-auto">
Authorization: Bearer TU_API_KEY_AQUI
        </pre>
                        </div>
                </div>
                <div class="w-full px-36 mt-20 flex justify-center items-start gap-4">
                    <div class="bg-gray-50 p-6 w-full rounded-xl shadow-md border border-gray-200">
                        <!-- Título -->
                        <h1 class="text-3xl text-center font-extrabold text-gray-700 mb-6">
                            Listar todos los productos
                        </h1>

                        <p class="text-gray-800 text-base leading-relaxed mb-5">
                            Una vez autenticado correctamente, puedes usar el siguiente vínculo para obtener el listado
                            completo de productos registrados en la API. Este endpoint devuelve datos como
                            <span class="italic">nombre, marca, código de barras</span> y cualquier otra información
                            relevante.
                        </p>

                        <!-- Caja de URL con botón copiar -->
                        <div class="flex items-center bg-white border border-gray-300 rounded-lg shadow-sm p-2 mb-5">
                            <input id="urlText"
                                class="border-none w-full bg-transparent text-gray-700 text-sm md:text-base px-2 focus:outline-none"
                                type="text" value="https://api.rjenterprises.com/api/productos_all" readonly>
                            <button id="copyBtn"
                                class="ml-2 bg-blue-500 text-white text-sm px-4 py-1.5 rounded-md hover:bg-blue-600 transition">
                                Copiar
                            </button>
                        </div>

                        <!-- Texto previo al resultado -->
                        <p class="text-gray-700 text-base mb-2">
                            Si la petición se realiza con éxito, la API devolverá una respuesta en formato JSON como la
                            siguiente:
                        </p>

                        <!-- Ejemplo de respuesta -->
                        <div class="text-sm rounded-lg p-4 overflow-auto">
                            <pre>
                                <code class="language-json font-light" id="como">
// Respuesta de la API
{
    "mensaje": "lista de productos",
    "productos": [
        {
        "id": 1,
        "nombre": "Energizante MONSTER Energy",
        "marca": "MONSTER",
        "codigo_barras": "0070847010500",
        "detalles": "LATA DE 473ML",
        "imagen": "1020_999999-7084781119.webp",
        "created_at": "2025-07-29T20:53:34.000000Z",
        "updated_at": "2025-07-29T20:53:34.000000Z"
        }
    ]
}                              </code>
                            </pre>
                        </div>

                        <!-- Script para copiar -->
                        <script>
                            const copyBtn = document.getElementById("copyBtn");
                            const urlText = document.getElementById("urlText");

                            copyBtn.addEventListener("click", () => {
                                navigator.clipboard.writeText(urlText.value).then(() => {
                                    copyBtn.textContent = "¡Copiado!";
                                    copyBtn.classList.replace("bg-blue-500", "bg-green-500");
                                    setTimeout(() => {
                                        copyBtn.textContent = "Copiar";
                                        copyBtn.classList.replace("bg-green-500", "bg-blue-500");
                                    }, 2000);
                                });
                            });
                        </script>
                    </div>

                    <div class="bg-gray-50 p-6 w-full rounded-xl shadow-md border border-gray-200">
                        <!-- Título -->
                        <h1 class="text-3xl text-center font-extrabold text-gray-700 mb-6">
                            Listar un producto
                        </h1>

                        <p class="text-gray-800 text-base leading-relaxed mb-5">
                            Una vez autenticado correctamente, puedes usar el siguiente vínculo para obtener el listado
                            completo de productos registrados en la API. Este endpoint devuelve datos como
                            <span class="italic">nombre, marca, código de barras</span> y cualquier otra información
                            relevante.
                        </p>

                        <!-- Caja de URL con botón copiar -->
                        <div class="flex items-center bg-white border border-gray-300 rounded-lg shadow-sm p-2 mb-5">
                            <input id="urlText"
                                class="border-none w-full bg-transparent text-gray-700 text-sm md:text-base px-2 focus:outline-none"
                                type="text" value="https://api.rjenterprises.com/api/productos_all" readonly>
                            <button id="copyBtn"
                                class="ml-2 bg-blue-500 text-white text-sm px-4 py-1.5 rounded-md hover:bg-blue-600 transition">
                                Copiar
                            </button>
                        </div>

                        <!-- Texto previo al resultado -->
                        <p class="text-gray-700 text-base mb-2">
                            Si la petición se realiza con éxito, la API devolverá una respuesta en formato JSON como la
                            siguiente:
                        </p>

                        <!-- Ejemplo de respuesta -->
                        <div class="text-sm rounded-lg p-4 overflow-auto">
                            <pre>
                                <code class="language-json font-light" id="como">
// Respuesta de la API
{
    "estado": "exito",
    "datos": [
        {
            "codigo": "1234567890123",
            "nombre": "Coca Cola 1L",
            "marca": "Coca Cola",
            "imagen": "imgen.jpg"
        },
        {
            "codigo": "9876543210987",
            "nombre": "Inca Kola 500ml",
            "marca": "Inca Kola",
            "imagen": "imgen.jpg"
        }
    ]
}
                                </code>
                            </pre>
                        </div>

                        <!-- Script para copiar -->
                        <script>
                            const copyBtn = document.getElementById("copyBtn");
                            const urlText = document.getElementById("urlText");

                            copyBtn.addEventListener("click", () => {
                                navigator.clipboard.writeText(urlText.value).then(() => {
                                    copyBtn.textContent = "¡Copiado!";
                                    copyBtn.classList.replace("bg-blue-500", "bg-green-500");
                                    setTimeout(() => {
                                        copyBtn.textContent = "Copiar";
                                        copyBtn.classList.replace("bg-green-500", "bg-blue-500");
                                    }, 2000);
                                });
                            });
                        </script>
                    </div>
                </div>

            </div>
            <div aria-hidden="true"
                class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
