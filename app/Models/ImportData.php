<?php

namespace App\Models;

use CodeIgniter\Model;
use \Codeigniter\Controller;

class ImportData extends Model
{
    public function dataSiswa() {
        $db = \Config\Database::connect();
        $query = $db->$query('select * from tb_siswa');
        $result = $query->getResult();

        if (count($result)>0) {
            return $result;
        } else {
            return false;
        }
    }

    public function printData() {
        return $this->db->table('tb_siswa')->orderBy('name', 'ASC')->get()->getResultArray();
        //return $this->db->table('tb_siswa')->get()->getResultArray();
    }

    
}