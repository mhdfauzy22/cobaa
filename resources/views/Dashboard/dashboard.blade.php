@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0  text-white">Dashboard</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Projects</h4>
                                </div>
                                <div
                                    class="icon-shape icon-md bg-light-primary text-primary
                    rounded-2">
                                    <i class="bi bi-briefcase fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">18</h1>
                                <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Active Task</h4>
                                </div>
                                <div
                                    class="icon-shape icon-md bg-light-primary text-primary
                    rounded-2">
                                    <i class="bi bi-list-task fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">132</h1>
                                <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Teams</h4>
                                </div>
                                <div
                                    class="icon-shape icon-md bg-light-primary text-primary
                    rounded-2">
                                    <i class="bi bi-people fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">12</h1>
                                <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                    <!-- card -->
                    <div class="card ">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                <div>
                                    <h4 class="mb-0">Productivity</h4>
                                </div>
                                <div
                                    class="icon-shape icon-md bg-light-primary text-primary
                    rounded-2">
                                    <i class="bi bi-bullseye fs-4"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div>
                                <h1 class="fw-bold">76%</h1>
                                <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
