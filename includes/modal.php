<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">x</span>
            </button>
         </div>
         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../includes/logout.php">Logout</a>
         </div>
      </div>
   </div>
</div>

<!-- Pop up for Message -->
<div class="modal fade" tabindex="-1" id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.5);">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header bg-primary">
            <h5 class="modal-title text-white">Notification</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" onclick="closePopup()">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>

         <?php
         if (isset($_SESSION["message"])) {
            $message = $_SESSION["message"];

            echo "<script> 
                  $(document).ready(function() {
                     $('#popup').modal('show');
                  });
              </script>";
         ?>

            <div class="modal-body my-2">
               <p class="h5"> <?php echo $message ?></p>
            </div>

         <?php
            unset($_SESSION["message"]);
         }
         ?>
      </div>
   </div>
</div>