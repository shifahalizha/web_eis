<!DOCTYPE html>
<html>

<head>
  <?= $this->include('layout/head') ?>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <?= $this->include('layout/header') ?>
    <!-- end header section -->

  </div>
  <!-- end hero area -->


  <section class="shop_section layout_padding">
    <div class="container">
      <h5 class="mb-4">Hello <?= session('username') ?> </h5>
      <div class="row">
        <?php foreach ($menu as $item): ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
              <a href="">
                <?php $no = 0; ?>
                <div class="img-box">
                    <img src="/images/<?php echo $item['foto']; ?>" alt=""
                      style="width: 100%; height: auto; object-fit: cover;">
                </div>
                <div class="detail-box">
                  <h6>
                    <form action="/resep/<?= $item['id']; ?>">
                      <a href="/resep/<?= $item['id']; ?>/viewresep"><?php echo $item['namamenu']; ?></a>
                    </form>
                  </h6>
                  <?php if (session('id') == $item['user_id']): ?>
                    <h6>
                      <div>
                        <form action="/resep/<?= $item['id']; ?>" method="post"
                          onsubmit="return confirm('Apakah Anda yakin?')">
                          <input type="hidden" name="_method" value="DELETE" />
                          <button type="submit" style="background: none; border: none; cursor: pointer;"><i
                              class="fas fa-trash-alt" style="color: #e83e8c;"></i></button>
                          <a href="/resep/<?= $item['id']; ?>/edit" style="text-decoration: none; color: inherit;"><i
                              class="fas fa-edit" style="color: #e83e8c;"></i></a>
                        </form>
                      </div>
                    </h6>
                  <?php endif; ?>
                </div>
              </a>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="btn-box">
        <a href="/resep/new">
          Add new Recipes
        </a>
      </div>
      <div>
        <form action="/logout" method="POST">
          <div class="form-group">
            <button type="submit" class="btn btn-box">
              <a href="<?php echo base_url('/logout'); ?>">Logout</a>
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Pembuatan website bertema resep bertujuan untuk menyelesaikan
              tugas projek akhir di semester 4
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Member
            </h6>
            <div class="info_link-box">
              <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                  <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <i aria-hidden="true"></i>
                <span> Shifa Halizha Sestiawan (2213020210) </span>
              </a>
              <a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                  <path fill-rule="evenodd"
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <i aria-hidden="true"></i>
                <span> Chantika Miranda Novrial (2213020198) </span>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Jurusan
            </h6>
            <p>
              CCIT FTUI Teknologi Informasi Ekonomi Syariah (4TIES1)
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              MataKuliah
            </h6>
            <p>
              Executive Information System
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <body>