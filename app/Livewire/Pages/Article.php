<?php

namespace App\Livewire\Pages;

use App\Models\Article as ArticleModel;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Article extends Component
{
    public ArticleModel $artitle;
    #[Layout("layouts.app")]
    public function render():View
    {
        return view('livewire.pages.article');
    }
}
