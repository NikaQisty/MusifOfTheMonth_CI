<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MusicModel;

class Music extends BaseController
{
    public function music()
    {
        $musicModel = new musicModel();
        $music = $musicModel->findAll();
        $data = [
            'music' => $music,
        ];
        return view('music', $data);
    }

    public function add()
    {
        return view('add-music');
    }
    public function create()
    {
        $musicModel = new musicModel();
        $musicModel->insert([
            'title' => $this->request->getVar('title'),
            'singer' => $this->request->getVar('singer'),
            'genre' => $this->request->getVar('genre'),
            'date_added' => $this->request->getVar('date_added'),
        ]);

        return redirect()->to('/music');
    }

    public function delete ($id)
    {
        $musicModel = new musicModel();
        $musicModel->delete($id);
        return redirect()->to('/music');
    }

    
    public function edit ($id)
    {
        $musicModel = new musicModel();
        $music = $musicModel->find($id);
        $data = [
            'music' => $music,
        ];
        return view('edit-music', $data);
    }

    public function update ($id)
    {
        $musicModel = new musicModel();
        $newData = [
            'title' => $this->request->getPost('title'),
            'singer' => $this->request->getPost('singer'),
            'genre' => $this->request->getPost('genre'),
            'date_added' => $this->request->getPost('date_added'),
        ];
        $musicModel->update($id, $newData);

        return redirect()->to('/music');
    }
}
