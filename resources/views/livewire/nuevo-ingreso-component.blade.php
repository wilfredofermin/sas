<div>
    @if (!empty($errors->all()))

    <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex ">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    {{-- <path
                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg> --}}
                    <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div>
                <strong class="text-sm">
                    <p class="font-bold">CAMPO(S) OBLIGATORIO(S)</p>
                    @foreach ($errors->all() as $message)
                    {{$message}}
                    @endforeach
                </strong>
            </div>
        </div>
    </div>

    @endif
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
            {{-- --------------------------------------------------------------------------------------- --}}
            <div class="bg-white shadow-md rounded mt-0 px-8 pt-10 pb-8 mb-4 flex-no-wrap flex-col my-2">
                <div class="-mx-3 md:flex mb-6">
                    {{-- DOCUEMNTO - CEDULA | PASAPORTE  --}}
                    <div class="relative flex w-full flex-wrap md:w-1/6 items-stretch mb-3 ">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-hashtag"></i>
                        </span>
                        <input type="text" placeholder="No. Documento " name="documento" wire:model="documento"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57' pattern="\d*"
                            maxlength="11" id="documento" autofocus
                            class="px-3 py-3 appearance-none @error('documento') {{'border border-red-500'}} @enderror  placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow   outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                    </div>
                    {{-- TIPO DE DOCUMENTO --}}
                    <div class="relative flex w-full flex-wrap md:w-1/6 items-stretch mb-3 ml-8 ">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-gray- absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-fingerprint"></i>
                        </span>
                        <select name="tipoDocumento" wire:model="tipoDocumento"
                            class="@error('tipoDocumento') {{'border border-red-500'}} @enderror block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                            id="grid-state">
                            <option selected>Tipo </option>
                            <option>Cedula</option>
                            <option>Pasaporte</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
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
                        <input type="text" placeholder="Primer Nombre" name="nombre" wire:model="nombre" data-min_max
                            data-min="0" data-max="11"
                            class="px-3 py-3 placeholder-gray-700 text-gray-700 @error('nombre') {{'border border-red-500'}} @enderror  relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                    </div>
                    {{-- SEGUNDO NOMBRE --}}
                    <div class="relative flex w-full flex-wrap md:w-1/6 items-stretch mb-3 ml-8">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-gray- absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" placeholder="S/N | Opcional" name="sn" wire:model="sn"
                            class="px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />
                    </div>
                </div>

                {{-- --------------------------------------------------------------------------------------- --}}
                <div class="-mx-3 md:flex mb-6">
                    {{-- PRIMER APELLIDO --}}
                    <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3  ">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700  absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-user-tag"></i>
                        </span>
                        <input type="text" placeholder="Primer Apellido" name="primerApellido"
                            wire:model="primerApellido"
                            class="@error('primerApellido') {{'border border-red-500'}} @enderror px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />

                        <div class="relative flex w-full flex-wrap pb-0 mb-0">
                        </div>
                    </div>
                    {{-- SEGUNDO APELLIDO --}}
                    <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3 ml-8 ">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-gray-700 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-user-tag"></i>
                        </span>
                        <input type="text" placeholder="Segundo Apellido | Opcional" name="segundoApellido"
                            wire:model="segundoApellido"
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
                        <select name="departamento" wire:model="departamento" wire:keydown.enter="mount "
                            wire:keydown.page-down="mount" wire:change="mount"
                            class="@error('departamento') {{'border border-red-500'}} @enderror block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                            id="departamento">
                            <option value="" selected>Seleccione un Departamento</option>
                            @if(!empty($ListDepartamentos))
                            @foreach($ListDepartamentos as $dept)
                            <option value="{{ $dept->id }}">{{ $dept->nombre }}</option>
                            @endforeach
                            @else
                            <option value="">Seleccione un Departamento</option>
                            @endif
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                    {{-- PUESTOS--}}
                    <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3 mx-8 ">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-gray-800 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-user-tie"></i>
                        </span>
                        <select name="puesto" wire:model="puesto" wire:change="mount"
                            class="@error('puesto') {{'border border-red-500'}} @enderror  block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                            id="puesto">

                            <option selected>Puesto</option>
                            @if(!empty($ListPuestos))
                            @foreach ($ListPuestos as $itemP)
                            {{-- <option value="{{$itemP->id}}" selected>{{ $itemP->nombre }}</option> --}}
                            <option value="{{$itemP->nombre}}">{{ $itemP->nombre }}</option>
                            {{-- <option value={{ $itemP['id'] }} selected>{{ $itemP['nombre'] }}</option> --}}
                            @endforeach
                            @else
                            <option selected>Puesto</option>
                            @endif
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                    {{-- LOCALIDADES --}}
                    <div class="relative flex w-full flex-wrap md:w-1/2 items-stretch mb-3 ">
                        <span
                            class="z-10 h-full leading-snug font-normal absolute text-center text-gray-800 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                            <i class="fas fa-street-view"></i>
                        </span>
                        <select name="localidad" wire:model="localidad" wire:change="mount"
                            class=" block  appearance-none w-full text-gray-700 relative text-sm py-3 px-4 pr-8 bg-white rounded  shadow focus:outline-none focus:bg-white focus:shadow-outline w-full pl-10 "
                            id="localidad">
                            @if(!empty($ListLocalidades))
                            @foreach ($ListLocalidades as $itemL)
                            {{-- <option value="{{$itemP->id}}" selected>{{ $itemP->nombre }}</option> --}}
                            <option value="{{$itemL->nombre}}">{{ $itemL->nombre }}</option>
                            {{-- <option value={{ $itemP['id'] }} selected>{{ $itemP['nombre'] }}</option> --}}
                            @endforeach
                            @else
                            <option value="">Localidad</option>
                            @endif
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
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
                        <input type="text" placeholder="Correo Electronico del Supervsor" name="supervisor "
                            wire:model="supervisor" wire:change="mount"
                            class="@error('supervisor') {{'border border-red-500'}} @enderror px-3 py-3 placeholder-gray-700 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10" />

                        <div class="relative flex w-full flex-wrap pb-0 mb-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- FIN DEL FORMULARIO --}}
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
            <button wire:click="volver"
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                <span class="mx-auto"><i class="fas fa-arrow-left"></i>Vover</span>
            </button>
            <button wire:click="submit"
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded mx-5 border-b-2 border-purple-500 hover:border-purple-600 hover:bg-purple-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
                <span class="mx-auto"><i class="fas fa-paper-plane"></i>Enviar</span>
            </button>
        </div>

    </div>

</div>