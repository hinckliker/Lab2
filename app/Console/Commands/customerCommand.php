<?php

namespace App\Console\Commands;

use App\Models\Addres;
use Illuminate\Console\Command;
use App\Models\Customer;

class customerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count-addresses {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $cusId = $this->argument('id');
        $count = Addres::where('customer_id','=',$cusId)->count();
        echo "Кол-во адресов у покупателя под id $cusId = $count \n";
        return $count;
    }
}
