<style>
.blog-layout-wrap {
  display: flex;
  gap: 38px;
  max-width: 1060px;
  margin: 40px auto;
  padding: 0 18px;
}
.blog-main-area {
  flex: 1;
  min-width: 0;
}
.blog-single-wrapper {
  background: #fff;
  border-radius: 18px;
  box-shadow: 0 6px 26px rgba(60,86,125,0.10);
  max-width: 800px;
  margin: 0 auto;
}

/* Sidebar styles */
.blog-sidebar {
  width: 320px;
  min-width: 240px;
  background: #fcfcfa;
  border-radius: 15px;
  box-shadow: 0 6px 16px rgba(81,97,127,0.06);
  padding: 26px 21px 14px 21px;
  margin-top: 20px;
  height: fit-content;
}

.sidebar-heading {
  font-size: 1.25rem;
  font-weight: 700;
  color: #222;
  margin-bottom: 20px;
  letter-spacing: .01em;
}

.recent-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.recent-list li {
  margin-bottom: 28px;
  border-bottom: 1px solid #ececec;
  padding-bottom: 12px;
}

.recent-title {
  font-size: 1.02rem;
  color: #232426;
  font-weight: 600;
  display: block;
  margin-bottom: 5px;
  text-decoration: none;
  transition: color .16s;
}

.recent-title:hover {
  color: #e1ad11;
}

.recent-date {
  font-size: .94rem;
  color: #9c9713;
  margin-bottom: 2px;
  display: block;
}

@media (max-width: 900px) {
  .blog-layout-wrap {
    flex-direction: column;
    padding: 0 5vw;
  }
  .blog-main-area, .blog-sidebar { max-width: 100%; }
  .blog-sidebar { margin-top: 32px; padding: 14px 8vw 12px 8vw; }
}
@media (max-width: 600px) {
  .blog-single-wrapper { border-radius: 10px; }
  .sidebar-heading { font-size: 1.06rem;}
  .recent-title {font-size: .93rem;}
}
</style>

<div class="blog-layout-wrap">
  <!-- Blog Content -->
  <div class="blog-main-area">
    <div class="blog-single-wrapper">
      <img class="blog-banner-img" src="https://via.placeholder.com/900x350/f5e8c3/222?text=Blog+Banner" alt="Blog Banner">
      <div class="blog-title">Complete Guide to Car Ceramic Coating</div>
      <div class="blog-meta-row">
        <span class="blog-date">17 Nov 2025</span>
        <div class="blog-tags-group">
          <span class="blog-tag">Car Care</span>
          <span class="blog-tag">Ceramic</span>
          <span class="blog-tag">How-To</span>
        </div>
      </div>
      <div class="blog-author-row">By John Doe</div>
      <div class="blog-content">
        If you want your car to shine and stay easy to clean for years, ceramic coating might be your best friend.<br><br>
        ...[Your blog main content here]...
      </div>
    </div>
  </div>

  <!-- Sidebar -->
  <aside class="blog-sidebar">
    <div class="sidebar-heading">Recent Posts</div>
    <ul class="recent-list">
      <li>
        <a href="#" class="recent-title">5 Tips to Keep Your Car Shining</a>
        <span class="recent-date">13 Nov 2025</span>
      </li>
      <li>
        <a href="#" class="recent-title">All About Upholstery Care</a>
        <span class="recent-date">10 Nov 2025</span>
      </li>
      <li>
        <a href="#" class="recent-title">Winter Wash: What You Should Know</a>
        <span class="recent-date">7 Nov 2025</span>
      </li>
    </ul>
    <!-- Add more recent posts as needed -->
  </aside>
</div>
