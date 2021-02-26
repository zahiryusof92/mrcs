<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Applicant extends Model {

    use HasFactory;

    public function question() {
        return $this->hasMany('App\Models\Question')->orderBy('sort_no');
    }

    public static function getTotalToday() {
        return Applicant::whereDate('created_at', Carbon::today())->count();
    }

    public static function getTotalYesterday() {
        return Applicant::whereDate('created_at', Carbon::yesterday())->count();
    }

    public static function getTotalAll() {
        return Applicant::count();
    }

}
