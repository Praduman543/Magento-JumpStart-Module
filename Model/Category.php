<?php 

namespace Conceptive\JumpStart\Model;

use Conceptive\JumpStart\Api\CategoryInterface;

class Category implements CategoryInterface
{
    public function getName(){
        return __('Category Name');
    }
}