<?= $this->extend('web/components/assemble') ?>
<?= $this->section('content') ?>









<!-- ================================================== -->







<div class="banner blogs-banner">
  <h1><span class="typed-text typed-blogs">Blogs</span></h1>
</div>



<!-- ===================================================== -->

<!-- ========================================================= -->



<style>
  .blogs-section {
    background: var(--background);
    padding: 50px 0 35px;
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
  }

  .blogs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }

  .blog-card {
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 4px 16px rgba(81, 97, 127, 0.10);
    padding: 2px 2px 4px 2px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    transition: box-shadow 0.2s, transform 0.18s;
    text-decoration: none !important;
  }

  .blog-card:hover {
    box-shadow: 0 10px 24px rgba(81, 97, 127, 0.15);
    transform: translateY(-6px);
  }

  .blog-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 9px;
    margin-bottom: 14px;
  }

  .blog-title {
    font-size: 1.18rem;
    font-weight: 700;
    color: #222;
    margin-bottom: 6px;
   
    padding-left: 2px;
  }

  .blog-desc {
    color: #64686d;
    font-size: 0.91rem;
    margin-bottom: 0;
    padding: 2px;
  }

  .blog-date {
    color: #7e7009;
    font-size: 0.78rem;
    font-weight: 600;
    margin-top: 3px;
    margin-bottom: 0;
    letter-spacing: .5px;
  }
  .blog-content{
    padding-left: 4px;
  }
  .blog-tags-group {
    margin-top: 6px;
    margin-bottom: 7px;
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
  }

  .blog-tags {
    background: #e4bb25;
    color: #fff;
    font-size: .81rem;
    font-weight: 500;
    border-radius: 7px;
    padding: 3px 8px;
    letter-spacing: .04em;
    display: inline-block;
  }

  /* Responsive breakpoints */
  @media (max-width: 800px) {
    .blogs-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .blog-tags{
      font-size: .60rem;
    }

    .blog-card {
      max-width: 100%;
      padding: 13px 5px 18px 5px;
    }

    .blog-img {
      height: 150px;
    }

    .blog-title {
      font-size: 1rem;
    }

    .blog-desc {
      font-size: 0.75rem;
    }

    .blog-date {
      font-size: 0.60rem;
    }

    .explore-bttn {
      width: 235px !important;
      font-weight: 500 !important;
      font-size: 1rem !important;
      padding: 8px 8px !important;
    }
  }

  @media (max-width: 576px) {
    .blogs-grid {
      grid-template-columns:(2, 1fr);
    }

    .blog-img {
      height: 120px;
    }

    .blog-title {
      font-size: 0.9rem;
    }

    .blog-desc {
      font-size: 0.6rem;
    }

    .blog-date {
      font-size: 0.65rem;
    }
  }

  .explore-bttn {
    display: block;
    width: 262px;
    margin: 30px auto 0;
    background: #222;
    color: #fff7cc;
    font-weight: 700;
    font-size: 1.15rem;
    padding: 13px 44px;
    border-radius: 8px;
    border: none;
    transition: background 0.2s, color 0.2s;
    text-align: center;
    text-decoration: none;
    letter-spacing: .5px;
  }

  .explore-bttn:hover {
    background: #ffce25;
    color: #222;
  }
  .blog-link{
     text-decoration: none !important;
  }
</style>







<section class="blogs-section">
  <h2 class="section-title">Our Latest Car Polish Tips</h2>
  <div class="blogs-grid blog-row">

    <?php if (!empty($blg)) : ?>
      <?php foreach ($blg as $blog) : ?>
        <a class="blog-link" href="<?= base_url('blogs/' . $blog['b_slug']) ?>">
          <div class="blog-card blog-page">
          <img class="blog-img" src="<?= base_url('public/uploads/blogs/' . $blog['b_img']) ?>" alt="<?= esc($blog['b_title']) ?>">

          <div class="blog-content">
            <!-- Tags (comma separated in DB) -->






            <?php if (!empty($blog['b_tags'])): ?>
              <?php

              $tag = explode(',', $blog['b_tags']);

              // echo '<pre>';
              // print_r($blog);
              // exit;

              ?>


              <?php foreach ($tag as $t): ?>
                <div class="blog-tags"><?= esc($t) ?></div>
              <?php endforeach ?>


            <?php endif ?>






            <div class="blog-title"><?= esc($blog['b_title']) ?></div>
            <div class="blog-desc"> <?= substr(html_entity_decode($blog['b_desc']), 0, 80) ?>...</div>
            <div class="blog-date fas fa-calendar"> <?= date('j F Y', strtotime($blog['published_on'])) ?></div>
          </div>
        </div>
        </a>
      <?php endforeach; ?>
    <?php else : ?>
      <p>No blogs available right now.</p>
    <?php endif; ?>

  </div>
</section>





<!-- ====================================================== -->





<?= $this->endSection(); ?>