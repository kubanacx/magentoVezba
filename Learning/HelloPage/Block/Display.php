<?php
namespace Learning\HelloPage\Block;
use Magento\Framework\View\Element\Template;

class Display extends Template
{    
    public function getHelloWorldTxt()
    {
        return "<a href='text'>click</a>";
    }
 
}