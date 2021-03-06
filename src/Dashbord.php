<?php

/*
 * This file is part of the thans/layui-admin.
 *
 * (c) Thans <thans@thans.cn>
 *
 * This source file is subject to the Apache2.0 license that is bundled.
 */

namespace thans\layuiAdmin;

use thans\layuiAdmin\Traits\Load;

class Dashbord
{
    use Load;

    public $tmpl = 'dashbord';

    public $classMap = [
        'card' => dashbord\Card::class,
    ];
}
