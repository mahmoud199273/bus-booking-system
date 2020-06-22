<?php

namespace App\Exports;

use App\Models\ApplyProjects;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplyProjectsExport implements FromCollection, WithHeadings
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
            'Destination',
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
        $data = ApplyProjects::leftJoin('projects','projects.id','=','apply_projects.project_id')->leftJoin('cities','cities.id','=','apply_projects.city_id')->select('name','email','phone','budget','cities.title as dest','projects.title','comment');
        if(request()->q && request()->q !=""){
            $data = $data->whereDate('apply_projects.created_at',request()->q);    
        }
        $data = $data->get();
        return $data;
    }
}
