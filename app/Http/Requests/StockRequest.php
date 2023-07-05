<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => 'required|integer|digits:4',
            'stockname' => 'required',
            'market_id' => 'required|integer|digits:1',
        ];
    }
}
