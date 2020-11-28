@extends('layouts.frontend.app')

@section('content')
<div id="main_container" class="visible">

    <div id="header_in">
        <div id="logo_in">
            <h1><a href="{{ url('/') }}" title="{{ config('app.name', 'Laravel') }}">{{ config('app.name', 'Laravel') }}</a></h1>
        </div>
    </div>

    <div class="wrapper_in">
        <div class="container-fluid">

            <div class="subheader" id="quote"></div>

            <div class="row">
                <aside class="col-xl-4 col-lg-4">
                    <h2>{{ __('questions.title') }}</h2>
                    <p class="lead text-justify">{{ __('questions.description') }}</p>
                </aside>
                <!-- /aside -->

                <div class="col-xl-8 col-lg-8">
                    <div id="wizard_container">
                        <div id="top-wizard">
                            <strong>{{ __('questions.progress') }}</strong>
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->

                        <form id="wrapped" method="POST" action="{{ route('questions.store') }}">
                            @csrf
                            @php $count = 1; @endphp

                            <input type="text" id="website" name="website" value="{{ old('website') }}">

                            <div id="middle-wizard">
                                <div class="step">

                                    <h3 class="main_question"><strong>1/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="name"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.name.title') }}</label>
                                            <input type="hidden" name="question[name]" value="{{ __('questions.name.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.name.help') }}</i></small>
                                            <div class="form-group">
                                                <input type="name" name="answer[name]" id="name" class="required form-control" placeholder="{{ __('questions.name.title') }}" autocomplete="name" value="{{ old('answer.name') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="state"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.state.title') }}</label>
                                            <input type="hidden" name="question[state]" value="{{ __('questions.state.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.state.help') }}</i></small>
                                            <div class="form-group select"">                                              
                                                <div class="styled-select">
                                                    <select class="required" name="answer[state]" id="state" autocomplete="state">
                                                        <option value="">{{ __('questions.form.select') }}</option>
                                                        @for($x = 0; $x < 15; $x++)
                                                        <option value="{{ __('questions.state.value_' . $x) }}" {{ (old('answer.state') == __('questions.state.value_' . $x) ? 'selected' : '') }}>{{ __('questions.state.value_' . $x) }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="ic_no"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.ic_no.title') }}</label>
                                            <input type="hidden" name="question[ic_no]" value="{{ __('questions.ic_no.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.ic_no.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="text" name="answer[ic_no]" id="ic_no" class="required form-control" placeholder="{{ __('questions.ic_no.title') }}" autocomplete="ic_no" minlength="6" value="{{ old('answer.ic_no') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->                                       
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">                                        
                                        <div class="col-sm-12">
                                            <label class="form-label" for="gender"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.gender.title') }}</label>
                                            <input type="hidden" name="question[gender]" value="{{ __('questions.gender.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.gender.help') }}</i></small>
                                            @for($x = 0; $x < 2; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[gender]" type="radio" value="{{ __('questions.gender.value_' . $x) }}" class="required icheck" {{ (old('answer.gender') == __('questions.gender.value_' . $x) ? 'checked' : '') }}>{{ __('questions.gender.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="age"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.age.title') }}</label>
                                            <input type="hidden" name="question[age]" value="{{ __('questions.age.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.age.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[age]" type="radio" value="{{ __('questions.age.value_' . $x) }}" class="required icheck" {{ (old('answer.age') == __('questions.age.value_' . $x) ? 'checked' : '') }}>{{ __('questions.age.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="category"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.category.title') }}</label>
                                            <input type="hidden" name="question[category]" value="{{ __('questions.category.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.category.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[category][]" type="checkbox" value="{{ __('questions.category.value_' . $x) }}" class="required icheck" {{ (old('answer.category.' . $x) == __('questions.category.value_' . $x) ? 'checked' : '') }}>{{ __('questions.category.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->


                                <div class="step">

                                    <h3 class="main_question"><strong>2/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="special_needs"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.special_needs.title') }}</label>
                                            <input type="hidden" name="question[special_needs]" value="{{ __('questions.special_needs.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.special_needs.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[special_needs][]" type="checkbox" value="{{ __('questions.special_needs.value_' . $x) }}" class="required icheck" {{ (old('answer.special_needs.' . $x) == __('questions.special_needs.value_' . $x) ? 'checked' : '') }}>{{ __('questions.special_needs.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="address"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.address.title') }}</label>
                                            <input type="hidden" name="question[address]" value="{{ __('questions.address.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.address.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="text" name="answer[address]" id="address" class="required form-control" placeholder="{{ __('questions.address.title') }}" autocomplete="street-address" value="{{ old('answer.address') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="postcode"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.postcode.title') }}</label>
                                            <input type="hidden" name="question[postcode]" value="{{ __('questions.postcode.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.postcode.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="tel" name="answer[postcode]" id="postcode" class="required form-control" placeholder="{{ __('questions.postcode.title') }}" autocomplete="postal-code" pattern="[0-9]*" maxlength="6" value="{{ old('answer.postcode') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="phone_no"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.phone_no.title') }}</label>
                                            <input type="hidden" name="question[phone_no]" value="{{ __('questions.phone_no.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.phone_no.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="tel" name="answer[phone_no]" id="phone_no" class="required form-control" placeholder="{{ __('questions.phone_no.title') }}" autocomplete="tel-national" pattern="[0-9]*" maxlength="10" value="{{ old('answer.phone_no') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="race"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.race.title') }}</label>
                                            <input type="hidden" name="question[race]" value="{{ __('questions.race.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.race.help') }}</i></small>
                                            <div class="form-group select"">                                                
                                                <div class="styled-select">
                                                    <select class="required" name="answer[race]" id="race" autocomplete="race">
                                                        <option value="">{{ __('questions.form.select') }}</option>
                                                        @for($x = 0; $x < 7; $x++)
                                                        <option value="{{ __('questions.race.value_' . $x) }}" {{ (old('answer.race') == __('questions.race.value_' . $x) ? 'selected' : '') }}>{{ __('questions.race.value_' . $x) }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="marriage_status"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.marriage_status.title') }}</label>
                                            <input type="hidden" name="question[marriage_status]" value="{{ __('questions.marriage_status.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.marriage_status.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[marriage_status]" type="radio" value="{{ __('questions.marriage_status.value_' . $x) }}" class="required icheck" {{ (old('answer.marriage_status') == __('questions.marriage_status.value_' . $x) ? 'checked' : '') }}>{{ __('questions.marriage_status.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->


                                <div class="step">

                                    <h3 class="main_question"><strong>3/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="employment_status_before_mco"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.employment_status_before_mco.title') }}</label>
                                            <input type="hidden" name="question[employment_status_before_mco]" value="{{ __('questions.employment_status_before_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.employment_status_before_mco.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[employment_status_before_mco]" type="radio" value="{{ __('questions.employment_status_before_mco.value_' . $x) }}" class="required icheck" {{ (old('answer.employment_status_before_mco') == __('questions.employment_status_before_mco.value_' . $x) ? 'checked' : '') }}>{{ __('questions.employment_status_before_mco.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="occupation_before_mco"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.occupation_before_mco.title') }}</label>
                                            <input type="hidden" name="question[occupation_before_mco]" value="{{ __('questions.occupation_before_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.occupation_before_mco.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="text" name="answer[occupation_before_mco]" id="occupation_before_mco" class="required form-control" placeholder="{{ __('questions.occupation_before_mco.title') }}" autocomplete="occupation" value="{{ old('answer.occupation_before_mco') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="employment_status_after_mco"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.employment_status_after_mco.title') }}</label>
                                            <input type="hidden" name="question[employment_status_after_mco]" value="{{ __('questions.employment_status_after_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.employment_status_after_mco.help') }}</i></small>
                                            @for($x = 0; $x < 6; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[employment_status_after_mco]" type="radio" value="{{ __('questions.employment_status_after_mco.value_' . $x) }}" class="required icheck" {{ (old('answer.employment_status_after_mco') == __('questions.employment_status_after_mco.value_' . $x) ? 'checked' : '') }}>{{ __('questions.employment_status_after_mco.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor                                            
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="residence_status"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.residence_status.title') }}</label>
                                            <input type="hidden" name="question[residence_status]" value="{{ __('questions.residence_status.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.residence_status.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[residence_status]" type="radio" value="{{ __('questions.residence_status.value_' . $x) }}" class="required icheck" {{ (old('answer.residence_status') == __('questions.residence_status.value_' . $x) ? 'checked' : '') }}>{{ __('questions.residence_status.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="temporarily_lodging"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.temporarily_lodging.title') }}</label>
                                            <input type="hidden" name="question[temporarily_lodging]" value="{{ __('questions.temporarily_lodging.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.temporarily_lodging.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[temporarily_lodging]" type="radio" value="{{ __('questions.temporarily_lodging.value_' . $x) }}" class="required icheck" {{ (old('answer.temporarily_lodging') == __('questions.temporarily_lodging.value_' . $x) ? 'checked' : '') }}>{{ __('questions.temporarily_lodging.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="monthly_income_before_mco"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.monthly_income_before_mco.title') }}</label>
                                            <input type="hidden" name="question[monthly_income_before_mco]" value="{{ __('questions.monthly_income_before_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.monthly_income_before_mco.help') }}</i></small>
                                            @for($x = 0; $x < 6; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[monthly_income_before_mco]" type="radio" value="{{ __('questions.monthly_income_before_mco.value_' . $x) }}" class="required icheck" {{ (old('answer.monthly_income_before_mco') == __('questions.monthly_income_before_mco.value_' . $x) ? 'checked' : '') }}>{{ __('questions.monthly_income_before_mco.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor                                            
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->


                                <div class="step">

                                    <h3 class="main_question"><strong>4/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="monthly_income_after_mco"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.monthly_income_after_mco.title') }}</label>
                                            <input type="hidden" name="question[monthly_income_after_mco]" value="{{ __('questions.monthly_income_after_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.monthly_income_after_mco.help') }}</i></small>
                                            @for($x = 0; $x < 7; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[monthly_income_after_mco]" type="radio" value="{{ __('questions.monthly_income_after_mco.value_' . $x) }}" class="required icheck" {{ (old('answer.monthly_income_after_mco') == __('questions.monthly_income_after_mco.value_' . $x) ? 'checked' : '') }}>{{ __('questions.monthly_income_after_mco.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="spouse_name">{{ $count++ }}. {{ __('questions.spouse_name.title') }}</label>
                                            <input type="hidden" name="question[spouse_name]" value="{{ __('questions.spouse_name.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.spouse_name.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="text" name="answer[spouse_name]" id="spouse_name" class="form-control" placeholder="{{ __('questions.spouse_name.title') }}" autocomplete="name" value="{{ old('answer.spouse_name') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="spouse_ic_no">{{ $count++ }}. {{ __('questions.spouse_ic_no.title') }}</label>
                                            <input type="hidden" name="question[spouse_ic_no]" value="{{ __('questions.spouse_ic_no.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.spouse_ic_no.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="text" name="answer[spouse_ic_no]" id="spouse_ic_no" class="form-control" placeholder="{{ __('questions.spouse_ic_no.title') }}" autocomplete="ic_no" minlength="6" maxlength="12" value="{{ old('answer.spouse_ic_no') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="working_family"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.working_family.title') }}</label>
                                            <input type="hidden" name="question[working_family]" value="{{ __('questions.working_family.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.working_family.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[working_family]" type="radio" value="{{ __('questions.working_family.value_' . $x) }}" class="required icheck" {{ (old('answer.working_family') == __('questions.working_family.value_' . $x) ? 'checked' : '') }}>{{ __('questions.working_family.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="spouse_employment_status_before_mco">{{ $count++ }}. {{ __('questions.spouse_employment_status_before_mco.title') }}</label>
                                            <input type="hidden" name="question[spouse_employment_status_before_mco]" value="{{ __('questions.spouse_employment_status_before_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.spouse_employment_status_before_mco.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[spouse_employment_status_before_mco]" type="radio" value="{{ __('questions.spouse_employment_status_before_mco.value_' . $x) }}" class="icheck" {{ (old('answer.spouse_employment_status_before_mco') == __('questions.spouse_employment_status_before_mco.value_' . $x) ? 'checked' : '') }}>{{ __('questions.spouse_employment_status_before_mco.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="spouse_monthly_income_before_mco">{{ $count++ }}. {{ __('questions.spouse_monthly_income_before_mco.title') }}</label>
                                            <input type="hidden" name="question[spouse_monthly_income_before_mco]" value="{{ __('questions.spouse_monthly_income_before_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.spouse_monthly_income_before_mco.help') }}</i></small>
                                            @for($x = 0; $x < 7; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[spouse_monthly_income_before_mco]" type="radio" value="{{ __('questions.spouse_monthly_income_before_mco.value_' . $x) }}" class="icheck" {{ (old('answer.spouse_monthly_income_before_mco') == __('questions.spouse_monthly_income_before_mco.value_' . $x) ? 'checked' : '') }}>{{ __('questions.spouse_monthly_income_before_mco.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->


                                <div class="step">

                                    <h3 class="main_question"><strong>5/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="spouse_monthly_income_after_mco">{{ $count++ }}. {{ __('questions.spouse_monthly_income_after_mco.title') }}</label>
                                            <input type="hidden" name="question[spouse_monthly_income_after_mco]" value="{{ __('questions.spouse_monthly_income_after_mco.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.spouse_monthly_income_after_mco.help') }}</i></small>
                                            @for($x = 0; $x < 7; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[spouse_monthly_income_after_mco]" type="radio" value="{{ __('questions.spouse_monthly_income_after_mco.value_' . $x) }}" class="icheck" {{ (old('answer.spouse_monthly_income_after_mco') == __('questions.spouse_monthly_income_after_mco.value_' . $x) ? 'checked' : '') }}>{{ __('questions.spouse_monthly_income_after_mco.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="size_household"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.size_household.title') }}</label>
                                            <input type="hidden" name="question[size_household]" value="{{ __('questions.size_household.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.size_household.help') }}</i></small>
                                            @for($x = 0; $x < 3; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[size_household]" type="radio" value="{{ __('questions.size_household.value_' . $x) }}" class="required icheck" {{ (old('answer.size_household') == __('questions.size_household.value_' . $x) ? 'checked' : '') }}>{{ __('questions.size_household.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="total_of_men"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.total_of_men.title') }}</label>
                                            <input type="hidden" name="question[total_of_men]" value="{{ __('questions.total_of_men.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.total_of_men.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[total_of_men]" type="radio" value="{{ __('questions.total_of_men.value_' . $x) }}" class="required icheck" {{ (old('answer.total_of_men') == __('questions.total_of_men.value_' . $x) ? 'checked' : '') }}>{{ __('questions.total_of_men.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="total_of_women"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.total_of_women.title') }}</label>
                                            <input type="hidden" name="question[total_of_women]" value="{{ __('questions.total_of_women.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.total_of_women.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[total_of_women]" type="radio" value="{{ __('questions.total_of_women.value_' . $x) }}" class="required icheck" {{ (old('answer.total_of_women') == __('questions.total_of_women.value_' . $x) ? 'checked' : '') }}>{{ __('questions.total_of_women.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="total_of_baby"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.total_of_baby.title') }}</label>
                                            <input type="hidden" name="question[total_of_baby]" value="{{ __('questions.total_of_baby.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.total_of_baby.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[total_of_baby]" type="radio" value="{{ __('questions.total_of_baby.value_' . $x) }}" class="required icheck" {{ (old('answer.total_of_baby') == __('questions.total_of_baby.value_' . $x) ? 'checked' : '') }}>{{ __('questions.total_of_baby.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="total_of_children"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.total_of_children.title') }}</label>
                                            <input type="hidden" name="question[total_of_children]" value="{{ __('questions.total_of_children.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.total_of_children.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[total_of_children]" type="radio" value="{{ __('questions.total_of_children.value_' . $x) }}" class="required icheck" {{ (old('answer.total_of_children') == __('questions.total_of_children.value_' . $x) ? 'checked' : '') }}>{{ __('questions.total_of_children.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->


                                <div class="step">

                                    <h3 class="main_question"><strong>6/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="total_of_teenager"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.total_of_teenager.title') }}</label>
                                            <input type="hidden" name="question[total_of_teenager]" value="{{ __('questions.total_of_teenager.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.total_of_teenager.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[total_of_teenager]" type="radio" value="{{ __('questions.total_of_teenager.value_' . $x) }}" class="required icheck" {{ (old('answer.total_of_teenager') == __('questions.total_of_teenager.value_' . $x) ? 'checked' : '') }}>{{ __('questions.total_of_teenager.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="total_of_adult"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.total_of_adult.title') }}</label>
                                            <input type="hidden" name="question[total_of_adult]" value="{{ __('questions.total_of_adult.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.total_of_adult.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[total_of_adult]" type="radio" value="{{ __('questions.total_of_adult.value_' . $x) }}" class="required icheck" {{ (old('answer.total_of_women') == __('questions.total_of_adult.value_' . $x) ? 'checked' : '') }}>{{ __('questions.total_of_adult.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="total_of_senior_citizen"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.total_of_senior_citizen.title') }}</label>
                                            <input type="hidden" name="question[total_of_senior_citizen]" value="{{ __('questions.total_of_senior_citizen.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.total_of_senior_citizen.help') }}</i></small>
                                            @for($x = 0; $x < 4; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[total_of_senior_citizen]" type="radio" value="{{ __('questions.total_of_senior_citizen.value_' . $x) }}" class="required icheck" {{ (old('answer.total_of_senior_citizen') == __('questions.total_of_senior_citizen.value_' . $x) ? 'checked' : '') }}>{{ __('questions.total_of_senior_citizen.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="assistance_provider"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.assistance_provider.title') }}</label>
                                            <input type="hidden" name="question[assistance_provider]" value="{{ __('questions.assistance_provider.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.assistance_provider.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[assistance_provider][]" type="checkbox" value="{{ __('questions.assistance_provider.value_' . $x) }}" class="required icheck" {{ (old('answer.assistance_provider.' . $x) == __('questions.assistance_provider.value_' . $x) ? 'checked' : '') }}>{{ __('questions.assistance_provider.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="assistance_received"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.assistance_received.title') }}</label>
                                            <input type="hidden" name="question[assistance_received]" value="{{ __('questions.assistance_received.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.assistance_received.help') }}</i></small>
                                            @for($x = 0; $x < 8; $x++)
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[assistance_received][]" type="checkbox" value="{{ __('questions.assistance_received.value_' . $x) }}" class="required icheck" {{ (old('answer.assistance_received.' . $x) == __('questions.assistance_received.value_' . $x) ? 'checked' : '') }}>{{ __('questions.assistance_received.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="assistance_most_needed"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.assistance_most_needed.title') }}</label>
                                            <input type="hidden" name="question[assistance_most_needed]" value="{{ __('questions.assistance_most_needed.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.assistance_most_needed.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[assistance_most_needed]" type="radio" value="{{ __('questions.assistance_most_needed.value_' . $x) }}" class="required icheck" {{ (old('answer.assistance_most_needed') == __('questions.assistance_most_needed.value_' . $x) ? 'checked' : '') }}>{{ __('questions.assistance_most_needed.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->


                                <div class="step">

                                    <h3 class="main_question"><strong>7/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="others_assistance_needed"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.others_assistance_needed.title') }}</label>
                                            <input type="hidden" name="question[others_assistance_needed]" value="{{ __('questions.others_assistance_needed.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.others_assistance_needed.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[others_assistance_needed]" type="radio" value="{{ __('questions.others_assistance_needed.value_' . $x) }}" class="required icheck" {{ (old('answer.others_assistance_needed') == __('questions.others_assistance_needed.value_' . $x) ? 'checked' : '') }}>{{ __('questions.others_assistance_needed.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="mco_affected"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.mco_affected.title') }}</label>
                                            <input type="hidden" name="question[mco_affected]" value="{{ __('questions.mco_affected.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.mco_affected.help') }}</i></small>
                                            @for($x = 0; $x < 2; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[mco_affected]" type="radio" value="{{ __('questions.mco_affected.value_' . $x) }}" class="required icheck" {{ (old('answer.mco_affected') == __('questions.mco_affected.value_' . $x) ? 'checked' : '') }}>{{ __('questions.mco_affected.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="type_mco_affected"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.type_mco_affected.title') }}</label>
                                            <input type="hidden" name="question[type_mco_affected]" value="{{ __('questions.type_mco_affected.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.type_mco_affected.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[type_mco_affected][]" type="checkbox" value="{{ __('questions.type_mco_affected.value_' . $x) }}" class="required icheck" {{ (old('answer.type_mco_affected.' . $x) == __('questions.type_mco_affected.value_' . $x) ? 'checked' : '') }}>{{ __('questions.type_mco_affected.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="method_assistance_distributed"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.method_assistance_distributed.title') }}</label>
                                            <input type="hidden" name="question[method_assistance_distributed]" value="{{ __('questions.method_assistance_distributed.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.method_assistance_distributed.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[method_assistance_distributed][]" type="checkbox" value="{{ __('questions.method_assistance_distributed.value_' . $x) }}" class="required icheck" {{ (old('answer.method_assistance_distributed.' . $x) == __('questions.method_assistance_distributed.value_' . $x) ? 'checked' : '') }}>{{ __('questions.method_assistance_distributed.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="bank_status"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.bank_status.title') }}</label>
                                            <input type="hidden" name="question[bank_status]" value="{{ __('questions.bank_status.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.bank_status.help') }}</i></small>
                                            @for($x = 0; $x < 2; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[bank_status]" type="radio" value="{{ __('questions.bank_status.value_' . $x) }}" class="required icheck" {{ (old('answer.bank_status') == __('questions.bank_status.value_' . $x) ? 'checked' : '') }}>{{ __('questions.bank_status.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="bank_inactive"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.bank_inactive.title') }}</label>
                                            <input type="hidden" name="question[bank_inactive]" value="{{ __('questions.bank_inactive.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.bank_inactive.help') }}</i></small>
                                            @for($x = 0; $x < 5; $x++)
                                            <div class="form-group radio_questions">
                                                <label>
                                                    <input name="answer[bank_inactive]" type="radio" value="{{ __('questions.bank_inactive.value_' . $x) }}" class="required icheck" {{ (old('answer.bank_inactive') == __('questions.bank_inactive.value_' . $x) ? 'checked' : '') }}>{{ __('questions.bank_inactive.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->


                                <div class="submit step">

                                    <h3 class="main_question"><strong>8/8</strong>{{ __('questions.form.title') }}</h3>

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="others_method_distributed">{{ $count++ }}. {{ __('questions.others_method_distributed.title') }}</label>
                                            <input type="hidden" name="question[others_method_distributed]" value="{{ __('questions.others_method_distributed.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.others_method_distributed.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="text" name="answer[others_method_distributed]" id="others_method_distributed" class="form-control" placeholder="{{ __('questions.others_method_distributed.title') }}" value="{{ old('answer.others_method_distributed') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="bank_name"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.bank_name.title') }}</label>
                                            <input type="hidden" name="question[bank_name]" value="{{ __('questions.bank_name.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.bank_name.help') }}</i></small>
                                            <div class="form-group select"">                                                
                                                <div class="styled-select">
                                                    <select class="required" name="answer[bank_name]" id="bank_name" autocomplete="">
                                                        <option value="">{{ __('questions.form.select') }}</option>
                                                        @for($x = 0; $x < 33; $x++)
                                                        <option value="{{ __('questions.bank_name.value_' . $x) }}" {{ (old('answer.bank_name') == __('questions.bank_name.value_' . $x) ? 'selected' : '') }}>{{ __('questions.bank_name.value_' . $x) }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="bank_account_no"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.bank_account_no.title') }}</label>
                                            <input type="hidden" name="question[bank_account_no]" value="{{ __('questions.bank_account_no.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.bank_account_no.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="tel" name="answer[bank_account_no]" id="bank_account_no" class="required form-control" placeholder="{{ __('questions.bank_account_no.title') }}" minlength="6" value="{{ old('answer.bank_account_no') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="purpose_of_assistance"><span class="text-danger">*</span> {{ $count++ }}. {{ __('questions.purpose_of_assistance.title') }}</label>
                                            <input type="hidden" name="question[purpose_of_assistance]" value="{{ __('questions.purpose_of_assistance.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.purpose_of_assistance.help') }}</i></small>
                                            @for($x = 0; $x < 6; $x++)
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[purpose_of_assistance][]" type="checkbox" value="{{ __('questions.purpose_of_assistance.value_' . $x) }}" class="required icheck" {{ (old('answer.purpose_of_assistance.' . $x) == __('questions.purpose_of_assistance.value_' . $x) ? 'checked' : '') }}>{{ __('questions.purpose_of_assistance.value_' . $x) }}
                                                </label>
                                            </div>
                                            @endfor
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="email">{{ $count++ }}. {{ __('questions.email.title') }}</label>
                                            <input type="hidden" name="question[email]" value="{{ __('questions.email.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.email.help') }}</i></small>
                                            <div class="form-group">                                                
                                                <input type="email" name="answer[email]" id="email" class="form-control" placeholder="{{ __('questions.email.title') }}" autocomplete="email" value="{{ old('answer.email') }}">
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                    <div class="row add_bottom_15">
                                        <div class="col-sm-12">
                                            <label class="form-label" for="acknowledge">{{ __('questions.acknowledge.title') }}</label>
                                            <input type="hidden" name="question[acknowledge]" value="{{ __('questions.acknowledge.title') }}">
                                            <small class="form-text text-muted"><i>{{ __('questions.acknowledge.help') }}</i></small>
                                            <div class="form-group checkbox_questions">
                                                <label>
                                                    <input name="answer[acknowledge]" id="acknowledge" type="checkbox" value="{{ __('questions.acknowledge.value') }}" class="required required icheck">{{ __('questions.acknowledge.value') }}
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /col-sm-12 -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->

                            </div>
                            <!-- /middle-wizard -->

                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">{{ __('questions.button.previous') }}</button>
                                <button type="button" name="forward" class="forward">{{ __('questions.button.next') }}</button>
                                <button type="submit" name="process" class="submit">{{ __('questions.button.submit') }}</button>
                            </div>
                            <!-- /bottom-wizard -->

                        </form>
                    </div>
                    <!-- /Wizard container -->

                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        <!-- /container-fluid -->
    </div>
    <!-- /wrapper_in -->
</div>
<!-- /main_container -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('questions.acknowledgement') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ __('questions.acknowledge.title') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('script')
<script>
    /*  Wizard */
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        beforeSelect: function (event, state) {
            if ($('input#website').val().length != 0) {
                return false;
            }
            if (!state.isMovingForward) {
                return true;
            }
            var inputs = $(this).wizard('state').step.find(':input');
            return !inputs.length || !!inputs.valid();
        }
    });

    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function (event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
        }
    });
</script>
@endsection