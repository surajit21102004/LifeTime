<?php
// Contact form handling
$message = '';
if ($_POST) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $msg = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $phone && $course) {
        // Here you would typically send email or save to database
        $message = '<div class="alert alert-success">Thank you! Your inquiry has been submitted successfully. We will contact you soon!</div>';
    } else {
        $message = '<div class="alert alert-danger">Please fill in all required fields.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeTime - Transform Your Future with Professional Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <img src="images/logo.jpg" width='180' height='60' viewBox='0 0 50 40'%3E%3Crect width='50' height='40' fill='%23FFD700'/%3E%3Ctext x='25' y='25' font-family='Arial, sans-serif' font-size='20' font-weight='bold' text-anchor='middle' fill='%232E4BC6'%3ELT%3C/text%3E%3C/svg%3E" alt="LifeTime" class="me-2">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why-choose">Why Choose Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Our Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reviews">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="hero-title animate__animated animate__fadeInUp">
                        Transform Your Future with <span class="text-warning">LifeTime</span>
                    </h1>
                    <p class="hero-subtitle animate__animated animate__fadeInUp animate__delay-1s">
                        Master the skills that matter! From Computer Fundamentals to AI-powered Web Development, 
                        Data Analytics to Digital Marketing - Your journey to success starts here.
                    </p>
                    <div class="hero-buttons animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#courses" class="btn btn-warning btn-lg me-3">Explore Courses</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Get Started Today</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Why Choose <span class="text-primary">LifeTime</span>?</h2>
                    <p class="section-subtitle">We don't just teach - we transform careers and lives!</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate__animated animate__fadeInUp">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4>AI-Powered Learning</h4>
                        <p>Experience the future of education with our AI-integrated curriculum that adapts to your learning style.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Expert Instructors</h4>
                        <p>Learn from industry professionals with years of real-world experience in their respective fields.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Industry Certification</h4>
                        <p>Earn recognized certifications that employers value and trust in today's competitive job market.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="feature-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h4>Hands-On Projects</h4>
                        <p>Build real-world projects that showcase your skills and boost your portfolio.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-4s">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Flexible Learning</h4>
                        <p>Study at your own pace with our flexible schedules designed for working professionals.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-5s">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Job Placement Support</h4>
                        <p>Get career guidance, interview preparation, and job placement assistance from our dedicated team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Our <span class="text-primary">Premium Courses</span></h2>
                    <p class="section-subtitle">Choose your path to success with our comprehensive course offerings</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <div class="course-card">
                        <div class="course-image">
                            <i class="fas fa-desktop course-icon"></i>
                        </div>
                        <div class="course-content">
                            <h4>Fundamentals of Computer</h4>
                            <p>Master the basics and build a strong foundation in computer science and technology.</p>
                            <ul class="course-features">
                                <li><i class="fas fa-check"></i> Hardware & Software Concepts</li>
                                <li><i class="fas fa-check"></i> Operating Systems</li>
                                <li><i class="fas fa-check"></i> Networking Basics</li>
                                <li><i class="fas fa-check"></i> Troubleshooting Techniques</li>
                            </ul>
                            <div class="course-footer">
                                <span class="course-duration"><i class="fas fa-clock"></i> 3 Months</span>
                                <a href="#contact" class="btn btn-primary">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="course-card">
                        <div class="course-image">
                            <i class="fas fa-robot course-icon"></i>
                        </div>
                        <div class="course-content">
                            <h4>Web Development Using AI</h4>
                            <p>Create stunning websites with the power of artificial intelligence and modern frameworks.</p>
                            <ul class="course-features">
                                <li><i class="fas fa-check"></i> AI-Assisted Coding</li>
                                <li><i class="fas fa-check"></i> Modern Web Frameworks</li>
                                <li><i class="fas fa-check"></i> Responsive Design</li>
                                <li><i class="fas fa-check"></i> API Integration</li>
                            </ul>
                            <div class="course-footer">
                                <span class="course-duration"><i class="fas fa-clock"></i> 4 Months</span>
                                <a href="#contact" class="btn btn-primary">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="course-card">
                        <div class="course-image">
                            <i class="fas fa-chart-line course-icon"></i>
                        </div>
                        <div class="course-content">
                            <h4>Data Analytics (DAT)</h4>
                            <p>Transform raw data into actionable insights with advanced analytics techniques.</p>
                            <ul class="course-features">
                                <li><i class="fas fa-check"></i> Statistical Analysis</li>
                                <li><i class="fas fa-check"></i> Data Visualization</li>
                                <li><i class="fas fa-check"></i> Machine Learning Basics</li>
                                <li><i class="fas fa-check"></i> Business Intelligence</li>
                            </ul>
                            <div class="course-footer">
                                <span class="course-duration"><i class="fas fa-clock"></i> 5 Months</span>
                                <a href="#contact" class="btn btn-primary">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="course-card">
                        <div class="course-image">
                            <i class="fas fa-bullhorn course-icon"></i>
                        </div>
                        <div class="course-content">
                            <h4>Digital Marketing</h4>
                            <p>Master the art of online marketing and grow businesses in the digital age.</p>
                            <ul class="course-features">
                                <li><i class="fas fa-check"></i> SEO & SEM Mastery</li>
                                <li><i class="fas fa-check"></i> Social Media Marketing</li>
                                <li><i class="fas fa-check"></i> Content Strategy</li>
                                <li><i class="fas fa-check"></i> Analytics & ROI</li>
                            </ul>
                            <div class="course-footer">
                                <span class="course-duration"><i class="fas fa-clock"></i> 3 Months</span>
                                <a href="#contact" class="btn btn-primary">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Reviews Section -->
    <section id="reviews" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">What Our <span class="text-warning">Students Say</span></h2>
                    <p class="section-subtitle">Real success stories from our LifeTime family</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="review-card">
                        <div class="stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The Web Development with AI course completely transformed my career. I landed my dream job within 2 months of completion!"</p>
                        <div class="reviewer">
                            <strong>Priya Sharma</strong>
                            <small>Full Stack Developer at TechCorp</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="review-card">
                        <div class="stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Amazing instructors and practical approach! The Digital Marketing course helped me start my own successful agency."</p>
                        <div class="reviewer">
                            <strong>Rahul Kumar</strong>
                            <small>Digital Marketing Entrepreneur</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="review-card">
                        <div class="stars mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"From zero to data analyst! The support and quality of education at LifeTime is unmatched. Highly recommended!"</p>
                        <div class="reviewer">
                            <strong>Anita Patel</strong>
                            <small>Data Analyst at Analytics Pro</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <div class="satisfaction-counter">
                    <h3 class="counter-number" data-target="10000">0</h3>
                    <p class="counter-text">Happy Students & Growing!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="section-title">Ready to Start Your <span class="text-primary">Journey</span>?</h2>
                    <p class="section-subtitle">Get in touch with us and take the first step towards your dream career</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <?php echo $message; ?>
                    <form method="POST" class="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone" required>
                                    <label for="phone">Your Phone *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="course" name="course" required>
                                        <option value="">Choose Course</option>
                                        <option value="computer-fundamentals">Fundamentals of Computer</option>
                                        <option value="web-development-ai">Web Development Using AI</option>
                                        <option value="data-analytics">Data Analytics (DAT)</option>
                                        <option value="digital-marketing">Digital Marketing</option>
                                    </select>
                                    <label for="course">Interested Course *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 100px"></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-warning">LifeTime Education</h5>
                    <p class="mb-0">Transforming futures through quality education and innovative learning.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="mb-0 mt-2">&copy; 2025 LifeTime. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/7890010315?text=Hi! I'm interested in LifeTime courses. Please provide more information." 
           target="_blank" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>