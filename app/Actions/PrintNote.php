<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use App\Order;

class PrintNote extends AbstractAction
{
    public function getTitle()
    {
        return 'Print Note';
    }

    public function getIcon()
    {
        return 'voyager-tag';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right view',
        ];
    }

    public function getDefaultRoute()
    {
        return route('print_note',$this->data->{$this->data->getKeyName()});
    }
}