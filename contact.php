<?php
  $page_title = "Art";
  include ('components/_header.html');
?>
<div class="col contact-page">
  <div class="row mb-5 flex-column">
    <h3>Interested in some of the artwork or want your own personal piece, let me know by filling out the for below.</h3>
    <form>
      <div class="row justify-content-around">
        <div class="col-4">
          <div class="input-block">
            <label>Name:</label>
            <input type="text" name="c_name" id="c_name" autocomplete="new-password"/>
          </div>
          <div class="input-block">
            <label>Phone Number:</label>
            <input type="text" name="c_phone_number" id="c_phone_number" autocomplete="new-password"/>
          </div>
          <div class="input-block">
            <label>Email:</label>
            <input type="email" name="c_email" id="c_email" autocomplete="new-password" />
          </div>
        </div>
        <div class="col-7 d-flex justify-content-center">
          <textarea name="content" id="content" placeholder="Whatever you'd like to say."></textarea>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
  include ('components/_footer.html');
?>