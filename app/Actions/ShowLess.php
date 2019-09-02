<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use App\Order;

class PrintNote extends AbstractAction
{
    public function getTitle()
    {
        return 'Show Less';
    }

    public function getIcon()
    {
        return '&#xe055;';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-info pull-right view',
        ];
    }

    public function getDefaultRoute()
    {
    }
}