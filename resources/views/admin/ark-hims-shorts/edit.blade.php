@extends('admin.layouts.app')

@section('title', 'Edit Video / Short')
@section('page_title', 'Edit Video / Short')

@section('content')
<div class="admin-card">
    <div class="card-header-admin">
        <h5><i class="fa-regular fa-pen" style="color: #8b5cf6; margin-right: 8px;"></i>Edit YouTube Short</h5>
        <a href="{{ route('admin.ark-hims-shorts.index') }}" class="btn-admin btn-outline-admin btn-sm-admin">
            <i class="fa-regular fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="card-body-admin">
        <form action="{{ route('admin.ark-hims-shorts.update', $arkHimsShort) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.ark-hims-shorts._form')
        </form>
    </div>
</div>
@endsection
