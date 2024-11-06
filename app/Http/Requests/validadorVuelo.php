<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorVuelo extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'flightNumber' => 'required|numeric|max:18',
            'origin' => 'required',
            'destination' => 'required',
            'departureDate' => 'required|date',
            'departureTime' => 'required|time',
            'arrivalDate' => 'required|date|after:departureDate',
            'arrivalTime' => 'required|time|after:departureTime',
            'class' => 'required',
            'price' => 'required|numeric|min:1'
        ];
    }
}
