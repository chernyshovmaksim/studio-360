<?php

namespace EvolutionCMS\Site\Controllers;

class PostController extends BaseController
{
    public function render()
    {
        $this->data['main_image'] = $this->prepare_main_image();
        $this->data['tags'] = $this->get_tags();
        $this->data['pbcontent'] = $this->get_pbblogcontent();
        $this->data['prevnextlinks'] = $this->get_prev_next_links();
    }

    /**
     * Обработка главного изображения
     */
    private function prepare_main_image()
    {
        $data = [];
        $path = evo()->getTemplateVar('blog_main_image')['value'];

        if ($path) {
            // dd($path);
            $hd = evo()->runSnippet('phpthumb', [
                'input' => $path,
                'options' => 'w=1280,h=720,zc=1',
                'webp' => 1,
            ]);

            $fhd = evo()->runSnippet('phpthumb', [
                'input' => $path,
                'options' => 'w=1920,h=1080,zc=1',
                'webp' => 1,
            ]);

            $data['hd'] = $hd;
            $data['fhd'] = $fhd;

            return $data;
        }


        return '/assets/images/noimage.jpg';
    }

    /**
     * Получаем теги публикации
     */
    private function get_tags()
    {
        $ids = evo()->documentObject['blogtags'][1];
        if ($ids) {
            $arr_ids = explode(',', $ids);

            $documents = evo()->getDocuments($arr_ids);

            return $documents;
        }
    }

    /**
     * Получаем основной контент публикации из PageBuilder
     */
    private function get_pbblogcontent()
    {
        $blocks = evo()->runSnippet('PageBuilder', [
            'container' => 'pbblogcontainer',
            'renderTo' => 'array'
        ]);
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
