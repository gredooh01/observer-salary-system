<?php

namespace App\Http\Livewire\Ob;

use App\Models\Ob;
use Livewire\Component;

class Edit extends Component
{
    public Ob $ob;

    public function mount(Ob $ob)
    {
        $this->ob = $ob;
    }

    public function render()
    {
        return view('livewire.ob.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->ob->save();

        return redirect()->route('admin.obs.index');
    }

    protected function rules(): array
    {
        return [
            'ob.payment_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'ob.company' => [
                'string',
                'required',
            ],
            'ob.remitter' => [
                'string',
                'required',
            ],
            'ob.obs_name' => [
                'string',
                'required',
            ],
            'ob.vessel' => [
                'string',
                'required',
            ],
            'ob.purpose' => [
                'string',
                'required',
            ],
            'ob.inv_num' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'ob.memo_num' => [
                'string',
                'required',
            ],
            'ob.inv_amount' => [
                'numeric',
                'required',
            ],
            'ob.comp_ref' => [
                'string',
                'required',
            ],
            'ob.bank_ref' => [
                'string',
                'required',
            ],
            'ob.amount_rec' => [
                'numeric',
                'required',
            ],
            'ob.b_charge' => [
                'numeric',
                'required',
            ],
            'ob.l_amount' => [
                'numeric',
                'required',
            ],
            'ob.accumulated' => [
                'numeric',
                'required',
            ],
            'ob.remarks' => [
                'string',
                'required',
            ],
        ];
    }
}
