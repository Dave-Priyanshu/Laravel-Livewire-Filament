<?php

namespace App\Livewire;

use App\Models\Articale;
use App\Models\Category;
use Livewire\Component;

class ArticaleDetail extends Component
{
    public $blogId = null;
    public function mount($id){
        $this->blogId = $id;
    }

    public function render()
    {
        $articale = Articale::select('articales.*','categories.name as category_name')->LeftJoin('categories','categories.id','articales.category_id')->findOrFail($this->blogId);


        return view('livewire.articale-detail',[
            'articale' => $articale,
        ]);
    }
}
