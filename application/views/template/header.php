<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Absensi Mahasiswa</title>
  <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UNRA</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('mahasiswa') ?>">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Mahasiswa</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('mata_kuliah') ?>">
          <i class="fas fa-fw fa-book"></i>
          <span>Mata Kuliah</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('absensi') ?>">
          <i class="fas fa-fw fa-user-check"></i>
          <span>Absensi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('rekap') ?>">
          <i class="fas fa-fw fa-chart-bar"></i>
          <span>Rekap Kehadiran</span>
        </a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content" class="p-4">
