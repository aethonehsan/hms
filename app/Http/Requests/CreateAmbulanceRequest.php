<?php

namespace App\Http\Requests;

use App\Models\Ambulance;
use Illuminate\Foundation\Http\FormRequest;

class CreateAmbulanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return Ambulance::$rules;
    }
    public function messages(): array
    {
        return [
            'vehicle_number.is_unique' => __('messages.new_change.unique_vehicle_number'),
        ];
    }
}
