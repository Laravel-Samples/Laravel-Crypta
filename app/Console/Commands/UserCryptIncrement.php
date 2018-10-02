<?php
/**
 * PHP Version 7.2
 *
 * @category Commands
 * @package  App\Console\Commands
 * @author   James Mallon <jamesmallondev@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.linkedin.com/in/thiago-mallon/
 */

/**
 * File namespace
 *
 * @subpackage Console\Commands
 */
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\TransferReceived;
use App\User;
use App\Transfer;

/**
 * Class UserCryptIncrement
 *
 * @category Commands
 * @package  App\Console\Commands
 * @author   James Mallon <jamesmallondev@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.linkedin.com/in/thiago-mallon/
 */
class UserCryptIncrement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:crypt_increment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description;  
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->description = 'Icrements in '.
        env("SYS_BONUS_AMT").
        ' the cryptocurrency amount of all users';

    }

    /**
     * Execute the console command.
     *
     * @todo Find a better way to implement a insertion base on a select.
     *
     * @return mixed
     */
    public function handle()
    {
        $now = now();
        \DB::table('users')
            ->update(
                ['crypt_amount' => \DB::raw('crypt_amount+'.env("SYS_BONUS_AMT")),
                'updated_at'=> $now]
            );

        TransferReceived::dispatch(env('SYS_USER_USERNAME'), env('SYS_BONUS_AMT'), $now);
    }
}
