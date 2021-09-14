
<!-- The Modal for listing users who liked posts-->
  <div class="modal createposts rounded-0" id="followermodel">
    <div class="modal-dialog">
      <form  method="POST" id="formpost" class="modal-content border-0 rounded-0 shadow"> 
        <div class="modal-header sticky-top">
          <h4 class="modal-title">Followers<small></small></h4>
          <hr>
          <button type="button" class="close" id="closed" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="modal-body">
           <?php follower($user_to_follow)?>
        </div>   
      </form>
    </div>
  </div>

<script type="text/javascript">
   $(document).ready(function(){ 
   	$("#followermodel").hide();
    $("#follower").click(function(){
        $("#followermodel").show();
    });

     $("#closed").click(function () {
        	$("#followermodel").hide();
    });
   
});
</script>