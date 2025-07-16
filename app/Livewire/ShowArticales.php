<?php

namespace App\Livewire;

use App\Models\Articale;
use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowArticales extends Component
{
    #[Url()]
    public $categorySlug = null;

    public function render()
    {
        // get all the categroy
        $categories = Category::all();

        if(!empty($this->categorySlug)){
            $category = Category::where('slug',$this->categorySlug)->first();

            if(empty($category)){
                abort(404);
            }

            $articales = Articale::orderBy('created_at','DESC')->where('category_id',$category->id)
            ->where('status',1)
            ->simplePaginate(4);
        }else{

            $articales = Articale::orderBy('created_at','DESC')
                ->where('status',1)
                ->simplePaginate(4);
        }

        $latestArticales = Articale::orderBy('created_at','DESC')->where('status',1)->take(3)->get();

        return view('livewire.show-articales',[
            'articales'=> $articales,
            'categories'=> $categories,
            'latestArticales' => $latestArticales
        ]);
    }
}
