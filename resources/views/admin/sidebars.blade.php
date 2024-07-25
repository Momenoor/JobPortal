{{-- <div class="card border-0 shadow mb-4 p-3">
    <div class="s-body text-center mt-3">

        @if (Auth::user()->image != '')
        <img src="{{ asset('profile_pic/'.Auth::user()->image) }}" alt="avatar"  class="rounded-circle img-fluid" style="width: 150px;">
    @else
        <img src="{{ asset('assets/images/avatar7.png') }}" alt="avatar"  class="rounded-circle img-fluid" style="width: 150px;">
    @endif
        <h5 class="mt-3 pb-0">{{ Auth::user()->name }}</h5>
        <div class="d-flex justify-content-center mb-2">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Change Profile Picture</button>
        </div>
    </div>
</div> --}}
<div class="card account-nav border-0 shadow mb-4 mb-lg-0">
    <div class="card-body p-0">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item d-flex justify-content-between p-3">
                <a href="{{ route('admin.users.index') }}">Users</a>
            </li>
            <li class="list-group-item d-flex justify-content-between p-3">
                <a href="{{ route('jobs.index') }}">Jobs</a>
            </li>
            <li class="list-group-item d-flex justify-content-between p-3">
                <a href="{{ route('applications.index') }}">Job Applications</a>
            </li>
            <li class="list-group-item d-flex justify-content-between p-3">
                <a href="{{ route('categories.index') }}">Category</a>
            </li>
            <li class="list-group-item d-flex justify-content-between p-3">
                <a href="{{ route('jobs.create') }}">Post Job</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>