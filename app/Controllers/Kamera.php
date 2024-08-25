<?php

namespace App\Controllers;

use App\Models\JenisModel;
use App\Models\KameraModel;

class Kamera extends BaseController
{
    public function index()
    {
        return view('kamera');
    }

    public function add_data_kamera()
    {
        return view('add_data_kamera');
    }

    public function proses_add_kamera()
    {
        $kamera_model = new KameraModel();
        $kamera_model->insert($this->request->getPost());
        return redirect()->to(base_url('data'));
    }

    public function data()
    {
        $kamera_model = new KameraModel();
        $all_data_kamera = $kamera_model->findAll();
        // dd($all_data_kamera);
        return view('data', ['all_data_kamera' => $all_data_kamera]);
    }

    public function detail()
    {
        $kamera_model = new KameraModel();
        $all_data_kamera = $kamera_model->findAll();
        return view('detail', ['all_data_kamera' => $all_data_kamera]);
    }

    public function edit_data_kamera($id = false)
    {
        $kamera_model = new KameraModel();
        $data_kamera = $kamera_model->find($id);
        return view('edit_data_kamera', ['data_kamera' => $data_kamera]);
    }

    public function proses_edit_kamera()
    {
        $kamera_model = new KameraModel();
        $kamera_model->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('detail'));
    }

    public function delete_data_kamera($id = false)
    {
        $kamera_model = new KameraModel();
        $kamera_model->delete($id);
        return redirect()->to(base_url('detail'));
    }
}
