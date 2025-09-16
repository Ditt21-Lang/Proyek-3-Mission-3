<?php 

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController{

    public function login(){
        return view('login');
    }

    public function processLogin(){
        $session = session();
        $userModel = new User();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $userModel->where('username',$username)->first();

        if($user){
            if(password_verify($password,$user['password']) ){
                $session->set([
                    'user_id' => $user['user_id'],
                    'full_name' => $user['full_name'],
                    'username'=> $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);

                if ($user['role'] === 'student'){
                    return redirect('')->to(base_url('student/home'));
                } else if ($user['role'] === 'atmint'){
                    return redirect('')->to(base_url('admin/home'));
                }

            } else{
                $session->setFlashdata('error', 'Password Salah!');
                return redirect()->to(base_url('login'));
            }
        } else {
            $session->setFlashdata('error','Username tidak ditemukan!');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}

?>