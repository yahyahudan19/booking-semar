<?php

use CodeIgniter\Model;

defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends Model
{

    protected $table = 'Booking';
    protected $primaryKey = 'idBooking';
    protected $allowedFields = ['jumlahPemesan', 'namaPemesan', 'noTelpon', 'tanggal_pemesanan','checkin'];
    protected $createdField  = 'created_at';

    protected $validationMessages = [
        'jumlahPemesan'        => [
            'required' => 'Bagian jumlahPemesan Harus diisi'
        ],
        'namaPemesan'        => [
            'required' => 'Bagian namaPemesan Harus diisi'
        ],
        'noTelepon'        => [
            'required' => 'Bagian noTelepon Harus diisi'
        ],
        'tanggal_pemesan'        => [
            'required' => 'Bagian tanggal_pemesan Harus diisi'
        ]
    ];
    protected $skipValidation  = false;
}

/* End of file ModelName.php */
