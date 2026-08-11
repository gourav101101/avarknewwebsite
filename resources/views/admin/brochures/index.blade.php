@extends('admin.layouts.app')

@section('title', 'Manage Brochure')
@section('page_title', 'Brochure')

@section('content')
<div class="row g-4">
    <div class="col-lg-7">
        <div class="admin-card h-100">
            <div class="card-header-admin">
                <h5><i class="fa-regular fa-file-pdf" style="color: var(--admin-accent); margin-right: 8px;"></i>Product Brochure</h5>
            </div>
            <div class="p-4">
                @if($brochure)
                    <div class="d-flex align-items-center gap-3 p-3 rounded" style="background: var(--admin-surface-hover);">
                        <i class="fa-solid fa-file-pdf" style="font-size: 36px; color: #dc2626;"></i>
                        <div class="flex-grow-1" style="min-width: 0;">
                            <div style="font-weight: 600; overflow-wrap: anywhere;">{{ $brochure->original_name }}</div>
                            <small style="color: var(--admin-text-dim);">This is the brochure shown on all product pages.</small>
                        </div>
                        <a href="{{ asset($brochure->file_path) }}" target="_blank" class="btn-admin btn-outline-admin btn-sm-admin" title="View brochure">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                        <form action="{{ route('admin.brochures.destroy', $brochure) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-icon delete btn-delete" title="Delete brochure"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </div>
                @else
                    <div class="text-center py-4" style="color: var(--admin-text-dim);">
                        <i class="fa-regular fa-file-circle-xmark d-block mb-2" style="font-size: 38px;"></i>
                        No brochure is currently available for download.
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="admin-card h-100">
            <div class="card-header-admin"><h5>Upload New Brochure</h5></div>
            <form action="{{ route('admin.brochures.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                <label for="brochure" class="form-label">PDF file</label>
                <input type="file" name="brochure" id="brochure" class="form-control" accept="application/pdf,.pdf" required>
                <small class="d-block mt-2" style="color: var(--admin-text-dim);">PDF only, maximum size 15 MB. Uploading a new file replaces the current brochure.</small>
                <button type="submit" class="btn-admin btn-primary-admin mt-4"><i class="fa-regular fa-upload"></i> Upload Brochure</button>
            </form>
        </div>
    </div>
</div>
@endsection
