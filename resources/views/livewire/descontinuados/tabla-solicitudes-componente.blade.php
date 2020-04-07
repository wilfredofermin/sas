<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="text-gray-900 white font-semibold">
        <div class="p-8 flex">
            <h1 class="text-3xl uppercase">
                Solicitudes
            </h1>
        </div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>

    <div class="flex flex-row-reverse mt-5 right-0">
        <div class="m-2">
            <button
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-purple-500 hover:border-purple-600 hover:bg-purple-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
                wire:click="store">
                <span class="mx-auto"><i class="fas fa-user-plus"></i><br>Nuevo</span>
            </button>
        </div>
        <div class="m-2">
            <button
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                <span class="mx-auto"><i class="fas fa-user-times"></i>Eliminar</span>
            </button>
        </div>
    </div>
    <div>
        <table class="w-full shadow-lg rounded mt-10">
            <tr class="text-left text-grey-darkest bg-grey-lighter border-b border-grey uppercase mb-5">
                <th>Nombre</th>
                <th>Documento</th>
                <th>Solicitud</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
            @foreach ($solicitudes as $item)

            <tr class="border-b border-grey-light hover:bg-purple-300 bg-gray-100 ">
                <td>
                    <p class="pb-2 font-sans text-lg text-gray-800">{{$item->nombre}}</p>
                    <p class="text-sm text-grey font-semibold">{{$item->primerApellido}}</p>
                </td>
                <td>
                    <p class="pb-2 font-sans text-lg text-gray-800">{{$item->documento}}</p>
                    <p class="text-sm text-grey font-semibold">{{$item->tipoDocumento}}</p>
                </td>
                <td>
                    <p class="pb-2 font-sans text-lg text-gray-800">{{$item->servicekit_id}}</p>
                    <p class="text-sm text-grey font-semibold"><small>por </small>wfermin</p>
                </td>
                <td>
                    <p class="pb-2 font-sans text-lg text-gray-800">{{$item->prioridad}}</p>
                    <p class="text-sm text-grey font-semibold">{{$item->estado}}</p>
                </td>
                <td>
                    <p class="font-sans text-lg text-gray-800">{{$item->created_at}}</p>
                </td>
                <td>
                    <svg class="h-12 ml-8 w-6 fill-current text-grey-dark" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
                    </svg>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    {{-- @livewire('modal-add-services') --}}
</div>