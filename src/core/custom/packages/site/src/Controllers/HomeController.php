<?php

namespace EvolutionCMS\Site\Controllers;

use Carbon\Carbon;

class HomeController extends BaseController
{
    public function render()
    {
        $this->data['awards'] = $this->get_awards();
        $this->data['posts'] = $this->get_posts();
        $this->data['projects'] = $this->get_projects();
        $this->data['clients'] = $this->get_clients();
        $this->data['competencies'] = $this->get_competencies();
    }

    /**
     * Получаем все награды
     */
    private function get_awards()
    {
        $awards = evo()->documentObject['awards'][1];
        $awards = json_decode($awards, true);
        $awards = $awards['fieldValue'];

        return $awards;
    }

    /**
     * Получаем компетенции
     */
    private function get_competencies()
    {
        $competencies = evo()->runSnippet('DocLister', [
            'parents' => 31,
            'api' => 1,
            'JSONformat' => 'new',
            'orderBy' => 'menuindex',
            'tvPrefix' => '',
            'tvList' => 'competencies',
            'prepare' => ['EvolutionCMS\Site\Controllers\HomeController::competencies_prepare']
        ]);

        return json_decode($competencies, true)['rows'];
    }
    public static function competencies_prepare($data)
    {
        $data['competencies'] = json_decode($data['competencies'], true);
        return $data;
    }

    /**
     * Получаем логотипы клиентов
     */
    private function get_clients()
    {
        $clients = evo()->documentObject['clients'][1];
        $clients = json_decode($clients, true);
        $clients = $clients['fieldValue'];
        return $clients;
    }


    /**
     * Получаем последние посты
     */
    private function get_posts()
    {
        $posts = evo()->runSnippet('DocLister', [
            'parents' => 5,
            'display' => 5,
            'tvPrefix' => '',
            'tvList' => 'blog_main_image',
            'api' => 1,
            'JSONformat' => 'new',
            'prepare' => ['EvolutionCMS\Site\Controllers\HomeController::posts_prepare']
        ]);
        return json_decode($posts, true)['rows'];
    }


    /**
     * Получаем последние проекты
     */
    private function get_projects()
    {
        $projects = evo()->runSnippet('DocLister', [
            'parents' => 3,
            'display' => 5,
            'orderBy' => 'menuindex',
            'api' => 1,
            'JSONformat' => 'new',
            'tvPrefix' => '',
            'tvList' => 'completion_date, project_image, tags',
            'prepare' => ['EvolutionCMS\Site\Controllers\HomeController::project_prepare']
        ]);
        return json_decode($projects, true)['rows'];
    }

    /**
     * Обрабатываем дынные проекта
     */
    public static function project_prepare($data)
    {
        // Обрабатываем изображение
        $data['poster'] = evo()->runSnippet('phpthumb', [
            'input' => $data['project_image'],
            'options' => 'w=600,h=300, zc=1',
            'webp' => 1,
        ]);

        // Обрабатывааем теги
        $arr_tags = explode(',', $data['tags']);
        $data['tags'] = array_map(function ($id) {
            return evo()->getDocument($id, 'id,pagetitle');
        }, $arr_tags);



        // Обрабатываем дату публикации
        Carbon::setLocale('ru-RU');
        $dt = Carbon::parse($data['completion_date']);
        $data['completion_date'] = $dt->translatedFormat('F Y');



        return $data;
    }

    /**
     * Обрабатываем данные постов
     */
    public static function posts_prepare($data)
    {
        // Обрабатываем изображение
        $data['poster'] = evo()->runSnippet('phpthumb', [
            'input' => $data['blog_main_image'],
            'options' => 'w=600,h=300, zc=1',
            'webp' => 1,
        ]);

        // Обрабатываем дату публикации
        Carbon::setLocale('ru-RU');
        $dt = Carbon::createFromTimestamp($data['publishedon']);
        $data['completion_date'] = $dt->translatedFormat('F Y');



        return $data;
    }
}
