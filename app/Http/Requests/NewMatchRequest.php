<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewMatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           "home" => "required|exists:teams,id|different:away",
           "away" => "required|exists:teams,id|different:home",
           "scheduled_at" => "required|after:". now()->addDay(1)->format('Y-m-d 12:00:00')

        ];
    }
}
