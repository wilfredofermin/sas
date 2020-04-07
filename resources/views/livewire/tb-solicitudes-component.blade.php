<div>
    @include('livewire.card-solicitud')
    <div class="flex flex-row-reverse mt-12 right-0">
        <div class="m-2">
            <button
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-purple-500 hover:border-purple-600 hover:bg-purple-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
                wire:click="store">
                <span class="mx-auto"><i class="fas fa-user-plus"></i> Nuevo</span>
            </button>
        </div>
    </div>
    <div class="w-full mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse rounded border-b-2 shadow-md">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            servicekit_id</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nombres</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Docuemnto</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Prioridad</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Estado</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Fecha</th>
                        {{-- <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Opciones</th> --}}


                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $item)
                    <tr wire:click="editar({{$item->id}}) "
                        class="rounded border-b-2 border-purple-500 hover:border-purple-600 hover:bg-purple-500 hover:text-white shadow-md cursor-pointer font-normal shadow-md">
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->servicekit_id}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->nombre. ' '.$item->primerApellido}}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            {{$item->tipoDocumento .' | '.$item->documento}}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$item->prioridad}}</td>
                        <td>

                            @if($item->estado=="Open")
                            <span
                                class="text-sm ml-4 font-medium bg-purple-100 py-1 px-2 rounded text-purple-500 align-middle">{{$item->estado}}</span>
                            @else
                            <span
                                class="text-sm ml-4 font-medium bg-red-100 py-1 px-2 rounded text-red-500 align-middle">{{$item->estado}}</span>

                            @endif
                        </td>
                        <td class="py-4 px-6  border-b border-grey-light">{{$item->created_at}}</td>

                        {{-- <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" <button wire:click="edit({{$item->id}})"
                        class="btn btn-xs btn-warning">Editar</button> --}}
                        {{-- <a href="#"
                                class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">View</a> --}}
                        </td>
                    </tr>
                </tbody>
                @endforeach
                {{-- {{ $solicitudes->links() }} --}}
            </table>
        </div>
    </div>
</div>