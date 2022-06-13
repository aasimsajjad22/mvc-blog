<?php

namespace App\Models;

use App\Models\Base\Model;

class Register extends Model
{
    public string $firstName = '';
    public string $lastName = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function register()
    {
        // register
    }

    public function rules(): array
    {
        return [
            'firstName' => [self::RULE_REQUIRED],
            'lastName' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [
                self::RULE_REQUIRED,
                [self::RULE_MIN, 'min' => 4],
                [self::RULE_MAX, 'max' => 10],
            ],
            'confirmPassword' => [
                self::RULE_REQUIRED,
                [self::RULE_MATCH, 'match' => 'password']
            ],
        ];
    }
}