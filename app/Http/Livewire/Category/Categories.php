<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Str;

class Categories extends ModalComponent
{
    public $category;
    public $name;
    public $is_delete = false;

    protected $rules = ['name' => 'required'];

    public function mount(Category $category, bool $is_delete)
    {
        $category = Category::find($category->id);
        if($category && $is_delete == false){
            $this->category = $category;
            $this->name = $category->name;
        }elseif($category && $is_delete == true){
            $this->category = $category;
            $this->is_delete = true;
        }else{
            $this->category = '';
            $this->name = '';
        }
    }

    public function render()
    {
        return view('livewire.category.categories');
    }

    public function save()
    {
        $data = $this->validate();
        if($this->category != null){
            if($this->is_delete == false){
                $this->updateCategory($data);
            }elseif($this->is_delete == true){
                $this->deleteCategory();
                $this->closeModal();
            }
        }else{
            $this->createCategory($data);
        }
        $this->emit('categoryModified');
        $this->reset();
    }

    public function createCategory($data)
    {
        Category::create($data);
        $this->notify('Category(s) Has Been Created', 'Created!', 'success');
        $this->closeModal();
    }

    public function updateCategory($data)
    {
        $this->category->update(['name' => $data['name']]);
        $this->notify('Category Has Been Updated', 'Updated!', 'info');
        $this->closeModal();
    }

    public function deleteCategory()
    {
        $this->category->delete();
        // $this->category->articles->detach();
        $this->notify('Category Has Been Deleted', 'Deleted!', 'info');
        $this->closeModal();
        $this->reset();
        $this->emit('categoryModified');
    }
}
