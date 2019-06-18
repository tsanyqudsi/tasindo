<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class DisabledFormField extends AbstractHandler
{
    protected $codename = 'disabled';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.disabled', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}