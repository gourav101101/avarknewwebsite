<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArkHimsShort;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminArkHimsShortController extends Controller
{
    public function index()
    {
        $shorts = ArkHimsShort::ordered()->paginate(12);

        return view('admin.ark-hims-shorts.index', compact('shorts'));
    }

    public function create()
    {
        return view('admin.ark-hims-shorts.create');
    }

    public function store(Request $request)
    {
        ArkHimsShort::create($this->validatedData($request));

        return redirect()
            ->route('admin.ark-hims-shorts.index')
            ->with('success', 'Video / Short added successfully!');
    }

    public function edit(ArkHimsShort $arkHimsShort)
    {
        return view('admin.ark-hims-shorts.edit', compact('arkHimsShort'));
    }

    public function update(Request $request, ArkHimsShort $arkHimsShort)
    {
        $arkHimsShort->update($this->validatedData($request));

        return redirect()
            ->route('admin.ark-hims-shorts.index')
            ->with('success', 'Video / Short updated successfully!');
    }

    public function destroy(ArkHimsShort $arkHimsShort)
    {
        $arkHimsShort->delete();

        return redirect()
            ->route('admin.ark-hims-shorts.index')
            ->with('success', 'Video / Short deleted successfully!');
    }

    public function toggleStatus(ArkHimsShort $arkHimsShort)
    {
        $arkHimsShort->update(['is_active' => !$arkHimsShort->is_active]);

        return back()->with('success', 'Short visibility updated!');
    }

    private function validatedData(Request $request): array
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:160'],
            'youtube_url' => ['required', 'url', 'max:500'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $youtubeId = ArkHimsShort::extractYoutubeId($validated['youtube_url']);

        if ($youtubeId === null) {
            throw ValidationException::withMessages([
                'youtube_url' => 'Enter a valid YouTube Shorts, watch, embed, live, or youtu.be URL.',
            ]);
        }

        $validated['youtube_id'] = $youtubeId;
        $validated['youtube_url'] = "https://www.youtube.com/shorts/{$youtubeId}";
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $validated['is_active'] = $request->boolean('is_active');

        return $validated;
    }
}
