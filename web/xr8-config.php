<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
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
 *
 * @package	   CodeIgniter
 * @author	   EllisLab Dev Team
 * @copyright	 Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	 Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	   http://opensource.org/licenses/MIT	MIT License
 * @link	     http://codeigniter.com
 * @since	     Version 1.0.0
 * @filesource x
 */

//Fecha
date_default_timezone_set('America/Mexico_City');
//echo 'Fecha/hora actual: ', date('Y-m-d h:i:s', time());

$a_ngrok = explode(".", $_SERVER['HTTP_HOST']);

//Local o Web
if ($_SERVER['HTTP_HOST'] == 'localhost') {
  define("ZONA", 'local');
  define("PAGETITLE", 'Local : ');
}elseif ($a_ngrok['1'] == 'ngrok') {
  define("ZONA", 'ngrok');
  define("PAGETITLE", 'Local Ngrok: ');
}else{
  define("ZONA", 'web');
  define("PAGETITLE", 'Remote : ');
}

//Config Local o Web
if       (ZONA == "local"){
  //----->
  define("TITLE", PAGETITLE ."Global Therapy - ");

  define("BASE_URL", '//'.$_SERVER['HTTP_HOST'].'/server/DevOps/GlobalTherapy/');
  
  define("APP_URL",BASE_URL."web/index.php/");
  define("API_URL",BASE_URL."api/");
  define("CDN_URL",BASE_URL."cdn/");

  define("INDEX_PAGE", APP_URL);
  define("DEFAULTROUTER", 'inicio/');

  define("HOSTNAME", 'labs26.com');
  define("USERNAME", 'escuela');
  define("PASSWORD", '12345aeiou');
  define("DATABASE", 'escuela');
  //----->
}else if (ZONA == "ngrok"){
}else if (ZONA == "web")  {
  define("TITLE", PAGETITLE);

  define("BASE_URL",'//globaltherapy.com.mx/');
  //define("BASE_URL", '//'.$_SERVER['HTTP_HOST'].'/server/DevOps/GlobalTherapy/');
  
  define("APP_URL",BASE_URL);
  define("API_URL","//api.globaltherapy.com.mx/");
  define("CDN_URL","//cdn.globaltherapy.com.mx/");
  
  /*
  define("APP_URL",BASE_URL."web/index.php/");
  define("API_URL",BASE_URL."api/");
  define("CDN_URL",BASE_URL."cdn/");
  */

  define("INDEX_PAGE", APP_URL);
  define("DEFAULTROUTER" ,'inicio');

  define("HOSTNAME", 'labs26.com');
  define("USERNAME", 'escuela');
  define("PASSWORD", '12345aeiou');
  define("DATABASE", 'escuela');
}else{}