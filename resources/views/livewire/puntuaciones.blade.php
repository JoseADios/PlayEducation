
<div>
    <div class="mx-3">
        <div class="card-body p-1">
            <div class="timeline timeline-one-side">
                @foreach ($puntuaciones as $puntuacion)
                    <div class="timeline-block mb-2">
                        <span class="timeline-step">
                            <i class="ni ni-controller text-success text-gradient"></i>
                        </span>
                        <div class="timeline-content">
                            <h6 class="text-dark text-sm font-weight-bold mb-0">{{ $puntuacion->puntos }},
                                {{ $puntuacion->juego->nombre }}</h6>
                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                {{ $puntuacion->created_at ? $puntuacion->created_at->format('j M Y, g:i a') : 'N/A' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

