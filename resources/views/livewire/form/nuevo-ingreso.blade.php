<form>
  <div class="bg-white shadow-md rounded mt-0 px-8 pt-10 pb-8 mb-4 flex-no-wrap flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/3 px-3 mb-6">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Documento
        </label>
        <input
          class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
          id="cedula" name='cedula' wire:model="cedula" type="number" placeholder="xxx-xxxxxx-x">

        <p class="text-red text-xs italic">@error('cedula') <span class="error">{{ $message }}</span> @enderror</p>
      </div>
      <div class="md:w-1/3 px-3 mb-6">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Tipo Documento
        </label>
        <select name="tipoDocumento" wire:model="tipoDocumento"
          class="block  appearance-none w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="grid-state">
          <option>Cedula</option>
          <option>Pasaporte</option>
        </select>
        <p class="text-red text-xs italic">@error('cedula') <span class="error">{{ $message }}</span> @enderror</p>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Nombre
        </label>
        <input
          class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
          id="nombres" name='nombre' wire:model="nombre" type="text" placeholder="Jane">
        <p class="text-red text-xs italic">@error('nombres') <span class="error">{{ $message }}</span> @enderror</p>
      </div>
      <div class="md:w-1/6 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
          S/N *
        </label>
        <input
          class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
          id="sn" name='sn' wire:model="sn" type="text" placeholder="J">
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
          Primer Apellido
        </label>
        <input
          class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
          id="primerApellido" name='primerApellido' wire:model="primerApellido" type="text" placeholder="Doe">
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>
      <div class="md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
          Segundo Apellido *
        </label>
        <input
          class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
          id="grid-last-name" type="text" wire:model="segundoApellido" placeholder="Jackson">
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <span class="mr-0 mt-3">
        <i class="fas fa-building"></i>
      </span>
      <div class="w-full px-3">
        <select name="departamento" wire:model="departamento" wire:keydown.enter="changeDepartamento"
          wire:keydown.page-down="changeDepartamento" {{-- wire:change="setSomeProperty($event.target.value) --}}
          wire:change="changeDepartamento" {{-- wire:click="cargarDepartamento" --}}
          class="block  appearance-none w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="grid-state">
          @if(!empty($ListDepartamentos))
          @foreach($ListDepartamentos as $dept)
          <option value="{{ $dept->id }}">{{ $dept->nombre }}</option>
          @endforeach
          @else
          <option value="">SELECCIONE UN DEPARTAMENTO</option>
          @endif
        </select>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <span class="mr-0 mt-3">
        <i class="fas fa-building"></i>
      </span>
      <div class="w-full px-3">
        <select name="puesto" {{-- wire:keydown.enter="changePuesto"
          wire:keydown.page-down="changePuesto" {{-- wire:change="setSomeProperty($event.target.value) --}}
          class="block  appearance-none w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
          id="grid-state">
          @if(!empty($ListPuestos))
          @foreach ($ListPuestos as $puesto)
          <option value="{{$puesto->id}}">{{ $puesto->nombre }}</option>
          {{-- <option value={{ $resultpuestos['nombre'] }}</option> --}}
          @endforeach
          @else
          <option value="">SELECCIONE UN DEPARTAMENTO</option>
          @endif

        </select>
      </div>
    </div>
    <div class="-mx-3 md:flex mb-6">
      <span class="mr-0 mt-3">
        <i class="fas fa-address-card"></i>
      </span>
      <div class="w-full px-3">
        <input
          class=" appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
          id="grid-first-name" name="supervisor" wire:model="supervisor" type="text" placeholder="Supervisor" disabled>
        <p class="text-red text-xs italic">Please fill out this field.</p>
      </div>
    </div>
    {{-- <div class="-mx-3 md:flex mb-6">
    <span class="mr-0 mt-3">
      <i class="fas fa-diagnoses"></i>
    </span>
    <div class="w-full px-3">
      <select
        class="block appearance-none w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="grid-state">
        <option>Pedro Maldonado</option>
        <option>Richard Bennal</option>
      </select>
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <span class="mr-0 mt-3">
      <i class="fas fa-street-view"></i>
    </span>
    <div class="w-full px-3">
      <select
        class="block appearance-none w-full bg-gray-200 border uppercase border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        id="grid-state">
        <option>Julo Verne</option>
        <option>San Martin</option>
        <option>Pasteur</option>
      </select>
    </div>
  </div> --}}

  </div>