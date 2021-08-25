<?php

namespace App\Http\Livewire\Tag;

use App\Models\Tag;
use LivewireUI\Modal\ModalComponent;


class Tags extends ModalComponent
{
    public $tag;
    public $name;
    public $is_delete = false;

    protected $rules = [
        'name' => 'required|string'
    ];

    public function mount(Tag $tag, bool $is_delete)
    {
        $tag = Tag::find($tag->id);
        if($tag && $is_delete == false){
            $this->tag = $tag;
            $this->name = $tag->name;
        }elseif($tag && $is_delete == true){
            $this->tag = $tag;
            $this->is_delete = true;
        }else{
            $this->tag = '';
            $this->name = '';
        }
    }

    public function render()
    {
        return view('livewire.tag.tags');
    }

    public function save()
    {
        $data = $this->validate();
        if($this->tag != null){
            if($this->is_delete == false){
                $this->updateTag($data);
            }elseif($this->is_delete == true){
                $this->deleteTag();
                $this->closeModal();
            }
        }else{
            $this->createTag($data);
        }
        $this->emit('tagsModified');
        $this->reset();
    }

    public function createTag($data)
    {
        $tags = explode(',', $data['name']);
        foreach ($tags as $tag) {
            $itemTag = Tag::where('name', trim($tag))->first();

            if (!$itemTag) {
                $itemTag = Tag::create(['name' => trim($tag)]);
            }
        }
        $this->notify('Tag(s) Has Been Created', 'Created!', 'success');
        $this->closeModal();
    }

    public function updateTag($data)
    {
        $this->tag->update(['name' => $data['name']]);
        $this->notify('Tag Has Been Updated', 'Updated!', 'info');
        $this->closeModal();
    }

    public function deleteTag()
    {
        $this->tag->delete();
        $this->tag->articles()->detach();
        $this->notify('Tag Has Been Deleted', 'Deleted!', 'info');
        $this->closeModal();
        $this->reset();
        $this->emit('tagsModified');
    }
}
