<?php

namespace App\Http\Livewire;

use App\Models\HeaderNotice;
use Livewire\Component;

class Notice extends Component
{
    public $notice;
    public $body;

    public function render()
    {
        return view('livewire.notice');
    }

    public function mount()
    {
        $this->notice = HeaderNotice::first();
        if ($this->notice) {
            $this->body = $this->notice->body;
        } else {
            $this->body = '';
        }
    }
}
