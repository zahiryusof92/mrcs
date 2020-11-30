<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model {

    use HasFactory;

    public static function getFields() {
        return [
            'name',
            'state',
            'ic_no',
            'gender',
            'age',
            'category',
            'special_needs',
            'address',
            'postcode',
            'phone_no',
            'race',
            'marriage_status',
            'employment_status_before_mco',
            'occupation_before_mco',
            'employment_status_after_mco',
            'residence_status',
            'temporarily_lodging',
            'monthly_income_before_mco',
            'monthly_income_after_mco',
            'spouse_name',
            'spouse_ic_no',
            'working_family',
            'spouse_employment_status_before_mco',
            'spouse_monthly_income_before_mco',
            'spouse_monthly_income_after_mco',
            'size_household',
            'total_of_men',
            'total_of_women',
            'total_of_baby',
            'total_of_children',
            'total_of_teenager',
            'total_of_adult',
            'total_of_senior_citizen',
            'assistance_provider',
            'assistance_received',
            'assistance_most_needed',
            'others_assistance_needed',
            'mco_affected',
            'type_mco_affected',
            'method_assistance_distributed',
            'bank_status',
            'bank_inactive',
            'others_method_distributed',
            'bank_name',
            'bank_account_no',
            'purpose_of_assistance',
            'email',
            'acknowledge',
        ];
    }

}
