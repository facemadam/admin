<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="/assets/css/custom.css" />
  <title>Admin</title>
</head>

<body class="h-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark p-0">
    <a class="navbar-brand bg-secondary" id="navbar-brand" href="/">Admin</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 ms-2 me-4 me-lg-0 link-secondary" id="sidebar-toggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="검색" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-secondary" id="btnNavbarSearch" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link px-3 py-2 dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user fa-fw"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li>
            <a class="dropdown-item" href="/profile">Profile</a>
          </li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li>
            <a class="dropdown-item" href="#!">Sign Out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <div class="flex-shrink-0 vh-100 fixed-top" id="sidebar-nav">
    <nav class="d-flex flex-column h-100 flex-nowrap bg-dark" id="sidebar-accordion">
      <div class="flex-grow-1 overflow-auto">

        <!-- Sidebar Menu -->
        <div class="nav flex-nowrap flex-column">

          <!-- Main -->
          <small class="fw-bold pt-4 ps-3 text-secondary">요약</small>
          <a class="nav-link d-flex align-items-center py-2 position-relative link-secondary" href="/dashboard">
            <div class="me-3"><i class="fas fas fa-tachometer-alt"></i></div>
            대시보드
          </a>

          <!-- Site -->
          <small class="fw-bold pt-4 ps-3 text-secondary">사이트</small>
          <a class="nav-link d-flex align-items-center py-2 position-relative link-secondary" href="/user">
            <div class="me-3"><i class="fas fa-solid fa-user"></i></div>
            사용자관리
          </a>

          <!-- Board -->
          <a class="nav-link d-flex align-items-center py-2 position-relative link-secondary collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse-board" aria-expanded="false"
            aria-controls="collapse-board">
            <div class="me-3"><i class="fas fa-table"></i></div>
            게시판관리
            <div class="d-inline-block ms-auto"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapse-board" aria-labelledby="headingOne" data-bs-parent="#sidebar-accordion">
            <nav class="nav d-flex flex-column ms-4">
              <a class="nav-link link-secondary" href="/board/setting">게시판설정</a>
              <a class="nav-link link-secondary" href="/board/menagement">게시글관리</a>
            </nav>
          </div>

          <!-- Admin -->
          <small class="fw-bold pt-4 ps-3 text-secondary">관리자</small>
          <a class="nav-link d-flex align-items-center py-2 position-relative link-secondary" href="/admin">
            <div class="me-3"><i class="fas fa-solid fa-user-gear"></i></div>
            운영자관리
          </a>
        </div>
      </div>

      <!-- Sidebar Footer -->
      <div class="flex-shrink-0 p-2 bg-secondary link-light">
        <div class="small">Logged in as:</div>
        admin
      </div>
    </nav>
  </div>

  <!-- Content -->
  <div class="position-relative d-flex flex-column justify-content-between flex-grow-1" id="sidebar-content">
    <main>