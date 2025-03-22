<?php

namespace EvolutionCMS\Site\Controllers;

use Carbon\Carbon;
use EvolutionCMS\Models\SiteContent;

class TagsController
{
    /**
     * Получаем все проекты по всем тэгам
     */
    public function index()
    {
        $projects = evo()->runSnippet('DocLister', [
            'parents' => 3,
            'api' => 1,
            'JSONformat' => 'new',
            'tvPrefix' => '',
            'tvList' => 'project_image, tags',
            'prepare' => ['EvolutionCMS\Site\Controllers\TagsController::projects_prepare'],
        ]);

        $projects = json_decode($projects, true)['rows'];

        return view('tags', [
            'title' => 'Все категории',
            'projects' => $projects
        ]);
    }

    /**
     * Получаем проекты по определенному тегу
     */
    public function show($id)
    {
        $projects = evo()->runSnippet('DocLister', [
            'parents' => 3,
            'api' => 1,
            'JSONformat' => 'new',
            'tvPrefix' => '',
            'tvList' => 'project_image, tags',
            'filters' => str_replace('%id%', $id, 'AND(tv:tags:like:%id%)'),
            'prepare' => ['EvolutionCMS\Site\Controllers\TagsController::projects_prepare'],
        ]);
        $projects = json_decode($projects, true)['rows'];
        return view('tags', [
            'title' => evo()->getDocument($id, 'pagetitle')['pagetitle'],
            'projects' => $projects
        ]);
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
