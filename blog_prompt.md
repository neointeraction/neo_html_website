# Prompt Template for Updating Blog Posts

**Task:** Update the content and metadata of the specified blog post file.

**File to modify:** `{file_path}`

**Instructions:**

You are tasked with updating a PHP blog post file. Follow the steps below carefully.

**Step 1: Update the Metadata**

Replace the entire content within the `<head>` section, from `<title>` to the last `meta` tag before `</head>`, with the new metadata block provided.

**Placeholder for new metadata:**
```html
{new_metadata_block}
```

**Step 2: Update the Blog Post Body**

Replace the entire content within the `<div class="blog-body-padding">` element with the new content provided below. This includes the author information, title, banner image, and all subsequent paragraphs, headings, and images, up to (but not including) the `<?php include $path.'components/submit-enquiry.php'; ?>` line.

**Placeholder for new body content:**
```php
<div class="blog-body-padding">
    <div class="blog-author-text">
        <div class="avatar-img-block">
            <img src="<?php echo $path; ?>{new_author_image_path}" alt="avatar" class="avatar-img" />
        </div>
        <span>{new_author_name} • {new_publish_date}</span>
    </div>
    <h1 class="blog-title">{new_blog_title}</h1>
    
    {new_blog_content_html}

    <a href="<?php echo $path; ?>blogs.php" class="view-all-blogs-btn" style="text-decoration: none;">
        <button class="btn btn-custom btn-custom-secondary">
            View All Blogs
        </button>
    </a>
</div>
```

---

### How to Use This Template

To use this template, you will need to provide the specific content for the following placeholders:

*   `{file_path}`: The full path to the blog post file you want to update (e.g., `blogs/your-blog-post-name.php`).
*   `{new_metadata_block}`: The complete block of HTML for the new `<head>` section, including the `<title>`, all `<meta>` tags, `<link rel="canonical">`, and the `<script type="application/ld+json">` for structured data.
*   `{new_author_image_path}`: The path to the new author's image, relative to the `assets/images/blog/author/` directory (e.g., `jane-doe.webp`).
*   `{new_author_name}`: The full name of the new author.
*   `{new_publish_date}`: The publication date of the blog post (e.g., `01 Jan, 2025`).
*   `{new_blog_title}`: The new title for the blog post.
*   `{new_blog_content_html}`: The complete HTML for the new body of the blog post. This should include the banner image, all paragraphs (`<p class="blog-body-text">`), headings (`<h4 class="blog-body-title">`), blockquotes (`<div class="blog-quote-block">`), and any other images (`<div class="blog-banner-img">`).
