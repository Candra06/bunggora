<?php

/**
 *
 */
class
Admin extends Controller
{

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $this->view('admin/layout/theme');
    $this->view('admin/index', $data);
    $this->view('admin/layout/footer');
  }
}
 ?>
