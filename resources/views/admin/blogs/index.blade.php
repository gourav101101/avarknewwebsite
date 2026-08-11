@extends('admin.layouts.app')

@section('title', 'Manage Blogs')
@section('page_title', 'Blogs')

@section('content')

<div class="admin-card">
    <div class="card-header-admin">
        <h5><i class="fa-regular fa-newspaper" style="color: var(--admin-accent); margin-right: 8px;"></i>All Blogs</h5>
        <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
            <form action="{{ route('admin.blogs.index') }}" method="GET" class="filter-bar">
                <input type="text" name="search" class="form-control" placeholder="Search blogs..."
                       value="{{ request('search') }}" style="width: 200px;">
                <select name="status" class="form-select" style="width: 140px;" onchange="this.form.submit()">
                    <option value="">All Status</option>
                    <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                    <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                </select>
                <button type="submit" class="btn-admin btn-outline-admin btn-sm-admin">
                    <i class="fa-regular fa-magnifying-glass"></i>
                </button>
            </form>
            <a href="{{ route('admin.blogs.create') }}" class="btn-admin btn-primary-admin">
                <i class="fa-regular fa-plus"></i> New Blog
            </a>
        </div>
    </div>

    <div class="table-responsive-admin">
        @if($blogs->count())
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Tag</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset($blog->image) }}" alt="" class="table-thumb">
                            @else
                                <div class="table-thumb" style="background: var(--admin-surface-hover); display: flex; align-items: center; justify-content: center;">
                                    <i class="fa-regular fa-image" style="color: var(--admin-text-dim);"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div style="color: var(--admin-text); font-weight: 500; max-width: 250px;">
                                {{ Str::limit($blog->title, 45) }}
                            </div>
                            <div style="font-size: 11px; color: var(--admin-text-dim); margin-top: 2px;">
                                /blog-details/{{ $blog->slug }}
                            </div>
                        </td>
                        <td>{{ $blog->author }}</td>
                        <td>
                            @if($blog->tag)
                                <span class="badge-admin" style="background: rgba(59, 130, 246, 0.08); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.2);">
                                    {{ $blog->tag }}
                                </span>
                            @else
                                <span style="color: var(--admin-text-dim);">—</span>
                            @endif
                        </td>
                        <td>
                            @if($blog->is_published)
                                <span class="badge-admin badge-published">
                                    <i class="fa-solid fa-circle" style="font-size: 6px;"></i> Published
                                </span>
                            @else
                                <span class="badge-admin badge-draft">
                                    <i class="fa-solid fa-circle" style="font-size: 6px;"></i> Draft
                                </span>
                            @endif
                        </td>
                        <td style="font-size: 13px; white-space: nowrap;">
                            {{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn-icon edit" title="Edit">
                                    <i class="fa-regular fa-pen"></i>
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-icon delete btn-delete" title="Delete">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @if($blogs->hasPages())
                <div class="pagination-admin">
                    {{ $blogs->appends(request()->query())->links() }}
                </div>
            @endif
        @else
            <div class="empty-state">
                <i class="fa-regular fa-newspaper"></i>
                <h4>No blogs found</h4>
                <p>{{ request('search') ? 'Try a different search term' : 'Create your first blog post to get started' }}</p>
                @unless(request('search'))
                    <a href="{{ route('admin.blogs.create') }}" class="btn-admin btn-primary-admin">
                        <i class="fa-regular fa-plus"></i> Create Blog
                    </a>
                @endunless
            </div>
        @endif
    </div>
</div>

@endsection
