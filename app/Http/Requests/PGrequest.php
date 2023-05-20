<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class PGrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id;
        $status = DB::table('PG')->select('amount')->where('id', '=', $id)->first();
        $st = json_decode(json_encode($status), true);
        $vali = $st['amount'];
        return [
            'amountskinpg' => 'integer|max:' . $vali,
        ];
    }
    public function messages()
    {
        //
        return [
            'amountskinpg.max' => 'het roi',
        ];
    }
}