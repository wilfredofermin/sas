<div>
    <!-- Card stats -->
    <div class="flex flex-wrap">
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4 mx-auto ">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                Solicitudes
                            </h5>
                            <span class="font-semibold text-xl text-gray-800">
                                {{$MisSolicitudes}}
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-500 mt-4">
                        <span class="text-red-500 mr-2">
                            <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                        <span class="whitespace-no-wrap">
                            Since last week
                        </span>
                    </p> --}}
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                Pendientes
                            </h5>
                            <span class="font-semibold text-xl text-gray-800">
                                {{$MisSolicitudesOpen}}
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-purple-500">
                                <i class="fas fa-hourglass-half"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">
                                Cerradas
                            </h5>
                            <span class="font-semibold text-xl text-gray-800">
                                {{$MisSolicitudesCerradas}}
                            </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>