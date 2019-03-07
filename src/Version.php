<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace YangXiaoHui;

/**
 * Description of Version
 *
 * @author Administrator
 */
class Version
{
    protected $version = "1.0.0";
    
    public static function getVersion(){
        return $this->version;
    }
}
