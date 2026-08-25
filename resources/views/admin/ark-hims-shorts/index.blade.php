@extends('admin.layouts.app')

@section('title', 'Manage Videos / Shorts')
@section('page_title', 'Videos / Shorts')

@section('content')
<div class="admin-card">
    <div class="card-header-admin">
        <div>
            <h5><i class="fa-brands fa-youtube" style="color: #ef4444; margin-right: 8px;"></i>Homepage Video Shorts</h5>
            <p style="margin: 5px 0 0; color: var(--admin-text-dim); font-size: 12px;">The first three active videos are shown on the homepage in display order.</p>
        </div>
        <a href="{{ route('admin.ark-hims-shorts.create') }}" class="btn-admin btn-primary-admin">
            <i class="fa-regular fa-plus"></i> Add Short
        </a>
    </div>

    <div class="table-responsive-admin">
        @if($shorts->count())
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Preview</th>
                        <th>Video</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shorts as $short)
                    <tr>
                        <td>
                            <a href="{{ $short->youtube_url }}" target="_blank" rel="noopener noreferrer" title="Open on YouTube">
                                <img loading="lazy" decoding="async"
                                    src="{{ $short->thumbnail_url }}"
                                    alt="{{ $short->title }} thumbnail"
                                    loading="lazy"
                                    style="width: 68px; height: 92px; object-fit: cover; border-radius: 9px; background: #100a26;">
                            </a>
                        </td>
                        <td>
                            <div style="max-width: 430px;">
                                <div style="color: var(--admin-text); font-weight: 600; margin-bottom: 5px;">{{ $short->title }}</div>
                                <a href="{{ $short->youtube_url }}" target="_blank" rel="noopener noreferrer" style="color: #a78bfa; font-size: 12px; word-break: break-all;">
                                    {{ $short->youtube_url }} <i class="fa-regular fa-arrow-up-right-from-square" style="font-size: 10px;"></i>
                                </a>
                            </div>
                        </td>
                        <td style="text-align: center; font-weight: 600;">{{ $short->sort_order }}</td>
                        <td>
                            <form action="{{ route('admin.ark-hims-shorts.toggle-status', $short) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="badge-admin {{ $short->is_active ? 'badge-active' : 'badge-inactive' }}" style="border: none; cursor: pointer; padding: 6px 12px;">
                                    <i class="fa-solid fa-circle" style="font-size: 6px;"></i>
                                    {{ $short->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('admin.ark-hims-shorts.edit', $short) }}" class="btn-icon edit" title="Edit">
                                    <i class="fa-regular fa-pen"></i>
                                </a>
                                <form action="{{ route('admin.ark-hims-shorts.destroy', $short) }}" method="POST" class="d-inline">
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

            @if($shorts->hasPages())
                <div class="pagination-admin">
                    {{ $shorts->links() }}
                </div>
            @endif
        @else
            <div class="empty-state">
                <i class="fa-brands fa-youtube"></i>
                <h4>No videos or Shorts yet</h4>
                <p>Add a YouTube Short to display it in the homepage video section.</p>
                <a href="{{ route('admin.ark-hims-shorts.create') }}" class="btn-admin btn-primary-admin">
                    <i class="fa-regular fa-plus"></i> Add Your First Short
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
