<?php

namespace phpzilla\facade;

use think\Facade;

class Tree extends Facade
{

    protected static function getFacadeClass()
    {
        return \phpzilla\Tree::class;
    }

}