<div>
    <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
            <h3 class="text-3xl uppercase font-semibold">
                SOLICITUD - NUEVO INGRESO
            </h3>
        </div>
        <!--body-->

        <div class="relative p-6 flex-auto">
            @include('livewire.form.nuevo-ingreso')
            {{-- @include('livewire.modal.m_serviceskit') --}}
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
            <button
                class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
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