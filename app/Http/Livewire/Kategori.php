<?php

namespace App\Http\Livewire;


use App\Models\Kategori as ModelsKategori;
use Livewire\Component;
use Livewire\WithPagination;

class Kategori extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $create;

    public function create()
    {
        $this->create = true;
        //dd($this->create);
    }

    public function render()
    {
        // dd($this->create);
        return view('livewire.kategori', [
            'kategori' => ModelsKategori::latest()->paginate(3)
        ]);
    }
}
