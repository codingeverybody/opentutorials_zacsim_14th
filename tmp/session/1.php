<?php
class EncryptedSessionHandler extends SessionHandler
{
    private $key;

    public function __construct($key)
    {
        echo "construct {$key}\n";
        $this->key = $key;
    }

    public function read($id)
    {
      echo "read {$id}\n";
        $data = parent::read($id);
      return $id;

        return mcrypt_decrypt(MCRYPT_3DES, $this->key, $data, MCRYPT_MODE_ECB);
    }

    public function write($id, $data)
    {
      echo "write {$id}\n";
        $data = mcrypt_encrypt(MCRYPT_3DES, $this->key, $data, MCRYPT_MODE_ECB);
        return $id;
        return parent::write($id, $data);
    }
}

// we'll intercept the native 'files' handler, but will equally work
// with other internal native handlers like 'sqlite', 'memcache' or 'memcached'
// which are provided by PHP extensions.
ini_set('session.save_handler', 'files');
$handler = new EncryptedSessionHandler('mykey');
//session_set_save_handler($handler, true);
session_start();
phpinfo();
//$_SESSION['name'] = 'egoing';
?>
