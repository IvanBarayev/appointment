<?php

namespace App\Filters;

use Config\Services;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginFilter implements FilterInterface
{
    private $sesi;

    public function before(RequestInterface $request)
    {
        $this->sesi = \Config\Services::session();

        $current = (string)current_url(TRUE)
            ->setHost('')
            ->setScheme('')
            ->stripQuery('token');

        // Make sure this isn't already a login route
        if (in_array((string)$current, [route_to('login'), route_to('chklogin'), route_to('forgot_password')])) {
            return;
        }

        // if no user is logged in then send to the login form

        $this->token = $this->sesi->get('token');
        if (!isset($this->token)) {
            return redirect()->to('/auth/login');
        }
    }

    //--------------------------------------------------------------------

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param \CodeIgniter\HTTP\RequestInterface  $request
     * @param \CodeIgniter\HTTP\ResponseInterface $response
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response)
    {

    }

    //--------------------------------------------------------------------
}
