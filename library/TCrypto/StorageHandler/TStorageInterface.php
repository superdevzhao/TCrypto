<?php
namespace TCrypto\StorageHandler;

/**
 * 
 * @author timoh <achmun0526@gmail.com>
 * @license Public Domain
 */
interface TStorageInterface
{
    /**
     * Loads the data from a storage (cookie, file, database etc.).
     */
    public function fetch();
    
    /**
     * Saves the data to a storage.
     * 
     * @param string $data
     */
    public function save($data);

    /**
     * Removes the data from a storage.
     */
    public function remove();
}