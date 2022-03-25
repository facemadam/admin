<div class="container-fluid p-4">
  <div class="row">
    <div class="col-lg-12">
      <div class="card my-2 shadow-sm">
        <div class="card-body">
          <h5 class="card-title mt-3 mb-2">운영자 목록</h5>
          <table class="table table-bordered table-hover table-responsive caption-top">
            <caption>[총 3명]</caption>
            <thead>
              <tr>
                <td colspan="5">
                  <div class="d-flex">
                    <div class="d-flex flex-fill">
                      <a class="btn btn-sm btn-danger me-auto" href="/admin/remove">삭제</a>
                    </div>
                    <div class="d-flex flex-fill">
                      <a class="btn btn-sm btn-secondary ms-auto" href="/admin/register">등록</a>
                    </div>
                  </div>
                </td>
              </tr>
            </thead>
            <tbody>
              <tr class="table-light">
                <th scope="col"><input type="checkbox"></th>
                <th scope="col">ID</th>
                <th scope="col">이름</th>
                <th scope="col">연락처</th>
                <th scope="col">이메일</th>
              </tr>
              <?php foreach ($list as $key => $val): ?>
              <tr>
                <td scope="row"><input type="checkbox" name="userid[]"></td>
                <td>
                  <a href="/admin/detail/<?php echo $val['id']; ?>">
                    <?php echo $val['userid']; ?>
                  </a>
                </td>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['phone']; ?></td>
                <td><?php echo $val['email']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="5">
                  <div class="d-flex">
                    <div class="d-flex flex-fill">
                      <a class="btn btn-sm btn-danger me-auto" href="/admin/remove">삭제</a>
                    </div>
                    <div class="d-flex flex-fill">
                      <a class="btn btn-sm btn-secondary ms-auto" href="/admin/register">등록</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>