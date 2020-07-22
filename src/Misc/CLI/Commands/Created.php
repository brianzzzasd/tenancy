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

namespace Tenancy\Misc\CLI\Commands;

use Tenancy\Tenant\Events\Created as Event;

class Created extends EventBaseCommand
{
    /** @var string */
    protected $event = Event::class;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wingman:created
                            {--chunk=100 : Chunks the tenants with the specific amount}
                            {--tenant-identifiers= : Defines the tenant identifier that should be used}
                            {--tenants= : Defines the tenants that should be used}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Triggers the creation of tenants on all tenant models';
}