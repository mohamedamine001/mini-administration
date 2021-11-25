<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class ClientExport implements FromCollection, WithHeadings, WithTitle
{
    
    public function headings():array{
        return[
            'Prénom',
            'Nom',
            'Email',
            'Téléphone',
            'Nbre de commandes'
        ];
    }

    public function title(): string
    {
        return 'Clients List';
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Client::all();
        return collect(Client::getClient());
    }
}
