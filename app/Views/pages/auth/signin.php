<div class="container">
  <div class="row vh-100 justify-content-sm-center align-items-center">
    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7">
      <div class="shadow-lg card">
        <div class="p-5 card-body">
          <div class="fs-3 fw-bold mb-4 card-title h5">Sign In</div>
          <form novalidate="" class="">
            <div class="mb-3">
              <label class="text-muted form-label">Email</label>
              <input name="email" required="" type="email" class="form-control" value="test1234@resumer.com">
            </div>
            <div class="mb-3">
              <label class="text-muted form-label">Password</label>
              <small class="float-end form-text">
                <a href="/forgot">비밀번호를 잊으셨나요?</a>
              </small>
              <input name="password" required="" type="password" class="form-control" value="test1234">
            </div>
            <div class="d-grid mt-5">
              <button type="submit" class="btn btn-secondary btn-lg">Sign In</button>
            </div>
          </form>
        </div>
        <div class="py-3 text-muted text-center card-footer">
          계정이 없으신가요? <a href="/signup">회원가입</a>
        </div>
      </div>
    </div>
  </div>
</div>