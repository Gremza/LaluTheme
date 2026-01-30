<?php
/*
 * Template Name: 404 Error Page
 * Description: Custom 404 Error Page Template
 */
get_header(); ?>

<div class="error-404-container">
    <div class="error-content">
        <h1>404 - Page Not Found</h1>
        <h2>Oops! It seems we've hit a cosmic dead end.</h2>
        <p>The page you're looking for might have been moved, deleted, or perhaps it got lost in a wormhole.</p>
        
        <div class="error-actions">
            <p>What you can do:</p>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Return to Home</a></li>
                <li><a href="javascript:history.back()">Go Back to Previous Page</a></li>
                <li>Use the search form below to find what you're looking for</li>
            </ul>
        </div>

        <div class="search-404">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<style>
.error-404-container {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.error-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.error-content h1 {
    font-size: 72px;
    color: #ff4040;
    margin-bottom: 10px;
}

.error-content h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.error-actions ul {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.error-actions li {
    margin: 10px 0;
}

.error-actions a {
    color: #0066cc;
    text-decoration: none;
}

.error-actions a:hover {
    text-decoration: underline;
}

.search-404 {
    margin-top: 30px;
}
</style>

<?php get_footer(); ?>