<?php

namespace Royalcms\Component\ErrorDisplay;

use Royalcms\Component\Support\ServiceProvider;

class ErrorDisplayServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
        RC_Hook::add_action('handle_404_error', function ($msg, $url) {
            ErrorDisplay::http_error(404, $msg);
        });

        RC_Hook::add_action('handle_500_error', function ($msg, $url) {
            ErrorDisplay::http_error(500, $msg);
        });
	}

}
