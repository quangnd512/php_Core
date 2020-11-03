<?php
require_once('Book.php');
class Action
{
    function __construct()
    {
        switch ($_POST['submit']) {
            case 'insert':
                $objBook = new Book;
                $objBook->setName($_POST['Iname']);
                $objBook->setType($_POST['Itype']);
                $objBook->setPages($_POST['Ipages']);
                $objBook->setPrice($_POST['Iprice']);
                $objBook->setAuther($_POST['Iauther']);
                $objBook->setCreated_date(date('Y-m-d H:i:s'));
                if ($objBook->insert()) {
                    header('location: index.php?insert=1');
                }else{
                    header('location: index.php?insert=0');
                }
                break;
            
            case 'edit':
                $objBook = new Book;
                $objBook->setId($_POST['Iid']);
                $objBook->setName($_POST['Iname']);
                $objBook->setType($_POST['Itype']);
                $objBook->setPages($_POST['Ipages']);
                $objBook->setPrice($_POST['Iprice']);
                $objBook->setAuther($_POST['Iauther']);
                $objBook->setCreated_date(date('Y-m-d H:i:s'));
                if ($objBook->edit()) {
                    header('location: index.php?edit=1');
                }else{
                    header('location: index.php?edit=0');
                }
                break;

            case 'delete':
                $objBook = new Book;
                $objBook->setId($_POST['Iid']);
                if ($objBook->delete()) {
                    header('location: index.php?delete=1');
                }else{
                    header('location: index.php?delete=0');
                }
                break;

            default:
                header('location: index.php');
                break;
        }
    }
}

if (isset($_POST['submit'])) {
    $objAct = new Action;
}else{
    header('location: index.php');
}