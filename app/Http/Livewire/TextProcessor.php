<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PhpScience\TextRank\TextRankFacade;

class TextProcessor extends Component
{
    public $text='', $method='getHighlights', $language='English', $result=null;

    public function updated()
    {
        if(strlen($this->text) > 30)
        {
            $LanguageClass = "PhpScience\\TextRank\\Tool\\StopWords\\".$this->language;
            $Language = new $LanguageClass;
            $api = new TextRankFacade();
            $api->setStopWords($Language);
            $this->result = $api->{$this->method}($this->text);
        }
    }

    public function render()
    {
        return view('tool');
    }
}
