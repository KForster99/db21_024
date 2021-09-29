<?php
$controllers = array('pages'=>['home','error'],'quotation'=>['index','newQuotation'],'quotationDetail'=>['index']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    switch($controller){
        case "pages": $controller = new PagesController();
                      break;
        
        case "quotation" : require_once("./models/quotationModel.php");
                           require_once("./models/customerModel.php");
                           require_once("./models/employeeModel.php");
                           $controller = new QuotationController();
                           break;

        case "quotationDetail" :    require_once("./models/quotationDetailModel.php");
                                    $controller = new QuotationDetailController();
                                    break;

    }$controller->{$action}();
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller]))
        call($controller,$action);
    else
        call('pages','error');
}
else{
    call('pages','error');
}
