<?php

namespace Tests\Feature;

use App\Models\ArkHimsShort;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArkHimsShortAdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_renders_active_shorts_in_display_order(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('3JFK_HlLvCg');
        $response->assertSee('4yZ1Cu2fkl4');
        $response->assertSeeInOrder([
            'Healthcare Technology in Action',
            'ARK HIMS — Smart Hospital Management, Simplified',
        ]);
    }

    public function test_admin_can_update_a_short_url_and_title(): void
    {
        $this->actingAs(User::factory()->create());
        $short = ArkHimsShort::ordered()->firstOrFail();

        $response = $this->put(route('admin.ark-hims-shorts.update', $short), [
            'title' => 'Updated ARK HIMS Short',
            'youtube_url' => 'https://youtu.be/ABCDEFGHIJK',
            'sort_order' => 4,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.ark-hims-shorts.index'));
        $this->assertDatabaseHas('ark_hims_shorts', [
            'id' => $short->id,
            'title' => 'Updated ARK HIMS Short',
            'youtube_url' => 'https://www.youtube.com/shorts/ABCDEFGHIJK',
            'youtube_id' => 'ABCDEFGHIJK',
            'sort_order' => 4,
            'is_active' => true,
        ]);
    }

    public function test_admin_can_toggle_short_visibility(): void
    {
        $this->actingAs(User::factory()->create());
        $short = ArkHimsShort::ordered()->firstOrFail();

        $response = $this->patch(route('admin.ark-hims-shorts.toggle-status', $short));

        $response->assertRedirect();
        $this->assertFalse($short->fresh()->is_active);
    }

    public function test_invalid_youtube_url_is_rejected(): void
    {
        $this->actingAs(User::factory()->create());

        $response = $this->post(route('admin.ark-hims-shorts.store'), [
            'title' => 'Invalid Video',
            'youtube_url' => 'https://example.com/not-youtube',
            'sort_order' => 1,
            'is_active' => '1',
        ]);

        $response->assertSessionHasErrors('youtube_url');
        $this->assertDatabaseMissing('ark_hims_shorts', ['title' => 'Invalid Video']);
    }
}
