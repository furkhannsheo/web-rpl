<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    protected string $baseUrl;
    protected string $staticLastmod;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('app.url'), '/');
        $this->staticLastmod = '2026-01-01T00:00:00+00:00';
    }

    public function index(): Response
    {
        $beritaLastmod = Berita::orderByDesc('updated_at')->value('updated_at');
        $mediaLastmod  = Galeri::orderByDesc('updated_at')->value('updated_at');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $xml .= $this->sitemapTag(
            'sitemap-pages.xml',
            $this->staticLastmod
        );

        $xml .= $this->sitemapTag(
            'sitemap-berita.xml',
            $beritaLastmod->toAtomString()
        );

        $xml .= $this->sitemapTag(
            'sitemap-media.xml',
            $mediaLastmod->toAtomString()
        );

        $xml .= '</sitemapindex>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    protected function sitemapTag(string $loc, string $lastmod): string
    {
        return '<sitemap>
            <loc>' . $this->baseUrl . '/' . $loc . '</loc>
            <lastmod>' . $lastmod . '</lastmod>
        </sitemap>';
    }

    public function pages(): Response
    {
        $pages = [
            '/'              => '1.0',
            '/berita'         => '0.8',
            '/berita/list'    => '0.7',
            '/fasilitas/list' => '0.5',
            '/prestasi/list'  => '0.5',
            '/galeri/list'    => '0.5',
            '/guru/list'      => '0.4',
        ];

        return $this->staticUrlset($pages);
    }

    public function berita(): Response
    {
        $beritas = Berita::select('slug', 'updated_at')->latest()->get();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($beritas as $berita) {
            $xml .= '<url>';
            $xml .= '<loc>' . $this->baseUrl . '/berita/' . $berita->slug . '</loc>';
            $xml .= '<lastmod>' . $berita->updated_at->toAtomString() . '</lastmod>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    public function media(): Response
    {
        $lastmod = Galeri::orderByDesc('updated_at')->value('updated_at');

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $xml .= '<url>';
        $xml .= '<loc>' . $this->baseUrl . '/galeri/list</loc>';
        $xml .= '<lastmod>' . $lastmod->toAtomString() . '</lastmod>';
        $xml .= '</url>';

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    protected function staticUrlset(array $paths): Response
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($paths as $path => $priority) {
            $xml .= '<url>';
            $xml .= '<loc>' . $this->baseUrl . $path . '</loc>';
            $xml .= '<lastmod>' . $this->staticLastmod . '</lastmod>';
            $xml .= '<priority>' . $priority . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
