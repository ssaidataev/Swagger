<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSwagger extends Command
{
    /**
     * Название и сигнатура команды.
     *
     * @var string
     */
    protected $signature = 'generate:swagger';

    /**
     * Описание команды.
     *
     * @var string
     */
    protected $description = 'Генерация Swagger-документации для API';

    /**
     * Выполнение команды.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Генерация Swagger-документации...');
        \Artisan::call('l5-swagger:generate');
        $this->info('Документация успешно сгенерирована!');
    }
}
