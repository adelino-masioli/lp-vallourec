<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Cupom;
use App\ListCupom;
use League\Csv\Reader;

class UploadCupom extends Command
{
    //pra rodar esse carinha forçando 
    //php -dmemory_limit=1G artisan command:uploadcupom 

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:uploadcupom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Uploads Cupons';

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
        /*-------------*/
        $listcupons = ListCupom::where('status', 1)->count();
        if($listcupons > 0){
            $listcupons = ListCupom::where('status', 1)->first();
            //$arquivo = public_path() . '/' .'upload/CAMPANHA_11_UAR1_CUPONS_ATRIB_20171204.csv';
            $arquivo = public_path() . '/' .'upload/'.$listcupons->document;
            if (!empty($arquivo)) {

                //$filename = public_path() . '/' . $arquivo;
                $filename =  $arquivo;
                if ($filename) {

                    $csv = Reader::createFromPath($filename);

                    //seta o delimitador
                    $csv->setDelimiter(";");

                    foreach ($csv as $index => $row) {
                        if ($row[0] != '') {
                            if ($index > 0) {
                                $document1 = str_replace('-', '', trim($row[1]));
                                $document2 = str_replace('.', '', $document1);
                                $cupom     = str_replace(',', '', trim($row[3]));
                                $locale_name = str_replace('REGIAO', '', trim($row[4]));

                                $data_db = array(
                                    'document'   => trim($document2),
                                    'serie'      => trim($row[2]),
                                    'cupom'      => trim($cupom),
                                    'uar'        => trim($row[4]),
                                    'singular'   => trim('Região '.$locale_name),
                                    'created_at' => date('Y-m-d H:i:s'),
                                    'updated_at' => date('Y-m-d H:i:s'),

                                );
                                //$validate = Cupom::where('cupom', $cupom)->count();
                                //if($validate == 0) {
                                    $createcsv = new Cupom($data_db);
                                    $createcsv->save();
                               // }
                            }
                        }
                    }
                    //update
                    $cupom_list = ListCupom::find($listcupons->id);
                    $data = ['status'=>2];                
                    $cupom_list->fill($data)->save();

                } else {
                    return FALSE;
                }

            }
            /*-------------*/
        }
    }
}
