<?php
namespace TCrypto\CryptoHandler;

/**
 * 
 * @author timoh <achmun0526@gmail.com>
 * @license Public Domain
 */
interface TCryptoInterface
{
    /**
     * Encrypts the data.
     * 
     * @param string $data
     * @param string $iv
     * @param string $key
     */
    public function encrypt($data, $iv, $key);
    
    /**
     * Decrypts the data.
     * 
     * @param string $data
     * @param string $iv
     * @param string $key
     */
    public function decrypt($data, $iv, $key);
    
    /**
     * Returns the needed IV length in bytes.
     * 
     * @return int 
     */
    public function getIvLen();
    
    /**
     * Returns the needed key length in bytes.
     * 
     * @return int 
     */
    public function getKeyLen();
}
