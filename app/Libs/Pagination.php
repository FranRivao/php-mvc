<?php namespace App\Libs;

use App\Controllers\AbstractController;
use App\Models\UserModel;
use PDO;

class Pagination{
    private $index;
    private $actualPage;
    private $resultsPerPage;
    private $amountResults;
    private $totalPages;

    function __construct($resultsPerPage){
        $this->index = 0;
        $this->actualPage = 1;
        $this->resultsPerPage = $resultsPerPage;

        $this->calculateAmountPages();
        
        if($this->validateActualPage()){
            $this->changePage();
            $this->showNav();
            $this->showPages();
        }
        else{
            $this->showNav();
            AbstractController::insertScript('alerts/pagination_error');
        }
    }

    function calculateAmountPages(){
        $result = UserModel::getAmountUsers();
        $this->amountResults = $result->fetch(PDO::FETCH_OBJ)->amount;
        $this->totalPages = $this->amountResults / $this->resultsPerPage;
    }

    function validateActualPage(){
        if(isset($_GET['page'])){
            return is_numeric($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <= $this->totalPages ? true : false;
        }
    }

    function changePage(){
        $this->actualPage = $_GET['page'];
        $this->index = ($this->actualPage - 1) * ($this->resultsPerPage);
    }

    function showNav(){
        $this->totalPages = intval($this->totalPages);
        for ($s = 0; $s < ($this->totalPages); $s++) { 
            $actual = ($s + 1) == $this->actualPage ? "active" : "";
        }
        require_once '../resources/views/admin/nav.php';
    }

    function showPages(){
        $results = UserModel::getUsersForPagination($this->index, $this->resultsPerPage);
        foreach ($results as $r) {
            require '../resources/views/admin/table_row.php';
        }
    }

}

?>