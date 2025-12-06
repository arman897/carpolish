<?= $this->extend('web/components/assemble') ?>
<?= $this->section('content') ?>









<div class="banner single-blog-banner">
    <h1><span class=" typed-single-blog"><?= esc($blog['b_title']) ?></span></h1>
</div>


<style>/* Single blog page banner */
.single-blog-banner {
    
    height: 340px;
    padding-top: 60px;
    width: 100vw;

    display: flex;
    align-items: center;
    justify-content: center;

    position: relative;
    overflow: hidden;
    text-align: center;
}

/* Dark overlay for single blog */
.single-blog-banner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
}

/* Heading text for single blog */
.single-blog-banner h1 {
    position: relative;
    font-weight: 900;
    font-size: 3.4rem;
    color: #fff;
    white-space: normal;  /* allow multi-line */
    max-width: 90vw;
    z-index: 2;
    font-family: Arial, sans-serif;
}

/* Multi-line typing animation */
.typed-single-blog {
    display: inline-block;
    white-space: normal;
    overflow: hidden;

    border-right: 4px solid #fff;
    animation: typing-multi 3s steps(100) forwards, blink 1s step-end infinite;
}

/* Reveal text gradually for multi-line */
@keyframes typing-multi {
    from {
        clip-path: inset(0 100% 0 0); /* hide all text */
    }
    to {
        clip-path: inset(0 0 0 0); /* reveal all text */
    }
}

/* Cursor blink */
@keyframes blink {
    50% { border-color: transparent; }
}

/* Responsive single blog banner */
@media (max-width: 576px) {
    .single-blog-banner {
        height: 160px;
        padding-top: 40px;
        margin-top: 68px;
    }

    .single-blog-banner h1 {
        font-size: 1.5rem;
        border-right-width: 3px;
    }
}
</style>






<style>
    /* Prevent horizontal scrolling */


    /* MAIN LAYOUT */
    .single-blog-section {
        max-width: 1200px;
        margin: 40px auto;
        margin-top: 100px;
        padding: 0 15px;
    }

    /* 2 Columns: Content + Sidebar */
    .single-blog-container {
        display: flex;
        gap: 35px;
        align-items: flex-start;
        width: 100%;
    }

    /* LEFT BLOG CONTENT */
    .single-blog-card {
        flex: 1;
        background: #fff;
        padding: 25px;
        overflow: hidden;
        border-radius: 14px;
        box-shadow: 0 4px 16px rgba(81, 97, 127, 0.12);
    }

    /* Blog Image */
    .single-blog-img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 12px;
    }

    /* Title */
    .single-blog-title {
        font-size: 2rem;
        font-weight: 800;
        margin-top: 15px;
        color: #222;
    }

    /* Date */
    .single-blog-date {
        margin-top: 6px;
        font-size: 0.95rem;
        color: #7e7009;
        font-weight: 600;
    }

    /* Description */
    .single-blog-desc {
        margin-top: 15px;
        line-height: 1.8;
        color: #444;
        font-size: 1.05rem;
    }

    /* Tags */
    .single-blog-tags-group {
        margin-top: 10px;
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
    }

    .single-blog-tag {
        background: #e4bb25;
        color: white;
        padding: 4px 10px;
        border-radius: 7px;
        font-size: .82rem;
        font-weight: 500;
    }

    /* SIDEBAR */
    .sidebar-sticky {
        width: 100%;
        max-width: 340px;
        position: sticky;
        top: 20px;
        height: fit-content;
    }

    /* Sidebar Box */
    .sidebar-card,
    .contact-form {
        background: #fff;
        border-radius: 14px;
        padding: 20px;
        margin-bottom: 25px;
        box-shadow: 0 4px 16px rgba(81, 97, 127, 0.12);
    }

    /* Recent Post Items */
    .sidebar-post {
        display: flex;
        margin-bottom: 15px;
    }

    .sidebar-post img {
        width: 85px;
        height: 70px;
        border-radius: 10px;
        object-fit: cover;
        margin-right: 12px;
    }

    .sidebar-post-title a {
        font-weight: 600;
        font-size: .95rem;
        text-decoration: none;
        color: #222;
    }

    .sidebar-post-title a:hover {
        color: #e4bb25;
    }

    .sidebar-post-date {
        font-size: .8rem;
        color: #777;
        margin-top: 3px;
    }

    /* CONTACT FORM */
    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .btn-submit {
        width: 100%;
        background: #222;
        color: #fff7cc;
        padding: 12px;
        border-radius: 8px;
        border: none;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
    }

    .btn-submit:hover {
        background: #e4bb25;
        color: #222;
    }

    /* RESPONSIVE FIXES */
    @media (max-width: 992px) {
        .single-blog-container {
            flex-direction: column;
            gap: 20px;
        }

        .sidebar-sticky {
            max-width: 100%;
            width: 100%;
            position: static;
            /* disable sticky on mobile */
        }

        .single-blog-img {
            height: 260px;
        }
    }

    @media (max-width: 600px) {
        .single-blog-section {
            margin: 15px auto !important;
            margin-top: 80px;
            padding: 0 10px !important;
        }

        .single-blog-date {
            font-size: .7rem;
            font-weight: 500;
        }

        .single-blog-title {
            font-size: 1.5rem;
        }

        .single-blog-img {
            height: 200px;
        }
    }
