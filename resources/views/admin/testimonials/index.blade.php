@extends('admin.layouts.app')

@section('title', 'Manage Testimonials')
@section('page_title', 'Testimonials')

@section('content')

<div class="admin-card">
    <div class="card-header-admin">
        <h5><i class="fa-regular fa-quote-left" style="color: #8b5cf6; margin-right: 8px;"></i>All Testimonials</h5>
        <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
            <form action="{{ route('admin.testimonials.index') }}" method="GET" class="filter-bar">
                <input type="text" name="search" class="form-control" placeholder="Search client name..."
                       value="{{ request('search') }}" style="width: 200px;">
                <select name="status" class="form-select" style="width: 140px;" onchange="this.form.submit()">
                    <option value="">All Status</option>
                    <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                <button type="submit" class="btn-admin btn-outline-admin btn-sm-admin">
                    <i class="fa-regular fa-magnifying-glass"></i>
                </button>
            </form>
            <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-primary-admin">
                <i class="fa-regular fa-plus"></i> Add New
            </a>
        </div>
    </div>

    <div class="table-responsive-admin">
        @if($testimonials->count())
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Content</th>
                        <th>Rating</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonials as $testimonial)
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                @if($testimonial->avatar)
                                    <img src="{{ asset($testimonial->avatar) }}" alt="" class="table-avatar">
                                @else
                                    <div class="table-avatar" style="background: var(--admin-surface-hover); display: flex; align-items: center; justify-content: center; font-weight: 600; color: var(--admin-text-dim);">
                                        {{ substr($testimonial->client_name, 0, 1) }}
                                    </div>
                                @endif
                                <div>
                                    <div style="color: var(--admin-text); font-weight: 500;">{{ $testimonial->client_name }}</div>
                                    <div style="font-size: 11px; color: var(--admin-text-dim); margin-top: 2px;">
                                        {{ $testimonial->client_position ? $testimonial->client_position . ', ' : '' }}{{ $testimonial->client_company }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="font-size: 13px; max-width: 300px; white-space: normal; line-height: 1.4;">
                                "{{ Str::limit(strip_tags($testimonial->content), 80) }}"
                            </div>
                        </td>
                        <td>
                            <div class="star-rating">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fa-solid fa-star {{ $i <= $testimonial->rating ? '' : 'empty' }}"></i>
                                @endfor
                            </div>
                        </td>
                        <td style="text-align: center;">{{ $testimonial->sort_order }}</td>
                        <td>
                            <form action="{{ route('admin.testimonials.toggle-status', $testimonial) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="badge-admin {{ $testimonial->is_active ? 'badge-active' : 'badge-inactive' }}" style="border: none; cursor: pointer; padding: 6px 12px;">
                                    <i class="fa-solid fa-circle" style="font-size: 6px;"></i> 
                                    {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn-icon edit" title="Edit">
                                    <i class="fa-regular fa-pen"></i>
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="d-inline">
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

            @if($testimonials->hasPages())
                <div class="pagination-admin">
                    {{ $testimonials->appends(request()->query())->links() }}
                </div>
            @endif
        @else
            <div class="empty-state">
                <i class="fa-regular fa-quote-left"></i>
                <h4>No testimonials found</h4>
                <p>{{ request('search') ? 'Try a different search term' : 'Add your first testimonial to showcase on the website' }}</p>
                @unless(request('search'))
                    <a href="{{ route('admin.testimonials.create') }}" class="btn-admin btn-primary-admin">
                        <i class="fa-regular fa-plus"></i> Add Testimonial
                    </a>
                @endunless
            </div>
        @endif
    </div>
</div>

@endsection
