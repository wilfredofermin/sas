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
                {{-- --------------------------------------------------------------------------------------- --}}
                <div class="bg-white shadow-md rounded mt-0 px-8 pt-10 pb-8 mb-4 flex-no-wrap flex-col my-2">
                    <div class="-mx-3 md:flex mb-6">
                        {{-- DOCUEMNTO - CEDULA | PASAPORTE  --}}
                        <div class="relative flex w-full flex-wrap md:w-1/6 items-stretch mb-3 ">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-hashtag"></i>
                            </span>
                            <input type="text" placeholder="No. de Docuemnto" name="documento"
                                class="px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                            <p class="text-red text-xs italic">@error('documento') <span
                                    class="error">{{ $message }}</span>
                                @enderror</p>
                        </div>
                        {{-- TIPO DE DOCUMENTO --}}
                        <div class="relative flex w-full flex-wrap md:w-1/6 items-stretch mb-3 ml-8 ">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray- absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-fingerprint"></i>
                            </span>
                            <select name="tipoDocumento" wire:model="tipoDocumento"
                                class="block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                                id="grid-state">
                                <option>Cedula</option>
                                <option>Pasaporte</option>
                            </select>
                        </div>
                    </div>

                    {{-- --------------------------------------------------------------------------------------- --}}
                    <div class="-mx-3 md:flex mb-6">
                        {{-- PRIMER NOMBRE --}}
                        <div class="relative flex w-full flex-wrap md:w-full  items-stretch mb-3">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" placeholder="Primer Nombre" name="nombre"
                                class="px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                            <p class="text-red text-xs italic">@error('nombre') <span
                                    class="error">{{ $message }}</span>
                                @enderror</p>
                        </div>
                        {{-- SEGUNDO NOMBRE --}}
                        <div class="relative flex w-full flex-wrap md:w-1/6 items-stretch mb-3 ml-8">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray- absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" placeholder="S/N | Opcional" name="sn"
                                class="px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                        </div>
                    </div>

                    {{-- --------------------------------------------------------------------------------------- --}}
                    <div class="-mx-3 md:flex mb-6">
                        {{-- PRIMER APELLIDO --}}
                        <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3  ">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-user-tag"></i>
                            </span>
                            <input type="text" placeholder="Primer Apellido" name="primerApellido"
                                class="px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />

                            <div class="relative flex w-full flex-wrap pb-0 mb-0">
                                <p class=" text-red text-xs italic">@error('primerApellido') <span
                                        class="error">{{ $message }}</span>
                                    @enderror</p>
                            </div>
                        </div>
                        {{-- SEGUNDO APELLIDO --}}
                        <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3 ml-8 ">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-user-tag"></i>
                            </span>
                            <input type="text" placeholder="Segundo Apellido | Opcional" name="segundoApellido"
                                class="px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                        </div>
                    </div>

                    {{-- --------------------------------------------------------------------------------------- --}}
                </div>
                {{-- DATOS GENERALES --}}
                <div class="bg-white shadow-md rounded mt-0 px-8 pt-10 pb-8 mb-4 flex-no-wrap flex-col my-2">
                    {{-- --------------------------------------------------------------------------------------- --}}
                    <div class="-mx-3 md:flex mb-6">
                        {{-- DEPARTAMENTO--}}
                        <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3 ">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-800 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-sitemap"></i>
                            </span>
                            <select name="departamento" wire:model="departamento"
                                wire:keydown.enter="changeDepartamento" wire:keydown.page-down="changeDepartamento"
                                wire:change="changeDepartamento"
                                class="block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                                id="departamento">
                                <option value="" selected>Seleccione un Departamento</option>
                                @if(!empty($ListDepartamentos))
                                @foreach($ListDepartamentos as $dept)
                                <option value="{{ $dept->id }} selected">{{ $dept->nombre }}</option>
                                @endforeach
                                @else
                                <option value="">Seleccione un Departamento</option>
                                @endif
                            </select>
                            <p class="text-red text-xs italic">@error('departamento') <span
                                    class="error">{{ $message }}</span> @enderror
                            </p>
                        </div>
                        {{-- PUESTOS--}}
                        <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3 mx-8 ">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-800 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-user-tie"></i>
                            </span>
                            <select name="puesto"
                                class="block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                                id="departamento">
                                @if(!empty($ListPuestos))
                                @foreach ($ListPuestos as $itemP)
                                {{-- <option value="{{$itemP->id}}" selected>{{ $itemP->nombre }}</option> --}}
                                <option value="{{$itemP->id}} selected">{{ $itemP->nombre }}</option>
                                {{-- <option value={{ $itemP['id'] }} selected>{{ $itemP['nombre'] }}</option> --}}
                                @endforeach
                                @else
                                <option value="">Puesto</option>
                                @endif
                            </select>
                        </div>
                        {{-- LOCALIDADES --}}
                        <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3 ">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-800 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-street-view"></i>
                            </span>
                            <select name="puesto"
                                class="block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                                id="departamento">
                                @if(!empty($ListLocalidades))
                                @foreach ($ListLocalidades as $itemL)
                                {{-- <option value="{{$itemP->id}}" selected>{{ $itemP->nombre }}</option> --}}
                                <option value="{{$itemL->id}} selected">{{ $itemL->nombre }}</option>
                                {{-- <option value={{ $itemP['id'] }} selected>{{ $itemP['nombre'] }}</option> --}}
                                @endforeach
                                @else
                                <option value="">Localidad</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    {{-- --------------------------------------------------------------------------------------- --}}
                    <div class="-mx-3 md:flex mb-6">
                        {{-- SUPERVIDOR --}}
                        <div class="relative flex w-full flex-wrap md:w-full items-stretch mb-3">
                            <span
                                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                                <i class="fas fa-eye"></i>
                            </span>
                            <input type="text" placeholder="Correo Electronico del Supervsor" name="supervisor"
                                class="px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />

                            <div class="relative flex w-full flex-wrap pb-0 mb-0">
                                <p class=" text-red text-xs italic">@error('supervisor') <span
                                        class="error">{{ $message }}</span>
                                    @enderror</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        {{-- FIN DEL FORMULARIO --}}
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