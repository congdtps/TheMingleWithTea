<?php
require_once('app/model/product.php');

class SearchController {
    public function handleSearch() {
        if (isset($_GET['query']) && !empty($_GET['query'])) {
            $keyword = trim($_GET['query']);
            $productModel = new Product();
            $results = $productModel->searchProducts($keyword);

            // Truyền kết quả tìm kiếm sang view
            require_once('app/view/searchResults.php');
        } else {
            // Nếu không có từ khóa, quay về trang chủ
            header("Location: index.php");
        }
    }
}
?>