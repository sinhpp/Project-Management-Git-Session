<?php

class TableController extends BaseController {
    public function showTable() {
        $this->view('table-list/table-list');
    }
}