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
 * Base Model Class enforces the one table per model rule I like to have in my 
 * applications and gives me a connection to the sqlite database
 * @author Jason Hittle
 */
abstract class Model
{
    protected $tableName;
    protected $sqlite;
    
    public function __construct()
    {
        $this->setTableName();
        
        if(!isset($this->tableName)){
            throw new Exception('Model::setTableName() is undefined!');
        }
        $this->sqlite = SqlitePDO::getInstance();
    }
    
    /**
     * Yes the model class enforces the my one table per model rule muwahaha
     */
    abstract protected function setTableName();

}
