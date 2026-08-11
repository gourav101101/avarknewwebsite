@extends('admin.layouts.app')

@section('title', 'Edit Testimonial')
@section('page_title', 'Edit Testimonial: ' . $testimonial->client_name)

@section('content')

<div class="admin-card">
    <div class="card-header-admin">
        <h5><i class="fa-regular fa-pen" style="color: #8b5cf6; margin-right: 8px;"></i>Edit Testimonial</h5>
        <a href="{{ route('admin.testimonials.index') }}" class="btn-admin btn-outline-admin btn-sm-admin">
            <i class="fa-regular fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="card-body-admin">
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group-admin">
                                <label for="client_name" class="required">Client Name</label>
                                <input type="text" name="client_name" id="client_name" class="form-input"
                                       placeholder="e.g. Sarah Johnson" value="{{ old('client_name', $testimonial->client_name) }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group-admin">
                                <label for="client_position">Client Position</label>
                                <input type="text" name="client_position" id="client_position" class="form-input"
                                       placeholder="e.g. Marketing Manager" value="{{ old('client_position', $testimonial->client_position) }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-admin">
                        <label for="client_company">Company Name</label>
                        <input type="text" name="client_company" id="client_company" class="form-input"
                               placeholder="e.g. Growthly" value="{{ old('client_company', $testimonial->client_company) }}">
                    </div>

                    <div class="form-group-admin">
                        <label for="content" class="required">Testimonial Content</label>
                        <textarea name="content" id="content" class="form-input" style="min-height: 120px;"
                                  placeholder="Write the testimonial text here..." required>{{ old('content', $testimonial->content) }}</textarea>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group-admin">
                        <label for="rating">Rating (1-5)</label>
                        <select name="rating" id="rating" class="form-select-admin">
                            <option value="5" {{ old('rating', $testimonial->rating) == '5' ? 'selected' : '' }}>5 Stars</option>
                            <option value="4" {{ old('rating', $testimonial->rating) == '4' ? 'selected' : '' }}>4 Stars</option>
                            <option value="3" {{ old('rating', $testimonial->rating) == '3' ? 'selected' : '' }}>3 Stars</option>
                            <option value="2" {{ old('rating', $testimonial->rating) == '2' ? 'selected' : '' }}>2 Stars</option>
                            <option value="1" {{ old('rating', $testimonial->rating) == '1' ? 'selected' : '' }}>1 Star</option>
                        </select>
                    </div>

                    <div class="form-group-admin">
                        <label for="sort_order">Display Order</label>
                        <input type="number" name="sort_order" id="sort_order" class="form-input"
                               placeholder="0" value="{{ old('sort_order', $testimonial->sort_order) }}" min="0">
                        <div class="form-help">Lower numbers appear first</div>
                    </div>

                    <div class="form-group-admin">
                        <label>Client Avatar (Optional)</label>
                        <div class="file-upload-area" id="avatarUploadArea" style="padding: 16px;">
                            <i class="fa-regular fa-image-user" style="font-size: 24px;"></i>
                            <p>Upload New Photo</p>
                            <input type="file" name="avatar" id="avatarInput" accept="image/*">
                        </div>
                        <div class="image-preview" id="avatarPreview" style="display: {{ $testimonial->avatar ? 'block' : 'none' }}; text-align: center;">
                            <img id="previewImg" src="{{ $testimonial->avatar ? asset($testimonial->avatar) : '' }}" alt="Preview" class="table-avatar" style="width: 80px; height: 80px;">
                        </div>
                    </div>

                    <div class="form-group-admin">
                        <div class="form-check-admin">
                            <input type="checkbox" name="is_active" id="is_active" value="1"
                                   {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                            <label for="is_active">Active (Show on website)</label>
                        </div>
                    </div>

                    <div style="display: flex; gap: 10px; margin-top: 24px;">
                        <button type="submit" class="btn-admin btn-primary-admin" style="flex: 1; background: linear-gradient(135deg, #8b5cf6, #6d28d9); box-shadow: 0 4px 16px rgba(139, 92, 246, 0.3);">
                            <i class="fa-regular fa-floppy-disk"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Avatar preview
    document.getElementById('avatarInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('avatarPreview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush

@endsection
