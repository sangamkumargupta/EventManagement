<?php 
  session_start();
  if(empty($_SESSION['username'])){?>
  <script>
    location.replace("pages-login.php");
  </script>
<?php } 
?>
<style>

a{
    color: #1029ef;
    text-decoration: none;
    font-size: 25px;
}
</style>
<!-- The Modal -->
<div class="modal" id="userProfile">
  <div class="modal-dialog">
    <div class="modal-content modal-dialog modal-sm">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Profile</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row justify-content-md-center">
          <div class="card-body  pt-4 d-flex flex-column align-items-center">
            <img src="../attachement/loginlogo/<?php echo $_SESSION['user_id ']?>.jpg" alt="Profile" style="height:150px;width:100x;"class="rounded-circle">
            <h2><?php echo $_SESSION['firstname']." ".$_SESSION['lastName'];?></h2>
            <p><u><?php echo $_SESSION['user_email'];?></u></p>
            <div class="social-links mt-2 ">
              <a href="https://www.facebook.com/profile.php?id=100032350464199&mibextid=2JQ9oc" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/call_me_sangam__gupta?igsh=OG01d3c2Y2djM3k0" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/mr-s-kumar-b83848265?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
