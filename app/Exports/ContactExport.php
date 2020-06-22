<?php

namespace App\Exports;

use App\Models\Contactuses;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactExport implements FromCollection, WithHeadings
{

    /**
    * @return \Illuminate\Support\Heading
    */
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Mobile Phone',
            'Budget',
            'Occupation',
            'City',
            'Project',
            'Comment',
        ];
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        // $data = ApplyProjects::select('name','email','phone','budget','comment')->with(array('project'=>function($query){
        //     $query->select('title');
        // }))->get();
        $data = Contactuses::leftJoin('projects','projects.id','=','contact_uses.project_id')->leftJoin('cities','cities.id','=','contact_uses.city_id')->select('name','email','phone','budget','occupation','cities.title as dest','projects.title','comment');
        if(request()->q && request()->q !=""){
            $data = $data->whereDate('contact_uses.created_at',request()->q);    
        }
        $data = $data->get();
        return $data;
    }
}
