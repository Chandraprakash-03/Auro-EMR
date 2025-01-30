<?php
include("adheader.php");
include("dbconnection.php");
session_start();
if(!isset($_SESSION['patientid']))
{
	echo "<script>window.location='patientlogin.php';</script>";
}

$sqlpatient = "SELECT * FROM patient WHERE patientid='$_SESSION[patientid]' ";
$qsqlpatient = mysqli_query($con,$sqlpatient);
$rspatient = mysqli_fetch_array($qsqlpatient);

$sqlpatientappointment = "SELECT * FROM appointment WHERE patientid='$_SESSION[patientid]' ";
$qsqlpatientappointment = mysqli_query($con,$sqlpatientappointment);
$rspatientappointment = mysqli_fetch_array($qsqlpatientappointment);
?>
<div class=" container-fluid">
    <div class="block-header">
        <h2>Dashboard</h2>
    </div>




    <div class="card">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <div class="alert bg-teal">
                            <h3>Welcome , <?php echo $rspatient['patientname']; ?>! </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_animation_1"
                            aria-expanded="true">Registration History</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_animation_1"
                            aria-expanded="false">Appointment</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content" style="padding: 10px">
                    <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1"
                        aria-expanded="true"> <b>Registration History</b>
                        <h3>You are with us from <?php echo $rspatient['admissiondate']; ?>
                            <?php echo $rspatient['admissiontime']; ?></h3>
                    </div>
                    <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1"
                        aria-expanded="false"> <b>Appointment</b>
                        <?php
                        if(mysqli_num_rows($qsqlpatientappointment) == 0)
                        {
                            ?>
                        <h3>Appointment records not found.. </h3>
                        <?php
                        }
                        else
                        {
                            ?>
                        <h3>Last Appointment taken on - <?php echo $rspatientappointment['appointmentdate']; ?>
                            <?php echo $rspatientappointment['appointmenttime']; ?> </h3>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <script type="text/javascript">
  (function(d, t) {
      var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
      v.onload = function() {
        window.voiceflow.chat.load({
          verify: { projectID: '679bb52012330e9c85c3d2ae' },
          url: 'https://general-runtime.voiceflow.com',
          versionID: 'production'
        });
      }
      v.src = "https://cdn.voiceflow.com/widget-next/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
  })(document, 'script');
</script>
</div>

<?php
include("adfooter.php");
?>
