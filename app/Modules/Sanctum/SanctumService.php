<?php

declare(strict_types=1);

namespace App\Modules\Sanctum;

class SanctumService
{
    private SanctumValidator $validator;

    public function __construct(SanctumValidator $validator)
    {
        // Correct assignment to the private property
        $this->validator = $validator;
    }
    public function issueToken(array $rawData)
    {
        $this->validator->validateIssueToken($rawData);
        return "dfs";
    }
}
