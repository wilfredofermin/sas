<div>
    {{-- INICIO      --}}

    @if($modoHome)
    {{-- @include('livewire.tabla-solicitudes-componente') --}}
    @include('livewire.tb-solicitudes-component')
    @else
    @include('livewire.nuevo-ingreso-component')
    @endif

    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>