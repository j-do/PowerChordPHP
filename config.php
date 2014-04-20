<?php if ( ! defined('THISBESTBEDEFINED')) exit('No direct script access allowed');

/* 
 * Copyright 2014 Jason "J-Do" Hittle .
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

define('BASE_DIR', __DIR__.DIRECTORY_SEPARATOR);
define('JS_DIR', BASE_DIR.'js'.DIRECTORY_SEPARATOR);
define('CSS_DIR', BASE_DIR.'css'.DIRECTORY_SEPARATOR);
define('IMG_DIR', BASE_DIR.'img'.DIRECTORY_SEPARATOR);
define('CORE_DIR', BASE_DIR.'PowerChordCore'.DIRECTORY_SEPARATOR);
define('SQLITE_DIR', BASE_DIR.'sqlite'.DIRECTORY_SEPARATOR);
define('APPLICATION_DIR', BASE_DIR.'application'.DIRECTORY_SEPARATOR);
define('CONTROLLER_DIR', APPLICATION_DIR.'controllers'.DIRECTORY_SEPARATOR);
define('MODEL_DIR', APPLICATION_DIR.'models'.DIRECTORY_SEPARATOR);
define('MODULE_DIR', APPLICATION_DIR.'modules'.DIRECTORY_SEPARATOR);
define('VIEW_DIR', APPLICATION_DIR.'views'.DIRECTORY_SEPARATOR);
define('PROJECT_NAME', 'PowerChordPHP v0.0.1');
define('DB','powerchord.sqlite');