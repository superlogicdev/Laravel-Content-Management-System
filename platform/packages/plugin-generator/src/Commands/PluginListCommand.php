<?php

namespace Botble\PluginGenerator\Commands;

use BaseHelper;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class PluginListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cms:plugin:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all plugins information';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $header = [
            'Name',
            'Alias',
            'Version',
            'Provider',
            'Status',
            'Author',
        ];
        $result = [];

        $plugins = BaseHelper::scanFolder(plugin_path());
        if (!empty($plugins)) {
            $installed = get_active_plugins();
            foreach ($plugins as $plugin) {
                if (!File::exists(plugin_path($plugin . '/plugin.json'))) {
                    continue;
                }

                $content = BaseHelper::getFileData(plugin_path($plugin . '/plugin.json'));
                if (!empty($content)) {
                    $result[] = [
                        Arr::get($content, 'name'),
                        $plugin,
                        Arr::get($content, 'version'),
                        Arr::get($content, 'provider'),
                        in_array($plugin, $installed) ? '✓ active' : '✘ inactive',
                        Arr::get($content, 'author'),
                    ];
                }
            }
        }

        $this->table($header, $result);
    }
}
