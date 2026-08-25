@php
    $isEditing = isset($arkHimsShort);
@endphp

<div class="row">
    <div class="col-lg-8">
        <div class="form-group-admin">
            <label for="title" class="required">Video Display Title</label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-input"
                maxlength="160"
                placeholder="e.g. ARK HIMS — Smart Hospital Management, Simplified"
                value="{{ old('title', $arkHimsShort->title ?? '') }}"
                required>
            <div class="form-help">This title appears below the video on the homepage.</div>
        </div>

        <div class="form-group-admin">
            <label for="youtube_url" class="required">YouTube Video URL</label>
            <input
                type="url"
                name="youtube_url"
                id="youtube_url"
                class="form-input"
                placeholder="https://www.youtube.com/shorts/VIDEO_ID"
                value="{{ old('youtube_url', $arkHimsShort->youtube_url ?? '') }}"
                required>
            <div class="form-help">Shorts, watch, embed, live, and youtu.be links are supported.</div>
        </div>

        <div class="admin-card" style="margin-top: 22px; background: var(--admin-surface-hover);">
            <div class="card-body-admin" style="padding: 22px;">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
                    <i class="fa-brands fa-youtube" style="color: #ef4444; font-size: 22px;"></i>
                    <div>
                        <strong style="color: var(--admin-text);">Homepage preview</strong>
                        <div class="form-help" style="margin: 2px 0 0;">The thumbnail updates when a valid YouTube URL is entered.</div>
                    </div>
                </div>
                <div id="shortPreviewEmpty" style="padding: 38px 20px; border: 1px dashed var(--admin-text-dim); border-radius: 12px; text-align: center; color: var(--admin-text-dim);">
                    Enter a YouTube URL to preview its thumbnail.
                </div>
                <div id="shortPreview" style="display: none; width: 180px; overflow: hidden; border-radius: 14px; background: #100a26; aspect-ratio: 9 / 16;">
                    <img loading="lazy" decoding="async" id="shortPreviewImage" src="" alt="YouTube thumbnail preview" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group-admin">
            <label for="sort_order">Display Order</label>
            <input
                type="number"
                name="sort_order"
                id="sort_order"
                class="form-input"
                min="0"
                value="{{ old('sort_order', $arkHimsShort->sort_order ?? 0) }}">
            <div class="form-help">Lower numbers appear first. The homepage displays the first three active Shorts.</div>
        </div>

        <div class="form-group-admin">
            <div class="form-check-admin">
                <input
                    type="checkbox"
                    name="is_active"
                    id="is_active"
                    value="1"
                    {{ old('is_active', $arkHimsShort->is_active ?? true) ? 'checked' : '' }}>
                <label for="is_active">Active (show on homepage)</label>
            </div>
        </div>

        <div style="display: flex; gap: 10px; margin-top: 24px;">
            <button type="submit" class="btn-admin btn-primary-admin" style="flex: 1; background: linear-gradient(135deg, #7444FD, #5B2EE5); box-shadow: 0 4px 16px rgba(116, 68, 253, 0.3);">
                <i class="fa-regular {{ $isEditing ? 'fa-floppy-disk' : 'fa-plus' }}"></i>
                {{ $isEditing ? 'Save Changes' : 'Add Short' }}
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    (function () {
        const urlInput = document.getElementById('youtube_url');
        const preview = document.getElementById('shortPreview');
        const previewEmpty = document.getElementById('shortPreviewEmpty');
        const previewImage = document.getElementById('shortPreviewImage');

        function youtubeIdFromUrl(value) {
            try {
                const url = new URL(value);
                const host = url.hostname.replace(/^(www\.|m\.)/, '');
                const segments = url.pathname.split('/').filter(Boolean);
                let videoId = null;

                if (host === 'youtu.be') {
                    videoId = segments[0];
                } else if (['youtube.com', 'music.youtube.com', 'youtube-nocookie.com'].includes(host)) {
                    videoId = segments[0] === 'watch' ? url.searchParams.get('v') : segments[1];
                }

                return /^[A-Za-z0-9_-]{11}$/.test(videoId || '') ? videoId : null;
            } catch (error) {
                return null;
            }
        }

        function updatePreview() {
            const videoId = youtubeIdFromUrl(urlInput.value.trim());

            if (!videoId) {
                preview.style.display = 'none';
                previewEmpty.style.display = 'block';
                previewImage.removeAttribute('src');
                return;
            }

            previewImage.src = 'https://i.ytimg.com/vi/' + videoId + '/hqdefault.jpg';
            preview.style.display = 'block';
            previewEmpty.style.display = 'none';
        }

        urlInput.addEventListener('input', updatePreview);
        updatePreview();
    })();
</script>
@endpush
