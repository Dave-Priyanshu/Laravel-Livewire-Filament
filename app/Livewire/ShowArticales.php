<?php

namespace App\Livewire;

use App\Models\Articale;
use App\Models\Category;
use Livewire\Component;

class ShowArticales extends Component
{
    public function render()
    {
        $articales = Articale::with('category')
            ->orderBy('created_at','DESC')
            ->simplePaginate(4);

        $categories = Category::orderBy('created_at','DESC')->get();

        return view('livewire.show-articales',[
            'articales'=> $articales,
            'categories'=> $categories
        ]);
    }
}
