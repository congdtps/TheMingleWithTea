<div id="content">

<div class="customer-account">
    <div class="customer-account__name"></div>
    <h2>TÀI KHOẢN KHÁCH HÀNG</h2>
    <table border="1" cellpadding="10" cellspacing="0" class="table">
    <tr>
        <th>Tên tài khoản</th>
        <th>Mật khẩu</th>
    </tr>
    <tr>
        <td><?= isset($data['name_user']) ? $data['name_user'] : 'Chưa có dữ liệu'; ?></td>
        <td><?= isset($data['password_user']) ? $data['password_user'] : 'Chưa có dữ liệu'; ?></td>
    </tr>
    </table>
    <a href="index.php?page=lichsumua">
        <input type="submit" value="Chi tiết đơn hàng">
    </a>
    
    <a href="index.php?page=logout">
        <input type="submit" value="Đăng xuất">
    </a>

    
   
  
</div>
</div>

