<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use App\Order;

class ShowLess extends AbstractAction
{
    public function getTitle()
    {
        return 'Show Less';
    }

    public function getIcon()
    {
        return 'voyager-double-up';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-dark pull-right view',
        ];
    }

    public function getDefaultRoute()
    {
    }
}