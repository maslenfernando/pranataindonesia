<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>


<?php get_template('header'); ?>

<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="widget">
						<div class="widget-header">
							<i class="icon-file"></i> <h3>Daftar Artikel</h3>
              <a class="btn btn-large btn-primary" href="<?=set_url('artikel#tambah'); ?>">Tambah Artikel</a>
						</div>

						<div class="widget-content">
              <div class="controls pull-right">
  							<div class="btn-group">
                  <input type="text" class="form-control" autocomplete="off" id="search" name="search" placeholder="Pencarian artikel...">
                </div>
              </div>

              <div class="controls pull-left">
                <a class="btn btn-default" id="btn-check-all"><i class="icon-check"></i></a>
              </div>

              <div class="controls pull-left">
                <div class="btn-group">
                  <a class="btn btn-default" href="#">Aksi Artikel</a>
                  <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>

                  <ul class="dropdown-menu" id="btn-action-artikel">
                    <li><a href="<?=set_url('artikel#mass?action=hapus'); ?>">
                    <i class="icon-trash"></i> Hapus</a></li>
                    <li><a href="<?=set_url('artikel#mass?action=pending'); ?>">
                    <i class="icon-ban-circle"></i> Pending</a></li>
                    <li><a href="<?=set_url('artikel#mass?action=publish'); ?>">
                    <i class="icon-ok"></i> Publish</a></li>
                  </ul>

                </div>
              </div>

              <div class="controls pull-right">
                <div class="btn-group">
                  <a class="btn btn-default" id="lbl-filter-artikel">Filter Artikel</a>
                  <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>

                  <ul class="dropdown-menu" id="btn-filter-artikel">
                    <li><a href="#">Kategori</a></li>
                  </ul>

                </div>
              </div>


              <table id="tbl-artikel" class="table table-striped table-bordered">
                <tbody>
                  <tr>
                    <td width="2%"><input type="checkbox" name="post_id[]" value="1"></td>
                    <td width="50%"><a class="link-edit" href="<?=set_url('artikel#edit?id=1'); ?>">3 Tips Powerfull Untuk Facebook Marketing!</a> <strong></strong></td>
                    <td width="10%"><i class="icon-comment-alt"></i> <span class="value">0</span></td>
                    <td width="10%"><i class="icon-eye-open"></i> <span class="value">0</span></td>
                    <td width="10%"><i class="icon-time"></i> <span class="value">1 hari yang lalu</span></td>
                    <td width="16%" class="td-actions">
                      <a href="<?=set_url('artikel#edit?id=1'); ?>" class="link-edit btn btn-small btn-info"><i class="btn-icon-only icon-pencil"> Edit</i></a>
                      <a href="<?=set_url('artikel#hapus?id=1'); ?>" class="btn btn-invert btn-small btn-info"><i class="btn-icon-only icon-remove" id="hapus_1"> Hapus</i></a>
                    </td>
                  </tr>
                </tbody>
              </table>

					</div>
				</div>
			</div>
		</div>
   </div>
</div>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel"><i class="icon-plus"></i> Tambah Artikel</h3>
  </div>

  <div class="modal-body">
    <form role="form" id="form-artikel" action="tambah">
      <div class="form-group">
        <input class="input-block-level" type="text" id="post_title" name="post_title" placeholder="Tuliskan Judul Artikel di sini">
        <textarea class="form-control input-block-level" placeholder="Pesan" name="post_content" rows="20" id="post_content"></textarea>
      </div>
      <input type="hidden" name="mass_action_type" id="mass_action_type" />
      <input type="hidden" name="post_id" id="post_id" />
    </form>
  </div>

  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
    <button class="btn btn-primary" id="submit-artikel">Tambah!</button>
  </div>
</div>

<?php get_template('footer'); ?>


