<?php echo html_form_tag('post', url('', array('new'))); ?>
<?php echo form_errors($project); ?>
<div class="form full">
  <label for="field-name">name</label>
  <?php echo html_text_field("name", $project->name(), array('id' => "field-name")); ?>
  <?php echo form_errors_for($project, 'name'); ?>
</div>

<?php include('form.tpl.php'); ?>

<div class="form-footer">
  <a href="<?php e(url()) ?>">Cancel</a>
  <input type="submit" value="Create project" />
</div>

</form>
