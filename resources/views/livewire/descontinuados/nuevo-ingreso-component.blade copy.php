<div>
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
            {{-- <h3 class="text-1xl uppercase font-semibold">
                SOLICITUD - NUEVO INGRESO
            </h3> --}}
            <h5 class="text-2xl font-normal leading-normal mt-0 mb-2 text-purple-800">
                SOLICITUD - NUEVO INGRESO
            </h5>
        </div>
        <!--body-->

        <div class="relative p-6 flex-auto">
            {{-- INCIO DEL FORMULARIO --}}
            <form wire:submit.prevent="submit">

                <div class="bg-white shadow-md rounded mt-0 px-8 pt-10 pb-8 mb-4 flex-no-wrap flex-col my-2">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/3 px-3 mb-6">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Documento
                            </label>
                            <input
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="documento" name='documento' wire:model="documento" type="number"
                                placeholder="xxx-xxxxxx-x">
                            <p class="text-red text-xs italic">@error('documento') <span
                                    class="error">{{ $message }}</span> @enderror</p>
                        </div>
                        <div class="md:w-1/3 px-3 mb-6">
                            <select name="tipoDocumento" wire:model="tipoDocumento"
                                class="block  appearance-none w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="cedula">
                                <option value="Cedula">Cedula 1</option>
                                <option value="pasaporte">Pasaporte</option>
                            </select>
                        </div>
                        <div class="md:w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Nombre
                            </label>
                            <input
                                class="appearance-none uppercase block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="nombre" name='nombre' wire:model="nombre" type="text" placeholder="Jane">
                            <p class="text-red text-xs italic">@error('nombre') <span
                                    class="error">{{ $message }}</span> @enderror</p>
                        </div>
                        <div class="md:w-1/6 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-last-name">
                                S/N [<small class="lowercase">opcional</small>]
                            </label>
                            <input
                                class="appearance-none uppercase block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="Sn" name='Sn' wire:model="Sn" type="text" placeholder="J">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                Primer Apellido
                            </label>
                            <input
                                class="appearance-none uppercase block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="primerApellido" name='primerApellido' wire:model="primerApellido" type="text"
                                placeholder="Doe">
                            <p class="text-red text-xs italic">@error('primerApellido') <span
                                    class="error">{{ $message }}</span> @enderror
                            </p>
                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-last-name">
                                Segundo Apellido [<small class="lowercase">opcional</small>]
                            </label>
                            <input
                                class=" uppercase block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                                id="grid-last-name" type="text" name="segundoApellido" wire:model="segundoApellido"
                                placeholder="Jackson">
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="w-full px-3 md:w-1/3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                DEPARTAMENTO
                            </label>
                            <select name="departamento" wire:model="departamento"
                                wire:keydown.enter="changeDepartamento" wire:keydown.page-down="changeDepartamento"
                                wire:change="changeDepartamento"
                                class="block   w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="departamento">
                                <option value="" selected>SELECCIONE UN DEPARTAMENTO</option>
                                @if(!empty($ListDepartamentos))
                                @foreach($ListDepartamentos as $dept)
                                <option value={{ $dept->nombre }}> {{ $dept->nombre }}</option>
                                @endforeach
                                @else
                                <option value="">SELECCIONE UN DEPARTAMENTO</option>
                                @endif
                            </select>
                            <p class="text-red text-xs italic">@error('departamento') <span
                                    class="error">{{ $message }}</span> @enderror
                            </p>
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                PUESTO
                            </label>
                            <select name="puesto"
                                wire:model="puesto"
                                class="block w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state">
                                @if(!empty($ListPuestos))
                                @foreach ($ListPuestos as $itemP)
                                <option value={{$itemP->nombre}}>{{ $itemP->nombre }}</option>
                                @endforeach
                                @else
                                @endif
                            </select>
                        </div>
                        <div class="w-full px-3 md:w-1/3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                LOCALIDAD
                            </label>
                            <select name="localidad"
                                class="block w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state">
                                @if(!empty($ListLocalidades))
                                @foreach ($ListLocalidades as $itemL)
                                {{-- <option value="{{$itemP->id}}" selected>{{ $itemP->nombre }}</option> --}}
                                <option value={{ $itemL->nombre }}>{{ $itemL->nombre }}</option>
                                {{-- <option value={{ $itemP['id'] }} selected>{{ $itemP['nombre'] }}</option> --}}
                                @endforeach
                                @else
                                <option value="">.........</option>
                                @endif
                            </select>
                        </div>

                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                for="grid-first-name">
                                SUPERVISOR | CORREO ELECTRONICO
                            </label>
                            <input
                                class=" lowercase block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="supervisor" name='supervisor' wire:model="supervisor" type="email"
                                placeholder="Intruduzca el correo del supervisior">
                            <p class="text-red text-xs italic">@error('supervisor') <span
                                    class="error">{{ $message }}</span></p>
                            @enderror</span>
                        </div>
                    </div>
                </div>
                {{-- FIN DEL FORMULARIO --}}
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
            <button
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                <span class="mx-auto"><i class="fas fa-arrow-left"></i>Vover</span>
            </button>
            <button type="submit"
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded mx-5 border-b-2 border-purple-500 hover:border-purple-600 hover:bg-purple-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
                onclick="toggleModal('modal-id')">
                <span class="mx-auto"><i class="fas fa-paper-plane"></i>Enviar</span>
            </button>
        </div>
        </form>
    </div>
</div>

</div>