<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PegawaiAuthTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }
    /**
     * Test halaman login dapat diakses.
     */
    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Login Pegawai');
        $response->assertSee('Masukkan Nama Pegawai...');
        $response->assertSee('Masukkan Password...');
    }

    /**
     * Test login gagal jika kredensial salah.
     */
    public function test_pegawai_cannot_authenticate_with_invalid_password(): void
    {
        $response = $this->post('/login', [
            'nama' => 'Budi',
            'password' => 'wrong-password',
        ]);

        $this->assertFalse(Auth::guard('pegawai')->check());
        $response->assertSessionHas('error');
    }

    /**
     * Test login berhasil dengan nama dan password yang benar.
     */
    public function test_pegawai_can_authenticate_using_nama_and_password(): void
    {
        $response = $this->post('/login', [
            'nama' => 'Budi',
            'password' => '123456',
        ]);

        $this->assertTrue(Auth::guard('pegawai')->check());
        $this->assertEquals('Budi', Auth::guard('pegawai')->user()->nama);
        $response->assertRedirect('/');
    }

    /**
     * Test dashboard menampilkan nama pegawai yang sedang login.
     */
    public function test_dashboard_displays_logged_in_pegawai(): void
    {
        $pegawai = Pegawai::where('nama', 'Budi')->first();

        $response = $this->actingAs($pegawai, 'pegawai')->get('/');

        $response->assertStatus(200);
        $response->assertSee('Budi');
        $response->assertSee($pegawai->jabatan);
    }

    /**
     * Test pegawai dapat logout.
     */
    public function test_pegawai_can_logout(): void
    {
        $pegawai = Pegawai::where('nama', 'Budi')->first();

        $response = $this->actingAs($pegawai, 'pegawai')->post('/logout');

        $this->assertFalse(Auth::guard('pegawai')->check());
        $response->assertRedirect('/login');
    }
}
