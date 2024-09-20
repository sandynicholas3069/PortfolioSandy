<?php
class Portfolio extends CI_Controller {
    public function index() {
        $data['personal_info'] = [
            'name' => 'Sandy Nicholas',
            'occupation' => 'Full-Stack Website Developer',
            'description' => "I'm an undergraduate student from UPN Veteran Jawa Timur. I am still
            in my 5th semester as an informatics student, computer science faculty, UPN Veteran Jawa Timur, and I'm really
            passionate about Full Stack Website Development. My Career Goal is to become a
            Full-Stack Website Developer. I'm learning to create some beautiful,
            responsive, and user-friendly websites that can connect to the
            database. Feel free to contact me!",
        ];

        $data['transcript'] = [
            ['course' => 'Bahasa Indonesia', 'kode' => 'UV21009', 'credit' => '2', 'predicate' => 'A', 'semester' => '01'],
            ['course' => 'Pancasila', 'kode' => 'UV21007', 'credit' => '2', 'predicate' => 'A', 'semester' => '01'],
            ['course' => 'Bahasa Inggris', 'kode' => 'UV21010', 'credit' => '3', 'predicate' => 'A', 'semester' => '01'],
            ['course' => 'Arsitektur Komputer', 'kode' => 'IF221101', 'credit' => '3', 'predicate' => 'A', 'semester' => '01'],
            ['course' => 'Sistem & Teknologi Informasi', 'kode' => 'IF221104', 'credit' => '3', 'predicate' => 'A', 'semester' => '01'],
            ['course' => 'Etika & Kompetensi Informatika', 'kode' => 'IF221103', 'credit' => '3', 'predicate' => 'A', 'semester' => '01'],
            ['course' => 'Matematika Komputasi', 'kode' => 'IF221102', 'credit' => '3', 'predicate' => 'A', 'semester' => '01'],
            ['course' => 'Agama Kristen', 'kode' => 'UV21002', 'credit' => '2', 'predicate' => 'A', 'semester' => '02'],
            ['course' => 'Kewarganegaraan', 'kode' => 'UV21008', 'credit' => '2', 'predicate' => 'A', 'semester' => '02'],
            ['course' => 'Basis Data', 'kode' => 'IF221108', 'credit' => '3', 'predicate' => 'A', 'semester' => '02'],
            ['course' => 'Algoritma & Pemrograman', 'kode' => 'IF221106', 'credit' => '3', 'predicate' => 'A', 'semester' => '02'],
            ['course' => 'Aljabar Linier & Matrik', 'kode' => 'IF221109', 'credit' => '3', 'predicate' => 'A', 'semester' => '02'],
            ['course' => 'Sistem Digital', 'kode' => 'IF221105', 'credit' => '3', 'predicate' => 'A', 'semester' => '02'],
            ['course' => 'Matematika Diskrit', 'kode' => 'IF221107', 'credit' => '3', 'predicate' => 'A', 'semester' => '02'],
            ['course' => 'Statistik Komputasi', 'kode' => 'IF221112', 'credit' => '3', 'predicate' => 'A', 'semester' => '03'],
            ['course' => 'Bela Negara', 'kode' => 'UV21011', 'credit' => '3', 'predicate' => 'A', 'semester' => '03'],
            ['course' => 'Kepemimpinan', 'kode' => 'UV21013', 'credit' => '2', 'predicate' => 'A', 'semester' => '03'],
            ['course' => 'Sistem Operasi', 'kode' => 'IF221110', 'credit' => '3', 'predicate' => 'A', 'semester' => '03'],
            ['course' => 'Metode Numerik', 'kode' => 'IF221115', 'credit' => '3', 'predicate' => 'A-', 'semester' => '03'],
            ['course' => 'Basis Data Lanjut', 'kode' => 'IF221114', 'credit' => '3', 'predicate' => 'A', 'semester' => '03'],
            ['course' => 'Struktur Data', 'kode' => 'IF221113', 'credit' => '3', 'predicate' => 'A', 'semester' => '03'],
            ['course' => 'Pemrograman Lanjut', 'kode' => 'IF221111', 'credit' => '3', 'predicate' => 'A-', 'semester' => '03'],
            ['course' => 'Kewirausahaan', 'kode' => 'UV21012', 'credit' => '3', 'predicate' => 'A', 'semester' => '04'],
            ['course' => 'Pemrograman Berorientasi Objek', 'kode' => 'IF221119', 'credit' => '3', 'predicate' => 'A', 'semester' => '04'],
            ['course' => 'Jaringan Komputer', 'kode' => 'IF221116', 'credit' => '3', 'predicate' => 'A', 'semester' => '04'],
            ['course' => 'Rekayasa Perangkat Lunak', 'kode' => 'IF221121', 'credit' => '3', 'predicate' => 'A', 'semester' => '04'],
            ['course' => 'Kecerdasan Buatan', 'kode' => 'IF221118', 'credit' => '3', 'predicate' => 'A', 'semester' => '04'],
            ['course' => 'Pemrograman Web', 'kode' => 'IF221117', 'credit' => '3', 'predicate' => 'A', 'semester' => '04'],
            ['course' => 'Desain Antarmuka', 'kode' => 'IF221120', 'credit' => '3', 'predicate' => 'A', 'semester' => '04'],
            ['course' => 'Analisis & Desain Sistem', 'kode' => 'IF221122', 'credit' => '3', 'predicate' => 'A', 'semester' => '04']
        ];

        $data['skills'] = [
            'HTML',
            'CSS',
            'Javascript',
            'PHP',
            'MySQL',
            'Tailwind CSS',
            'Java',
            'C++',
            'C',
            'Python',
            'Node.js',
            'Next.js',
            'SQLyog',
            'Git',
            'React',
            'Laravel',
            'Code Igniter'
        ];

        $data['organization'] = [
            'Member of Publication and Documentation Division at Chaniel Youth Community 2024-present',
            'Creative Ministry At UKKK UPN Jatim Easter Event April 2023',
            'Class President - Digital System Course 2023',
            'Member Of Creative Ministry At UKKK UPN Jatim Christmas Event December 2022',
            'Class President - English Course 2022',
            'Deputy Chairman Of The Extracurricular English Club At SMA Negeri 3 Surabaya August 2019 - June 2021',
            'Management Of Music, Event, and Prayer Division in Christian Spiritual Extracurricular At SMP Negeri 19 Surabaya August 2018 - June 2019',
            'Class President - 8th Grade At SMP Negeri 19 Surabaya August 2017 - June 2018',
        ];

        $data['education'] = [
            'Informatics student at UPN Veteran Jawa Timur 2022-present',
            'Science student at SMA Negeri 3 Surabaya 2019-2022',
            'Student at SMP Negeri 19 Surabaya 2016-2019',
            'Student at SD Negeri Medokan Ayu 2 Surabaya 2010-2016',
        ];

        $data['portfolio'] = [
            [
                'num' => '01',
                'category' => 'Web Development',
                'title' => 'Database Toko Buku IMS',
                'description' => 'A database website development project for the case study "Toko Buku IMS"',
                'stack' => ['Html 5', 'Css 3', 'Javascript', 'Php', 'MySQL'],
                'image' => '/assets/Work/work1.png',
                'href' => 'https://github.com/sandynicholas3069/DatabaseTokoBukuIMS',
            ],
            [
                'num' => '02',
                'category' => 'Web Development',
                'title' => 'Website Personal CV',
                'description' => 'A personal CV website development project for website programming course task',
                'stack' => ['Html 5', 'Css 3', 'Javascript', 'Php'],
                'image' => '/assets/Work/work2.png',
                'href' => 'https://github.com/sandynicholas3069/PersonalCVWebsite',
            ],
            [
                'num' => '03',
                'category' => 'Web Development',
                'title' => 'Database CyberGym',
                'description' => 'A database website development project for the case study "Cyber Gym"',
                'stack' => ['Html 5', 'Css 3', 'Javascript', 'Php', 'MySql'],
                'image' => '/assets/Work/work3.png',
                'href' => 'https://github.com/sandynicholas3069/DatabaseCyberGym',
            ],
            [
                'num' => '04',
                'category' => 'Web Development',
                'title' => 'Database Ramadhanku',
                'description' => 'A database website development project for the case study "Ramadhanku"',
                'stack' => ['Html 5', 'Css 3', 'Javascript', 'Php', 'MySql'],
                'image' => '/assets/Work/work4.png',
                'href' => 'https://github.com/sandynicholas3069/DatabaseRamadhanku',
            ],
            [
                'num' => '05',
                'category' => 'Web Development',
                'title' => 'Website Destinasi Wisata Pantai Srau',
                'description' => 'A database website development project for the case study "Destinasi Wisata Pantai Srau"',
                'stack' => ['Html 5', 'Css 3', 'Javascript', 'Php', 'MySql'],
                'image' => '/assets/Work/work5.png',
                'href' => 'https://github.com/nafispratama04/Pemweb',
            ],
            [
                'num' => '06',
                'category' => 'App Development',
                'title' => 'App Sistem Manajemen Pegawai Kasir',
                'description' => 'A database app development project for the case study "Sistem Manajemen Pegawai Kasir"',
                'stack' => ['Java'],
                'image' => '/assets/Work/work6.png',
                'href' => 'https://github.com/nafispratama04/PBO',
            ],
        ];

        $this->load->view('portfolioview', $data);
    }
}