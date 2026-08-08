<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $dataSiswa = [
            ['nisn' => '0102455250', 'nama' => 'KHOTIBA', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '0092524199', 'nama' => 'KUSNUL KHOTIMAH', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '0099424675', 'nama' => 'LEO DWI KURNIAWAN', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0093812797', 'nama' => 'LISA AULIA SARI', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '0098923169', 'nama' => "M. ALFIAN MA'ARIF", 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0091409808', 'nama' => 'M. NABIL FAHREZI', 'jenis_kelamin' => 'L', 'jabatan' => 'Ketua Kelas'],
            ['nisn' => '0095443532', 'nama' => 'Moch Reza Hadi Putra', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0099796905', 'nama' => 'MOH. DEVTO FEBRIAN PURWANTO', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0104952308', 'nama' => 'MOH. YANUAR ALFARIZI', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0099366102', 'nama' => 'MOHAMMAD FAQIH', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0106120232', 'nama' => 'MUHAMMAD ALFIN RIFANDA', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0091128290', 'nama' => 'MUHAMMAD ANGGER SATRIA JATIKA', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '3095027521', 'nama' => 'MUHAMMAD DZAKY AL FARROS', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0097968681', 'nama' => 'Muhammad Fahmil Maulidi', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0091737512', 'nama' => 'MUHAMMAD IZZUDIN GHOZY AL MIQDAD', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0102007820', 'nama' => 'MUHAMMAD RAMAJA GANDI', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0092394647', 'nama' => 'MUHAMMAD RIZQI MAULANA WIBOWO', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0097054757', 'nama' => 'MUHAMMAD VICKY AFRISAL', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0101210682', 'nama' => 'Muhammad Widhad Ilham Pratama', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '3101931993', 'nama' => 'MUHAMMAD YULIAN IRSYAD', 'jenis_kelamin' => 'L', 'jabatan' => 'Wakil Ketua Kelas'],
            ['nisn' => '0099321697', 'nama' => 'MUHAMMAD ZAKY ALFARIZI', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0091409445', 'nama' => 'NABILAH PUTRI', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '0094652970', 'nama' => 'NOVA AULIA WIBOWO', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0093435532', 'nama' => 'ONGKY BAY U PRATAMA', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0106875624', 'nama' => 'Putra Bungas Tifanu Gusti', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0098674302', 'nama' => 'PUTRI TITIA RAMADANI', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '0092101397', 'nama' => 'Raihan Khamarul Akbar', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0091409445', 'nama' => 'REHAN TRI WAHYU ADI PRASETYO', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0109530521', 'nama' => 'RENDI RAHMAT HIDAYAT', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0088843163', 'nama' => 'Safril Erlangga Dwi Prasetyo', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '3090062012', 'nama' => 'SAKIEF ILMAN ALBARERA', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0099564951', 'nama' => 'SATRIYO NURHIDAYAT', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0091309305', 'nama' => 'Siti Aisyah', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '0095818890', 'nama' => 'SITI NAYSILA ZAHRA', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '3103686788', 'nama' => 'SOVIA DAQIQIA', 'jenis_kelamin' => 'P', 'jabatan' => 'Siswa'],
            ['nisn' => '0092713484', 'nama' => 'THORIQ RADJA ARIF WILDANIS', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0099321697', 'nama' => 'VIGO BATISTHA ARINDRA PUTRA ONE', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
            ['nisn' => '0094205011', 'nama' => 'WILLY HABIBI JUMABA', 'jenis_kelamin' => 'L', 'jabatan' => 'Siswa'],
        ];

        foreach ($dataSiswa as $siswa) {
            Siswa::updateOrCreate(['nisn' => $siswa['nisn']], $siswa);
        }
    }
}