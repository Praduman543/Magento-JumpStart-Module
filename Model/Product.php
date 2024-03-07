<?php 

namespace Conceptive\JumpStart\Model;

use Conceptive\JumpStart\Api\CategoryInterface;

class Model
{
    protected $category;

    public function __construct(
        CategoryInterface $category
    ) {
        $this->$category = $category;   
    }

    function getCategoryName(){
        return $this->category->getName();
    }

}
