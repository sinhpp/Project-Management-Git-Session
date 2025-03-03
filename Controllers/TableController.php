<?php

class TableController extends BaseController {
    public function welcome() {
        $this->view('table-list/table-list');
    }
}