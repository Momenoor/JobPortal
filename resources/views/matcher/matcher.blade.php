@extends('layouts.app')
@section('main')
    <section class="section-4 bg-2">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="nav-link" href="{{ route("home") }}">Home</a></li>
                            <li class="breadcrumb-item active">Resume Matching</li>
                        </ol>
                    </nav>
                </div>
            </div>
            @if (session('message'))
                <div class="card border-0 shadow mb-4">
                    <div class="card-body card-form">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fs-4 mb-1">Matching Report</h3>
                            </div>
                            <div style="margin-top: -10px;">
                                <a href="{{route('applications.index')}}">Go Back</a>
                            </div>
                        </div>

                        <p>{{ session('message') }}</p>
                        <ul>
                            @foreach (session('top_resumes') as $index => $resume)
                                <li><a target="_blank" href="{{url('resumes/'.$resume)}}">{{ $resume }}</a> - {{ session('similarity_scores')[$index] }}</li>
                            @endforeach
                        </ul>
                    <div>
                        @endif
                        @if(session('error'))
                            <p>{{ session('error') }}</p>
                        @endif
                    </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
