<div>
    {{-- The whole world belongs to you --}}
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative w-auto my-6 mx-auto max-w-6xl">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-gray-300 rounded-t">
                    <h3 class="text-3xl uppercase font-semibold">
                        Nueva Solicitud
                    </h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal('modal-id')">
                        <span
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            ×
                        </span>
                    </button>
                </div>
                <!--body-->

                <div class="relative p-6 flex-auto">
                    @include('livewire.modal_form.body_modal_serviceskit')
                    {{-- @include('livewire.modal.m_serviceskit') --}}
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-300 rounded-b">
                    <button
                        class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                        <span class="mx-auto"><i class="fas fa-times"></i><br> Cerrar</span>
                    </button>
                    <button type="submit"
                        class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded mx-5 border-b-2 border-purple-500 hover:border-purple-600 hover:bg-purple-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"
                        onclick="toggleModal('modal-id')">
                        <span class="mx-auto"><i class="fas fa-paper-plane"></i><br> Enviar<br></span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div> --}}
    <script type="text/javascript">
        function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
    </script>
</div>