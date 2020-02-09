<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\DestructiveAction;
use Laravel\Nova\Fields\ActionFields;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Laravel\Nova\Actions\Actionable;

class RefreshFpTitansDatabase extends DestructiveAction
{
    use InteractsWithQueue, Queueable, SerializesModels, Actionable;

    public $showOnTableRow = true;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        Log::info('dropping database. with complete refresh!');
        Artisan::call('migrate:fresh --no-interaction');

        Log::info('refreshed database. seeding...');
        Artisan::call('db:seed --no-interaction');

        Log::info('finished seeding!');
        return Action::message('Refreshed all heroines and logs!');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
