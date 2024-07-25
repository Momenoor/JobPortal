@extends('layouts.app')

@section('main')

<section class="section-5 bg-2 ">
    <div class="container py-5 mt-1 pt-1">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                <div class="card border-0 shadow mb-4">
                    <div class="card-body  p-4">
                        <h3 class="fs-4 mb-1">User / Edit</h3>
                    <form action="{{ route('admin.users.update',$user->id) }}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="mb-2">Name*</label>
                            <input type="text"  id="name" name="name" placeholder="Enter Name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Email*</label>
                            <input type="text" placeholder="Enter Email" id="email" name="email"  class="form-control" value="{{ $user->email }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Designation*</label>
                            <input type="text" placeholder="Designation"  name="designation" id="designation" class="form-control" value="{{ $user->designation }}">
                        </div>
                        <div class="mb-4">
                            <label for="" class="mb-2">Mobile*</label>
                            <input type="text" placeholder="Mobile" name="mobile" id="mobile" class="form-control" value="{{ $user->mobile }}">
                        </div>
                        </div>
                        <div class="card-footer  p-4">
                        <button type="submit" class="btn Explore">Update</button>
                        </div>
                </form>
                </div>
            
            </div>
        </div>
    </div>
</section>

@endsection