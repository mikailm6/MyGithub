<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kursus IT | Beranda</title>

    <link href="<?php echo base_url()?>templates/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url()?>templates/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-cubes"></i> <span>Kursus IT</span></a>
            </div>


            <br><br><br><br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-info"></i>Profil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><span>Username <br> => <?php echo ucfirst($this->session->userdata('username')); ?></span></li>
                    </ul>
                  </li>
                </ul>
               <ul class="nav side-menu">
                  <li><a><i class="fa fa-gear"></i>Option <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo anchor('login/logout','Logout');?></li>
                    </ul>
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Siswa </h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">ID </th>
                            <th class="column-title">NAMA </th>
                            <th class="column-title">KELAS </th>
                            <th class="column-title">ALAMAT </th>
                            <th class="column-title">PILIHAN </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                         <?php
                           foreach ($siswa as $siswa ) {
                           ?>
                            <td><?php echo $siswa->id; ?></td>
                            <td><?php echo $siswa->nama; ?></td>
                            <td><?php echo $siswa->kelas; ?></td>
                            <td><?php echo $siswa->alamat; ?></td>
                            <td>
                            <a href="<?php echo base_url();?>index.php/beranda/linkeditdata/<?php echo $siswa->id; ?>"><span class="glyphicon glyphicon-pencil"> Edit</span></a>
                            <p>   </p>
                            <a href="<?php echo base_url();?>index.php/beranda/deletesiswa/<?php echo $siswa->id ?>"><span class="glyphicon glyphicon-remove"> Hapus</span></a>
                            </td>  
                            </tr>   
                           <?php
                           }
                           ?>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <button>
                          <a href="<?php echo base_url();?>index.php/beranda/linktambahdata">
                          <span class="glyphicon glyphicon-plus">Tambah Data</span>
                          </a>
                          </button>
                    </div>
                  </div>
                </div>
              </div>


              <br><br><br>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Pengajar </h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">ID </th>
                            <th class="column-title">NAMA </th>
                            <th class="column-title">MAPEL </th>
                            <th class="column-title">NOMOR TELEPON </th>
                            <th class="column-title">PILIHAN </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                         <?php
                           foreach ($guru as $guru ) {
                           ?>
                            <td><?php echo $guru->guru_id; ?></td>
                            <td><?php echo $guru->nama; ?></td>
                            <td><?php echo $guru->mapel; ?></td>
                            <td><?php echo $guru->telp; ?></td>
                            <td>
                            <a href="<?php echo base_url();?>index.php/beranda/linkeditdataguru/<?php echo $guru->guru_id; ?>"><span class="glyphicon glyphicon-pencil"> Edit</span></a>
                            <p>   </p>
                            <a href="<?php echo base_url();?>index.php/beranda/deleteguru/<?php echo $guru->guru_id ?>"><span class="glyphicon glyphicon-remove"> Hapus</span></a>
                            </td>  
                            </tr>   
                           <?php
                           }
                           ?>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <button>
                          <a href="<?php echo base_url();?>index.php/beranda/linktambahdataguru">
                          <span class="glyphicon glyphicon-plus">Tambah Data</span>
                          </a>
                          </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jadwal Mata Pelajaran </h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">ID </th>
                            <th class="column-title">ID PENGAJAR </th>
                            <th class="column-title">MAPEL </th>
                            <th class="column-title">HARI </th>
                            <th class="column-title">DARI JAM </th>
                            <th class="column-title">SAMPAI JAM </th>
                            <th class="column-title">PILIHAN </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                         <?php
                           foreach ($jadwal as $jadwal ) {
                           ?>
                            <td><?php echo $jadwal->jadwal_id; ?></td>
                            <td><?php echo $jadwal->guru_id; ?></td>
                            <td><?php echo $jadwal->mapel; ?></td>
                            <td><?php echo $jadwal->hari; ?></td>
                            <td><?php echo $jadwal->jam; ?></td>
                            <td><?php echo $jadwal->jamakhir; ?></td>
                            <td>
                            <a href="<?php echo base_url();?>index.php/beranda/linkeditdatajadwal/<?php echo $jadwal->jadwal_id; ?>"><span class="glyphicon glyphicon-pencil"> Edit</span></a>
                            <p>   </p>
                            <a href="<?php echo base_url();?>index.php/beranda/deletejadwal/<?php echo $jadwal->jadwal_id ?>"><span class="glyphicon glyphicon-remove"> Hapus</span></a>
                            </td>  
                            </tr>   
                           <?php
                           }
                           ?>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <button>
                          <a href="<?php echo base_url();?>index.php/beranda/linktambahdatajadwal">
                          <span class="glyphicon glyphicon-plus">Tambah Data</span>
                          </a>
                          </button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <script src="<?php echo base_url()?>templates//vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>templates/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>templates/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo base_url()?>templates/vendors/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url()?>templates/vendors/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url()?>templates/build/js/custom.min.js"></script>
  </body>
</html>