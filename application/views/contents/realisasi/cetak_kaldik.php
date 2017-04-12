<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 Hadiyan Hanafiah
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$loggedIn = $this->session->userdata['logged_in'];

?>
 <link href="<?php echo base_url();?>assets/design/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/design/dist/css/sb-admin-2.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/design/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/design/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery.js"></script>
<script src="<?php echo base_url();?>/assets/js/moment-with-locales.js"></script>
<script>
    moment.locale('id');
</script>
<style>
    center{
        font-family: arial;
        text-transform: capitalize;
        margin: 2%;
    }
    p{
        font-size: 1.3em;
        font-weight: bold;
        margin: 0;
    }
    table{
        margin-top: 5%;
    }
</style>
<center>
    <p class="title">Daftar Realisasi Diklat (Kaldik)</p>
    <p class="title">Periode Diklat</p>
    <p class="title">tanggal <b id="startDate"></b> S.D <b id="endDate"> </b></p>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Diklat</th>
                <th>Kelas</th>
                <th>Peserta</th>
                <th>Hari</th>
                <th>Lokasi</th>
                <th>Waktu Penyelenggaraan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($kaldiks){
                $i=1;
                $jml_kelas = 0;
                $jml_peserta = 0;
                $this->load->model('enum');
                foreach($kaldiks as $kd){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?= $kd->diklatName?></td>
                        <td><?= $kd->kelas?></td>
                        <td><?= $kd->participantLength?></td>
                        <td><?= $kd->hari?></td>
                        <td><?= $kd->diklatLocName?></td>
                        <td><?= date('d F Y',strtotime($kd->startDate))?> s.d <?= date('d F Y',strtotime($kd->endDate))?></td>
                    </tr>
                    <?php
                    $jml_kelas = $jml_kelas + $kd->kelas;
                    $jml_peserta = $jml_peserta + $kd->participantLength;
                    $i++;
                }
            } else {
                $jml_kelas = 0;
                $jml_peserta = 0;
            }
            ?>
            <tr>
            <td colspan="2"> Jumlah </td>
            <td><?= $jml_kelas?></td>
            <td><?= $jml_peserta?></td>
            </tr>
        </tbody>
    </table>
    </div>
</center>
<style type="text/css" media="print">
    @page { size: landscape; }
    @page { margin: 0; }
</style>
<script>
    var startDate = moment('<?php echo $sd;?>').format('DD MMMM');
    var endDate = moment('<?php echo $ed;?>').format('DD MMMM YYYY');
    $('#startDate').html(startDate);
    $('#endDate').html(endDate);
    window.print();
</script>