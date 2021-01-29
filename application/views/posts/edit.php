<h2><?php echo $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id'] ?>"/>
<div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $post['title'] ?>">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea id="editor1" type="text" class="form-control" name="body"><?php echo $post['body'] ?></textarea>
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