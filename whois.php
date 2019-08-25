    <!DOCTYPE html>
    <html>
    
    <body>
    <form method="GET">enter your domain:shell> <input type="text" name="domain" value="" >
    	<input type="submit" name="submit">
    </form> 

    <?php
    	if(isset($_GET['submit'])){
    			$domain=$_GET['domain'];
    			$whois = shell_exec("whois '" . addslashes($domain) . "'");
    			echo '<pre>';
                print_r($whois);
}
    	
    //	$whois = shell_exec("ls");
    //	echo '<pre>';
    //	print_r($whois);
    ?>


    </body>
    </html>


    