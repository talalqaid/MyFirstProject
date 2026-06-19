<?php
namespace App\Models;
use Illuminate\Support\Arr;
class Job{
    public static function all()
    {
        return [
        [
            'id'=>1,
            'title'=>'Manager',
            'salary'=>'$50,000'
        ],
        [
            'id'=>2,
            'title'=>'Engineer',
            'salary'=>'$40,000'
        ],
        [
            'id'=>3,
            'title'=>'Technician',
            'salary'=>'$32,000'
        ]
        ];
    }
    public static function find(int $id){
        $job=Arr::first(Job::all(), fn ($job)=>$job['id']==$id);
        if(!$job){
            abort(404);
        }
        return $job;
    }
}