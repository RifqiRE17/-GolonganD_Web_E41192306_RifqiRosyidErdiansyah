<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pengalamankerja;

class Pengalamankerjas extends Component
{
    public $pengalamankerjas, $nama, $jabatan, $tahun_masuk, $tahun_keluar, $pekerja_id;
    public $isModal;

    public function render()
    {
        $this->pengalamankerjas = Pengalamankerja::orderBy('created_at', 'DESC')->get();
        return view('livewire.pengalamankerjas');
    }
    
    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->nama = '';
        $this->jabatan = '';
        $this->tahun_masuk = '';
        $this->tahun_keluar = '';
        $this->pekerja_id = '';
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'tahun_masuk' => 'required|numeric',
            'tahun_keluar' => 'required|numeric',
        ]);

        Pengalamankerja::updateOrCreate(
            ['id' => $this->pekerja_id],
            [ 
                'nama' => $this->nama,
                'jabatan' => $this->jabatan,
                'tahun_masuk' => $this->tahun_masuk,
                'tahun_keluar' => $this->tahun_keluar,
            ]    
            );

            session()->flash('message', $this->pekerja_id ? $this->nama . ' Diperbaharui':$this->nama . 'Ditambahkan');
            $this->closeModal();
            $this->resetFields();
    }

    public function edit($id)
    {
        $pengalamankerja = Pengalamankerja::find($id);
        $this->pekerja_id = $id;
        $this->nama = $pengalamankerja->nama;
        $this->jabatan = $pengalamankerja->jabatan;
        $this->tahun_masuk = $pengalamankerja->tahun_masuk;
        $this->tahun_keluar = $pengalamankerja->tahun_keluar;
        

        $this->openModal();
    }

    public function delete($id)
    {
        $pengalamankerja = Pengalamankerja::find($id);
        $pengalamankerja->delete();
        session()->flash('message', $pengalamankerja->nama . ' Dihapus' );
    }
}