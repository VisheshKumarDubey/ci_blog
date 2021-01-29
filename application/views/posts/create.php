<h2><?php echo $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea type="text" class="form-control" name="body" placeholder="Write some Awesomness"></textarea>
</div>

<!-- <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div> -->
<!-- <div class="checkbox">
        <label>
            <input type="checkbox"> Check me out
        </label>
    </div> -->
<button type="submit" class="btn btn-success">Submit</button>
</form>