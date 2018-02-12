<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;


/**
 * Class PostValidator.
 *
 * @package namespace App\Validators;
 */
class PostValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    const RULE_CREATE = "RULE_CREATE";

    const RULE_UPDATE = "RULE_UPDATE";

    protected $rules = [
        PostValidator::RULE_CREATE => [
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ],
        PostValidator::RULE_UPDATE => [],
    ];
}
