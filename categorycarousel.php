<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class CategoryCarousel extends Module
{
    public function __construct()
    {
        $this->name = 'categorycarousel';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'TFI';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Category Carousel');
        $this->description = $this->l('Displays a carousel of categories on the home page.');

        $this->ps_versions_compliancy = ['min' => '1.7', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome') &&
            $this->registerHook('header');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHome($params)
    {   
        $categories = Category::getCategories($this->context->language->id, true, false); // Get categories
        $categoriesWithLinks = [];

        foreach ($categories as $category) {
            $categoryObj = new Category($category['id_category'], $this->context->language->id);

            // Generate the link and image for each category
            $categoriesWithLinks[] = [
                'name' => $categoryObj->name,
                'link' => $this->context->link->getCategoryLink($categoryObj),
                'img' => $this->context->link->getCatImageLink($categoryObj->link_rewrite, $categoryObj->id)
            ];
        }

        // Assign the categories with their links and images to the template
        $this->context->smarty->assign('categories', $categoriesWithLinks);

        return $this->display(__FILE__, 'categorycarousel.tpl');
    }


    public function hookHeader()
    {
        $this->context->controller->addCSS($this->_path.'views/css/categorycarousel.css');
        $this->context->controller->addJS($this->_path.'views/js/categorycarousel.js');
    }
}
