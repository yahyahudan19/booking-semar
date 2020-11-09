<?php 

namespace App\Controllers;

use App\Models\Booking;

class DataPemesan extends BaseController {

    protected $bookingModel;
    
    public function __construct()
    {
        $this->bookingModel = new Booking();
    }
    
    public function index()
    {
        $data  = $this->bookingModel->findAll();

        #return view admin with data
    }

    public function checked(string $idBooking)
    {
        # fungsi setelah cust checkin
        $statusCheck = ['checkin' => '1'];
        $bookingModel->update($idBooking,$statusCheck);
    }

}

/* End of file Controllername.php */

?>