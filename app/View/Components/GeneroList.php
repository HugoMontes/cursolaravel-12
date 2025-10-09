<?php

namespace App\View\Components;

use App\Models\Genero;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GeneroList extends Component {

    public $generos; // Listado de generos
    public $titulo; // Titulo del cuadro
    public $mostrarContador; // Indicar si queremos que se muestre el contador de peliculas
    public $limite; // Podemos indicar que se muestre 2 o 3 generos

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $titulo = 'Géneros',
        bool $mostrarContador = false,
        ?int $limite = null
    ) {
        $this->titulo = $titulo;
        $this->mostrarContador = $mostrarContador;
        $this->limite = $limite;

        $this->generos = Genero::orderBy('genero');

        if ($this->limite) {
            $this->generos->limit($this->limite);
        }

        $this->generos = $this->generos->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.genero-list');
    }
}
