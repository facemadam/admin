<div class="container-fluid p-4">
  <h2 class="my-2">운영자 수정</h2>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-1">
      <li class="breadcrumb-item"><a href="/dashboard">대시보드</a></li>
      <li class="breadcrumb-item"><a href="/admin">운영자 관리</a></li>
      <li class="breadcrumb-item active">운영자 수정</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-lg-12">
      <form>
        <div class="card my-2 shadow-sm">
          <div class="card-body">
            <table class="table table-bordered table-responsive caption-top">
              <caption>등록 정보</caption>
              <tbody>
                <tr>
                  <td class="w-25 ps-4 table-light align-middle">아이디</td>
                  <td>
                    <div class="col-sm-6">
                      <input type="text" name="username" class="form-control" disabled>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="w-25 ps-4 table-light align-middle">비밀번호</td>
                  <td>
                    <div class="col-sm-6">
                      <input type="text" name="username" class="form-control">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="w-25 ps-4 table-light align-middle">비밀번호 확인</td>
                  <td>
                    <div class="col-sm-6">
                      <input type="text" name="username" class="form-control">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <br>
        <div class="card my-2 shadow-sm">
          <div class="card-body">
            <table class="table table-bordered table-responsive caption-top">
              <caption>기본 정보</caption>
              <tbody>
                <tr>
                  <td class="w-25 ps-4 table-light align-middle">이름</td>
                  <td>
                    <div class="col-sm-6">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="w-25 ps-4 table-light align-middle">연락처</td>
                  <td>
                    <div class="col-sm-6">
                      <input type="text" name="phone" class="form-control">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="w-25 ps-4  table-light align-middle">이메일</td>
                  <td>
                    <div class="col-sm-6">
                      <input type="text" name="email" class="form-control">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <br>
        <div class="d-flex justify-content-center">
          <buttonn type="submit" class="btn btn-lg btn-secondary">수정</buttonn>
        </div>
      </form>
    </div>
  </div>
</div>