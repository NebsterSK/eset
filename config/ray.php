<?php

return [

    /*
    * When enabled, all cache events  will automatically be sent to Ray.
    */
    'send_cache_to_ray' => false,

    /*
    * When enabled, all things passed to `dump` or `dd`
    * will be sent to Ray as well.
    */
    'send_dumps_to_ray' => true,

    /*
    * When enabled all job events will automatically be sent to Ray.
    */
    'send_jobs_to_ray' => false,

    /*
    * When enabled, all things logged to the application log
    * will be sent to Ray as well.
    */
    'send_log_calls_to_ray' => false,

    /*
    * When enabled, all queries will automatically be sent to Ray.
    */
    'send_queries_to_ray' => false,

    /*
     * When enabled, all duplicate queries will automatically be sent to Ray.
     */
    'send_duplicate_queries_to_ray' => false,

    /*
    * When enabled, all requests made to this app will automatically be sent to Ray.
    */
    'send_requests_to_ray' => false,

    /*
    * When enabled, all views that are rendered automatically be sent to Ray.
    */
    'send_views_to_ray' => false,

    /*
     * When enabled, all exceptions will be automatically sent to Ray.
     */
    'send_exceptions_to_ray' => true,

    /*
     *  The host used to communicate with the Ray app.
     */
    'host' => 'host.docker.internal',

    /*
     *  The port number used to communicate with the Ray app.
     */
    'port' => 23517,

    /*
     *  Absolute base path for your sites or projects in Homestead, Vagrant, Docker, or another remote development server.
     */
    'remote_path' => '/var/www',

    /*
     *  Absolute base path for your sites or projects on your local computer where your IDE or code editor is running on.
     */
    'local_path' => '/var/www',

];