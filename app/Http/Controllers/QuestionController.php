<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('questions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $applicant = array();
        $data = array();

        if ($request) {
            if ($request->question && $request->answer) {
                foreach ($request->question as $key => $question) {
                    if ($key) {
                        if ($key == 'name') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['name'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'state') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['state'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'ic_no') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['ic_no'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'address') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['address'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'postcode') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['postcode'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'phone_no') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['phone_no'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'race') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['race'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'email') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['email'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'gender') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['gender'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'age') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['age'] = $request->answer[$key];
                            }
                        }
                        if ($key == 'marriage_status') {
                            if (array_key_exists($key, $request->answer)) {
                                $applicant['marriage_status'] = $request->answer[$key];
                            }
                        }
                    }
                }

                if ($applicant) {
                    $applicant['created_at'] = date('Y-m-d H:i:s');
                    $applicant['updated_at'] = date('Y-m-d H:i:s');

                    $applicant_id = Applicant::insertGetId($applicant);

                    if ($applicant_id) {
                        foreach ($request->question as $key => $question) {
                            if ($key) {
                                if (array_key_exists($key, $request->answer)) {
                                    $data[] = array(
                                        'applicant_id' => $applicant_id,
                                        'key' => $key,
                                        'question' => $question,
                                        'answer' => (is_array($request->answer[$key]) ? implode(', ', $request->answer[$key]) : $request->answer[$key]),
                                        'created_at' => date('Y-m-d H:i:s'),
                                        'updated_at' => date('Y-m-d H:i:s'),
                                    );
                                }
                            }
                        }

                        if ($data) {
                            $success = Question::insert($data);

                            if ($success) {
                                if (isset($applicant['email']) && !empty($applicant['email'])) {
//                                    Mail::to($applicant['email'])->send(new RegisterEmail());
                                }

                                return redirect()->route('questions.index')->with('success', __('questions.success.title'));
                            }
                        }
                    }
                }
            }
        }

        return redirect()->route('questions.index')->with('error', __('questions.error.title'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question) {
        //
    }

}
