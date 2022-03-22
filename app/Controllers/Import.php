<?php

namespace App\Controllers;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Import extends BaseController
{
    public function index() {
        $validation = \Config\Services::validation();
        $valid = $this->validate(
            [
                'fileimport' => [
                    'label' => 'File harus',
                    'rules' => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
                    'errors' => [
                        'uploaded' => '{field} Wajib di isi',
                        'ext_in' => '{field} memiliki type xls atau xlsx',
                    ]
                ]
            ]
        );

        if(!$valid) {
            $this->session->setFlashdata('pesan', $validation->getError('fileimport'));

            return redirect()->to('user/import_student');
        } else {
            $file_excel = $this->request->getFile('fileimport');

            $ext = $file_excel->getClientExtension();

            if($ext == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadseheet = $reader->load($file_excel);
            $data = $spreadseheet->getActiveSheet()->toArray();
            $pesan_error = [];
            $jumlah_error = 0;
            $jumlah_sukses = 0;
            foreach($data as $x => $row){
                if($x == 0) {
                    continue;
                }

                $noid = $row[0];
                $name = $row[1];
                $gender = $row[2];
                $clases = $row[3];

                $db = \Config\Database::connect();

                $ceknoid = $db->table('tb_siswa')->getWhere(['user_id' => $noid])->getResult();

                if (count($ceknoid) > 0) {
                    $jumlah_error++;
                } else {
                    $simpandata = [
                        'user_id' => $noid,
                        'name' => $name, 
                        'gender' => $gender, 
                        'clasess' => $clases
                    ];
    
                    $db->table('tb_siswa')->insert($simpandata);
                    $jumlah_sukses++;
                } 
            }

            $this->session->setFlashdata('sukses', "$jumlah_error Data tidak bisa disimpan <br> $jumlah_sukses Data berhasil disimpan");

            return redirect()->to('user/import_student');
        }
    }

    public function guru() {
        $validation = \Config\Services::validation();
        $valid = $this->validate(
            [
                'fileimport' => [
                    'label' => 'File harus',
                    'rules' => 'uploaded[fileimport]|ext_in[fileimport,xls,xlsx]',
                    'errors' => [
                        'uploaded' => '{field} Wajib di isi',
                        'ext_in' => '{field} memiliki type xls atau xlsx',
                    ]
                ]
            ]
        );

        if(!$valid) {
            $this->session->setFlashdata('pesan', $validation->getError('fileimport'));

            return redirect()->to('admin/import_guru');
        } else {
            $file_excel = $this->request->getFile('fileimport');

            $ext = $file_excel->getClientExtension();

            if($ext == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadseheet = $reader->load($file_excel);
            $data = $spreadseheet->getActiveSheet()->toArray();
            $pesan_error = [];
            $jumlah_error = 0;
            $jumlah_sukses = 0;
            foreach($data as $x => $row){
                if($x == 0) {
                    continue;
                }

                $noid = $row[0];
                $name = $row[1];
                $teach = $row[2];
                $title = $row[3];

                $db = \Config\Database::connect();

                $ceknoid = $db->table('tb_guru')->getWhere(['id' => $noid])->getResult();

                if (count($ceknoid) > 0) {
                    $jumlah_error++;
                } else {
                    $simpandata = [
                        'id' => $noid,
                        'name' => $name, 
                        'teach' => $teach, 
                        'title' => $title
                    ];
    
                    $db->table('tb_guru')->insert($simpandata);
                    $jumlah_sukses++;
                } 
            }

            $this->session->setFlashdata('sukses', "$jumlah_error Data tidak bisa disimpan <br> $jumlah_sukses Data berhasil disimpan");

            return redirect()->to('admin/import_guru');
        }
    }
}
