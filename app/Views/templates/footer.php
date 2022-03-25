</div>
<div class="modal fade" data-bs-backdrop="static" tabindex="-1" id="alert-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title"></h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">확인</button>
      </div>
    </div>
  </div>
</div>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/common.js"></script>
<?php if (isset($script) && count($script)): ?>
<?php foreach ($script as $key => $val): ?>
<script src="<?php echo $val; ?>"></script>
<?php endforeach; ?>
<?php endif; ?>
</body>

</html>