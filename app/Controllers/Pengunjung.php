<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pengunjung_model;

class Pengunjung extends Controller
{
    public function index()
    {
        $model = new Pengunjung_model();
        $data['pengunjung'] = $model->getPengunjung();
        echo view('pengunjung', $data);
    }

    public function add_new()
    {
        echo view('add_pengunjung');
    }

    public function save()
    {
        $model = new Pengunjung_model();
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'instansi'  => $this->request->getPost('instansi'),
            'alasan'  => $this->request->getPost('alasan'),
            'tanggal'  => $this->request->getPost('tanggal'),
        );
        $model->savePengunjung($data);
        return redirect()->to(base_url("pengunjung"));
    }

    public function edit($id)
    {
        $model = new Pengunjung_model();
        $data['pengunjung'] = $model->getPengunjung($id)->getRow();
        echo view('edit_pengunjung', $data);
    }

    public function update()
    {
        $model = new Pengunjung_model();
        $id = $this->request->getPost('id');
        $data = array(
            'nama'  => $this->request->getPost('nama'),
            'instansi'  => $this->request->getPost('instansi'),
            'alasan'  => $this->request->getPost('alasan'),
            'tanggal'  => $this->request->getPost('tanggal'),
        );
        $model->updatePengunjung($data, $id);
        return redirect()->to(base_url("pengunjung"));
    }

    public function delete($id)
    {
        $model = new Pengunjung_model();
        $model->deletePengunjung($id);
        return redirect()->to(base_url("pengunjung"));
    }
}
