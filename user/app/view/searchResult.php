<?php if (!empty($results)): ?>
    <div class="search-results">
        <h2>Kết quả tìm kiếm cho: "<?php echo htmlspecialchars($_GET['search']); ?>"</h2>
    <div class="search-results_list">
            <?php foreach ($results as $product): ?>
                <a href="index.php?page=detail&id=<?php echo $product['id_sanpham']; ?>">
                    <div class="search-results_list__product">
                        <img src="img/<?php echo $product['image']; ?>" alt="">
                        <input type="hidden" name="image" value="<?php echo $product['image']; ?>">
                        
                        <div class="search-results_list__product__name">
                            <?php echo $product['name']; ?>
                            <input type="hidden" name="name_product" value="<?php echo $product['name']; ?>">
                        </div>

                        <div class="search-results_list__product__info-name">
                            Đậm đà
                        </div>

                        <div class="search-results_list__product__topping">
                            Chưa có topping
                        </div>

                        <div class="search-results_list__product__price-money">
                            <div class="search-results_list__product__price-money__price">
                                Giá
                            </div>
                            <div class="search-results_list__product__price-money__money">
                                <?php echo $product['price_sale'] ? $product['price_sale'] : $product['price']; ?>đ
                                <input type="hidden" name="price_sale" value="<?php echo $product['price_sale']; ?>">
                                <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                            </div>
                        </div>

                        <div class="search-results_list__product__buy">
                            <input type="submit" value="Mua" name="buy-product">
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
<?php else: ?>
    <p>Không tìm thấy sản phẩm nào.</p>
<?php endif; ?>