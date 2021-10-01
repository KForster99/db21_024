<?php
$controllers = array('pages'=>['home','error'],
                    'quotation'=>['index','newQuotation','searchQuotation','addQuotation'],
                    'quotationDetail'=>['index','newQuotationDetail','addQuotationDetail','searchQuotationDetail', 'updateFormQuotationDetail', 'updateQuotationDetail'],
                    'productRate'=>['index', 'newProductRate', 'addProductRate', 'search', 'updateForm', 'update', 'deleteConfirm', 'delete']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    switch($controller){
        case "pages": $controller = new PagesController();
                      break;
        
        case "quotation" : require_once("./models/quotationModel.php");
                           $controller = new QuotationController();
                           break;

        case "quotationDetail" :    require_once("./models/quotationDetailModel.php");
                                    require_once("./models/productColorModel.php");
                                    require_once("./models/quotationModel.php");
                                    $controller = new QuotationDetailController();
                                    break;

        case "productRate" :    require_once("./models/productRateModel.php");
                                require_once("./models/productModel.php");
                                $controller = new ProductRateController();
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
