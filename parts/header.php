<div class="navbar navbar-inverse navbar-fixed-top" >
    <div class="navbar-inner">
    <a href="https://github.com/JonathanDekhtiar/billetterieUTC">
    <img style="position: absolute; top: 0; right: 0; border: 0;" src="/billetterie/images/forkme.png">
    </a>
    
        <div class="container" style="width:1170px;">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

            </a>
            <a class="brand" href="/">Billetterie Évènementielle UTC</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li id="home">
                        <a href="/">Home</a>
                    </li>
                    <li id="/setup/">
                        <a href="setup/">Setting Up NFC</a>
                    </li>
                    <li id="/offline/">
                        <a href="offline/">Setting Up Offline Server</a>
                    </li>
                    <li id="/contact/">
                        <a href="contact/">Contact</a>
                    </li>
                    <li id="/admin/">
                        <a href="admin/">Administration</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
 jQuery(document).ready(function () {   
    var current_href = $(location).attr('href');
    
    if (current_href.indexOf("admin") !== -1)
    {        
        var btn = document.getElementById("admin"); 
        btn.className= "active";
    }
    else if (current_href.indexOf("setup") !== -1)
    {
        var btn = document.getElementById("setup"); 
        btn.className= "active"; 
    }
    else if (current_href.indexOf("contact") !== -1)
    {
        var btn = document.getElementById("contact"); 
        btn.className= "active";  
    }
    else if (current_href.indexOf("offline") !== -1)
    {
        var btn = document.getElementById("offline"); 
        btn.className= "active";  
    }
    else
    {
        var btn = document.getElementById("home"); 
        btn.className= "active";  
    }

});
</script>