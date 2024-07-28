@extends('layouts.app')

@section('main')

    <section class="section-5 bg-2 ">
        <div class="container py-5 mt-1 pt-1">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Update Job</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    @include('admin.sidebars')
                </div>
                <div class="col-lg-9">
                    @include('account.message')
                    <form action="{{ route('jobs.update',$job) }} " method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card border-0 shadow mb-4 ">
                            <div class="card-body card-form p-4">
                                <h3 class="fs-4 mb-1">Update Job</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="mb-2">Title<span class="req">*</span></label>
                                        <input type="text" placeholder="Job Title" id="title" name="title"
                                               class="form-control" value="{{old('title',$job->title)}}">
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <label for="category" class="mb-2">Category<span class="req">*</span></label>
                                        <select name="category_id" id="category" class="form-control" >
                                            <option value="">Select a Category</option>
                                            @if ($categories->isNotEmpty())
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" @selected($category->id == old('category_id',$job->category_id))>{{ $category->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="" class="mb-2">Job Nature<span class="req">*</span></label>
                                        <select class="form-select" name="working_time" id="jobType" >
                                            <option>Select job type</option>
                                            @foreach ($jobTypes as $jobType)

                                                <option value="{{ $jobType }}" @selected($jobType == old('working_time',$job->working_time->value))>{{ $jobType }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6  mb-4">
                                        <label for="" class="mb-2">Vacancies<span class="req">*</span></label>
                                        <input type="number" min="1" placeholder="vacancies" id="vacancies" name="vacancies"
                                               class="form-control"  value="{{old('vacancies',$job->vacancies)}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-4 col-md-6">
                                        <label for="" class="mb-2">Salary</label>
                                        <input type="text" placeholder="Salary" id="salary" name="salary"
                                               class="form-control"  value="{{old('salary',$job->salary)}}">
                                    </div>

                                </div>

                                <div class="mb-4">
                                    <label for="" class="mb-2">Description<span class="req">*</span></label>
                                    <textarea class="form-control" name="description" id="description" cols="5"
                                               rows="5"
                                              placeholder="Description">{{ old('description',$job->description) }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Benefits</label>
                                    <textarea class="form-control" name="benefits" id="benefits" cols="5" rows="5"
                                              placeholder="Benefits">{{ old('benefits',$job->benefits) }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="" class="mb-2">Responsibility</label>
                                    <textarea class="form-control" name="responsibilities" id="responsibilities"
                                              cols="5" rows="5"
                                              placeholder="Responsibility">{{ old('responsibilities',$job->responsibilities) }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="qualifications" class="mb-2">Qualifications</label>
                                    <textarea class="form-control" name="qualifications" id="qualifications"
                                              cols="5" rows="5"
                                              placeholder="Qualifications">{{ old('qualifications',$job->qualifications) }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="experience" class="mb-2">Experience <span class="req">*</span></label>
                                    <select name="experience" id="experience" class="form-control" >
                                        <option value="1" @selected(old('experience',$job->experience) == 1)>1 Year</option>
                                        <option value="2" @selected(old('experience',$job->experience) == 2)>2 Years</option>
                                        <option value="3" @selected(old('experience',$job->experience) == 3)>3 Years</option>
                                        <option value="4" @selected(old('experience',$job->experience) == 4)>4 Years</option>
                                        <option value="5" @selected(old('experience',$job->experience) == 5)>5 Years</option>
                                        <option value="6" @selected(old('experience',$job->experience) == 6)>6 Years</option>
                                        <option value="7" @selected(old('experience',$job->experience) == 7)>7 Years</option>
                                        <option value="8" @selected(old('experience',$job->experience) == 8)>8 Years</option>
                                        <option value="9" @selected(old('experience',$job->experience) == 9)>9 Years</option>
                                        <option value="10" @selected(old('experience',$job->experience) == 10)>10 Years</option>
                                        <option value="10_plus" @selected(old('experience',$job->experience) == '10_plus')>10+ Years</option>
                                    </select>
                                </div>


                                <div class="mb-4">
                                    <label for="" class="mb-2">Keywords<span class="req">*</span></label>
                                    <input type="text" placeholder="keywords" id="keywords" name="keywords"
                                           class="form-control" value="{{old('keywords',$job->keywords)}}">
                                </div>

                                <h3 class="fs-4 mb-1 mt-5 border-top pt-5">Company Details</h3>

                                <div class="row">
                                    <div class="col-12">
                                        <select name="company_id" class="form-select">
                                            <option value="">Select a Company</option>
                                            @if($companies->isNotEmpty())
                                                @foreach($companies as $company) @endforeach
                                                <option value="{{$company->id}}" @selected($company->id == old('company_id',$job->company_id))>{{$company->name}}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer  p-4">
                                <button type="submit" class="btn Explore">Save Job</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
