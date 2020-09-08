<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class NoBadWords implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {   
        $this->attribute = $attribute;
        $badWords = [ 'idiot', 'stupid', 'hate'];
        foreach ($badWords as $badWord) {
            if (Str::contains($value, $badWord)) {
                $this->badWord = $badWord;
                return false;
            } 
        }

        return true;
        info([
            'attribue' =>$attribute,
            'value' => $value
        ]);
        
       
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The ' . $this->badWord . 'is a bad word. Values must not contain bad words.';
    }
}
