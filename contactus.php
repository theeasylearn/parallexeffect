<?php require_once("inc/header-part.php"); ?>
    </head>
    <body>
        <div id="box">
            <?php 
                require_once("inc/menu.php"); 
                require_once("inc/banner.php"); 
            ?>     
           <div id=slider>
               <img src="images/s1.png" alt="" class="slider">
           </div>
           <div id=content>
            <span class="contenttitle">Contact Us </span>
            <span class="subttitle">Office Address</span>
            <p style="text-indent:0px">            
            <b style="color:brown">The EasyLearn Academy</b> <br/>
            105, Eva Surbhi Mall, Near Aksharwadi temple, 
            <br/>Waghawadi Road , Bhavnagar, Gujarat 364002
            <br/>Phone: +91 96 62 51 28 57
            <br/>Email: theeasylearn@gmail.com
            <br/>Skype: theeasylearn
            </p>
            <span class="subttitle">Send us Message</span>
            <p>
                <form action="submit/insert_contactus.php">
                    <table align=center width="80%" cellpadding=10 >
                        <tr>
                            <td>Name</td>
                        </tr>
                        <tr>
                            <td><input type="" name="" placeholder="" required /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                        </tr>
                        <tr>
                            <td><input type="" name="" placeholder="" required /></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                        </tr>
                        <tr>
                            <td><input type="" name="" placeholder="" required /></td>
                        </tr>
                        <tr>
                            <td>Message</td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="txtmessage" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Send message" />
                            </td>
                        </tr>
                    </table>
                </form>
            </p>
           </div>


        <?php require_once("inc/footer.php"); ?>    
        </div>
    </body>
</html>