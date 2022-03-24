<?php

namespace Smiley\Calculator\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class CalculatorDivPostRequest extends FormRequest
{
    /**
     * The URI that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirect = '/calculator';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'a' => 'required',
            'b' => 'required|numeric'
        ];
    }

    /**
     * Add route parameters to validation data
     *
     * @return array
     */
    public function validationData()
    {
        return array_merge($this->request->all(), [
            'a' => Route::input('a'),
            'b' => Route::input('b'),
            // 'b' => $this->route('b'),
        ]);
    }

    // /**
    //  * Get the URL to redirect to on a validation error.
    //  *
    //  * @return string
    //  */
    // protected function getRedirectUrl()
    // {
    //     return redirect($this->redirect)->withErrors();
    // }
}
