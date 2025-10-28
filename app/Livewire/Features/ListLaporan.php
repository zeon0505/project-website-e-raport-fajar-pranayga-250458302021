<?php

namespace App\Livewire\Features;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Laporan;

class ListLaporan extends Component
{
    #[Layout('layouts.app')]

    public $title = 'List Laporan';
    public $listLaporan;

    public function mount()
    {
        $this->listLaporan = Laporan::all();
    }

    public function render()
    {
        return view('livewire.features.list-laporan');
    }
}
