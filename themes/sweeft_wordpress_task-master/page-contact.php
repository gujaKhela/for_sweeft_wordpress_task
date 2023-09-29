<?php
get_header();
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <h2>შეავსეთ ფორმა</h2>
            <form action="<?php echo esc_url(get_template_directory_uri() . '/contact/contact-form-handler.php'); ?>" method="POST">
                <div class="form-group">
                    <label for="name">სახელი:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">იმეილი:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">თემა:</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">ტექსტი:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <div class="col-md-6">
            <h2 class="mb-3 ">დაგვიკავშირდით</h2>
            <p><strong>Email:</strong> contact@yourwebsite.com</p>
            <p><strong>Phone:</strong> +1-123-456-7890</p>
            <p><strong>Address:</strong> 123 Main Street, City, State, ZIP</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>