</style>





<!-- CONTENT START -->
<!-- OUR BLOG START -->
<section class="single-blog-section">

    <div class="single-blog-container">

        <!-- MAIN BLOG CONTENT -->
        <div class="single-blog-card container">

            <img src="<?= base_url('public/uploads/blogs/' . esc($blog['b_img'])) ?>" class="single-blog-img">

            <?php if (!empty($blog['b_tags'])): ?>
                <div class="single-blog-tags-group">
                    <?php foreach (explode(',', $blog['b_tags']) as $t): ?>
                        <div class="single-blog-tag"><?= esc($t) ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- <h5 class="single-blog-title"><?= esc($blog['b_title']) ?></h5> -->

            <p class="single-blog-date fas fa-calendar">
                <?= date('j F Y', strtotime($blog['published_on'])) ?>
            </p>

            <div class="single-blog-desc">
                <?= html_entity_decode($blog['b_desc']) ?>
            </div>

        </div>

        <!-- SIDEBAR -->
        <aside class="sidebar-sticky">

            <!-- RECENT POSTS -->
            <div class="sidebar-card">
                <h3 class="sidebar-title section-title">Recent Posts</h3>

                <?php
                $currentBlogId = $blog['id'];
                $recentPosts = $blgg ?? []; // $blgg must be passed from controller
                ?>


                <?php foreach ($recentPosts as $rp): ?>
                    <div class="sidebar-post">
                        <img src="<?= base_url('public/uploads/blogs/' . esc($rp['b_img'])) ?>">

                        <div>
                            <div class="sidebar-post-title">
                                <a href="<?= base_url('blogs/' . $rp['b_slug']) ?>">
                                    <?= esc($rp['b_title']) ?>
                                </a>
                            </div>
                            <div class="sidebar-post-date">
                                <?= date('j F Y', strtotime($rp['published_on'])) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- CONTACT FORM -->
            <div>
                <form class="contact-form" method="POST">
                    <h4 class="form-title">Let's Start a Driving Relation...</h4>
                    <h2 class="section-title">Let’s Talk to an Expert</h2>

                    <input type="text" name="username" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="tel" name="phone" placeholder="Phone Number">
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

                    <button type="submit" class="btn-submit">Send Message</button>

                    <p class="form-p">
                        Reach us to get your car a new look & feel — we will contact you shortly.
                    </p>
                </form>
            </div>

        </aside>

    </div>

</section>











<!-- CONTENT END -->

<?= $this->endSection(); ?>