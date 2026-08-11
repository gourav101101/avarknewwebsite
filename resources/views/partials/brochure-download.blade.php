@php($brochure = \App\Models\Brochure::latest()->first())

@if($brochure)
<section class="pb-5">
    <div class="container rr-container-1350 text-center" data-aos="fade-up" data-aos-duration="900">
        <a href="{{ asset($brochure->file_path) }}" class="rr-btn" download="{{ $brochure->original_name }}">
            <span class="btn-wrap">
                <span class="text-one"><i class="fa-solid fa-file-pdf me-2"></i>Download Brochure</span>
                <span class="text-two"><i class="fa-solid fa-download me-2"></i>Download Brochure</span>
            </span>
        </a>
    </div>
</section>
@endif
