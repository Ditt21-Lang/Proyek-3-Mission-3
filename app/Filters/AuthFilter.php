<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Kalau belum login
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url('login'))->with('error', 'Silakan login dulu.');
        }

        // Kalau ada argumen role (misalnya admin/student)
  if ($arguments) {
    $role = $session->get('role');

    // Kalau role user tidak sesuai dengan role yang diizinkan
        if (!in_array($role, $arguments)) {
            if ($role === 'atmint') {
                return redirect()->to(base_url('admin/home'))
                    ->with('error', 'Kamu tidak punya akses ke halaman ini.');
            } elseif ($role === 'student') {
                return redirect()->to(base_url('student/home'))
                    ->with('error', 'Kamu tidak punya akses ke halaman ini.');
            } else {
                // kalau role nggak dikenali, fallback ke login
                return redirect()->to(base_url('login'))
                    ->with('error', 'Silakan login untuk melanjutkan.');
            }
        }
    }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // kosong aja
    }
}
