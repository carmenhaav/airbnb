<?php namespace Halo;

class rentals extends Controller
{

    function index()
    {
        $this->rentals = get_all("SELECT * FROM rentals");
    }

    function view()
    {
        $rental_id = $this->params[0];
        $this->rental = get_first("SELECT * FROM rentals WHERE rental_id = '{$rental_id}'");
    }

    function edit()
    {
        $rental_id = $this->params[0];
        $this->rental = get_first("SELECT * FROM rentals WHERE rental_id = '{$rental_id}'");
    }

    function post_edit()
    {
        $data = $_POST['data'];
        insert('rental', $data);
    }

    function ajax_delete()
    {
        exit(q("DELETE FROM rentals WHERE rental_id = '{$_POST['rental_id']}'") ? 'Ok' : 'Fail');
    }

}