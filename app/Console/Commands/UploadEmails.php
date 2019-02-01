<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Email;
use League\Csv\Reader;

class UploadEmails extends Command
{
    //pra rodar esse carinha forçando 
    //php -dmemory_limit=1G artisan command:uploadcupom 

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:uploademails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Uploads Emails';

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
     * @return mixed
     */
    public function handle()
    {
        //$arquivo = public_path() . '/' .'email/emails.csv';
        $arquivo = 'email/emails.csv';
        if (!empty($arquivo)) {

            $filename = public_path() . '/' . $arquivo;
            if ($filename) {

                $csv = Reader::createFromPath($filename);

                //seta o delimitador
                $csv->setDelimiter(",");

                foreach ($csv as $index => $row) {
                    if ($row[0] != '') {
                        if ($index > 0) {
                            $data_db = array(
                                'email'   => trim($row[0])
                            );
                            
                            $validate = Email::where('email', trim($row[0]))->count();
                            if($validate == 0) {
                                $createcsv = new Email($data_db);
                                $createcsv->save();
                            }
                        }
                    }
                }

            } else {
                return FALSE;
            }

        }
        /*-------------*/
    }
}
