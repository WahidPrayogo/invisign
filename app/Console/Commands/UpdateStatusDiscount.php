<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Requests\Admin\ProductDiscountRequest;
use App\Models\ProductDiscount;
use Carbon\Carbon;

class UpdateStatusDiscount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update discount status every day';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $mytime = Carbon::now();
        /* */
        ProductDiscount::whereDate('end_at', '<', $mytime)
            ->update(['status' => "EXPIRED"]);

        $this->info('Hourly Update has been send successfully');
    }
}
