<?php

namespace HelgeSverre\Extractor\Extraction\Concerns;

use HelgeSverre\Extractor\Extraction\Extractor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

/**
 * @mixin Extractor
 */
trait HasValidation
{
    abstract public function rules(): array;

    public function validateResponse(string $input)
    {
        $validator = Validator::make(['input' => $input], $this->rules());

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $input;
    }

    public function bootValidatesInput()
    {
        $this->registerProcessor([$this, 'validateResponse']);
    }
}