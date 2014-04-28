<?php

if (!defined('THISBESTBEDEFINED'))
    exit('No direct script access allowed');

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
 * Jumbotron Model extends Model: Yeah, I know I don't need to be keeping this
 * in a database, it's for educational purposes. 
 * @author Jason "J-Do" Hittle 
 */
class Jumbotron_Model extends Model
{
    /**
     * Setting the table Name per the Model Classes Command
     */
    protected function setTableName()
    {
        $this->tableName = 'jumbotron';
    }
    /**
     * Returns the heading for the row id you pass it, defaults to one.
     * @param int $id
     * @return array
     */
    function getHeading($id=1)
    {
        $results = $this->sqlite->query("select heading from {$this->tableName} "
        . "where id = 1");
        return $results[0]['heading'];
    }
    /**
     * Returns the tagline for the row id you pass it, defaults to one.
     * @param int $id
     * @return array
     */
    function getTagline($id=1)
    {
        $results = $this->sqlite->query("select tagline from {$this->tableName} "
        . "where id = 1");
        return $results[0]['tagline'];
    }
    /**
     * Returns the tagline for the row id you pass it, defaults to one.
     * @param int $id
     * @return array
     */
    function getImageUrl($id=1)
    {
        $results = $this->sqlite->query("select imageUrl from {$this->tableName} "
        . "where id = 1");
        return $results[0]['imageUrl'];
    }

}