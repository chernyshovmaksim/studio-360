<?php

namespace EvolutionCMS\Site\Controllers;

use Carbon\Carbon;

class ProductController extends BaseController
{
    /**
     * Отдаем данные клиенту
     */
    public function render()
    {
        $this->data['main_images'] = $this->get_main_images();
        $this->data['tags'] = $this->get_tags();
        $this->data['product_date_create'] = $this->get_product_date_create();
        $this->data['product_main_params'] = $this->get_main_params_product();
        $this->data['product_other_params'] = $this->get_other_params_product();
        $this->data['pbcontent'] = $this->get_pbcontent();
        $this->data['prevnextlinks'] = $this->get_prev_next_links();
    }

    /**
     * Получаем и обрабатываем главное изображение
     */
    private function get_main_images()
    {
        $image = evo()->documentObject['project_image'][1];

        return [
            'fhd' => evo()->runSnippet('phpthumb', [
                'input' => $image,
                'options' => 'w=1920,h=1080,zc=1',
                'webp' => 1
            ]),
            'hd' => evo()->runSnippet('phpthumb', [
                'input' => $image,
                'options' => 'w=1280,h=720,zc=1',
                'webp' => 1
            ]),
            'sd' => evo()->runSnippet('phpthumb', [
                'input' => $image,
                'options' => 'w=480,h=320,zc=1',
                'webp' => 1
            ]),
        ];
    }

    /**
     * Получаем дату реализации проекта
     */
    private function get_product_date_create()
    {
        Carbon::setLocale('ru_RU');
        $date = Carbon::parse(evo()->documentObject['completion_date'][1]);
        return $date->translatedFormat('F Y');
    }
    /**
     * Получаем список ID тегов из TV
     */
    private function get_tags()
    {
        $tags = evo()->documentObject['tags'][1];
        $tags_array  = explode(',', $tags);
        $tags_array = array_map(function ($str) {
            $str = trim($str);
            $document = evo()->getDocument($str, 'id,pagetitle');
            return $document;
        }, $tags_array);
        return $tags_array;
    }


    /**
     * Получаем основные параметры проекта
     */
    private function get_main_params_product()
    {
        $params = evo()->documentObject['main_params'][1];
        // dd($params);
        if ($params == "[]") {
            return "";
        }
        $params = json_decode($params, true)['fieldValue'];
        return $params;
    }

    /**
     * Получаем дополнительные параметры проекта
     */
    private function get_other_params_product()
    {
        $params = evo()->documentObject['other_params'][1];
        if ($params == "[]") {
            return "";
        }
        $params = json_decode($params, true)['fieldValue'];
        return $params;
    }

    /**
     * Получаем основной контент проекта из PageBuilder
     */
    private function get_pbcontent()
    {
        $blocks = evo()->runSnippet('PageBuilder', [
            'container' => 'pbcontainer',
            'renderTo' => 'array'
        ]);
        // dd($blocks[0]);
        return $blocks[0];
    }

    /**
     * Получаем ссылку на соседние документы
     */
    private function get_prev_next_links()
    {
        $prevnextlinks = evo()->runSnippet('DLPrevNext', [
            'idType' => 'parents',
            'api' => 1
        ]);

        return $prevnextlinks;
    }
}
