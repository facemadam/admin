<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->admin = $AdminModel = new AdminModel();
    }

    public function index()
    {
        $breadcrumb = [
            'title' => '운영자 관리',
            'item' => [
                '/dashboard' => '대시보드',
            ],
        ];
        $data = [
            'list' => $this->admin->findAll(),
        ];
        $footer = [
            // 'script' => ['/assets/js/admin/register.js'],
        ];
        echo view('templates/header');
        echo view('templates/breadcrumb', $breadcrumb);
        echo view('pages/admin/index', $data);
        echo view('templates/footer', $footer);
    }

    public function register()
    {
        $breadcrumb = [
            'title' => '운영자 등록',
            'item' => [
                '/dashboard' => '대시보드',
                '/admin' => '운영자 관리',
            ],
        ];
        $footer = [
            'script' => ['/assets/js/admin/register.js'],
        ];
        echo view('templates/header');
        echo view('templates/breadcrumb', $breadcrumb);
        echo view('pages/admin/register');
        echo view('templates/footer', $footer);
    }

    public function create()
    {
        $result = $this->admin->insert($this->request->getPost());
        return $this->response->setJSON([
            'id' => $result ? $this->admin->insertID() : $result,
            'message' => $result ? [] : $this->admin->errors(),
        ]);
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}