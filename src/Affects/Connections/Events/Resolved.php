<?php

declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * Copyright Tenancy for Laravel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://tenancy.dev
 * @see https://github.com/tenancy
 */

namespace Tenancy\Affects\Connections\Events;

use Tenancy\Affects\Connections\Contracts\ProvidesConfiguration;
use Tenancy\Identification\Contracts\Tenant;

class Resolved
{
    /**
     * @var Tenant|null
     */
    public $tenant;

    /**
     * @var ProvidesConfiguration|null
     */
    public $provider;

    /**
     * @var string|null
     */
    public $connection;

    public function __construct(Tenant $tenant = null, string $connection = null, ProvidesConfiguration &$provider = null)
    {
        $this->tenant = $tenant;
        $this->connection = $connection;
        $this->provider = &$provider;
    }
}
