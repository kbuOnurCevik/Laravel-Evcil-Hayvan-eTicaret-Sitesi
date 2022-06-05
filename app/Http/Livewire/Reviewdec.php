<?php

namespace App\Http\Livewire;

use App\Models\Declaration;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reviewdec extends Component
{
    public $record, $subject, $review, $declaration_id;

    public function mount($id)
    {
        $this->record = Declaration::findOrFail($id);
        $this->declaration_id = $this->record->id;
    }


    public function render()
    {
        return view('livewire.reviewdec');
    }

    public function resetInput()
    {
        $this->subject = null;
        $this->review = null;
        $this->declaration_id = null;
        $this->IP = null;
    }

    public function store()
    {
        $this->validate([
            'subject' => 'required|min:5',
            'review' => 'required|min:10',
        ]);

        \App\Models\Reviewdec::create([
            'declaration_id' => $this->declaration_id,
            'user_id' => Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'subject' => $this->subject,
            'review' => $this->review
        ]);

        session()->flash('message', 'Review Send Successfully');
        $this->resetInput();
    }




}
