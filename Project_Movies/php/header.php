<div class="login__popup">
        <div class="popup__title">
            <h1>Đăng Nhập</h1>
            <i class="fas fa-times loginclose"></i>
        </div>
        <div class="popup__sub">
            <div class="sub__title">
                <h3>
                    Mỗi người dùng chỉ sử dụng 01 tài khoản, nếu bạn chia sẻ, tài khoản có thể bị khóa mà không thông báo trước.
                </h3>
            </div>
            <form action='dangnhap.php?do=login' method="post"  id="registry">
                <div class="form--login">
                    <div class="name__text name1">
                        <label for="fname">Tài Khoản</label>
                    </div>
                    <div class="name__text pass1">
                        <label for="fname">Mật Khẩu</label>
                    </div>
                    <div class="name__input input1">
                        <input placeholder="Username" name="Username" type="username">
                    </div>
                    <div class="name__input input2">
                        <input placeholder="Password" name="Password" type="password">
                    </div>
                    <div class="box--one text1">
                        <div class="box__radio">
                            <input type="checkbox" name="" id="" type="checkbox">
                        </div>
                        <div class="box__text">
                            <p>Nhớ tài khoản</p>
                        </div>
                    </div>
                    <div class="box--two text2">
                        <a href="#">Quên mật khẩu</a>
                    </div>
                    <div class="clickbtn btn1">
                        <input type="submit" value="Đăng Nhập" name="login">
                    </div>
                    <div class="clickbtn btn2 btn--register">
                        <input type="button" value="Đăng Ký" name="registry" onclick='javascript:register();'></input>
                  </div>
                </div>
             </form>

        </div>
    </div>
    <div class="blurtrans"></div>
<div class="header--wrap desktop">
        <div class="wrap">
            <header>
                <div class="header__logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="header__menu">
                    <a class="menu__text" href="index.php">
                    <i class="fas fa-home"></i>
                    </a>
                    <div class="list--hover1 list-center">
                        <a class="menu__text">
                            <p>Thể Loại
                                <i class="fas fa-angle-down"></i>
                            </p>
                        </a>
                        <div class="content__text list1">
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim Hành Động</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim Viễn Tưởng</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim Hàn Quốc</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim Tâm Lý</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim Hài</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim Kinh Dị</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim Ma</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Phim 18</p>
                            </a>
                        </div>
                    </div>
                    <div class="list--hover2 list-center">
                        <a class="menu__text">
                            <p>Quốc Gia
                                <i class="fas fa-angle-down"></i>
                            </p>
                        </a>
                        <div class="content__text list2">
                            <a class="text__name" data-name="Phim Hàn Quốc" onclick="categoryMovies(this)">
                                <p>Hàn Quốc</p>
                            </a>
                            <a class="text__name" data-name="Phim Trung Quốc" onclick="categoryMovies(this)">
                                <p>Trung Quốc</p>
                            </a>
                            <a class="text__name" data-name="Phim Âu Mỹ" onclick="categoryMovies(this)">
                                <p>Mỹ</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Nhật Bản</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Ấn Độ </p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Việt Nam</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Đức</p>
                            </a>
                            <a class="text__name" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                                <p>Thái Lan</p>
                            </a>
                        </div>
                    </div>
                    <a class="menu__text" data-name="Phim Chiếu Rạp" onclick="categoryMovies(this)">
                        <p>Phim rạp</p>
                    </a>
                    <a class="menu__text" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim mới</p>
                    </a>
                </div>
                <div class="header__login">
                    <div class="login__input">
                        <input class="inputtext" type="text" placeholder="Tìm kiếm">
                        <div class="input__result desktop-input__result">
                            <div class="result__title">
                                <h1>
                                    Kết quả tìm kiếm cho từ khóa:
                                    <span>Hello</span>
                                </h1>
                            </div>
                            <div class="result__content">
                            </div>
                        </div>
                    </div>

                        <?php
