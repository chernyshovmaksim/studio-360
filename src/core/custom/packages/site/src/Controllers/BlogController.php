<?php

namespace EvolutionCMS\Site\Controllers;

use Carbon\Carbon;

class BlogController extends BaseController
{
    public function render()
    {
        $this->data['filters'] = $this->get_filters();
        $this->data['posts'] = $this->get_posts();
    }


    /**
     * Получаем все фильтры
     */
    private function get_filters()
    {
        $filters = evo()->runSnippet('DocLister', [
            'parents' => 16,
            'orderBy' => 'menuindex',
            'returnDLObject' => 1
        ]);

        return $filters->getDocs();
    }

    /**
     * Получаем посты
     */
    private function get_posts()
    {
        $posts = evo()->runSnippet('DocLister', [
            'parents' => 5,
            'orderBy' => 'menuindex',
            'tvPrefix' => '',
            'tvList' => 'blog_main_image',
            'prepare' => ['EvolutionCMS\Site\Controllers\BlogController::post_prepare'],
            'api' => 1
        ]);

        return json_decode($posts, true);
    }

    /**
     * Обрабатываем изображение поста
     */
    public static function post_prepare($data)
    {
        // dd($data);
        if ($data['blog_main_image']) {
            $data['poster'] = evo()->runSnippet('phpthumb', [
                'input' => $data['blog_main_image'],
                'options' => 'w=400,h=300,zc=1',
                'webp' => 1
            ]);
        }

        Carbon::setLocale('ru-RU');
        $dt = Carbon::createFromTimestamp($data['publishedon']);
        $data['date_pub'] = $dt->translatedFormat('F Y');

        return $data;
    }















    public function tags($id)
    {
        $posts = evo()->runSnippet('DocLister', [
            'parents' => 5,
            'api' => 1,
            'JSONformat' => 'new',
            'tvPrefix' => '',
            'tvList' => 'blog_main_image, blogtags',
            'filters' => str_replace('%id%', $id, 'AND(tv:blogtags:like:%id%)'),
            'prepare' => ['EvolutionCMS\Site\Controllers\BlogController::post_prepare'],
        ]);
        $posts = json_decode($posts, true)['rows'];
        return view('blog_tags', [
            'title' => evo()->getDocument($id, 'pagetitle')['pagetitle'],
            'posts' => $posts
        ]);
    }
}
