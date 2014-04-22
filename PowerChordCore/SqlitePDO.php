<?php if ( ! defined('THISBESTBEDEFINED')) exit('No direct script access allowed');

/* 
 * The MIT License
 *
 * Copyright 2014 Jason "J-Do" Hittle .
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Connects to a Sqlite database
 * @author Jason Hittle
 */
class SqlitePDO
{

    /**
     * Holds the pdo object
     * @var PDO object
     */
    public $connection;

    /**
     * Singleton magic
     * @var object
     */
    private static $existence = null;

    /**
     * Connects to the Sqlite database and sets the connection object
     * @param string $host
     * @param string $dbname
     * @param string $user
     * @param string $pwd
     */
    private function __construct()
    {
        try {
            $this->connection = new PDO('sqlite:'.CORE_DIR.DB);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo __CLASS__ . ' error:' . $e->getMessage();
        }
    }
    /**
     * Singleton method
     * @return object
     */
    static public function getInstance()
    {
        if (!isset(self::$existence)) {
            $class = __CLASS__;
            self::$existence = new $class;
        }
        return self::$existence;
    }
    
    /**
     * A simple query, not a prepared statement, use this one when there's no pesky
     * user input to deal with or you've cleaned it yourself
     * @param string $statement
     * @return array
     */
    function query($statement){
        $stmt = $this->connection->query($statement);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
