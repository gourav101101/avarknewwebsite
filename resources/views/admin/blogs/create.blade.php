@extends('admin.layouts.app')

@section('title', 'Create Blog')
@section('page_title', 'Create New Blog')

@section('content')

<div class="admin-card">
    <div class="card-header-admin">
        <h5><i class="fa-regular fa-plus" style="color: var(--admin-accent); margin-right: 8px;"></i>Create New Blog</h5>
        <a href="{{ route('admin.blogs.index') }}" class="btn-admin btn-outline-admin btn-sm-admin">
            <i class="fa-regular fa-arrow-left"></i> Back to Blogs
        </a>
    </div>

    <div class="card-body-admin">
        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group-admin">
                        <label for="title" class="required">Blog Title</label>
                        <input type="text" name="title" id="title" class="form-input"
                               placeholder="Enter blog title..." value="{{ old('title') }}" required>
                    </div>

                    <div class="form-group-admin">
                        <label for="slug">Slug (URL)</label>
                        <input type="text" name="slug" id="slug" class="form-input"
                               placeholder="auto-generated-from-title" value="{{ old('slug') }}">
                        <div class="form-help">Leave empty to auto-generate from the title</div>
                    </div>

                    <div class="form-group-admin">
                        <label for="content" class="required">Blog Content</label>
                        <textarea name="content" id="content" class="form-input content-editor"
                                  placeholder="Write your blog content here... (HTML supported)" required>{{ old('content') }}</textarea>
                        <div class="form-help">HTML tags are supported for formatting</div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group-admin">
                        <label for="author" class="required">Author</label>
                        <input type="text" name="author" id="author" class="form-input"
                               placeholder="Author name" value="{{ old('author') }}" required>
                    </div>

                    <div class="form-group-admin">
                        <label for="tag">Tag / Category</label>
                        <input type="text" name="tag" id="tag" class="form-input"
                               placeholder="e.g. Agency, Avark" value="{{ old('tag') }}">
                    </div>

                    <div class="form-group-admin">
                        <label for="published_at">Publish Date</label>
                        <input type="date" name="published_at" id="published_at" class="form-input"
                               value="{{ old('published_at', date('Y-m-d')) }}">
                    </div>

                    <div class="form-group-admin">
                        <label>Featured Image</label>
                        <div class="file-upload-area" id="imageUploadArea">
                            <i class="fa-regular fa-cloud-arrow-up"></i>
                            <p>Click or drag to upload image</p>
                            <p style="font-size: 11px; margin-top: 4px;">JPG, PNG, WebP (Max 5MB)</p>
                            <input type="file" name="image" id="imageInput" accept="image/*">
                        </div>
                        <div class="image-preview" id="imagePreview" style="display: none;">
                            <img id="previewImg" src="" alt="Preview">
                        </div>
                    </div>

                    <div class="form-group-admin">
                        <div class="form-check-admin">
                            <input type="checkbox" name="is_published" id="is_published" value="1"
                                   {{ old('is_published') ? 'checked' : '' }}>
                            <label for="is_published">Publish immediately</label>
                        </div>
                    </div>

                    <div style="display: flex; gap: 10px; margin-top: 24px;">
                        <button type="submit" class="btn-admin btn-primary-admin" style="flex: 1;">
                            <i class="fa-regular fa-check"></i> Create Blog
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Image preview
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('imagePreview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    // Auto-generate slug from title
    document.getElementById('title').addEventListener('input', function() {
        const slugField = document.getElementById('slug');
        if (!slugField.value || slugField.dataset.autoGenerated === 'true') {
            slugField.value = this.value
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim();
            slugField.dataset.autoGenerated = 'true';
        }
    });

    document.getElementById('slug').addEventListener('input', function() {
        this.dataset.autoGenerated = 'false';
    });
</script>
@endpush

@endsection
