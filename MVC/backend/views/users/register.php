<div class="container" style="max-width: 500px">
    <form method="post" action="">
        <h2>Đăng ký</h2>
        <div class="form-group">
            <label for="username">Tài khoản</label>
            <input type="text" name="username" value="" id="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" value="" id="password" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password-confirm">Nhập lại mật khẩu</label>
            <input type="password" name="password_confirm" value="" id="password-confirm" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary"/>
            <p>
                Đã có tài khoản, <a href="index.php?controller=login&action=login">Đăng nhập</a> ngay
            </p>
        </div>
    </form>
</div>