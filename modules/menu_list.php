<?php
class Menu {
    protected $currentAction;
    
    public function __construct($menu)
    {
        $this->currentAction = $menu;
    }
    
    public function getMenu()
    {
        $productsLink = '<li class="nav-item">';
        $productsLink .= '<a class="nav-link" href="?menu=products">Products</a>';
        $productsLink .= '</li>';
        $categoriesLink = '<li class="nav-item" style="margin-left: 100px;">';
        $categoriesLink .= '<a class="nav-link" href="?menu=categories">Categories</a>';
        $categoriesLink .= '</li>';
        
        switch ($this->currentAction) {
            case 'products':
                $productsLink = '<li class="nav-item">';
                $productsLink .= '<a class="nav-link" style="background-color: #3fc1db; border-radius: 10px;" href="?menu=products">Products</a>';
                $productsLink .= '</li>';
                break;
            case 'categories':
                $categoriesLink = '<li class="nav-item">';
                $categoriesLink .= '<a class="nav-link" style="background-color: #3fc1db; border-radius: 10px;margin-left: 100px;" href="?menu=categories">Categories</a>';
                $categoriesLink .= '</li>';
                break;
            default:
                break;
        }
        
        return $productsLink . $categoriesLink;
    }
}

$menu = new Menu(isset($_GET['menu']) ? $_GET['menu'] : '');
echo $menu->getMenu();