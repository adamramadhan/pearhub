<h2>Edit <?php e($project->displayName()); ?></h2>
<?php print $this->html_form_tag('put', url('', array('edit'))); ?>
<?php print $this->errors($project); ?>
<?php include('form.tpl.php'); ?>
</form>