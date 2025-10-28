<?php

namespace App\Livewire\Features;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    #[Layout('layouts.app')]

    public $title = 'Dashboard';

    // Summary counts
    public $laporanPendingCount;
    public $laporanProsesCount;
    public $laporanSelesaiCount;
    public $laporanTotalCount;

    // Chart data per bulan
    public $laporanProses = [];
    public $laporanPending = [];
    public $laporanSelesai = [];

    public function mount()
    {
        // Summary angka
        $this->laporanPendingCount = Laporan::where('status', 'pending')->count();
        $this->laporanProsesCount  = Laporan::where('status', 'proses')->count();
        $this->laporanSelesaiCount = Laporan::where('status', 'selesai')->count();
        $this->laporanTotalCount   = Laporan::count();

        // Ambil data laporan per bulan & status
        $laporan = Laporan::select(
            DB::raw('MONTH(created_at) as bulan'),
            'status',
            DB::raw('COUNT(*) as total')
        )
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan', 'status')
            ->get();

        // Siapkan array kosong 12 bulan
        $proses  = array_fill(1, 12, 0);
        $pending = array_fill(1, 12, 0);
        $selesai = array_fill(1, 12, 0);

        foreach ($laporan as $row) {
            if ($row->status === 'proses') {
                $proses[$row->bulan] = $row->total;
            }
            if ($row->status === 'pending') {
                $pending[$row->bulan] = $row->total;
            }
            if ($row->status === 'selesai') {
                $selesai[$row->bulan] = $row->total;
            }
        }

        // Re-index biar mulai dari 0 (untuk chart JS)
        $this->laporanProses  = array_values($proses);
        $this->laporanPending = array_values($pending);
        $this->laporanSelesai = array_values($selesai);
    }

    public function render()
    {
        return view('livewire.features.dashboard');
    }
}
