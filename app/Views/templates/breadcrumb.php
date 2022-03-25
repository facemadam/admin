<div class="container-fluid pt-4 px-4">
  <h4 class="mt-3 mb-2 fw-bold"><?php echo $title; ?></h4>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-1 mb-0">
      <?php if (isset($item) && count($item)): ?>
      <?php foreach ($item as $key => $val): ?>
      <li class="breadcrumb-item">
        <a href="<?php echo $key; ?>" class="link-secondary"><?php echo $val; ?></a>
      </li>
      <?php endforeach; ?>
      <?php endif; ?>
      <li class="breadcrumb-item"><?php echo $title; ?></li>
    </ol>
  </nav>
</div>