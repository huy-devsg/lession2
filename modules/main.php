<div class="main">
    <?php
        if(isset($_GET['menu']))
        {
            $click = $_GET['menu'];
            if(isset($_GET['query']))
            {
                $query = $_GET['query'];
            }
                if($click=='products')
                {
                    if(isset($query))
                    {
                        if($query=='edit')
                        {
                            if(isset($_GET['product_id']))
                            {
                            $_SESSION['sp_id']=$_GET['product_id'];
                            }
                            include('modules/product_consollers/edit.php');
                        }
                        elseif($query=='delete')
                        {
                            include('modules/product_consollers/delete.php');
                        }
                        elseif($query=='copy')
                        {
                            include('modules/product_consollers/copy.php');
                        }
                        else
                        {
                            include('modules/product_consollers/show.php');
                        } 
                    }
                    else
                    {
                        include('modules/product_consollers/add.php');
                       // include('modules/product_consollers/search.php');
                    include('modules/product_consollers/product_list.php'); 
                    include('modules/product_consollers/paginations.php');

                    }             
                }
            elseif($click=='categories')
            {
                include('modules/category_consollers/add.php');
                include('modules/category_consollers/category_list.php');
            }   
        }
        else{
            include('modules/dashboard.php');
        }
?>
</div>