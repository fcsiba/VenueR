<?php

namespace App\Http\Requests\Admin\Contactvenue;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreContactvenue extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.contactvenue.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'category' => ['nullable', 'string'],
            'venue_name' => ['nullable', 'string'],
            'name' => ['nullable', 'string'],
            'email' => ['nullable', 'email', 'string'],
            'phone' => ['nullable', 'string'],
            'admin_id' => ['required', 'integer'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
