<p>
  <?php echo html_link(url('', array('edit')), "edit"); ?> |
  <?php echo html_link(url('', array('delete')), "delete"); ?> |
  <?php echo html_link(url('releases'), "releases"); ?>
</p>

<p>
  To install this package run the following from the console:
</p>
<pre>$ pear channel-discover pearhub.org
$ pear install pearhub/<?php e($project->name()) ?></pre>

<h2>Summary</h2>

<p>
  <?php e($project->summary()); ?>
</p>

<?php if ($project->href()) : ?>
<p>
  <?php echo html_link($project->href()); ?>
</p>
<?php endif; ?>

<h2>Dependencies</h2>

<ul>
<?php foreach ($project->dependencies() as $dep): ?>
  <li><?php e($dep['channel']) ?> <?php e($dep['version']) ?></li>
<?php endforeach; ?>
</ul>

<h2>Details</h2>

<dl>
  <dt>Created</dt>
  <dd><?php e($project->created()); ?></dd>
  <dt>Owner</dt>
  <dd><?php e($project->owner()); ?></dd>
  <dt>Repository</dt>
  <dd><?php e($project->repository()); ?></dd>
  <dt>Required php version</dt>
  <dd><?php e($project->phpVersion()); ?></dd>
  <dt>License</dt>
  <dd><?php e($project->licenseTitle()); ?> <?php $project->licenseHref() ? html_link($project->licenseHref()) : e($project->licenseHref()); ?></dd>
</dl>

<h2>Maintainers</h2>

<?php foreach ($project->projectMaintainers() as $m): ?>
<dl>
  <dt>user</dt>
  <dd><?php e($m->maintainer()->user()) ?></dd>
  <dt>role</dt>
  <dd><?php e($m->type()) ?></dd>
<?php if ($m->maintainer()->name()) : ?>
  <dt>name</dt>
  <dd><?php e($m->maintainer()->name()) ?></dd>
<?php endif; ?>
<?php if ($m->maintainer()->email()) : ?>
  <dt>email</dt>
  <dd><?php e($m->maintainer()->email()) ?></dd>
<?php endif; ?>
</dl>
<?php endforeach; ?>

