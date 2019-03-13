<?php

namespace App\Http\Requests\Front;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends BaseFormRequest
{
    public $formTypes = [
        'individual_bonus',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rules = [];
        switch ($this->request->get('type')) {
            case 'individual_bonus':
                $rules = [
                    'name' => 'required|string|max:191',
                    'email' => 'required|email|max:50',
                ];
                break;
        }

        return array_merge([
            'type' => 'required|in:'.implode(',', $this->formTypes)
        ], $rules);
    }

    public function messages()
    {
        return [
            'accept.accepted' => 'Для продолжения, Вы должны согласится с условиями',
        ];
    }
}
