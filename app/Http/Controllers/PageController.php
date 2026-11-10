<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function daftarAnime(): array
    {
        return [
            [
                'judul' => 'Isekai wa Smartphone to Tomo ni.',
                'genre' => 'Isekai, Adventure, Fantasy, Romance',
                'episode' => 24,
                'status' => 'Selesai',
                'rating' => null,
                'gambar' => 'isekai-wa-smartphone.jpg',
            ],
            [
                'judul' => 'Watanare',
                'genre' => 'Romance, Comedy, Girls Love, School',
                'episode' => 17,
                'status' => 'Selesai',
                'rating' => null,
                'gambar' => 'watanare.jpg',
            ],
            [
                'judul' => 'Sakurasou no Pet na Kanojo',
                'genre' => 'Romance, Comedy, Drama, Slice of Life',
                'episode' => 24,
                'status' => 'Selesai',
                'rating' => null,
                'gambar' => 'sakurasou-no-pet-no-kanojo.jpg',
            ],
            [
                'judul' => 'Sankarea',
                'genre' => 'Romance, Supernatural, Horror',
                'episode' => 12,
                'status' => 'Rencana',
                'rating' => null,
                'gambar' => 'sankarea.jpg',
            ],
            [
                'judul' => 'Happy Sugar Life',
                'genre' => 'Psychological, Drama, Horror, Thriller',
                'episode' => 12,
                'status' => 'Rencana',
                'rating' => null,
                'gambar' => 'happy-sugar-life.jpg',
            ],
            [
                'judul' => 'Tensei Oujo to Tensai Reijou no Mahou Kakumei',
                'genre' => 'Fantasy, Romance, Isekai, Girls Love',
                'episode' => 12,
                'status' => 'Selesai',
                'rating' => null,
                'gambar' => 'tensei-oujo.jpg',
            ],
            [
                'judul' => 'Suzumiya Haruhi no Yuuutsu',
                'genre' => 'Sci-Fi, Mystery, Comedy, Supernatural',
                'episode' => 14,
                'status' => 'Ditonton',
                'rating' => null,
                'gambar' => 'suzumiya-haruhi.jpg',
            ],
            [
                'judul' => 'Tonikaku Kawaii',
                'genre' => 'Romance, Comedy, Slice of Life',
                'episode' => 24,
                'status' => 'Ditonton',
                'rating' => null,
                'gambar' => 'tonikaku-kawaii.jpg',
            ],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = trim($request->query('username', ''));

        if ($username === '') {
            return redirect()->route('login');
        }

        $anime = $this->daftarAnime();
        $total = count($anime);

        $selesai = 0;
        $ditonton = 0;
        $rencana = 0;

        foreach ($anime as $item) {
            if ($item['status'] === 'Selesai') {
                $selesai++;
            } elseif ($item['status'] === 'Ditonton') {
                $ditonton++;
            } elseif ($item['status'] === 'Rencana') {
                $rencana++;
            }
        }

        $ringkasan = [
            [
                'label' => 'Total Anime',
                'jumlah' => $total,
                'ikon' => '✦',
                'keterangan' => 'Seluruh koleksi anime',
            ],
            [
                'label' => 'Selesai',
                'jumlah' => $selesai,
                'ikon' => '✓',
                'keterangan' => 'Anime telah ditonton',
            ],
            [
                'label' => 'Ditonton',
                'jumlah' => $ditonton,
                'ikon' => '◷',
                'keterangan' => 'Anime dalam proses',
            ],
            [
                'label' => 'Rencana',
                'jumlah' => $rencana,
                'ikon' => '＋',
                'keterangan' => 'Masuk daftar tontonan',
            ],
        ];

        return view('dashboard', compact('username', 'ringkasan'));
    }

    public function pengelolaan(Request $request)
    {
        $username = trim($request->query('username', ''));

        if ($username === '') {
            return redirect()->route('login');
        }

        $daftarAnime = $this->daftarAnime();
        $statusDipilih = $request->query('status', 'Semua');

        $opsiStatus = [
            'Semua',
            'Selesai',
            'Ditonton',
            'Rencana',
        ];

        if (!in_array($statusDipilih, $opsiStatus, true)) {
            $statusDipilih = 'Semua';
        }

        if ($statusDipilih !== 'Semua') {
            $hasilFilter = [];

            foreach ($daftarAnime as $anime) {
                if ($anime['status'] === $statusDipilih) {
                    $hasilFilter[] = $anime;
                }
            }

            $daftarAnime = $hasilFilter;
        }

        return view('pengelolaan', compact(
            'username',
            'daftarAnime',
            'statusDipilih',
            'opsiStatus'
        ));
    }

    public function profile(Request $request)
    {
        $username = trim($request->query('username', ''));

        if ($username === '') {
            return redirect()->route('login');
        }

        $anime = $this->daftarAnime();

        $detailProfil = [
            [
                'label' => 'Genre Favorit',
                'value' => 'Fantasy & Adventure',
            ],
            [
                'label' => 'Total Anime',
                'value' => count($anime) . ' judul',
            ],
            [
                'label' => 'Jenis Akun',
                'value' => 'Personal Watchlist',
            ],
            [
                'label' => 'Status Akun',
                'value' => 'Aktif',
            ],
        ];

        $inisial = strtoupper(substr($username, 0, 1));

        return view('profile', compact(
            'username',
            'detailProfil',
            'inisial'
        ));
    }
}
