<?php

declare(strict_types=1);

namespace digitalarkivet\iiif\presentation\v3\properties\descriptive;

use digitalarkivet\iiif\presentation\v3\properties\descriptive\provider\Agent;

/**
 * Provider descriptive property.
 * @link https://iiif.io/api/presentation/3.0/#provider
 */
class Provider
{
    /**
     * Agents.
     */
    protected array $agents = [];

    /**
     * Constructor.
     */
    public function __construct(Agent ...$agent)
    {
        $this->agents = $agent;
    }

    /**
     * Add an agent.
     */
    public function addAgent(Agent $agent): void
    {
        $this->agents[] = $agent;
    }

    /**
     * Returns an array representation of the provider descriptive property.
     */
    public function toArray(): array
    {
        $agents = [];

        foreach ($this->agents as $agent) {
            $agents[] = $agent->toArray();
        }

        return $agents;
    }
}
