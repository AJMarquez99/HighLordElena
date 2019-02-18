<?php
  $page_title = "Art";
  include ('components/_header.html');
?>
<div class="col contact-page">
  <div class="row mb-5 flex-column">
    <h3>Interested in some of the artwork or want your own personal piece, let me know by filling out the for below.</h3>
    <form>
      <div class="col">
        <div class="input-block">
          <label>Name</label>
          <input type="text" name="name" id="name" value="Name" />
        </div>
        <div class="input-block">
          <label>Phone Number</label>
          <input type="email" name="email" id="email" value="Number" />
        </div>
        <div class="input-block">
          <label>Email</label>
          <input type="text" name="email" id="email" value="Email" />
        </div>
      </div>
      <div class="col">
        <textarea name="content" id="content" placeholder="Whatever you'd like to say."></textarea>
      </div>
    </form>
  </div>
</div>
<?php
  include ('components/_footer.html');
?>
