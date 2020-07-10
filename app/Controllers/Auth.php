<?php

namespace App\Controllers;

class Auth extends BaseController
{

    protected $cm;
    protected $sesi;

    public function __construct()
    {
        $this->cm         = new \App\Libraries\Commons();
        $this->validation = \Config\Services::validation();
        helper(['form', 'url']);
        $this->sesi = \Config\Services::session();
    }

    public function login()
    {
        if (!isset($this->token)) {
            return view('auth/login');
        } else {
            return redirect()->to('/');
        }

    }

    public function chklogin()
    {

        $this->data['title'] = lang('Auth.login_heading');

        $this->validation->setRule('identity', str_replace(':', '', lang('Auth.login_identity_label')), 'required');
        $this->validation->setRule('password', str_replace(':', '', lang('Auth.login_password_label')), 'required');
        $ldata['remember'] = (bool)$this->request->getVar('remember');
        $ldata['user']     = $this->request->getVar('user');
        $ldata['pass']     = $this->request->getVar('pass');

        if ($ldata['user'] && $ldata['pass']) {

            $req = $this->cm->LoginCurl($ldata);
            $res = json_decode($req);
            if ($res->s == 1) {
                $sessionData = [
                    'token'     => $res->m,
                    'user'      => $ldata['user'],
                    'lc'        => time(),
                    'parent'    => time(),
                    'user_type' => time(),
                ];
                $this->sesi->set($sessionData);
                return redirect()->to('/');
            } else {
                $this->sesi->destroy();
            }
        } else {
            $this->sesi->destroy();
        }
    }

    public function logout()
    {
        $this->sesi->destroy();
        return redirect()->to('/auth/login');
    }

    public function change_password()
    {

    }

    public function forgot_password()
    {

    }
}
