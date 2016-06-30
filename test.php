<html>
<head>
<title>Simple CSS Based Pulldowns</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<style type="text/css">
    h3, p {
        text-align: justify;
    }
<!--
  /* set the menu style */
  .menuHead { font-weight: bold; font-size: larger;  background-color: #A9A9A9;}
  .menuChoices { background-color: #DCDCDC; width: 200px;}
  .menu a {color: #000000; text-decoration: none;}
  .menu a:hover {text-decoration: underline;} 
  /* position your menus */
   #menu1 {position: absolute; top: 10px; left: 10px; width: 200px;}
   #menu2 {position: absolute; top: 10px; left: 210px; width: 200px;}
   #menu3 {position: absolute; top: 10px; left: 410px; width: 200px;}
-->
</style>
<script type="text/javascript">
<!--
/* we'll only allow DOM browsers to simplify things*/
(document.getElementById ? DOMCapable = true : DOMCapable = false);
function hide(menuName)
{
 if (DOMCapable)
  {
    var theMenu = document.getElementById(menuName+"choices");
    theMenu.style.visibility = 'hidden';
  }
}
function show(menuName)
{
 if (DOMCapable)
  {
    var theMenu = document.getElementById(menuName+"choices");
    theMenu.style.visibility = 'visible';
  }
}
//-->
</script>
</head>
<body dir="rtl">
<div id="menu1" dir="rtl" class="menu" onmouseover="show('menu1');" onmouseout="hide('menu1');">
   <div class="menuHead">ABOUT US</div>
      <div id="menu1choices" class="menuChoices">
          <h3>  A little about us: </h3>

<p>Great style begins with the right shoes, and we have been delivering them to your door since 1996. From comfortable, casual shoes to the dress shoes that make your occasions special, we've got the styles, brands and expertise to ensure you get the look you want in the size you need.

<p>And when it's time to go for a run, to the gym or just get out on the trail and explore, our experts are here to make sure you get the performance you want out of your new running shoes or hiking boots. Whether it's all-day comfort or all-out performance, OnlineShoes is here to help you put your best foot forward.
      </div>
</div>
<div id="menu2" dir="rtl" class="menu" onmouseover="show('menu2');" onmouseout="hide('menu2');">
   <div class="menuHead">FAQ</div>
      <div id="menu2choices"  class="menuChoices">
       
      </div>
</div>
<div id="menu3" dir="rtl" class="menu" onmouseover="show('menu3');" onmouseout="hide('menu3');">
   <div class="menuHead">e-Books</div>
      <div id="menu3choices"  class="menuChoices">
       <a href="http://www.javascript.com">JavaScriptRef</a><br />
       <a href="http://www.w3c.org">W3C</a><br />
       <a href="http://www.pint.com">PINT</a><br />
      </div>
</div>
<script type="text/javascript">
<!--
/* Don't hide menus for JS off and older browsers */
if (DOMCapable)
 {
  hide("menu1");
  hide("menu2");
  hide("menu3");
 }
//-->
</script>
</body>
</html>