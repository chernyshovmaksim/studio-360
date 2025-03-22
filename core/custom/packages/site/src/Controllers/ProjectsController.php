<?php

namespace EvolutionCMS\Site\Controllers;

use Carbon\Carbon;

class ProjectsController extends BaseController
{
    public function render()
    {
        $this->data['slider'] = $this->get_images_for_slider();
        $this->data['projects'] = $this->get_all_projects()['rows'];
        $this->data['filters'] = $this->get_filters();
    }

    /**
     * Получаем и обрабатываем изображения для слайдера
     */
    private function get_images_for_slider()
    {
        $images = json_decode(evo()->documentObject['project_slider'][1], true)['fieldValue'];
        // dd($images);
        return $images;
    }

    /**
     * Получаем фильтры "Тэги" проектов
     */
    private function get_filters()
    {
        $filters = evo()->runSnippet('DocLister', [
            'parents' => 15,
            'api' => 1,
            'JSONformat' => 'new',
        ]);
        $filters = json_decode($filters, true)['rows'];
        return $filters;
    }

    /**
     * Получаем все проекты
     */
    private function get_all_projects()
    {
        $projects = evo()->runSnippet('DocLister', [
            'parents' => evo()->documentIdentifier,
            'api' => 1,
            'JSONformat' => 'new',
            'tvPrefix' => '',
            'tvList' => 'project_image, tags',
            'prepare' => ['EvolutionCMS\Site\Controllers\ProjectsController::projects_prepare']
        ]);

        return json_decode($projects, true);
    }

    /**
     * Обрабатываем данные перед отдачей
     */
    public static function projects_prepare($data)
    {
        $data['image'] = [
            'hd' => evo()->runSnippet('phpthumb', [
                'input' => $data['project_image'],
                'options' => 'w=720, h=480, zc=1',
                'webp' => 1
            ]),
            'sd' => evo()->runSnippet('phpthumb', [
                'input' => $data['project_image'],
                'options' => 'w=480, h=320, zc=1',
                'webp' => 1
            ])
        ];

        $data['tags'] = explode(',', $data['tags']);
        $data['tags'] = array_map(function ($str) {
            $str = trim($str);
            $pagetitle = evo()->getDocument($str, 'pagetitle,id');
            return $pagetitle;
        }, $data['tags']);


        Carbon::setLocale('ru_RU');
        $data['date'] = Carbon::parse($data['date']);
        $data['date'] = $data['date']->translatedFormat('F Y');

        return $data;
    }
}
