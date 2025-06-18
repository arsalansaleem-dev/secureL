@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <main class="col-md-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div class="row">
                    <!-- Example Cards -->
                    <div class="col-md-4">
                        <div class="card bg-primary text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Users</h5>
                                <p class="card-text">{{ $totalUsers }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Roles</h5>
                                <p class="card-text">{{ $totalRoles }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-warning text-dark mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Permissions</h5>
                                <p class="card-text">{{ $totalPermissions }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

   
@endsection
