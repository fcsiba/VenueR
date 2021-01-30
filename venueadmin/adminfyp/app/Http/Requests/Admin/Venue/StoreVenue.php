<?php

namespace App\Http\Requests\Admin\Venue;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreVenue extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.venue.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'type' => ['required', 'integer'],
            'sub_type' => ['required', 'integer'],
            'address' => ['nullable', 'string'],
            'size' => ['nullable', 'integer'],
            'accomodation' => ['nullable', 'integer'],
            'price' => ['nullable', 'integer'],
            'availiblity' => ['nullable', 'string'],
            'info' => ['nullable', 'string'],
            'about' => ['nullable', 'string'],
            'image' => ['nullable', 'string'],
            'admin_id' => ['nullable', 'integer'],
            
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
