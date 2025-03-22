<?php

namespace EvolutionCMS\Site\Controllers;

class CallbackController
{
    public $data = [];
    public function __construct()
    {
        $this->sendData();
    }
    public function setData()
    {
        $this->data['form'] = evo()->runSnippet('FormLister', [
            'formid' => 'callback',
            'formTpl' => '@B_FILE: parts.callback',
            'errorClass' => 'is-invalid',
            'requiredClass' => 'is-invalid',
            'errorTpl' => '@CODE: <div>[+message+]</div>',
            'redirectTo' => 1,
            'rules' => [
                'name' => [
                    'required' => 'Заполните поле "Имя"'
                ]
            ]
        ]);
    }
    public function sendData()
    {
        $this->setData();
        evo()->addDataToView($this->data);
    }
}
