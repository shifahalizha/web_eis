<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Login extends ResourceController
{
    protected $session;
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        echo view('user/login');
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
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        try {
            $validate = $this->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if(!$validate) {
                session()->setFlashData("errors", $this->validator->listErrors());
                return redirect()->to(previous_url())->withInput();
            }
    
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
    
            $user = $this->userModel
                    ->where('email', $email)
                    ->first();
    
            if(!$user) {
                session()->setFlashData("errors", "Email or password is invalid");
                return redirect()->to(previous_url())->withInput();
            }
    
            if(md5($password) != $user['password']) {
                session()->setFlashData("errors", "Email or password is invalid");
                return redirect()->to(previous_url())->withInput();
            }
    
            $this->session->set('id', $user['id']);
            $this->session->set('username', $user['username']);
            $this->session->set('loggedIn', true);
    
            return redirect()->to('/resep');
        } catch(\Exception $e) {
            return redirect()->to(previous_url());
        }
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
        //
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
        //
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
        //
    }
}