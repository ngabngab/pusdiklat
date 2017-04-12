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
    <p class="title">jadwal</p>
    <p class="title">diklat <?php echo $kaldiks[0] -> diklatName;?></p>
    <p class="title">diklat <?php echo $kaldiks[0] -> kurikulumName;?> di <?php echo $kaldiks[0] -> diklatLocName;?></p>
    <p class="title">tanggal <b id="startDate"></b> S.D <b id="endDate"> </b></p>
    <table class="table table-bordered table-hover table-striped" border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Mata Pelajaran</th>
                <th>Jamlat</th>
                <th>Pengajar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($instructors){
                $i=1;
                $this->load->model('enum');
                foreach($instructors as $instructor){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td id="day<?php echo $i;?>"></td>
                        <td id='tgl<?php echo $i;?>'></td>
                        <td><?php echo $instructor->startTime;?> - <?php echo $instructor->endTime;?> WIB</td>
                        <td><?php echo $instructor->mataAjarName;?></td>
                        <td><?php echo $instructor->jamLat; ?></td>
                        <td><?php echo $instructor->pegawaiDegreeFirst." " .$instructor->pegawaiName." ".$instructor->pegawaiDegreeLast; ?></td>
                    </tr>
                    <script>
                        var temptgl = moment('<?php echo $instructor->rencanaTgl;?>').format("DD MMMM YYYY");
                        var tempday = moment('<?php echo $instructor->rencanaTgl;?>').format("dddd");
                        $('#tgl<?php echo $i;?>').html(''+temptgl);
                        $('#day<?php echo $i;?>').html(''+tempday);
                    </script>
                    <?php
                    $i++;
                }
            }
            ?>
        </tbody>
    </table>
</center>
<style type="text/css" media="print">
    @page { size: landscape; }
    @page { margin: 0; }
</style>
<script>
    var startDate = moment('<?php echo $kaldiks[0] -> startDate;?>').format('DD MMMM');
    var endDate = moment('<?php echo $kaldiks[0] -> endDate;?>').format('DD MMMM YYYY');
    $('#startDate').html(startDate);
    $('#endDate').html(endDate);
    window.print();
</script>