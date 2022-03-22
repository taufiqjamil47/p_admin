<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        // $data['titlePage'] = 'Dashboard';
        // return view('templates/pages/dashboard', $data);
    }
    public function dashboard()
    {
        $data['titlePage'] = 'Dashboard';
        return view('templates/pages/dashboard', $data);
    }
    public function profile()
    {
        $data['titlePage'] = 'My Profile';
        return view('user/index', $data);
    }
    public function import_student()
    {
        $data['titlePage'] = 'Import Data Siswa';
        return view('import/data_import_student', $data);
    }
    public function import_teach()
    {
        $data['titlePage'] = 'Import Data Guru';
        return view('import/data_import_student', $data);
    }
    public function daftar_penilaian()
    {
        $data['titlePage'] = 'Daftar Penilaian Proses Belajar';
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_siswa');
        $builder->select('name, gender');
        $builder->orderBy('name', 'ASC');
        $query = $builder->get();

        // $data['tb_siswa'] = $query->getResult();
        $data['tb_siswa'] = $query->getResult();

        return view('administrasi/penilaian_belajar', $data);
    }
    public function daftar_kehadiran()
    {
        $data['titlePage'] = 'Daftar Kehadiran Siswa';
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_siswa');
        $builder->select('name, gender');
        $builder->orderBy('name', 'ASC');
        $query = $builder->get();

        // $data['tb_siswa'] = $query->getResult();
        $data['tb_siswa'] = $query->getResult();

        return view('administrasi/daftar_hadir', $data);
    }
    public function nilai_latihan_siswa()
    {
        $data['titlePage'] = 'Daftar Nilai Latihan Siswa';
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_siswa');
        $builder->select('name, gender');
        $builder->orderBy('name', 'ASC');
        $query = $builder->get();

        // $data['tb_siswa'] = $query->getResult();
        $data['tb_siswa'] = $query->getResult();

        return view('administrasi/nilai_latihan', $data);
    }
}
