<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảo Nhật - Web Developer | Misty Team</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <div class="logo">Misty Team</div>
            <ul class="nav-links">
                <li><a href="#home">Trang Chủ</a></li>
                <li><a href="#about">Giới Thiệu</a></li>
                <li><a href="#skills">Kỹ Năng</a></li>
                <li><a href="#projects">Dự Án</a></li>
                <li><a href="#contact">Liên Hệ</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Bảo Nhật</h1>
            <h2>Lập Trình Viên Web | Misty Team</h2>
            <p>Chuyên phát triển website chuyên nghiệp, hiện đại</p>
            <a href="#contact" class="cta-button">Liên Hệ Ngay</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>Giới Thiệu</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Xin chào! Tôi là Bảo Nhật, một lập trình viên web đam mê công nghệ đến từ Hà Nội, Việt Nam. Là leader của Misty Team, tôi chuyên phát triển các website hiện đại, tối ưu trải nghiệm người dùng.</p>
                    <p>Với kinh nghiệm phát triển cả front-end và back-end, tôi biến ý tưởng thành hiện thực thông qua những dòng code sạch sẽ, hiệu quả và thiết kế tinh tế.</p>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> 0914 960 029</p>
                        <p><i class="fas fa-map-marker-alt"></i> Hà Nội, Việt Nam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2>Kỹ Năng Chuyên Môn</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-html5"></i></div>
                    <h3>HTML5</h3>
                    <p>Thành thạo viết mã HTML5 chuẩn SEO, tối ưu hóa cho các công cụ tìm kiếm</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-css3-alt"></i></div>
                    <h3>CSS3</h3>
                    <p>Làm việc với CSS3, SASS, Flexbox, Grid và các kỹ thuật responsive</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-js"></i></div>
                    <h3>JavaScript</h3>
                    <p>Phát triển ứng dụng web động với JavaScript thuần và các thư viện hiện đại</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-php"></i></div>
                    <h3>PHP</h3>
                    <p>Xây dựng ứng dụng web động với PHP thuần và các framework phổ biến</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-laravel"></i></div>
                    <h3>Laravel</h3>
                    <p>Phát triển ứng dụng web với Laravel Framework theo mô hình MVC</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fas fa-database"></i></div>
                    <h3>MySQL</h3>
                    <p>Thiết kế và tối ưu cơ sở dữ liệu quan hệ với MySQL</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-docker"></i></div>
                    <h3>Docker</h3>
                    <p>Triển khai và quản lý ứng dụng với container hóa bằng Docker</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-git-alt"></i></div>
                    <h3>Git</h3>
                    <p>Sử dụng Git để quản lý phiên bản và làm việc nhóm hiệu quả</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon"><i class="fab fa-linux"></i></div>
                    <h3>Linux</h3>
                    <p>Làm việc với môi trường Linux/Unix và các lệnh terminal</p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2>Dự Án Đã Thực Hiện</h2>
            
            <!-- Project Filter -->
            <div class="project-filter">
                <button class="filter-btn active" data-filter="all">Tất Cả</button>
                <button class="filter-btn" data-filter="ecommerce">Web Bán Hàng</button>
                <button class="filter-btn" data-filter="corporate">Web Giới Thiệu</button>
                <button class="filter-btn" data-filter="in-progress">Đang Thực Hiện</button>
            </div>

            <div class="projects-grid">
                <!-- Project 1: Thư Viện Tranh -->
                <a href="https://thuvientranh.com/" target="_blank" class="project-card-link">
                    <div class="project-card" data-category="ecommerce">
                        <h3>Thư Viện Tranh</h3>
                        <p>Website bán hàng tranh dán tường với giao diện hiện đại, dễ sử dụng, tích hợp thanh toán và quản lý đơn hàng.</p>
                        <div class="project-tags">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                            <span>jQuery</span>
                            <span>Bootstrap</span>
                        </div>
                        <span class="project-status">Đã Hoàn Thành</span>
                        <div class="project-links">
                            <span class="project-link">Xem Dự Án</span>
                        </div>
                    </div>
                </a>

                <!-- Project 2: Rendezvous -->
                <a href="https://airportmeetingplace.com/" target="_blank" class="project-card-link">
                    <div class="project-card" data-category="corporate">
                        <h3>Rendezvous</h3>
                        <p>Website giới thiệu nhà hàng sân bay với thiết kế sang trọng, hiển thị thực đơn và thông tin liên hệ.</p>
                        <div class="project-tags">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                        </div>
                        <span class="project-status">Đã Hoàn Thành</span>
                        <div class="project-links">
                            <span class="project-link">Xem Dự Án</span>
                        </div>
                    </div>
                </a>

                <!-- Project 3: Trường Vina Logistics -->
                <a href="https://truongvinalogistics.com.vn/" target="_blank" class="project-card-link">
                    <div class="project-card" data-category="corporate">
                        <h3>Trường Vina Logistics</h3>
                        <p>Website giới thiệu công ty logistics chuyên nghiệp, giới thiệu dịch vụ và thông tin liên hệ.</p>
                        <div class="project-tags">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                            <span>jQuery</span>
                            <span>Bootstrap</span>
                        </div>
                        <span class="project-status">Đã Hoàn Thành</span>
                        <div class="project-links">
                            <span class="project-link">Xem Dự Án</span>
                        </div>
                    </div>
                </a>

                <!-- Project 4: FreeMedBooks -->
                <a href="https://freemedbooks.com/" target="_blank" class="project-card-link">
                    <div class="project-card" data-category="ecommerce">
                        <h3>FreeMedBooks</h3>
                        <p>Website bán sách y khoa kết hợp quảng cáo, cung cấp tài liệu y học chất lượng cao cho sinh viên và bác sĩ.</p>
                        <div class="project-tags">
                            <span>WordPress</span>
                            <span>WooCommerce</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>Google AdSense</span>
                        </div>
                        <span class="project-status">Đã Hoàn Thành</span>
                        <div class="project-links">
                            <span class="project-link">Xem Dự Án</span>
                        </div>
                    </div>
                </a>

                <!-- Project 5: Duyen Le Dress -->
                <a href="https://zalo.me/0914960029" target="_blank" class="project-card-link">
                    <div class="project-card" data-category="in-progress">
                        <h3>Duyen Le Dress (Laravel)</h3>
                        <p>Website bán hàng thời trang trẻ em với giao diện thân thiện, dễ sử dụng trên mọi thiết bị.</p>
                        <div class="project-tags">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Vue.js</span>
                            <span>Tailwind CSS</span>
                            <span>REST API</span>
                        </div>
                        <span class="project-status in-progress">Đang Phát Triển</span>
                        <div class="project-links">
                            <span class="project-link">Liên Hệ</span>
                        </div>
                    </div>
                </a>

                <!-- Project 6: Happy Bird's Nest -->
                <a href="https://zalo.me/0914960029" target="_blank" class="project-card-link">
                    <div class="project-card" data-category="in-progress">
                        <h3>Happy Bird's Nest (Laravel + React)</h3>
                        <p>Website bán hàng yến sạch cao cấp, giới thiệu sản phẩm và chính sách bán hàng.</p>
                        <div class="project-tags">
                            <span>Laravel</span>
                            <span>React.js</span>
                            <span>MySQL</span>
                            <span>Redux</span>
                            <span>SCSS</span>
                        </div>
                        <span class="project-status in-progress">Đang Phát Triển</span>
                        <div class="project-links">
                            <span class="project-link">Liên Hệ</span>
                        </div>
                    </div>
                </a>

                <!-- Project 7: 419 Saigon -->
                <a href="https://zalo.me/0914960029" target="_blank" class="project-card-link">
                    <div class="project-card" data-category="in-progress">
                        <h3>419 Saigon (Next.js)</h3>
                        <p>Website giới thiệu quán bar với phong cách hiện đại, thể hiện không gian và các sự kiện đặc biệt.</p>
                    <div class="project-tags">
                        <span>Next.js</span>
                        <span>TypeScript</span>
                        <span>MongoDB</span>
                        <span>Tailwind CSS</span>
                        <span>NextAuth</span>
                        <span>Firebase</span>
                    </div>
                    <span class="project-status in-progress">Đang Phát Triển</span>
                    <div class="project-links">
                        <a href="https://zalo.me/0914960029" target="_blank" class="project-link">Liên Hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Liên Hệ Với Tôi</h2>
            <div class="contact-content">
                <form id="contactForm" action="send_email.php" method="POST">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required placeholder="Địa chỉ email">
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" required placeholder="Tiêu đề">
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" required placeholder="Nội dung tin nhắn"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Gửi Tin Nhắn</button>
                </form>
                <div class="contact-info">
                    <h3>Thông Tin Liên Hệ</h3>
                    <p><i class="fas fa-user"></i> Bảo Nhật</p>
                    <p><i class="fas fa-users"></i> Misty Team</p>
                    <p><i class="fas fa-phone"></i> 0914 960 029</p>
                    <p><i class="fas fa-envelope"></i> realleesan@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Hà Nội, Việt Nam</p>
                    <div class="social-links">
                        <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon" title="Zalo"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>Misty Team</h3>
                    <p>Chuyên phát triển website chuyên nghiệp, hiện đại</p>
                </div>
                <div class="footer-links">
                    <h4>Liên Kết Nhanh</h4>
                    <ul>
                        <li><a href="#home">Trang Chủ</a></li>
                        <li><a href="#about">Giới Thiệu</a></li>
                        <li><a href="#skills">Kỹ Năng</a></li>
                        <li><a href="#projects">Dự Án</a></li>
                        <li><a href="#contact">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Thông Tin Liên Hệ</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Hà Nội, Việt Nam</p>
                    <p><i class="fas fa-phone"></i> 0914 960 029</p>
                    <p><i class="fas fa-envelope"></i> realleesan@gmail.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Bảo Nhật - Misty Team. Tất cả các quyền được bảo lưu.</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" aria-label="Lên đầu trang">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="js/script.js"></script>
    <script src="js/filter.js"></script>
</body>
</html>
