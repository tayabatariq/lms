 <?php
 include "header.php";
 ?>
 <link rel="stylesheet" href="css/contact.css">
 <div class="contactmain">
    <div class="infocontact">
        <div class="parthead">
            <h2 class="contacthead">
                Contact Us 
            </h2>
           
        </div>
        <div class="infodivcontact">
            <label for="name" class="label"> Name: </label> 
            <input type="text" placeholder="Enter your name:"  class="inputcontact">
            <label for="name" class="label">Email: </label> 
            <input type="text" placeholder="Enter your email:"  class="inputcontact"> 
            <label for="name" class="label">Message:</label>
            <textarea name="text" placeholder="Enter your Message" class="inputcontact"></textarea><br>
            <button type="submit" class="btncontact">Send Messege</button>
            
        </div>


    </div>
   
 </div>






    <?php

    include "footer.php"
    ?>
</body>
</html>