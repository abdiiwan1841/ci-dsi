<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User_model;

class Auth extends BaseController
{
    public function index()
    {
        helper(['form']);

        $data = [
            'title' => 'Login - SIMPER DSI',
            'action' => base_url('proses_masuk')
        ];
        
        echo view('auth/login', $data);
    }

    public function register()
    {
        helper(['form']);

        $data = [
            'title' => 'Daftar - SIMPER DSI',
            'action' => base_url('proses_regis')
        ];

        echo view('auth/register', $data);
    }

    public function process_regist()
    {   
        if (!$this->validate([
            'USERNAME' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[pengguna.USERNAME]',
                'errors' => [
                    'required' => 'Username Harus Diisi',
                    'min_length' => 'Username Minimal Harus Berjumlah 4 Karakter',
                    'max_length' => 'Username Maksimal Berjumlah 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'JABATAN' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jobdesk Harus Dipilih',
                ]
            ],
            'PASSWORD' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => 'Password Harus Diisi',
                    'min_length' => 'Password Minimal Harus Bejumlah 4 Karakter',
                    'max_length' => 'Password Maksimal Harus Berjumlah 50 Karakter',
                ]
            ],
            'PASSWORD_CONF' => [
                'rules' => 'matches[PASSWORD]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $pengguna = new User_model();
        $pengguna->insert([
            'USERNAME'  => $this->request->getVar('USERNAME'),
            'JABATAN'   => $this->request->getVar('JABATAN'),
            'PASSWORD'  => password_hash($this->request->getVar('PASSWORD'), PASSWORD_BCRYPT),
        ]);

        session()->setFlashdata('Msg', 'Akun anda berhasil mendaftar!');
        return redirect()->to('/masuk');
    }

    public function process_login()
    {   
        $session    = session();
        $pengguna   = new User_model();
        $username   = $this->request->getVar('USERNAME');
        $password   = $this->request->getVar('PASSWORD');
        $data       = $pengguna->where('USERNAME', $username)->first();

        if ($data) {
            $pass = $data['PASSWORD'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $sessAktif = [
                    'ID_USER'		=> $data['ID_USER'],
                    'USERNAME'		=> $data['USERNAME'],
                    'JABATAN'		=> $data['JABATAN'],
                    'PASSWORD'		=> $data['PASSWORD'],
                    'logged_in'     => TRUE
                ];

                $session->set($sessAktif);

                if ($data['JABATAN'] == 0) {
                    return redirect()->to('/beranda_spv');
                } elseif ($data['JABATAN'] == 1) {
                    return redirect()->to('/beranda_op');
                } else {
                    return redirect()->to('/keluar');
                }
            } else {
                $session->setFlashdata('Msg', 'Password anda salah');
                return redirect()->to('/masuk');
            }
        } else {
            $session->setFlashdata('Msg', 'Username atau Password salah!');
            return redirect()->to('/masuk');
        }

    }

    public function logout()
	{
        session()->destroy();
        
        return redirect()->to('masuk');
	}
}
