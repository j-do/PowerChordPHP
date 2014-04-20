<?php

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
 * Class containing static methods to validate data going from the client before
 * being sent to the Model, extend it in your module directory. Be sure to use 
 * static methods, if you want to unleash it's full power.
 * @author Jason "J-Do" Hittle 
 */
class DataGate
{
    
    /**
     * Returns the $default option or the option passed from the client in
     * the superglobal array if it is indeed an option
     * @param string $selectKey the key of the selectedOption
     * @param array $options an array of possible options
     * @param string $defaultOption
     * @return string
     */
    static function getValidOption($selectKey, $options, $defaultOption)
    {
        return self::isValidOption($selectKey, $options) ? $_REQUEST[$selectKey] : $defaultOption;
    }
       
    /**
     * Returns true if the value in the superglobal array is indeed an option to
     * select.
     * @param string $selectKey
     * @param array $options
     * @return boolean
     */
    static function isValidOption($selectKey, $options)
    {
        if(in_array($_REQUEST[$selectKey], $options)){
            return true;
        }else{
            return false;
        }
    }

}