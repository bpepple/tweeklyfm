<?php

/*
 * This file is part of tweeklyfm/tweeklyfm
 *
 *  (c) Scott Wilcox <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 */

return [
    'dsn' => env('SENTRY_LARAVEL_DSN'),

    // capture release as git sha
    'release' => trim(exec('git log --pretty="%h" -n1 HEAD')),

    // Capture bindings on SQL queries
    'breadcrumbs.sql_bindings' => true,

    // Capture default user context
    'user_context' => true,
];
