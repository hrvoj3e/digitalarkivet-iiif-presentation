<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\traits;

use digitalarkivet\iiif\presentation\v3\properties\descriptive\RequiredStatement;

/**
 * Trait for resources with a required statement.
 */
trait WithRequiredStatementTrait
{
    /**
     * Required statement.
     */
    protected ?RequiredStatement $requiredStatement = null;

    /**
     * Set the required statement.
     */
    public function setRequiredStatement(RequiredStatement $requiredStatement): void
    {
        $this->requiredStatement = $requiredStatement;
    }

    /**
     * Returns the required statement.
     */
    public function getRequiredStatement(): ?RequiredStatement
    {
        return $this->requiredStatement;
    }
}
