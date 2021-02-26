<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Question;

class FixController extends Controller {

    public function updateFields() {
        $data1 = array();
        $data2 = array();
        $data3 = array();

        $applicants = Applicant::all();

        foreach ($applicants as $applicant) {
            if ($applicant->question) {
                if (count($applicant->question) < 48) {
                    $key1 = 'spouse_employment_status_before_mco';
                    $question1 = Question::where('applicant_id', $applicant->id)->where('key', $key1)->count();
                    if ($question1 <= 0) {
                        $data1[] = array(
                            'applicant_id' => $applicant->id,
                            'key' => $key1,
                            'question' => __('questions.' . $key1 . '.title'),
                            'answer' => '',
                            'created_at' => $applicant->created_at->format('Y-m-d H:i:s'),
                            'updated_at' => $applicant->updated_at->format('Y-m-d H:i:s'),
                        );
                    }

                    $key2 = 'spouse_monthly_income_before_mco';
                    $question2 = Question::where('applicant_id', $applicant->id)->where('key', $key2)->count();
                    if ($question2 <= 0) {
                        $data2[] = array(
                            'applicant_id' => $applicant->id,
                            'key' => $key2,
                            'question' => __('questions.' . $key2 . '.title'),
                            'answer' => '',
                            'created_at' => $applicant->created_at->format('Y-m-d H:i:s'),
                            'updated_at' => $applicant->updated_at->format('Y-m-d H:i:s'),
                        );
                    }

                    $key3 = 'spouse_monthly_income_after_mco';
                    $question3 = Question::where('applicant_id', $applicant->id)->where('key', $key3)->count();
                    if ($question3 <= 0) {
                        $data3[] = array(
                            'applicant_id' => $applicant->id,
                            'key' => $key3,
                            'question' => __('questions.' . $key3 . '.title'),
                            'answer' => '',
                            'created_at' => $applicant->created_at->format('Y-m-d H:i:s'),
                            'updated_at' => $applicant->updated_at->format('Y-m-d H:i:s'),
                        );
                    }
                }
            }
        }

        if ($data1) {
            Question::insert($data1);
        }
        if ($data2) {
            Question::insert($data2);
        }
        if ($data3) {
            Question::insert($data3);
        }

        return 'Success';
    }

    public function addSortNo() {
        $fields = Question::getFields();
        if ($fields) {
            foreach ($fields as $sort_no => $key) {
                $questions = Question::where('key', $key)->where('sort_no', '!=', $sort_no)->get();
                if ($questions) {
                    foreach ($questions as $question) {
                        if ($question) {
                            $question->sort_no = $sort_no;
                            $question->save();
                        }
                    }
                }
            }
        }

        return 'Success';
    }

}
