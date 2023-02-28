<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">
    <nav class="flex items-center justify-between p-4 bg-stone-800" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="{{ route('welcome') }}"class="text-sm font-semibold leading-6 text-white">
                Bienvenida
            </a>
            <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-white">
                CRUD
            </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        </div>
    </nav>

    <main>
        <!-- En esta sección se incluirá el contenido específico de cada página -->
        @yield('content')
    </main>

    <footer>
        <!-- Aquí puedes incluir el código del pie de página que quieras que se repita en todas las páginas -->
    </footer>

    <script>
        function filterEmail() {
            let input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("filterEmail");
            filter = input.value.toUpperCase();
            table = document.getElementById("tableUser");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        };
    </script>
</body>
</html>
