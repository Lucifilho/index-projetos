<?php

namespace App\Livewire;

use App\Models\Projeto;
use Livewire\Component;

class ListaProjetos extends Component
{
    public $search ;

    public function render()
    {

        $search = $this->search;

        if ($search) {

            $projetos = Projeto::where('nome', 'like', '%'.$search.'%')->pagina(9);

        }else {

            $projetos = Projeto::paginate(9);

        }

        return view('livewire.lista-projetos', compact('projetos', 'search'));
    }
}
