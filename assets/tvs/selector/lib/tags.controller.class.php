<?php

namespace Selector;

include_once(MODX_BASE_PATH . 'assets/tvs/selector/lib/controller.class.php');
class TagsController extends SelectorController
{
    public function __construct($modx)
    {
        parent::__construct($modx);
        $this->dlParams['parents'] = 15;
        $this->dlParams['addWhereList'] = 'c.template IN (8)';
    }
}
