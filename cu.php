<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Neointeraction Design | Design Systems &amp; Digital Products in India</title>
    <meta name="description" content="Discover the best digital products in India, including software, apps, and online services, designed to enhance your digital lifestyle and business efficiency."/>
    <link rel="canonical" href="https://www.neointeraction.com/contact-us"/>
    <meta property="og:title" content="Contact Neointeraction Design | digital products in India"/>
    <meta property="og:description" content="Discover the best digital products in India, from cutting-edge software to innovative online services. Stay ahead with top digital solutions for the Indian market."/>
    <meta property="og:image" content="https://static.wixstatic.com/media/c380a9_71263f4de813421d9bb191b9614a63cd~mv2.png/v1/fill/w_600,h_315,al_c/c380a9_71263f4de813421d9bb191b9614a63cd~mv2.png"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="315"/>
    <meta property="og:url" content="https://www.neointeraction.com/contact-us"/>
    <meta property="og:site_name" content="Neointeraction Design"/>
    <meta property="og:type" content="website"/>
    <meta name="google-site-verification" content="jDr4aVGcjUUHdNv8SD5bpXt6-kwDs5rDAbNqhXDrENY"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Contact Neointeraction Design | digital products in India"/>
    <meta name="twitter:description" content="Discover the best digital products in India, from cutting-edge software to innovative online services. Stay ahead with top digital solutions for the Indian market."/>
    <meta name="twitter:image" content="https://static.wixstatic.com/media/c380a9_71263f4de813421d9bb191b9614a63cd~mv2.png/v1/fill/w_600,h_315,al_c/c380a9_71263f4de813421d9bb191b9614a63cd~mv2.png"/>
    <meta name='description' content="Get in touch with neointeraction design for inquiries and support.">
    <meta name="keywords" content="contact, support, inquiry, neointeraction"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/favicon.php'; ?>
    <?php include 'includes/css.php'; ?>
    <?php include 'includes/head-additional-scripts.php'; ?>
    <link rel="stylesheet" href="assets/css/contact-form.css">
</head>
<body>

 <!-- navbar  -->
  <div class="navbar-container-block">
    <?php include 'components/navigation.php'; ?>
    <?php include 'components/whatsapp.php'; ?>
  </div>
  <!-- navbar -- end  -->
    <?php include 'includes/body-additional-scripts.php'; ?>
    <?php $page="Contact Us"; ?>
    
    <!-- Fixed Notification -->
    <div id="notification" class="notification hidden">
        <div class="notification-content">
            <span id="notificationMessage"></span>
            <button id="closeNotification" class="close-btn">&times;</button>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="contact-form-container">
            <form id="contactForm" class="contact-form" method="POST">
                <h2>Contact Us</h2>
                
                <!-- Hidden field to capture form name -->
                <input type="hidden" id="formName" name="formName" value="Contact Us Form">
                
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" name="company">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">
                    <span class="btn-text">Send Message</span>
                    <span class="btn-loading" style="display: none;">Sending...</span>
                </button>
            </form>
        </div>

        
    </div>
    <?php include 'components/footer.php'; ?>
    <script>
    // Notification functions
    function showNotification(message, type) {
        const notification = document.getElementById('notification');
        const messageSpan = document.getElementById('notificationMessage');
        
        messageSpan.textContent = message;
        notification.className = 'notification ' + type;
        
        // Hide after 5 seconds
        setTimeout(() => {
            hideNotification();
        }, 5000);
    }
    
    function hideNotification() {
        const notification = document.getElementById('notification');
        notification.className = 'notification hidden';
    }
    
    // Close button event
    document.getElementById('closeNotification').addEventListener('click', hideNotification);
    
    // Form submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const form = this;
        const submitBtn = form.querySelector('.submit-btn');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoading = submitBtn.querySelector('.btn-loading');
        
        // Show loading state
        submitBtn.disabled = true;
        btnText.style.display = 'none';
        btnLoading.style.display = 'inline';
        
        // Collect form data
        const formData = new FormData(form);
        
        // Submit to backend
        fetch('process_contact_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Check if response is ok
            if (!response.ok) {
                throw new Error('Server responded with status: ' + response.status);
            }
            
            // Try to parse JSON
            return response.json();
        })
        .then(data => {
            if (data.success) {
                showNotification('Thank you for your message! We will get back to you soon.', 'success');
                form.reset();
            } else {
                showNotification(data.message || 'Something went wrong. Please try again.', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showNotification('Network error. Please check your connection and try again.', 'error');
        })
        .finally(() => {
            // Reset button state
            submitBtn.disabled = false;
            btnText.style.display = 'inline';
            btnLoading.style.display = 'none';
        });
    });
    </script>
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script> 
    <script src="assets/js/main.js"></script>
</body>
</html>