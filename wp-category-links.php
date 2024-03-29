function link_categories_to_related_page($categoryUrl, $categoryId) {
    $category = get_category($categoryId);
    $relatedPage = get_page_by_title($cateogry->name);
    if ($relatedPage) {
        $categoryUrl = get_permalink($relatedPage->ID);
    }
    return $categoryUrl;
}

add_filter('category_link', 'link_categories_to_related_page', 10, 2);
