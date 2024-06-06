<?php

namespace App\Controllers;

use App\Models\ResepModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Resep extends ResourceController
{
    private $resepModel;

    public function __construct()
    {
        $this->resepModel = new ResepModel();
        $this->session = \Config\Services::session();

    }


    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $menu = $this->resepModel->findAll();

        $payload = [
            "menu" => $menu
        ];

        echo view('resep/resep', $payload);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $menu = $this->resepModel->find($id);

        // Periksa apakah produk ditemukan
        if (!$menu) {
            // Jika tidak ditemukan, lempar exception atau arahkan ke halaman 404
            throw new \Exception("Data not found!");
        }

        // Tampilkan halaman detail produk dengan menggunakan view
        echo view('resep/viewresep', ['data' => $menu]);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        echo view('resep/new');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {

        $fileName = "";
        $foto = $this->request->getFile('foto');

        if ($foto->getSizeByUnit() > 0) {
            $fileName = $foto->getRandomName(); // Mendapatkan nama file baru secara acak 

            $foto->move('images', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        // Mengambil ID pengguna dari sesi
        $userId = $this->session->get('id');
        
        // Memastikan pengguna sudah login
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu');
        }

        $payload = [
            "namamenu" => $this->request->getPost('namamenu'),
            "caption" => $this->request->getPost('caption'),
            "bahan" => $this->request->getPost('bahan'),
            "cara" => $this->request->getPost('cara'),
            "foto" => $fileName,
            "user_id" => $userId // Simpan ID pengguna yang membuat resep
        ];


        $this->resepModel->insert($payload);
        return redirect()->to('/resep');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $menu = $this->resepModel->find($id);

        if (!$menu) {
            throw new \Exception("Data not found!");
        }

        if ($menu['user_id'] !== $this->session->get('id')) {
            return redirect()->to('/resep')->with('error', 'Anda tidak memiliki izin untuk mengedit resep ini');
        }

        echo view('resep/edit', ["data" => $menu]);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $menu = $this->resepModel->find($id);

        $fileName = $menu['foto'];
        $foto = $this->request->getFile('foto');

        if ($foto->getSizeByUnit() > 0) {
            $fileName = $foto->getRandomName(); // Mendapatkan nama file baru secara acak
            $foto->move('images', $fileName); // Memindahkan file ke public/photos dengan nama acak
        }

        $payload = [
            "namamenu" => $this->request->getPost('namamenu'),
            "caption" => $this->request->getPost('caption'),
            "bahan" => $this->request->getPost('bahan'),
            "cara" => $this->request->getPost('cara'),
            "foto" => $fileName,
        ];

        $this->resepModel->update($id, $payload);
        return redirect()->to('/resep');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $menu = $this->resepModel->find($id);

        if ($menu['user_id'] !== $this->session->get('id')) {
            return redirect()->to('/resep')->with('error', 'Anda tidak memiliki izin untuk menghapus resep ini');
        }

        $this->resepModel->delete($id);
        return redirect()->to('/resep');
    }
}
