<section id="post">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Post Blog</h2>
          </div>
        </div>
  <form action="/blog/submedit/<?=$blog_ID?>" method="post" role="form">
    <form name="sentMessage" id="contactForm" novalidate="novalidate">
      <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
          <input class="form-control" name="judul" id="judul" type="text" value="<?=$judul?>" placeholder="judul" required="required" data-validation-required-message="Please enter your name.">
        </div>
        <p class="help-block text-danger"></p>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
          <textarea class="form-control" name="isi" id="isi" rows="5" placeholder="isi" required="required" data-validation-required-message="Please enter a message."><?=$isi?></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <div id="success"></div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">post</button>
          </div>
        </form>
      </div>
</form>
</section>
