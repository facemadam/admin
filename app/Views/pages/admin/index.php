<div class="container-fluid p-4">
  <h2 class="my-2">운영자 관리</h2>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-1">
      <li class="breadcrumb-item"><a href="/dashboard">대시보드</a></li>
      <li class="breadcrumb-item active">운영자 관리</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-lg-12">
      <div class="card my-2 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">운영자 목록</h5>
          <table class="table table-hover table-responsive caption-top">
            <caption>[총 3명]</caption>
            <thead class="table-light">
              <tr>
                <th scope="col"><input type="checkbox"></th>
                <th scope="col">ID</th>
                <th scope="col">이름</th>
                <th scope="col">연락처</th>
                <th scope="col">이메일</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row"><input type="checkbox"></td>
                <td><a href="/admin/detail">tngus6047</a></td>
                <td>홍길동</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td scope="row"><input type="checkbox"></td>
                <td><a href="/admin/detail">tngus2005</a></td>
                <td>홍길순</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="border-0">
                <td colspan="5" class="border-0 pt-3 px-0">
                  <a class="btn btn-sm btn-secondary" href="/admin/regist">등록</a>
                  <a class="btn btn-sm btn-danger" href="/admin/delete/">삭제</a>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>