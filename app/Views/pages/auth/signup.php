<div class="container">
  <div class="vh-100 justify-content-sm-center align-items-center row">
    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7">
      <div class="shadow-lg card">
        <div class="p-5 card-body">
          <div class="fs-3 fw-bold mb-4 card-title h5">Sign Up</div>
          <form novalidate="" class="">
            <div class="mb-3">
              <label class="text-muted form-label">Name</label>
              <input name="name" minlength="3" maxlength="20" required="" type="text" class="form-control" value="홍길동">
            </div>
            <div class="mb-3">
              <label class="text-muted form-label">Email</label>
              <input name="email" required="" type="email" class="form-control" value="test1234@resumer.com">
            </div>
            <div class="mb-3">
              <label class="text-muted form-label">Password</label>
              <input name="password" minlength="3" maxlength="20" required="" type="password" class="form-control" value="test1234">
            </div>
            <div class="mb-3">
              <label class="text-muted form-label">Confirm Password</label>
              <input name="password_confirm" minlength="3" maxlength="20" required="" type="password" class="form-control" value="test1234">
            </div>
            <div class="d-grid mt-5">
              <button type="submit" class="btn btn-secondary btn-lg">Sign Up</button>
            </div>
          </form>
        </div>
        <div class="py-3 text-muted text-center card-footer">이미 계정이 있으신가요? <a href="/signin">로그인</a></div>
      </div>
    </div>
  </div>
</div>