<div style="border-top: 5px solid #000; padding: 1em 0;">
    @if ($titulo)
        <h3 style="color: #000; font-size: 1.9em; font-weight: 600; margin-bottom: 0.8em;">
            {{ $titulo }}
        </h3>
    @endif

    <div class="card-body p-0">
        <ul class="list-group list-group-flush">
            @forelse($generos as $genero)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" class="text-decoration-none text-dark flex-grow-1 me-3">
                        <span class="genero-name">{{ $genero->genero }}</span>
                    </a>

                    @if ($mostrarContador)
                        <span class="badge bg-primary rounded-pill">
                            {{ $genero->peliculas_count ?? $genero->peliculas()->count() }}
                        </span>
                    @endif
                </li>
            @empty
                <li class="list-group-item text-muted text-center py-3">
                    <i class="bi bi-inbox me-2"></i>
                    No hay géneros disponibles
                </li>
            @endforelse
        </ul>
    </div>
</div>
