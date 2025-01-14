<?php

namespace App\Livewire\Pages;

use App\Models\Article as ArticleModel;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    public $articles;
    public function mount(){
        $this->articles = ArticleModel::limit(value: 8)->get();
    }
    #[Layout("layouts.app")]
    public function render():View
    {
        return view('livewire.pages.home');
    }
}
