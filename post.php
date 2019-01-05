<?php
  $page_title = "Create Post";
  include ('components/header.html');
?>
<div class="col posting-container">
  <h2>Make New Post</h2>
  <p>
    Want to make a new post, fill out the form below.
  </p>
  <form class="posting-form" action="post.php" method="post">
    <div class="input-blocks">
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" value="" required />
    </div>
    <div class="input-blocks">
      <label for="media">Image/Video:</label>
      <input type="text" name="media" id="media" value="" />
    </div>
    <div class="input-blocks">
      <label for="desc">Description:</label>
      <input type="text" name="media" id="media" value="" />
    </div>
    <textarea name="content" id="content" placeholder="Thoughts?"></textarea>
    <div class="input-blocks submit-button">
      <input type="submit" name="submit" id="submit" value="submit" />
    </div>
  </form>
</div>
<?php
  include ('components/footer.html');
?>
