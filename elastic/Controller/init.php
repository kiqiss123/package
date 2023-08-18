<?php
/**
 * TatiyeNet - PHP Helpers for Develover wolf05
 *
 * (The MIT License)
 *
 * Copyright (c) 2018-2021 wolf05 <info@tatiye.net / https://www.facebook.com/tatiyeNet/>.
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
// namespace wolf05\template\dashboard\package\t3tabels\Controller;
namespace wolf05\template\package\demo\Controller;

use wolf05\helper\tatiyeNet;
use PDO;
class init{
    protected static $instance;  
    private $token;
    private $appid;
    private $content;

    private $data = array();
    // private function __destruct() { /* ... @return DB */ }
  
    // private function __destruct() { /* ... @return DB */ }
    private function __clone() { /* ... @return DB */ }
    private function __wakeup() { /* ... @return DB */ }
  

    public function __construct(){
        $dbs        =new tatiyeNet();
        $this->conn =new tatiyeNet();
        $this->sql  =$dbs->mysqli();
        $this->db   =$dbs->PDO();
        $this->text =$Text=tatiyeNet::Text();
    }

    public static function init($token='') {    
        if ( !isset(self::$instance) ) 
        {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        $row=tatiyeNet::getWJT($token);
        $ID=explode('-',$row['key']);

     // $etc=tatiyeNet::etcFile($params);
      self::$instance->appid    =1;

     return self::$instance;
   }

    /*
    |--------------------------------------------------------------------------
    | Initializes data 
    |--------------------------------------------------------------------------
    | Develover Tatiye.Net 2022
    | @Date  
    */
    public  function appId(){
          return $this->appid;
        
    }
    /* and class data */




}