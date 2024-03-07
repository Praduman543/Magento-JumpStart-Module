<?php

namespace Conceptive\JumpStart\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class WelcomeMessage implements ArgumentInterface
{
    public function getWelcomeMessage(){

        $hour = Date ('G');

        if ($hour < 12) {
            return __('Good Morning!');
        } elseif($hour < 17) {
            return __('Good Afternoon!');
        } else {
            return __('Good Night!');
        }

    }
}

