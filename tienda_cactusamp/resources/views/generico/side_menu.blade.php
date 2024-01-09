<div class="flex h-screen flex-col justify-between border-e bg-white">
    <div class="px-4 py-6">
        <span class="grid h-10 w-32 place-content-center rounded-lg bg-gray-100 text-xs text-gray-600">
            CACTUS AMPS
        </span>

        <ul class="mt-6 space-y-1">
            <li>
                <a href="/" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-700">Inicio</a>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> Productos </span>
                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="/productos" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Todos</a>
                        </li>
                        <li>
                            <a href="/productos?filtro=amps" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Amps</a>
                        </li>
                        <li>
                            <a href="/productos?filtro=pedales" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Pedales</a>
                        </li>
                        <li>
                            <a href="/productos?filtro=otros" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Otros</a>
                        </li>
                    </ul>
                </details>
            </li>

            <li>
                <a href="/nosotros" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">Sobre Nosotros</a>
            </li>

            <li>
                <a href="/contacto" class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"> Contacto </a>
            </li>
        </ul>
    </div>

    <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
        <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
            <img alt="Man" src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" class="h-10 w-10 rounded-full object-cover"/>

            <div>
                <p class="text-xs">
                <strong class="block font-medium">Eric Frusciante</strong>
                <span> eric@frusciante.com </span>
                </p>
            </div>
        </a>
    </div>
</div>