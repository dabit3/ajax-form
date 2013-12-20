 <?php  $title = "Connect Technology Contact Us" ?>
    <?php  include 'includes/header4.php'; ?>
    <script type="text/javascript">

    $(document).ready(function() {

    	$('#ct-contact-mobile-submit').click(function() {
    		var name = $('#ct-name').val();
    		var email = $('#ct-email').val();
    		var message = $('#ct-textarea').val();


          var varData = 'name=' + name + '&email=' + email + '&message=' + message;

          if ((email != "") && (message != "")) {

          $.ajax({

          type: "POST",
          url: "mobileMessage.php",
          data: varData,
          success: function() {
            alert("Thank you for contacting Connect Technology, someone will reach out to you shortly!");
            window.location = '/mobile';
            }
          });
          }

          
    	});
    });

    </script>
    <div>
        <div class="ctMainHome">
                   
               <div class="ctContact-Mobile">
               	<form> 
               		<label>Name</label>
               		<input for="name" name="name" placeholder="Name"  id="ct-name">
               		<label>Email</label>
               		<input for="email" name="email" placeholder="Email" required id="ct-email"> 
               		<label>Message</label>
               		<textarea required for="message" name="message" placeholder="Please let us know how we can help!"  id="ct-textarea"></textarea>
               		<input type="submit" value="Submit" id="ct-contact-mobile-submit">
               	</form>
               </div>
           
        </div>
    </div><!-- end main -->
</div><!-- end page -->
</body>
</html>