if (isset($_SESSION['username']) && $_SESSION['username']) {
    echo '
    <div class="login__account">
    <div class="account__avatar">
    <img src="' . $_SESSION['avatar'] . '" alt="' . $_SESSION['username'] . '">
    </div>
    <div class="account__info">
    <span class="arrow"></span>
    <div class="info__user">
        <a href="#">
            <i class="fas fa-user-circle"></i>
            <p>' . $_SESSION['username'] . '</p>
        </a>
    </div>
    <div class="info__logout">
        <i class="fas fa-power-off"></i>
        <p>
            Đăng Xuất
        </p>
    </div>
</div>';
} else {
    echo '<button id="btnlogin">Đăng nhập</button>';
}
?>

                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class="header--wrap mobile">
        <input type="text" class="inputsearch" placeholder="Tìm kiếm">
        <div class="input__result super-input__result">
            <div class="result__title">
                <h1>
                    Kết quả tìm kiếm cho từ khóa:
                    <span>Hello</span>
                </h1>
            </div>
            <div class="result__content">
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn " onclick="closeNav()">&times;</a>
            <a class="linebot" href="index.php">Trang chủ</a>
            <div class="menu--mobile__list">
                <a class="linebot" href="#">Thể Loại</a>
                <div class="dropdown">
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim Hành Động</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim Viễn Tưởng</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim Hàn Quốc</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim Tâm Lý</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim Hài</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim Kinh Dị</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim Ma</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Phim 18</p>
                    </a>
                </div>
            </div>
            <div class="menu--mobile__list">
                <a class="linebot" href="#">Quốc Gia</a>
                <div class="dropdown">
                    <a class="dropdown__list" data-name="Phim Hàn Quốc" onclick="categoryMovies(this)">
                        <p>Hàn Quốc</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Trung Quốc" onclick="categoryMovies(this)">
                        <p>Trung Quốc</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Âu Mỹ" onclick="categoryMovies(this)">
                        <p>Mỹ</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Nhật Bản</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Ấn Độ </p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Việt Nam</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Đức</p>
                    </a>
                    <a class="dropdown__list" data-name="Phim Lẻ Mới Nhất" onclick="categoryMovies(this)">
                        <p>Thái Lan</p>
                    </a>
                </div>
            </div>
            <a class="linebot" href="#">Phim rạp</a>
            <a class="linebot" href="#">Phim mới</a>
        </div>
        <header class="wrap">
            <div class="header__button">
                <button href="#" onclick="openNav()" class="fas fa-bars fa-2x" aria-hidden="true"></button>
                <div class="header__logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
            </div>

            <div class="header__login">
                <div class="login__input">
                    <input class="inputtext mobile-input-text" type="text" placeholder="Tìm kiếm">
                    <div class="input__result mobile-input__result">
                        <div class="result__title">
                            <h1>
                                Kết quả tìm kiếm cho từ khóa:
                                <span>Hello</span>
                            </h1>
                        </div>
                        <div class="result__content">
                        </div>
                    </div>
                </div>
                <i class="fas fa-search searchicon"></i>
                <?php
if (isset($_SESSION['username']) && $_SESSION['username']) {
    echo '
    <div class="login__account">
    <div class="account__avatar">
    <img src="' . $_SESSION['avatar'] . '" alt="' . $_SESSION['username'] . '">
    </div>
    <div class="account__info">
    <span class="arrow"></span>
    <div class="info__user">
        <a href="#">
            <i class="fas fa-user-circle"></i>
            <p>' . $_SESSION['username'] . '</p>
        </a>
    </div>
    <div class="info__logout">
        <i class="fas fa-power-off"></i>
        <p>
            Đăng Xuất
        </p>
    </div>
</div>';
} else {
    echo '<button id="btnloginmobile">Đăng nhập</button>';
}
?>

            </div>
        </header>
    </div>