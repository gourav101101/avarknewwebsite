@extends('admin.layouts.app')

@section('title', 'Add Video / Short')
@section('page_title', 'Add Video / Short')

@section('content')
<div class="admin-card">
    <div class="card-header-admin">
        <h5><i class="fa-brands fa-youtube" style="color: #ef4444; margin-right: 8px;"></i>Add YouTube Short</h5>
        <a href="{{ route('admin.ark-hims-shorts.index') }}" class="btn-admin btn-outline-admin btn-sm-admin">
            <i class="fa-regular fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="card-body-admin">
        <form action="{{ route('admin.ark-hims-shorts.store') }}" method="POST">
            @csrf
            @include('admin.ark-hims-shorts._form')
        </form>
    </div>
</div>
@endsection
