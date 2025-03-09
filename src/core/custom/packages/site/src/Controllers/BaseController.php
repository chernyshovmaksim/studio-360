<?php

namespace EvolutionCMS\Site\Controllers;

use Illuminate\Support\Facades\Cache;

class BaseController
{
    // в эту переменную добавляйте данные,
    // которые хотите отдать в шаблоны
    public $data = [];
    public $evo;

    public function __construct()
    {

        // подключаем функции CMS
        $this->evo = EvolutionCMS();

        ksort($_GET);

        $cacheid = md5(json_encode($_GET));
        // если включен кэш на сайте,
        // получаем данные из кэша
        // rememberForever - метод Laravel, см. документацию
        if ($this->evo->getConfig('enable_cache')) {
            // $this->data = Cache::rememberForever($cacheid, function () {
            //     $this->globalElements();
            //     $this->render();
            //     return $this->data;
            // });
            $this->globalElements();
            $this->render();
        } else {
            $this->globalElements();
            $this->render();
        }
        $this->noCacheRender();
        $this->sendToView();
    }
    public function render()
    {
        // использовать для отдачи данных
    }

    public function noCacheRender()
    {
        // использовать для отдачи некэшированных данных
    }

    public function globalElements()
    {
        // тут можно отдать элементы,
        // одинаковые для всех шаблонов
    }

    public function sendToView()
    {

        // отдаём данные в шаблон
        $this->evo->addDataToView($this->data);
    }
}
