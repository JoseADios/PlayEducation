<style>
    .cont-main {
        overflow: auto;
        max-height: 22rem;
    }

</style>
<div>
    <div class="card mb-4 mx-3 cont-main">
        <div class="card-header pb-0">
            <h6>{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2 h-100">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                #</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Juego</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Puntos</th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($puntuaciones as $puntuacion)
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                            <i class="ni ni-chart-bar-32 text-success me-2 "></i>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{ $puntuacion->juego->nombre }}</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{ $puntuacion->puntos }}</span>
                                </td>
                                <td class="text-center">
                                    <span
                                        class="text-xs font-weight-bold">{{ $puntuacion->created_at ? $puntuacion->created_at->format('j M Y, g:i a') : 'N/A' }}</span>
                                </td>
                            </tr>
                        @endforeach

                        @if (count($puntuaciones) == 0)
                            <tr>
                                <td colspan="4" class="text-center">
                                    <span class="text-xs font-weight-bold">No hay puntuaciones</span>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
