<?php
$HOSTNAME=rtrim(`hostname`);
$DOMAIN=$_SERVER['HTTP_HOST'];
if(substr($DOMAIN,0,4) == "www.") {
	$DOMAIN=substr($DOMAIN,4);
}
if ($HOSTNAME == $DOMAIN) {
        $STRING="This domain name ";
}
else {
        $STRING="The domain " . $DOMAIN;
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <link rel="stylesheet/less" type="text/css" href="assets/css/style.less"/>
    <script src="assets/less.js" type="text/javascript"></script>
    <meta name="keywords" content="domains, domain name registration, web hosting, hosting, email, custom email address">
    <meta name="description" content="GKG.NET offers domain name registration, web hosting, email and other services that get you on the internet. Fast.">
    <title>Coming soon page | register your domain at register.gkg.net</title>
  </head>
  <body>
    <div id="container">
      <div id="head">
        <div id="login">
            Current customers:
            <form method="post" action="https://www.gkg.net/login" autocomplete="off">
                <input type="hidden" name="destination" value="/protected/domain/modify"/>
                <input name="credential_0" type="text" tabindex="1" placeholder="username"/>
                <input name="credential_1" type="password" tabindex="2" placeholder="password"/>
                <input type="submit" value="Login" tabindex="3"/>
            </form>
        </div>
        <a id="logo" href="https://www.gkg.net" target="_blank">
          <img src="assets/images/gkg_logo.png" title="GKG.NET" alt="gkg.net logo" border="0">
        </a>
        <ul>
            <li><a href="https://www.gkg.net/register" target="_blank">Domain Names</a></li>
            <li><a href="https://www.gkg.net/hosting/" target="_blank">Website Hosting</a></li>
            <li><a href="https://www.gkg.net/hosting/ssl/" target="_blank">SSL</a></li>
        </ul>
      </div>
      <div id="banner">
        <h1>This domain is currently <a href="https://www.gkg.net/hosting/" target="_blank">hosted</a> at gkg.net</h1>
        <hr class="hr1">
        <hr class="hr2">
        <p><i><?php echo $STRING;?></i> has been registered with <a href="https://www.gkg.net/" target="_blank">GKG.NET</a> but currently does not have a website. If this is your site, you can access your <a href="https://<?php echo $HOSTNAME;?>:2083" target="_blank">cPanel</a> or <a href="https://<?php echo $HOSTNAME;?>:2096" target="_blank">Webmail</a> here. <a href="https://www.gkg.net/domain/support/c_panel/" target="_blank">Video Tutorials</a> are also available.
          
        </p>
      </div>
      <div id="leftcorner"></div>
      <div id="rightcorner"></div>
      <div id="main">
        <div id="services">
          <ul>
            <li class="title"><a class="domain" href="https://www.gkg.net/register" target="_blank">Domain Names</a></li>
            <li class="detailed"><a class="domain" href="https://www.gkg.net/register" target="_blank"></a> <p>Want your very own domain? It's easier and cheaper than you might think!</p></li>
            <li class="title"><a class="hosting" href="https://www.gkg.net/hosting/" target="_blank">Web Hosting</a></li>
            <li class="detailed"><a class="hosting" href="https://www.gkg.net/hosting/" target="_blank"></a> <p>Get your website up and running in minutes! Our packages start at just a few dollars a month.</p></li>
          </ul>
          <ul>
            <li class="title"><a class="ssl" href="https://www.gkg.net/hosting/ssl/" target="_blank">SSL Certificates</a></li>
            <li class="detailed"><a class="ssl" href="https://www.gkg.net/hosting/ssl/" target="_blank"></a> <p>Protect yourself and your customers by securing your site with industry-standard encryption.</p></li>
            <li class="title"><a class="it" href="http://downtownit.net/" target="_blank">IT Services</a></li>
            <li class="detailed"><a class="it" href="http://downtownit.net/" target="_blank"></a> <p>Downtown IT can solve even your biggest network and IT related issues. Their expert technicians </p></li>
          </ul>
        </div>
        <div id="silentium">
            <img id="beforeandafter" src="assets/images/banda.png?481d1f5" alt="Before and after website design">
            <div>
                <a href="http://silentiumdesigns.com/" target="_blank"><img id="silentium_logo" src="assets/images/silentium_logo.png?481d1f5" alt="Silentium Designs logo" title="Silentium Designs"></a>
                <p>It is imperative to have a professional website to maintain a successful business. Your website can inspire trust, attract new business, and even forge relationships with customers.</p>
                <p>Silentium Designs specializes in professional web development with customer convenience in mind. We know you want to be able to make changes yourself, so we offer our own Content Management  System (CMS) to make simple changes easy. Add/remove photos, change text, prices, etc. in just seconds, saving you time and money.</p>
                <p>Contact Silentium Designs today for a free quote &mdash; <a href="http://silentiumdesigns.com/contact.shtml" target="_blank">Click Here</a>.</p>
            </div>
        </div>
    </div>
    </div>
    <div id="footer">
        <ul>
            <li><a class="contact" href="http://www.constantcontact.com/email-marketing/index.jsp?ls=extra1&pn=gkg" title="Email Marketing" target="_blank"></a></li>
            <li><a class="downtown" href="http://downtownit.net/" title="IT Solutions" target="_blank"></a></li>
            <li><a class="ithreat" href="http://intellithreat.com/" title="Network Services" target="_blank"></a></li>
            <li><a class="silentium" href="http://silentiumdesigns.com/" title="Web Design" target="_blank"></a></li>
            <li><a class="gkg" href="https://www.gkg.net/" title="Domains, Hosting, Etc." target="_blank"></a></li>
        </ul>
    </div>
  </body>
</html>
