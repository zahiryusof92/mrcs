<?php

return [
    /*
     * GENERAL TERM
     */
    'title' => 'BORANG PERMOHONAN PROGRAM BANTUAN WANG TUNAI COVID-19',
    'description' => 'Maklumat yang akan anda kongsikan dalam borang ini akan membantu PBSMM untuk menilai kelayakan dan meluluskan permohonan penerima yang layak. Maklumat anda akan kekal SULIT dan tidak akan digunakanpakai untuk tujuan lain selain program PBSMM tanpa kebenaran anda.',
    'progress' => '',
    'success' => [
        'title' => 'Pendaftaran Berjaya!',
        'text' => '',
    ],
    'error' => [
        'title' => 'Opps',
        'text' => 'Ralat Berlaku. Sila Cuba Lagi',
    ],
    'form' => [
        'title' => 'SILA ISIKAN MAKLUMAT BERIKUT',
        'select' => 'Sila Pilih',
        'acknowledgement' => 'PENGAKUAN',
    ],
    /*
     * FORM FIELDS
     */
    /*
     * #1
     */
    'name' => [
        'title' => 'NAMA PEMOHON',
        'help' => '',
    ],
    /*
     * #2
     */
    'state' => [
        'title' => 'NEGERI KEDIAMAN',
        'help' => '',
        'value_0' => 'Johor',
        'value_1' => 'Kedah',
        'value_2' => 'Kelantan',
        'value_3' => 'Melaka',
        'value_4' => 'Negeri Sembilan',
        'value_5' => 'Pahang',
        'value_6' => 'Perak',
        'value_7' => 'Perlis',
        'value_8' => 'Pulau Pinang',
        'value_9' => 'Sabah',
        'value_10' => 'Sarawak',
        'value_11' => 'Selangor',
        'value_12' => 'Terengganu',
        'value_13' => 'Wilayah Persekutuan Kuala Lumpur',
        'value_14' => 'Wilayah Persekutuan Labuan',
        'value_15' => 'Wilayah Persekutuan Putrajaya'
    ],
    /*
     * #3
     */
    'ic_no' => [
        'title' => "NO KAD PENGENALAN (SILA TAIP TANPA JARAK)",
        'help' => 'Contoh: 800120010000 / A123456',
    ],
    /*
     * #4
     */
    'gender' => [
        'title' => 'JANTINA',
        'help' => '',
        'value_0' => 'Lelaki',
        'value_1' => 'Perempuan',
    ],
    /*
     * #5
     */
    'age' => [
        'title' => 'UMUR',
        'help' => '',
        'value_0' => 'Kurang 40 Tahun',
        'value_1' => '40 - 50 Tahun',
        'value_2' => '50 - 60 Tahun',
        'value_3' => 'Lebih 60 Tahun',
    ],
    /*
     * #6
     */
    'category' => [
        'title' => 'KATEGORI PEMOHON ',
        'help' => 'Sila Pilih Yang Berkenaan',
        'value_0' => 'Pemohon / Ahli Keluarga Positif COVID-19',
        'value_1' => 'Pemohon Kehilangan Sumber Pendapatan Akibat COVID-19',
        'value_2' => 'Pendapatan Pemohon Terjejas Disebabkan COVID-19 Dan Pelaksanaan PKP',
        'value_3' => 'Pendapatan Pemohon Adalah Sumber Pendapatan Tunggal Untuk Keluarga',
        'value_4' => 'Pendapatan Pemohon Adalah Sumber Utama Pendapatan Keluarga',
    ],
    /*
     * #7
     */
    'special_needs' => [
        'title' => 'ADA SESIAPA YANG MEMPUNYAI KEPERLUAN KHAS (DARI KUMPULAN BERIKUT) DI RUMAH ANDA',
        'help' => 'Sila Pilih Yang Berkenaan',
        'value_0' => 'Orang Kurang Upaya',
        'value_1' => 'Warga Emas',
        'value_2' => 'Ibu Mengandung',
        'value_3' => 'Pesakit Kronik / Terlantar',
        'value_4' => 'Tidak Berkaitan',
    ],
    /*
     * #8
     */
    'address' => [
        'title' => 'ALAMAT LENGKAP KEDIAMAN',
        'help' => '',
    ],
    /*
     * #9
     */
    'postcode' => [
        'title' => 'POSKOD ALAMAT KEDIAMAN',
        'help' => '',
    ],
    /*
     * #10
     */
    'phone_no' => [
        'title' => 'NOMBOR TELEFON (TIDAK TERMASUK +60)',
        'help' => 'Contoh: 197777777'
    ],
    /*
     * #11
     */
    'race' => [
        'title' => 'BANGSA',
        'help' => '',
        'value_0' => 'Melayu',
        'value_1' => 'Cina',
        'value_2' => 'India',
        'value_3' => 'Bumiputra Semenanjung',
        'value_4' => 'Bumiputra Sabah',
        'value_5' => 'Bumiputra Sarawak',
        'value_6' => 'Lain-lain'
    ],
    /*
     * #12
     */
    'marriage_status' => [
        'title' => 'STATUS PEMOHON',
        'help' => '',
        'value_0' => 'Bujang',
        'value_1' => 'Berkahwin',
        'value_2' => 'Duda',
        'value_3' => 'Balu / Janda',
    ],
    /*
     * #13
     */
    'employment_status_before_mco' => [
        'title' => 'STATUS PEKERJAAN SEBELUM PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Penerima Pencen (Pesara / Menerima Pencen Suami / Isteri)',
        'value_1' => 'Bekerja',
        'value_2' => 'Suri Rumah',
        'value_3' => 'Tidak Bekerja',
    ],
    /*
     * #14
     */
    'occupation_before_mco' => [
        'title' => 'JENIS PEKERJAAN PEMOHON SEBELUM PELAKSANAAN PKP',
        'help' => 'Contoh: Kerani, Pemandu Teksi, Jurujual',
    ],
    /*
     * #15
     */
    'employment_status_after_mco' => [
        'title' => 'STATUS PEKERJAAN SETELAH PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Pesara',
        'value_1' => 'Bekerja',
        'value_2' => 'Suri Rumah',
        'value_3' => 'Diberhentikan Kerja',
        'value_4' => 'Pekerja harian',
        'value_5' => 'Tidak Bekerja',
    ],
    /*
     * #16
     */
    'residence_status' => [
        'title' => 'JENIS KEDIAMAN SEKARANG',
        'help' => '',
        'value_0' => 'Sendiri',
        'value_1' => 'Sewa',
        'value_2' => 'Kuaters Kerajaan',
        'value_3' => 'Gelandangan',
        'value_4' => 'Menumpang (Sila Nyatakan)',
    ],
    /*
     * #17
     */
    'temporarily_lodging' => [
        'title' => 'JIKA MENUMPANG NYATAKAN',
        'help' => '',
        'value_0' => 'Rumah Anak',
        'value_1' => 'Rumah Saudara / Adik-beradik',
        'value_2' => 'Rumah Ibu Bapa',
        'value_3' => 'Tidak Berkaitan',
    ],
    /*
     * #18
     */
    'monthly_income_before_mco' => [
        'title' => 'PENDAPATAN BULANAN SEBELUM PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Kurang Daripada RM 1,200',
        'value_1' => 'RM 1,201 - RM 2,000',
        'value_2' => 'RM 2,001 - RM 3,000',
        'value_3' => 'RM 3,001 - RM 4,000',
        'value_4' => 'RM 4,001 - RM 4,800',
        'value_5' => 'Lebih Daripada RM 4,800',
    ],
    /*
     * #19
     */
    'monthly_income_after_mco' => [
        'title' => 'PENDAPATAN BULANAN SELEPAS PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Kurang Daripada RM 1,200',
        'value_1' => 'RM 1,201 - RM 2,000',
        'value_2' => 'RM 2,001 - RM 3,000',
        'value_3' => 'RM 3,001 - RM 4,000',
        'value_4' => 'RM 4,001 - RM 4,800',
        'value_5' => 'Lebih Daripada RM 4,800',
        'value_6' => 'Tidak Bekerja / Diberhentikan',
    ],
    /*
     * #20
     */
    'spouse_name' => [
        'title' => 'NAMA PASANGAN',
        'help' => 'Sila Abaikan Soalan Ini Sekiranya Anda Tidak Mempunyai Pasangan'
    ],
    /*
     * #21
     */
    'spouse_ic_no' => [
        'title' => 'NOMBOR KAD PENGENALAN / PASSPORT PASANGAN',
        'help' => 'Sila Abaikan Soalan Ini Sekiranya Anda Tidak Mempunyai Pasangan'
    ],
    /*
     * #22
     */
    'working_family' => [
        'title' => 'BILANGAN AHLI KELUARGA YANG BEKERJA (TERMASUK ORANG LAIN / SAUDARA YANG TINGGAL DALAM RUMAH YANG SAMA)',
        'help' => '',
        'value_0' => '2 orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #23
     */
    'spouse_employment_status_before_mco' => [
        'title' => 'PEKERJAAN PASANGAN SEBELUM PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Penerima Pencen (Pesara / Menerima Pencen Suami / Isteri)',
        'value_1' => 'Bekerja',
        'value_2' => 'Suri Rumah',
        'value_3' => 'Pekerja harian',
        'value_4' => 'Tidak Bekerja',
    ],
    /*
     * #24
     */
    'spouse_monthly_income_before_mco' => [
        'title' => 'JUMLAH PENDAPATAN SEBELUM PELAKSANAAN PKP ',
        'help' => '',
        'value_0' => 'Kurang Daripada RM 1,200',
        'value_1' => 'RM 1,201 - RM 2,000',
        'value_2' => 'RM 2,001 - RM 3,000',
        'value_3' => 'RM 3,001 - RM 4,000',
        'value_4' => 'RM 4,001 - RM 4,800',
        'value_5' => 'Lebih Daripada RM 4,800',
        'value_6' => 'Tidak Bekerja',
    ],
    /*
     * #25
     */
    'spouse_monthly_income_after_mco' => [
        'title' => 'JUMLAH PENDAPATAN SETELAH PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Kurang Daripada RM 1,200',
        'value_1' => 'RM 1,201 - RM 2,000',
        'value_2' => 'RM 2,001 - RM 3,000',
        'value_3' => 'RM 3,001 - RM 4,000',
        'value_4' => 'RM 4,001 - RM 4,800',
        'value_5' => 'Lebih Daripada RM 4,800',
        'value_6' => 'Tidak Bekerja / Diberhentikan',
    ],
    /*
     * #26
     */
    'size_household' => [
        'title' => 'BILANGAN ISI RUMAH',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
    ],
    /*
     * #27
     */
    'total_of_men' => [
        'title' => 'BILANGAN LELAKI DALAM KELUARGA (TERMASUK PEMOHON JIKA PEMOHON ADALAH LELAKI)',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #28
     */
    'total_of_women' => [
        'title' => 'BILANGAN PEREMPUAN DALAM KELUARGA (TERMASUK PEMOHON JIKA PEMOHON ADALAH PEREMPUAN)',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #29
     */
    'total_of_baby' => [
        'title' => 'BILANGAN BAYI (<2 TAHUN) DALAM ISI RUMAH',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #30
     */
    'total_of_children' => [
        'title' => 'BILANGAN KANAK-KANAK (3 - 13 TAHUN) DALAM ISI RUMAH',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #31
     */
    'total_of_teenager' => [
        'title' => 'BILANGAN REMAJA (14 - 19 TAHUN) DALAM ISI RUMAH',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #32
     */
    'total_of_adult' => [
        'title' => 'BILANGAN DEWASA (20 - 59 TAHUN) DALAM ISI RUMAH',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #33
     */
    'total_of_senior_citizen' => [
        'title' => 'BILANGAN WARGA EMAS (60 TAHUN KE ATAS) DALAM ISI RUMAH',
        'help' => '',
        'value_0' => '2 Orang Atau Kurang',
        'value_1' => '3 - 5 Orang',
        'value_2' => '6 Orang Atau Lebih',
        'value_3' => 'Tiada',
    ],
    /*
     * #34
     */
    'assistance_provider' => [
        'title' => 'PIHAK YANG MEMBERI BANTUAN KEPADA PEMOHON SEJAK BERMULANYA COVID-19 DAN PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Kerajaan',
        'value_1' => 'Syarikat Korporat',
        'value_2' => 'Pertubuhan Bukan Kerajaan (NGO)',
        'value_3' => 'Perseorangan / Individu',
        'value_4' => 'Tiada',
    ],
    /*
     * #35
     */
    'assistance_received' => [
        'title' => 'JENIS BANTUAN YANG DITERIMA SEPANJANG PELAKSANAAN PKP',
        'help' => '',
        'value_0' => 'Bantuan Prihatin Nasional (Tunai)',
        'value_1' => 'Bantuan Jabatan Kebajikan Masyarakat (Barangan / Tunai)',
        'value_2' => 'Bantuan Zakat (Barangan / Tunai)',
        'value_3' => 'Bantuan Institusi Keagamaan (Barangan / Tunai)',
        'value_4' => 'Bantuan Syarikat Korporat (Barangan / Tunai)',
        'value_5' => 'Bantuan Pertubuhan Bukan Kerajaan (Barangan / Tunai)',
        'value_6' => 'Bantuan Khas Kerajaan',
        'value_7' => 'Tiada',
    ],
    /*
     * #36
     */
    'assistance_most_needed' => [
        'title' => 'SEKIRANYA DIBERI PILIHAN, JENIS BANTUAN YANG SANGAT DIPERLUKAN SEKARANG',
        'help' => '',
        'value_0' => 'Bahan Makanan',
        'value_1' => 'Barangan Keperluan Harian (Selimut, Pakaian, Kit Kebersihan, Alatan Dapur)',
        'value_2' => 'Bantuan Pendidikan',
        'value_3' => 'Bantuan Barangan Kesihatan',
        'value_4' => 'Wang Tunai',
    ],
    /*
     * #37
     */
    'others_assistance_needed' => [
        'title' => 'SEKIRANYA DIBERI PILIHAN, JENIS BANTUAN LAIN YANG DIPERLUKAN',
        'help' => '',
        'value_0' => 'Bahan Makanan',
        'value_1' => 'Barangan Keperluan Harian (Selimut, Pakaian, Kit Kebersihan, Alatan Dapur)',
        'value_2' => 'Bantuan Pendidikan',
        'value_3' => 'Bantuan Barangan Kesihatan',
        'value_4' => 'Wang Tunai',
    ],
    /*
     * #38
     */
    'mco_affected' => [
        'title' => 'ADAKAH SITUASI COVID-19 DAN PELAKSANAAN PKP MEMBERI KESAN KEPADA AHLI KELUARGA ANDA',
        'help' => '',
        'value_0' => 'Ya',
        'value_1' => 'Tidak',
    ],
    /*
     * #39
     */
    'type_mco_affected' => [
        'title' => 'JIKA YA, SILA NYATAKAN',
        'help' => '',
        'value_0' => 'Trauma / Kemurungan',
        'value_1' => 'Masalah Kesihatan',
        'value_2' => 'Hilang Pekerjaan',
        'value_3' => 'Pendapatan Terjejas',
        'value_4' => 'Lain-lain',
    ],
    /*
     * #40
     */
    'method_assistance_distributed' => [
        'title' => 'KAEDAH PILIHAN UNTUK BANTUAN TUNAI DISALURKAN ',
        'help' => '',
        'value_0' => 'Kredit Ke Akaun Bank Pemohon',
        'value_1' => 'Baucer Tunai (Contoh Baucer Aeon, Baucer Tesco)',
        'value_2' => 'Kad Pra Bayar (Seperti Kad Touch N Go)',
        'value_3' => 'E-Wallet (Boost, Grabpay, Lazada Wallet, Dan Lain-Lain)',
        'value_4' => 'Bantuan Berbentuk Barangan',
    ], /*
     * #41
     */
    'bank_status' => [
        'title' => 'ADAKAH SISTEM PERBANKAN ANDA MASIH BOLEH DIGUNAKAN',
        'help' => '',
        'value_0' => 'Ya',
        'value_1' => 'Tidak',
    ],
    /*
     * #42
     */
    'bank_inactive' => [
        'title' => 'JIKA SISTEM PERBANKAN ANDA TIDAK AKTIF, SILA PILIH KAEDAH LAIN UNTUK PENERIMAAN WANG',
        'help' => '',
        'value_0' => 'Wang Pos',
        'value_1' => 'E Wallet',
        'value_2' => 'Serahan Tunai Di Tangan',
        'value_3' => 'Baucer Tunai',
        'value_4' => 'Lain-lain (Sila Nyatakan)',
    ],
    /*
     * #43
     */
    'others_method_distributed' => [
        'title' => 'JIKA LAIN-LAIN, SILA NYATAKAN',
        'help' => '',
    ],
    /*
     * #44
     */
    'bank_name' => [
        'title' => 'SILA NYATAKAN NAMA BANK YANG MASIH AKTIF',
        'help' => '',
        'value_0' => 'Affin Bank / Affin Islamic Bank',
        'value_1' => 'Agrobank',
        'value_2' => 'Alliance Bank',
        'value_3' => 'Al-Rajhi Banking & Investment Corporation (Malaysia) Berhad',
        'value_4' => 'AmBank',
        'value_5' => 'Bangkok Bank Berhad',
        'value_6' => 'Bank Islam',
        'value_7' => 'Bank Muamalat',
        'value_8' => 'Bank Kerjasama Rakyat Malaysia',
        'value_9' => 'Bank of America (Malaysia) Berhad',
        'value_10' => 'Bank of China (Malaysia) Berhad',
        'value_11' => 'Bank of Tokyo-Mitsubishi UFJ (M) Berhad',
        'value_12' => 'Bank Simpanan Nasional',
        'value_13' => 'BNP Paribas',
        'value_14' => 'CIMB Bank',
        'value_15' => 'Citibank',
        'value_16' => 'China Construction Bank (Malaysia) Berhad',
        'value_17' => 'Deutsche Bank (M) Berhad',
        'value_18' => 'Hong Leong Bank',
        'value_19' => 'HSBC Bank',
        'value_20' => 'Industrial & Commercial Bank of China (ICBC)',
        'value_21' => 'J.P. Morgan Chase Bank',
        'value_22' => 'Kuwait Finance House (Malaysia)',
        'value_23' => 'Maybank',
        'value_24' => 'MBSB Bank',
        'value_25' => 'MUFG Bank',
        'value_26' => 'OCBC Bank',
        'value_27' => 'Public Bank',
        'value_28' => 'RHB Bank',
        'value_29' => 'Standard Chartered Bank',
        'value_30' => 'Sumitomo Mitsui Banking Corporation (M) Berhad',
        'value_31' => 'The Royal Bank of Scotland Berhad',
        'value_32' => 'UOB Bank'
    ],
    /*
     * #45
     */
    'bank_account_no' => [
        'title' => 'NOMBOR AKAUN BANK',
        'help' => '',
    ],
    /*
     * #46
     */
    'purpose_of_assistance' => [
        'title' => 'SEKIRANYA ANDA MENERIMA BANTUAN WANG TUNAI, SILA NYATAKAN TUJUAN KEGUNAAN',
        'help' => '',
        'value_0' => 'Membeli Bahan Makanan',
        'value_1' => 'Membeli Barangan Keperluan Harian (Selimut, Pakaian, Kit Kebersihan, Alatan Dapur)',
        'value_2' => 'Keperluan Pendidikan / Persekolahan',
        'value_3' => 'Kesihatan',
        'value_4' => 'Bayaran Pinjaman',
        'value_5' => 'Bayaran Bil Utiliti'
    ],
    /*
     * #47
     */
    'email' => [
        'title' => 'E-MEL',
        'help' => '',
    ],
    /*
     * #48
     */
    'acknowledge' => [
        'title' => 'SAYA MENGAKU BAHAWA SEMUA KETERANGAN YANG DIBERIKAN ADALAH BENAR. SEKIRANYA MAKLUMAT DIDAPATI PALSU, PIHAK YANG BERHAK MEMBERIKAN KELULUSAN BOLEH MEMILIH UNTUK MENGABAIKAN PERMOHONAN SAYA',
        'help' => '',
        'value' => 'Ya, Saya Mengaku',
    ],
    'button' => [
        'previous' => 'Sebelumnya',
        'next' => 'Seterusnya',
        'submit' => 'Hantar',
        'register_now' => 'DAFTAR SEKARANG'
    ],
    'emails' => [
        'subject' => 'Makluman Penerimaan Borang Permohonan Bantuan Wang Tunai COVID-19 PBSMM',
    ],
];
