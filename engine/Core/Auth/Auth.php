<?php


namespace Engine\Core\Auth;

use Engine\Core\Config\Config;
use Engine\Core\Cookie;


class Auth implements AuthInterface
{
    protected $authorized = false;
    protected $user;

    /**
     * @return bool
     */
    public function authorized()
    {
        return $this->authorized;

    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->user;
    }

    /**
     * @param $user
     */
    public function authorize($user)
    {
        Cookie::set('auth.authorized', true);
        Cookie::set('auth.user', $user);

        $this->authorized = true;
        $this->user       = $user;
    }


    public function unAuthorize()
    {
        Cookie::delete('auth.authorized');
        Cookie::delete('auth.user');

        $this->authorized = false;
        $this->user       = null;
    }

    /**
     * Generates a new random password salt
     * @return string
     */
    public static function salt()
    {
        return (string) rand(10000000, 99999999);
    }

    /**
     * Generates a hash
     * @param $password
     * @param string $salt
     * @return string
     */
    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password . $salt);
    }

}