<form name="admin-register-form">
  <div class="container-fluid pt-4 px-4">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-2 mb-5 shadow-sm">
          <div class="card-body">
            <h6 class="card-title mt-2 mb-3 ms-1">등록 정보</h6>
            <table class="table table-bordered table-responsive">
              <colgroup>
                <col width="15%">
                <col width="*">
              </colgroup>
              <tbody>
                <tr>
                  <td class="ps-4 table-light align-middle">아이디</td>
                  <td>
                    <div class="col-sm-2">
                      <input type="text" name="userid" class="form-control form-control-sm" required>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4 table-light align-middle">비밀번호</td>
                  <td>
                    <div class="col-sm-2">
                      <input type="password" name="password" class="form-control form-control-sm" required>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4 table-light align-middle">비밀번호 확인</td>
                  <td>
                    <div class="col-sm-2">
                      <input type="password" name="confirm_password" class="form-control form-control-sm" required>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card mt-2 mb-5 shadow-sm">
          <div class="card-body">
            <h6 class="card-title mt-2 mb-3 ms-1">기본 정보</h6>
            <table class="table table-bordered table-responsive">
              <colgroup>
                <col width="15%">
                <col width="*">
              </colgroup>
              <tbody>
                <tr>
                  <td class="ps-4 table-light align-middle">이름</td>
                  <td>
                    <div class="col-sm-2">
                      <input type="text" name="name" class="form-control form-control-sm" required>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4 table-light align-middle">연락처</td>
                  <td>
                    <div class="col-sm-2">
                      <input type="text" name="phone" class="form-control form-control-sm">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4 table-light align-middle">이메일</td>
                  <td>
                    <div class="col-sm-2">
                      <input type="text" name="email" class="form-control form-control-sm">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid pt-4 px-4 mt-auto">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-secondary">등록</button>
        </div>
      </div>
    </div>
  </div>
</form>