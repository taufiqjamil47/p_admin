<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        // $data['titlePage'] = 'Dashboard';
        // return view('templates/pages/dashboard', $data);
    }
    public function management()
    {
        $data['titlePage'] = 'User Management';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();


        return view('admin/user_list', $data);
    }
    public function detail($id = 0)
    {
        $data['titlePage'] = 'User Detail';

        $this->builder->select('users.id as userid, username, email, name, fullname, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }


        return view('admin/detail', $data); 
    }
}
