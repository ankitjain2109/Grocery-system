<?php
		include ("search.php");
 $log=$_REQUEST['log'];
if($log=="logout")
{
unset($_SESSION['count']);
	unset($_SESSION['products']);
	unset($_SESSION['sid']);
	header("location:main.php");
}
$uid=$_SESSION['sid'];
		
		?>
	
<!DOCTYPE html><head>
<?php

mysql_connect("localhost","root","") ;
mysql_select_db("minor") or die(mysql_error());

$sql=mysql_query("select * from offers where product_name='fresho-tamarind-sweet'");
$res=mysql_fetch_array($sql);

?>


<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getuser1.php?q="+str,true);
  xmlhttp.send();
}
</script>


<script>
function showUserabout()
{

	document.getElementById("txtHint3").innerHTML="Fresho Sweet Tamarind contains high energy and fiber content, these tamarind is a great source of B-vitamins and a number of minerals. The tamarind is best described as sweet and sours in taste, and is high in tartaric acid."
	}
function showUseringredients()
	{
	document.getElementById("txtHint3").innerHTML="Coffee 7% & Chicory 3%"
	}
	
	</script>


<title>Daily Needs</title>
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_1004165716_0) return;
            window.mm_menu_1004165716_0_1 = new Menu("Timings",278,24,"Arial, Helvetica, sans-serif",18,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
    mm_menu_1004165716_0_1.addMenuItem("7:00AM&nbsp;to&nbsp;9:30AM");
    mm_menu_1004165716_0_1.addMenuItem("9:30AM&nbsp;to&nbsp;12:30PM");
    mm_menu_1004165716_0_1.addMenuItem("5:00PM&nbsp;to&nbsp;7:30PM&nbsp;");
    mm_menu_1004165716_0_1.addMenuItem("7:30PM&nbsp;to&nbsp;10:00PM");
     mm_menu_1004165716_0_1.fontWeight="bold";
     mm_menu_1004165716_0_1.hideOnMouseOut=true;
     mm_menu_1004165716_0_1.bgColor='#FDFBFA';
     mm_menu_1004165716_0_1.menuBorder=1;
     mm_menu_1004165716_0_1.menuLiteBgColor='#FCFBF9';
     mm_menu_1004165716_0_1.menuBorderBgColor='#000000';
  window.mm_menu_1004165716_0 = new Menu("root",278,24,"Arial, Helvetica, sans-serif",18,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_1004165716_0.addMenuItem("Delivery&nbsp;Slots");
  mm_menu_1004165716_0.addMenuItem(mm_menu_1004165716_0_1);
  mm_menu_1004165716_0.addMenuItem("Login");
  mm_menu_1004165716_0.addMenuItem("Register");
   mm_menu_1004165716_0.fontWeight="bold";
   mm_menu_1004165716_0.hideOnMouseOut=true;
   mm_menu_1004165716_0.childMenuIcon="arrows.gif";
   mm_menu_1004165716_0.bgColor='#FDFBFA';
   mm_menu_1004165716_0.menuBorder=1;
   mm_menu_1004165716_0.menuLiteBgColor='#FCFBF9';
   mm_menu_1004165716_0.menuBorderBgColor='#000000';
window.mm_menu_1004170146_0 = new Menu("root",277,23,"Arial, Helvetica, sans-serif",17,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_1004170146_0.addMenuItem("Why&nbsp;Daily&nbsp;Needs?");
  mm_menu_1004170146_0.addMenuItem("Daily&nbsp;Needs&nbsp;in&nbsp;the&nbsp;Media");
  mm_menu_1004170146_0.addMenuItem("Frequently&nbsp;Asked&nbsp;Questions.");
  mm_menu_1004170146_0.addMenuItem("Customer&nbsp;Speak");
   mm_menu_1004170146_0.fontWeight="bold";
   mm_menu_1004170146_0.hideOnMouseOut=true;
   mm_menu_1004170146_0.bgColor='#FDFBFA';
   mm_menu_1004170146_0.menuBorder=1;
   mm_menu_1004170146_0.menuLiteBgColor='#FCFBF9';
   mm_menu_1004170146_0.menuBorderBgColor='#000000';
                            window.mm_menu_1004173024_0_1 = new Menu("Fruits",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E62E1A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1004173024_0_1.addMenuItem("Apple");
    mm_menu_1004173024_0_1.addMenuItem("Banana");
    mm_menu_1004173024_0_1.addMenuItem("Melon");
    mm_menu_1004173024_0_1.addMenuItem("Oranges&nbsp;&&nbsp;Sweet&nbsp;Lime");
    mm_menu_1004173024_0_1.addMenuItem("Other&nbsp;Fruits");
     mm_menu_1004173024_0_1.fontWeight="bold";
     mm_menu_1004173024_0_1.hideOnMouseOut=true;
     mm_menu_1004173024_0_1.bgColor='#FDFBFA';
     mm_menu_1004173024_0_1.menuBorder=1;
     mm_menu_1004173024_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1004173024_0_1.menuBorderBgColor='#CCCCCC';
      window.mm_menu_1004173024_0_2_1 = new Menu("Vegetables",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E62E1A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
      mm_menu_1004173024_0_2_1.addMenuItem("Beans");
      mm_menu_1004173024_0_2_1.addMenuItem("Brinjals");
      mm_menu_1004173024_0_2_1.addMenuItem("Chilli,&nbsp;Lemon&nbsp;&&nbsp;&nbsp;Garlic");
      mm_menu_1004173024_0_2_1.addMenuItem("Potato&nbsp;&&nbsp;Onion");
      mm_menu_1004173024_0_2_1.addMenuItem("Leafy&nbsp;Vegetables");
       mm_menu_1004173024_0_2_1.fontWeight="bold";
       mm_menu_1004173024_0_2_1.hideOnMouseOut=true;
       mm_menu_1004173024_0_2_1.bgColor='#FDFBFA';
       mm_menu_1004173024_0_2_1.menuBorder=1;
       mm_menu_1004173024_0_2_1.menuLiteBgColor='#FFFFFF';
       mm_menu_1004173024_0_2_1.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1004173024_0_2 = new Menu("Organic&nbsp;F&V",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E62E1A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1004173024_0_2.addMenuItem(mm_menu_1004173024_0_2_1);
     mm_menu_1004173024_0_2.fontWeight="bold";
     mm_menu_1004173024_0_2.hideOnMouseOut=true;
     mm_menu_1004173024_0_2.childMenuIcon="arrows.gif";
     mm_menu_1004173024_0_2.bgColor='#FDFBFA';
     mm_menu_1004173024_0_2.menuBorder=1;
     mm_menu_1004173024_0_2.menuLiteBgColor='#FFFFFF';
     mm_menu_1004173024_0_2.menuBorderBgColor='#CCCCCC';
  window.mm_menu_1004173024_0 = new Menu("root",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E62E1A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1004173024_0.addMenuItem("Cut&nbsp;Vegetables");
  mm_menu_1004173024_0.addMenuItem("Flowers");
  mm_menu_1004173024_0.addMenuItem(mm_menu_1004173024_0_1);
  mm_menu_1004173024_0.addMenuItem(mm_menu_1004173024_0_2);
   mm_menu_1004173024_0.fontWeight="bold";
   mm_menu_1004173024_0.hideOnMouseOut=true;
   mm_menu_1004173024_0.childMenuIcon="arrows.gif";
   mm_menu_1004173024_0.bgColor='#FDFBFA';
   mm_menu_1004173024_0.menuBorder=1;
   mm_menu_1004173024_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1004173024_0.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005154101_0_1 = new Menu("Dals&nbsp;&&nbsp;Pulses",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005154101_0_1.addMenuItem("Chana&nbsp;Dal");
    mm_menu_1005154101_0_1.addMenuItem("Moong&nbsp;Dal");
    mm_menu_1005154101_0_1.addMenuItem("Raw&nbsp;Peanuts");
    mm_menu_1005154101_0_1.addMenuItem("Soya&nbsp;Products");
    mm_menu_1005154101_0_1.addMenuItem("Urad&nbsp;Daal");
     mm_menu_1005154101_0_1.fontWeight="bold";
     mm_menu_1005154101_0_1.hideOnMouseOut=true;
     mm_menu_1005154101_0_1.bgColor='#FDFBFA';
     mm_menu_1005154101_0_1.menuBorder=1;
     mm_menu_1005154101_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1005154101_0_1.menuBorderBgColor='#FFFFFF';
    window.mm_menu_1005154101_0_2 = new Menu("Dry&nbsp;Fruitts",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005154101_0_2.addMenuItem("Almonds");
    mm_menu_1005154101_0_2.addMenuItem("Cashews");
    mm_menu_1005154101_0_2.addMenuItem("Raisins");
    mm_menu_1005154101_0_2.addMenuItem("Other&nbsp;Dry&nbsp;Fruits");
     mm_menu_1005154101_0_2.fontWeight="bold";
     mm_menu_1005154101_0_2.hideOnMouseOut=true;
     mm_menu_1005154101_0_2.bgColor='#FDFBFA';
     mm_menu_1005154101_0_2.menuBorder=1;
     mm_menu_1005154101_0_2.menuLiteBgColor='#FFFFFF';
     mm_menu_1005154101_0_2.menuBorderBgColor='#FFFFFF';
    window.mm_menu_1005154101_0_3 = new Menu("Edible&nbsp;Oils&nbsp;&&nbsp;Ghee",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005154101_0_3.addMenuItem("Coconut&nbsp;Oils");
    mm_menu_1005154101_0_3.addMenuItem("Ghee");
    mm_menu_1005154101_0_3.addMenuItem("GroundNut&nbsp;Oils");
    mm_menu_1005154101_0_3.addMenuItem("Sunflower&nbsp;Oils");
     mm_menu_1005154101_0_3.fontWeight="bold";
     mm_menu_1005154101_0_3.hideOnMouseOut=true;
     mm_menu_1005154101_0_3.bgColor='#FDFBFA';
     mm_menu_1005154101_0_3.menuBorder=1;
     mm_menu_1005154101_0_3.menuLiteBgColor='#FFFFFF';
     mm_menu_1005154101_0_3.menuBorderBgColor='#FFFFFF';
    window.mm_menu_1005154101_0_4 = new Menu("Masala&nbsp;&&nbsp;Spices",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005154101_0_4.addMenuItem("Cooking&nbsp;Paste");
    mm_menu_1005154101_0_4.addMenuItem("Powdered&nbsp;Spices");
    mm_menu_1005154101_0_4.addMenuItem("Whole&nbsp;Spices");
     mm_menu_1005154101_0_4.fontWeight="bold";
     mm_menu_1005154101_0_4.hideOnMouseOut=true;
     mm_menu_1005154101_0_4.bgColor='#FDFBFA';
     mm_menu_1005154101_0_4.menuBorder=1;
     mm_menu_1005154101_0_4.menuLiteBgColor='#FFFFFF';
     mm_menu_1005154101_0_4.menuBorderBgColor='#FFFFFF';
    window.mm_menu_1005154101_0_5 = new Menu("Rice&nbsp;&&nbsp;Rice&nbsp;Products",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005154101_0_5.addMenuItem("Poha");
    mm_menu_1005154101_0_5.addMenuItem("Basmati&nbsp;Rice");
    mm_menu_1005154101_0_5.addMenuItem("Boiled&nbsp;Rice");
    mm_menu_1005154101_0_5.addMenuItem("Raw&nbsp;Rice");
     mm_menu_1005154101_0_5.fontWeight="bold";
     mm_menu_1005154101_0_5.hideOnMouseOut=true;
     mm_menu_1005154101_0_5.bgColor='#FDFBFA';
     mm_menu_1005154101_0_5.menuBorder=1;
     mm_menu_1005154101_0_5.menuLiteBgColor='#FFFFFF';
     mm_menu_1005154101_0_5.menuBorderBgColor='#FFFFFF';
  window.mm_menu_1005154101_0 = new Menu("root",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005154101_0.addMenuItem(mm_menu_1005154101_0_1);
  mm_menu_1005154101_0.addMenuItem(mm_menu_1005154101_0_2);
  mm_menu_1005154101_0.addMenuItem(mm_menu_1005154101_0_3);
  mm_menu_1005154101_0.addMenuItem(mm_menu_1005154101_0_4);
  mm_menu_1005154101_0.addMenuItem(mm_menu_1005154101_0_5);
  mm_menu_1005154101_0.addMenuItem("Salt,Sugar&nbsp;&&nbsp;Jaggery");
   mm_menu_1005154101_0.fontWeight="bold";
   mm_menu_1005154101_0.hideOnMouseOut=true;
   mm_menu_1005154101_0.childMenuIcon="arrows.gif";
   mm_menu_1005154101_0.bgColor='#FDFBFA';
   mm_menu_1005154101_0.menuBorder=1;
   mm_menu_1005154101_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1005154101_0.menuBorderBgColor='#FFFFFF';
    window.mm_menu_1005155710_0_1 = new Menu("Bread&nbsp;&&nbsp;Bakery",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FCFAF9","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005155710_0_1.addMenuItem("Bread");
    mm_menu_1005155710_0_1.addMenuItem("Bun&nbsp;&&nbsp;Pavs");
    mm_menu_1005155710_0_1.addMenuItem("Cake");
    mm_menu_1005155710_0_1.addMenuItem("Muffins");
     mm_menu_1005155710_0_1.fontWeight="bold";
     mm_menu_1005155710_0_1.hideOnMouseOut=true;
     mm_menu_1005155710_0_1.bgColor='#FDFBFA';
     mm_menu_1005155710_0_1.menuBorder=1;
     mm_menu_1005155710_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1005155710_0_1.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005155710_0_2 = new Menu("Diary&nbsp;Products",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FCFAF9","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005155710_0_2.addMenuItem("Milk");
    mm_menu_1005155710_0_2.addMenuItem("Curd");
    mm_menu_1005155710_0_2.addMenuItem("Cheese");
    mm_menu_1005155710_0_2.addMenuItem("Butter&nbsp;&&nbsp;Cream");
    mm_menu_1005155710_0_2.addMenuItem("Milk&nbsp;Drinks");
     mm_menu_1005155710_0_2.fontWeight="bold";
     mm_menu_1005155710_0_2.hideOnMouseOut=true;
     mm_menu_1005155710_0_2.bgColor='#FDFBFA';
     mm_menu_1005155710_0_2.menuBorder=1;
     mm_menu_1005155710_0_2.menuLiteBgColor='#FFFFFF';
     mm_menu_1005155710_0_2.menuBorderBgColor='#CCCCCC';
  window.mm_menu_1005155710_0 = new Menu("root",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FCFAF9","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005155710_0.addMenuItem(mm_menu_1005155710_0_1);
  mm_menu_1005155710_0.addMenuItem(mm_menu_1005155710_0_2);
  mm_menu_1005155710_0.addMenuItem("Eggs");
   mm_menu_1005155710_0.fontWeight="bold";
   mm_menu_1005155710_0.hideOnMouseOut=true;
   mm_menu_1005155710_0.childMenuIcon="arrows.gif";
   mm_menu_1005155710_0.bgColor='#FDFBFA';
   mm_menu_1005155710_0.menuBorder=1;
   mm_menu_1005155710_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1005155710_0.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160226_0_1 = new Menu("Fruit&nbsp;Drinks&nbsp;&&nbsp;Juices",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160226_0_1.addMenuItem("Mango&nbsp;Juices");
    mm_menu_1005160226_0_1.addMenuItem("Orange&nbsp;&&nbsp;Apple&nbsp;Juices");
    mm_menu_1005160226_0_1.addMenuItem("Other&nbsp;Juices");
    mm_menu_1005160226_0_1.addMenuItem("Syup&nbsp;&&nbsp;Squashes");
     mm_menu_1005160226_0_1.fontWeight="bold";
     mm_menu_1005160226_0_1.hideOnMouseOut=true;
     mm_menu_1005160226_0_1.bgColor='#FDFBFA';
     mm_menu_1005160226_0_1.menuBorder=1;
     mm_menu_1005160226_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160226_0_1.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160226_0_2 = new Menu("Mineral&nbsp;Water",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160226_0_2.addMenuItem("Packaged&nbsp;Drinking&nbsp;Water");
    mm_menu_1005160226_0_2.addMenuItem("Packaged&nbsp;Mineral&nbsp;Water");
    mm_menu_1005160226_0_2.addMenuItem("Spring&nbsp;Water");
     mm_menu_1005160226_0_2.fontWeight="bold";
     mm_menu_1005160226_0_2.hideOnMouseOut=true;
     mm_menu_1005160226_0_2.bgColor='#FDFBFA';
     mm_menu_1005160226_0_2.menuBorder=1;
     mm_menu_1005160226_0_2.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160226_0_2.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160226_0_3 = new Menu("Organic&nbsp;Juices&nbsp;&&nbsp;Tea",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160226_0_3.addMenuItem("Soft&nbsp;Drinks");
    mm_menu_1005160226_0_3.addMenuItem("Tea&nbsp;&&nbsp;Coffee");
     mm_menu_1005160226_0_3.fontWeight="bold";
     mm_menu_1005160226_0_3.hideOnMouseOut=true;
     mm_menu_1005160226_0_3.bgColor='#FDFBFA';
     mm_menu_1005160226_0_3.menuBorder=1;
     mm_menu_1005160226_0_3.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160226_0_3.menuBorderBgColor='#CCCCCC';
  window.mm_menu_1005160226_0 = new Menu("root",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005160226_0.addMenuItem("Energy&nbsp;&&nbsp;Health&nbsp;Drinks");
  mm_menu_1005160226_0.addMenuItem(mm_menu_1005160226_0_1);
  mm_menu_1005160226_0.addMenuItem(mm_menu_1005160226_0_2);
  mm_menu_1005160226_0.addMenuItem(mm_menu_1005160226_0_3);
   mm_menu_1005160226_0.fontWeight="bold";
   mm_menu_1005160226_0.hideOnMouseOut=true;
   mm_menu_1005160226_0.childMenuIcon="arrows.gif";
   mm_menu_1005160226_0.bgColor='#FDFBFA';
   mm_menu_1005160226_0.menuBorder=1;
   mm_menu_1005160226_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1005160226_0.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160918_0_1 = new Menu("Baking&nbsp;&&nbsp;Dessert&nbsp;Items",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160918_0_1.addMenuItem("Baking&nbsp;Ingredients");
    mm_menu_1005160918_0_1.addMenuItem("Decoratives");
    mm_menu_1005160918_0_1.addMenuItem("Essences&nbsp;&&nbsp;Colors");
    mm_menu_1005160918_0_1.addMenuItem("Ready&nbsp;Baking&nbsp;Mixes");
     mm_menu_1005160918_0_1.fontWeight="bold";
     mm_menu_1005160918_0_1.hideOnMouseOut=true;
     mm_menu_1005160918_0_1.bgColor='#FDFBFA';
     mm_menu_1005160918_0_1.menuBorder=1;
     mm_menu_1005160918_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160918_0_1.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160918_0_2 = new Menu("Biscuits",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160918_0_2.addMenuItem("Cookies");
    mm_menu_1005160918_0_2.addMenuItem("Cream&nbsp;Biscuits");
    mm_menu_1005160918_0_2.addMenuItem("Glucose,Marie&nbsp;&&nbsp;Milk&nbsp;Biscuits");
    mm_menu_1005160918_0_2.addMenuItem("Salty&nbsp;Biscuits");
    mm_menu_1005160918_0_2.addMenuItem("Wafers");
     mm_menu_1005160918_0_2.fontWeight="bold";
     mm_menu_1005160918_0_2.hideOnMouseOut=true;
     mm_menu_1005160918_0_2.bgColor='#FDFBFA';
     mm_menu_1005160918_0_2.menuBorder=1;
     mm_menu_1005160918_0_2.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160918_0_2.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160918_0_3 = new Menu("Breakfast&nbsp;Cereals",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160918_0_3.addMenuItem("Flaks");
    mm_menu_1005160918_0_3.addMenuItem("Meusli");
    mm_menu_1005160918_0_3.addMenuItem("Oats");
     mm_menu_1005160918_0_3.fontWeight="bold";
     mm_menu_1005160918_0_3.hideOnMouseOut=true;
     mm_menu_1005160918_0_3.bgColor='#FDFBFA';
     mm_menu_1005160918_0_3.menuBorder=1;
     mm_menu_1005160918_0_3.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160918_0_3.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160918_0_4 = new Menu("Chocolates&nbsp;&&nbsp;Sweets",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160918_0_4.addMenuItem("Chewing&nbsp;Gums");
    mm_menu_1005160918_0_4.addMenuItem("Chocolates");
    mm_menu_1005160918_0_4.addMenuItem("Toffee&nbsp;&&nbsp;Candies");
    mm_menu_1005160918_0_4.addMenuItem("Festive&nbsp;Gift&nbsp;Packs");
     mm_menu_1005160918_0_4.fontWeight="bold";
     mm_menu_1005160918_0_4.hideOnMouseOut=true;
     mm_menu_1005160918_0_4.bgColor='#FDFBFA';
     mm_menu_1005160918_0_4.menuBorder=1;
     mm_menu_1005160918_0_4.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160918_0_4.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005160918_0_5 = new Menu("Indian&nbsp;Sweets",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005160918_0_5.addMenuItem("Laddos");
    mm_menu_1005160918_0_5.addMenuItem("Other&nbsp;Sweets");
    mm_menu_1005160918_0_5.addMenuItem("Rasgulla&nbsp;&&nbsp;Gulab&nbsp;Jamun");
     mm_menu_1005160918_0_5.fontWeight="bold";
     mm_menu_1005160918_0_5.hideOnMouseOut=true;
     mm_menu_1005160918_0_5.bgColor='#FDFBFA';
     mm_menu_1005160918_0_5.menuBorder=1;
     mm_menu_1005160918_0_5.menuLiteBgColor='#FFFFFF';
     mm_menu_1005160918_0_5.menuBorderBgColor='#CCCCCC';
  window.mm_menu_1005160918_0 = new Menu("root",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005160918_0.addMenuItem("Ayurvedic&nbsp;Food");
  mm_menu_1005160918_0.addMenuItem(mm_menu_1005160918_0_1);
  mm_menu_1005160918_0.addMenuItem(mm_menu_1005160918_0_2);
  mm_menu_1005160918_0.addMenuItem(mm_menu_1005160918_0_3);
  mm_menu_1005160918_0.addMenuItem(mm_menu_1005160918_0_4);
  mm_menu_1005160918_0.addMenuItem(mm_menu_1005160918_0_5);
   mm_menu_1005160918_0.fontWeight="bold";
   mm_menu_1005160918_0.hideOnMouseOut=true;
   mm_menu_1005160918_0.childMenuIcon="arrows.gif";
   mm_menu_1005160918_0.bgColor='#FDFBFA';
   mm_menu_1005160918_0.menuBorder=1;
   mm_menu_1005160918_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1005160918_0.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005162054_0_1 = new Menu("Baby&nbsp;Care&nbsp;",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005162054_0_1.addMenuItem("Baby&nbsp;Care&nbsp;Accessories");
    mm_menu_1005162054_0_1.addMenuItem("Baby&nbsp;Creams&nbsp;&&nbsp;Lotions");
    mm_menu_1005162054_0_1.addMenuItem("Baby&nbsp;Oil&nbsp;&&nbsp;Shampoos");
    mm_menu_1005162054_0_1.addMenuItem("Baby&nbsp;Powder");
    mm_menu_1005162054_0_1.addMenuItem("Baby&nbsp;Soap");
    mm_menu_1005162054_0_1.addMenuItem("Diapers&nbsp;&&nbsp;Wipes");
     mm_menu_1005162054_0_1.fontWeight="bold";
     mm_menu_1005162054_0_1.hideOnMouseOut=true;
     mm_menu_1005162054_0_1.bgColor='#FDFBFA';
     mm_menu_1005162054_0_1.menuBorder=1;
     mm_menu_1005162054_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1005162054_0_1.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005162054_0_2 = new Menu("Cosmetics",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005162054_0_2.addMenuItem("Bleach");
    mm_menu_1005162054_0_2.addMenuItem("Cosmetics-Kit");
    mm_menu_1005162054_0_2.addMenuItem("Eye-Care&nbsp;&&nbsp;Kajal");
    mm_menu_1005162054_0_2.addMenuItem("Hair&nbsp;Removal");
     mm_menu_1005162054_0_2.fontWeight="bold";
     mm_menu_1005162054_0_2.hideOnMouseOut=true;
     mm_menu_1005162054_0_2.bgColor='#FDFBFA';
     mm_menu_1005162054_0_2.menuBorder=1;
     mm_menu_1005162054_0_2.menuLiteBgColor='#FFFFFF';
     mm_menu_1005162054_0_2.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005162054_0_3 = new Menu("Deos&nbsp;&&nbsp;Perfumes",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005162054_0_3.addMenuItem("Mens&nbsp;Deo");
    mm_menu_1005162054_0_3.addMenuItem("Womens&nbsp;Deo");
     mm_menu_1005162054_0_3.fontWeight="bold";
     mm_menu_1005162054_0_3.hideOnMouseOut=true;
     mm_menu_1005162054_0_3.bgColor='#FDFBFA';
     mm_menu_1005162054_0_3.menuBorder=1;
     mm_menu_1005162054_0_3.menuLiteBgColor='#FFFFFF';
     mm_menu_1005162054_0_3.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005162054_0_4 = new Menu("Hair&nbsp;Care",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005162054_0_4.addMenuItem("Hair&nbsp;Oil");
    mm_menu_1005162054_0_4.addMenuItem("Shampoos");
    mm_menu_1005162054_0_4.addMenuItem("Styling&nbsp;products");
    mm_menu_1005162054_0_4.addMenuItem("Hair&nbsp;Conditioner");
    mm_menu_1005162054_0_4.addMenuItem("Hair&nbsp;Colors&nbsp;&&nbsp;Dyes");
     mm_menu_1005162054_0_4.fontWeight="bold";
     mm_menu_1005162054_0_4.hideOnMouseOut=true;
     mm_menu_1005162054_0_4.bgColor='#FDFBFA';
     mm_menu_1005162054_0_4.menuBorder=1;
     mm_menu_1005162054_0_4.menuLiteBgColor='#FFFFFF';
     mm_menu_1005162054_0_4.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005162054_0_5 = new Menu("Skin&nbsp;Care",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005162054_0_5.addMenuItem("Body&nbsp;Lotion");
    mm_menu_1005162054_0_5.addMenuItem("Body&nbsp;Scrub");
    mm_menu_1005162054_0_5.addMenuItem("Body&nbsp;Oil");
    mm_menu_1005162054_0_5.addMenuItem("Face&nbsp;Cream");
    mm_menu_1005162054_0_5.addMenuItem("Lip&nbsp;Care");
    mm_menu_1005162054_0_5.addMenuItem("Talc&nbsp;");
    mm_menu_1005162054_0_5.addMenuItem("Foot&nbsp;Care");
     mm_menu_1005162054_0_5.fontWeight="bold";
     mm_menu_1005162054_0_5.hideOnMouseOut=true;
     mm_menu_1005162054_0_5.bgColor='#FDFBFA';
     mm_menu_1005162054_0_5.menuBorder=1;
     mm_menu_1005162054_0_5.menuLiteBgColor='#FFFFFF';
     mm_menu_1005162054_0_5.menuBorderBgColor='#CCCCCC';
      window.mm_menu_1005162054_0_6_1 = new Menu("Cleaning&nbsp;Accessories",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
      mm_menu_1005162054_0_6_1.addMenuItem("Brooms&nbsp;&&nbsp;Dust&nbsp;Pans");
      mm_menu_1005162054_0_6_1.addMenuItem("Brushes&nbsp;&&nbsp;Scrubbers");
      mm_menu_1005162054_0_6_1.addMenuItem("Cleaning&nbsp;&&nbsp;Dust&nbsp;Cloths");
      mm_menu_1005162054_0_6_1.addMenuItem("Wipers");
       mm_menu_1005162054_0_6_1.fontWeight="bold";
       mm_menu_1005162054_0_6_1.hideOnMouseOut=true;
       mm_menu_1005162054_0_6_1.bgColor='#FDFBFA';
       mm_menu_1005162054_0_6_1.menuBorder=1;
       mm_menu_1005162054_0_6_1.menuLiteBgColor='#FFFFFF';
       mm_menu_1005162054_0_6_1.menuBorderBgColor='#CCCCCC';
      window.mm_menu_1005162054_0_6_2 = new Menu("Detergents",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
      mm_menu_1005162054_0_6_2.addMenuItem("Liquid&nbsp;Detergents");
      mm_menu_1005162054_0_6_2.addMenuItem("Washing&nbsp;Bars&nbsp;");
      mm_menu_1005162054_0_6_2.addMenuItem("Washing&nbsp;Powders");
       mm_menu_1005162054_0_6_2.fontWeight="bold";
       mm_menu_1005162054_0_6_2.hideOnMouseOut=true;
       mm_menu_1005162054_0_6_2.bgColor='#FDFBFA';
       mm_menu_1005162054_0_6_2.menuBorder=1;
       mm_menu_1005162054_0_6_2.menuLiteBgColor='#FFFFFF';
       mm_menu_1005162054_0_6_2.menuBorderBgColor='#CCCCCC';
      window.mm_menu_1005162054_0_6_3 = new Menu("Kitchen&nbsp;&&nbsp;Dining",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
      mm_menu_1005162054_0_6_3.addMenuItem("Cutlery");
      mm_menu_1005162054_0_6_3.addMenuItem("Dinnerware");
      mm_menu_1005162054_0_6_3.addMenuItem("Knives");
      mm_menu_1005162054_0_6_3.addMenuItem("Kitchen&nbsp;Needs");
       mm_menu_1005162054_0_6_3.fontWeight="bold";
       mm_menu_1005162054_0_6_3.hideOnMouseOut=true;
       mm_menu_1005162054_0_6_3.bgColor='#FDFBFA';
       mm_menu_1005162054_0_6_3.menuBorder=1;
       mm_menu_1005162054_0_6_3.menuLiteBgColor='#FFFFFF';
       mm_menu_1005162054_0_6_3.menuBorderBgColor='#CCCCCC';
      window.mm_menu_1005162054_0_6_4 = new Menu("Pooja&nbsp;Needs",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
      mm_menu_1005162054_0_6_4.addMenuItem("Agarbatti");
      mm_menu_1005162054_0_6_4.addMenuItem("Candles&nbsp;&&nbsp;Diyas");
      mm_menu_1005162054_0_6_4.addMenuItem("Other&nbsp;Pooja&nbsp;Needs");
       mm_menu_1005162054_0_6_4.fontWeight="bold";
       mm_menu_1005162054_0_6_4.hideOnMouseOut=true;
       mm_menu_1005162054_0_6_4.bgColor='#FDFBFA';
       mm_menu_1005162054_0_6_4.menuBorder=1;
       mm_menu_1005162054_0_6_4.menuLiteBgColor='#FFFFFF';
       mm_menu_1005162054_0_6_4.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005162054_0_6 = new Menu("Household",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005162054_0_6.addMenuItem(mm_menu_1005162054_0_6_1);
    mm_menu_1005162054_0_6.addMenuItem(mm_menu_1005162054_0_6_2);
    mm_menu_1005162054_0_6.addMenuItem(mm_menu_1005162054_0_6_3);
    mm_menu_1005162054_0_6.addMenuItem(mm_menu_1005162054_0_6_4);
     mm_menu_1005162054_0_6.fontWeight="bold";
     mm_menu_1005162054_0_6.hideOnMouseOut=true;
     mm_menu_1005162054_0_6.childMenuIcon="arrows.gif";
     mm_menu_1005162054_0_6.bgColor='#FDFBFA';
     mm_menu_1005162054_0_6.menuBorder=1;
     mm_menu_1005162054_0_6.menuLiteBgColor='#FFFFFF';
     mm_menu_1005162054_0_6.menuBorderBgColor='#CCCCCC';
  window.mm_menu_1005162054_0 = new Menu("root",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005162054_0.addMenuItem(mm_menu_1005162054_0_1);
  mm_menu_1005162054_0.addMenuItem(mm_menu_1005162054_0_2);
  mm_menu_1005162054_0.addMenuItem(mm_menu_1005162054_0_3);
  mm_menu_1005162054_0.addMenuItem("Fashion&nbsp;Accessories");
  mm_menu_1005162054_0.addMenuItem(mm_menu_1005162054_0_4);
  mm_menu_1005162054_0.addMenuItem(mm_menu_1005162054_0_5);
  mm_menu_1005162054_0.addMenuItem(mm_menu_1005162054_0_6);
   mm_menu_1005162054_0.fontWeight="bold";
   mm_menu_1005162054_0.hideOnMouseOut=true;
   mm_menu_1005162054_0.childMenuIcon="arrows.gif";
   mm_menu_1005162054_0.bgColor='#FDFBFA';
   mm_menu_1005162054_0.menuBorder=1;
   mm_menu_1005162054_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1005162054_0.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005164511_0_1 = new Menu("Chicken&nbsp;",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005164511_0_1.addMenuItem("Fresh&nbsp;Chicken");
     mm_menu_1005164511_0_1.fontWeight="bold";
     mm_menu_1005164511_0_1.hideOnMouseOut=true;
     mm_menu_1005164511_0_1.bgColor='#FDFBFA';
     mm_menu_1005164511_0_1.menuBorder=1;
     mm_menu_1005164511_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1005164511_0_1.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005164511_0_2 = new Menu("Mutton",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005164511_0_2.addMenuItem("Fresh&nbsp;Mutton");
     mm_menu_1005164511_0_2.fontWeight="bold";
     mm_menu_1005164511_0_2.hideOnMouseOut=true;
     mm_menu_1005164511_0_2.bgColor='#FDFBFA';
     mm_menu_1005164511_0_2.menuBorder=1;
     mm_menu_1005164511_0_2.menuLiteBgColor='#FFFFFF';
     mm_menu_1005164511_0_2.menuBorderBgColor='#CCCCCC';
    window.mm_menu_1005164511_0_3 = new Menu("Sea&nbsp;Food",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
    mm_menu_1005164511_0_3.addMenuItem("Dry&nbsp;Fish");
    mm_menu_1005164511_0_3.addMenuItem("Fish");
     mm_menu_1005164511_0_3.fontWeight="bold";
     mm_menu_1005164511_0_3.hideOnMouseOut=true;
     mm_menu_1005164511_0_3.bgColor='#FDFBFA';
     mm_menu_1005164511_0_3.menuBorder=1;
     mm_menu_1005164511_0_3.menuLiteBgColor='#FFFFFF';
     mm_menu_1005164511_0_3.menuBorderBgColor='#CCCCCC';
  window.mm_menu_1005164511_0 = new Menu("root",200,30,"Arial, Helvetica, sans-serif",14,"#000000","#FFFFFF","#8FB242","#E61E2A","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005164511_0.addMenuItem(mm_menu_1005164511_0_1);
  mm_menu_1005164511_0.addMenuItem(mm_menu_1005164511_0_2);
  mm_menu_1005164511_0.addMenuItem(mm_menu_1005164511_0_3);
   mm_menu_1005164511_0.fontWeight="bold";
   mm_menu_1005164511_0.hideOnMouseOut=true;
   mm_menu_1005164511_0.childMenuIcon="arrows.gif";
   mm_menu_1005164511_0.bgColor='#FDFBFA';
   mm_menu_1005164511_0.menuBorder=1;
   mm_menu_1005164511_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1005164511_0.menuBorderBgColor='#CCCCCC';
window.mm_menu_1005170022_0 = new Menu("root",260,40,"Georgia, Times New Roman, Times, serif",18,"#000000","#FFFFFF","#FBF9F7","#339933","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005170022_0.addMenuItem("DISCOUNTS");
  mm_menu_1005170022_0.addMenuItem("PROMOTION");
   mm_menu_1005170022_0.fontStyle="italic";
   mm_menu_1005170022_0.hideOnMouseOut=true;
   mm_menu_1005170022_0.bgColor='#CCCCCC';
   mm_menu_1005170022_0.menuBorder=1;
   mm_menu_1005170022_0.menuLiteBgColor='#000000';
   mm_menu_1005170022_0.menuBorderBgColor='#FFFFFF';

        window.mm_menu_1005174954_0 = new Menu("root",285,40,"Georgia, Times New Roman, Times, serif",16,"#000000","#FFFFFF","#FBF9F7","#339933","left","middle",0,0,1000,-5,7,true,true,true,0,false,false);
  mm_menu_1005174954_0.addMenuItem("NEW&nbsp;LAUNCHES");
  mm_menu_1005174954_0.addMenuItem("NOW&nbsp;AVAILABLE&nbsp;@&nbsp;DAILY&nbsp;NEEDS");
   mm_menu_1005174954_0.fontStyle="italic";
   mm_menu_1005174954_0.hideOnMouseOut=true;
   mm_menu_1005174954_0.bgColor='#CCCCCC';
   mm_menu_1005174954_0.menuBorder=1;
   mm_menu_1005174954_0.menuLiteBgColor='#000000';
   mm_menu_1005174954_0.menuBorderBgColor='#FFFFFF';

mm_menu_1005174954_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<link rel="stylesheet" href="effects.css" type="text/css">
<script language="JavaScript" src="mm_menu.js"></script>
</head>


<style>

#loc
{
width:10%;
float:left;
height:44px;
}
#slots
{
width:25%;
height:50px;
padding:0px;
margin:0px;
float:left;
}
#sel{
margin-left:300px;
height:20px;
width:inherit;
border-style:dotted;}
#a
{
width:65%;
height:44px;
padding:0px;
margin:0px;
float:right;
}
#im
{
width:150px;
height:125px;
margin-top:-30px;
margin-left:30px;
}
.text1
{
color:#009999;
font-family:Arial, Helvetica, sans-serif;
font-weight:bold;
-webkit-transition-property:color, text;
-webkit-transition-duration: 1s, 1s;
-webkit-transition-timing-function: linear, ease-in;
-moz-transition-property:color, text;
-moz-transition-duration:1s;
-moz-transition-timing-function: linear, ease-in;

-o-transition-property:color, text;
-o-transition-duration:1s;
-o-transition-timing-function: linear, ease-in;
}
.text1:hover
{color:#003399;
}


.vname
{
color:#CCCCCC; 
font:bold;
}
#qt
{
width:35px; 
height:15px;
}
#bt
{
width:50px; 
height:40px; 
background-color:#FFCC66; 
border-radius:8px;
}</style>
<body style="background-color:#f2f2f2;">
<form method="post" action="Beverages_glucon-d orange flavour.php">
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="header" style="height:36px;width:100%; background-color:#ededed;" >
  <div id="loc"><marquee direction="left" ><img src="Pj/img8.jpg"></marquee></div>
  <div id="slots"><a name="link14" id="link1" onMouseOver="MM_showMenu(window.mm_menu_1004165716_0,0,19,null,'link14')" onMouseOut="MM_startTimeout();"><div class="shadow-radial" id="box1">Check our Delivery Slots</div></a></div>
  <div class="text1" style="font-size:16px;">Free delivery for orders > Rs1000&nbsp;&nbsp;&nbsp;
 <a name="link13" id="link2" onMouseOver="MM_showMenu(window.mm_menu_1004170146_0,170,16,null,'link13')" onMouseOut="MM_startTimeout();">NEW TO DAILY NEEDS?</a>
 &nbsp;&nbsp;&nbsp;
 
 
 <?php
 if(isset($_SESSION['sid']))
{
 echo 'Welcome : '; echo "<a href='account.php'>"; echo $_SESSION['sid']; echo "</a>"; echo ' &nbsp;&nbsp;&nbsp;<a href="account.php?log=logout" style="color:#FF0000; text-decoration:none"class="pulse-shrink" ><div id="box" class="shadow-radial">Logout</div></a>';
}else{
echo '<a href="login.php" style="color:#FF0000; text-decoration:none"class="pulse-shrink" ><div id="box" class="shadow-radial">Login</div></a> |&nbsp;
 <a href="register.php" style="color:#FF0000;text-decoration:none" class="pulse-shrink"><div id="box" class="shadow-radial">Register</div></a>';
}

?> 

 
   </div>
</div>

<table align="center" bgcolor="#FFFFFF" width="77%"  class="image1">
<tr>
<th></th><th><a href="main.php"><img src="Pj/admin/logo.jpg" align="middle" class="image2" style="size:landscape; height: 125px; width:240px"/></a></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="text" name="search" class="image2" width="300px" height="200px" size="+60" placeholder="&nbsp;&nbsp;&nbsp;Search your needs" style="border-radius:8px; height:25px; width:500px";/></th>&nbsp;&nbsp;&nbsp;&nbsp;<th><input type="submit" name="srchbutton" value="SEARCH" class="image2" style="height:25px; width:80px"/></th>&nbsp;&nbsp;&nbsp;<th style="background-color:#f5f4f4"><a href="view_cart.php" style="text-decoration:none">Your Basket<?php echo $_SESSION['count']; ?> Item<br> <img src="Pj/bskt.jpg" height="36px"/> </span>
</a></th>
</tr>
</table></form>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<table width="226" height="572" border="1" cellspacing="0" cellpadding="0"   style=" border:thin; border-color:#CCCCCC; float:left; margin-left:150px;" >
      <tr height="30px" bgcolor="#8fb242">
        <td height="38px" style="color:#FFFFFF;">&nbsp;&nbsp;&nbsp;&nbsp; SHOP<img src="Pj/img9.jpg" align="right"></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1" name="link3" id="link4" style="font-size:11px;font-family:Arial, Helvetica, sans-serif;" onMouseOver="MM_showMenu(window.mm_menu_1004173024_0,210,-30,null,'link3')" onMouseOut="MM_startTimeout();">FRUITS & VEGETABLES<img src="Pj/arrows.gif" align="right" height="10" ></a></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1"name="link21" id="link5" style="font-size:11px; font-family:Arial, Helvetica, sans-serif" onMouseOver="MM_showMenu(window.mm_menu_1005154101_0,210,5,null,'link21')" onMouseOut="MM_startTimeout();">GROCERY & STAPLES<img src="Pj/arrows.gif" align="right" height="10" ></a></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1"name="link22" id="link7" style="font-size:11px;font-family:Arial, Helvetica, sans-serif" onMouseOver="MM_showMenu(window.mm_menu_1005155710_0,210,5,null,'link22')" onMouseOut="MM_startTimeout();">BREAD DIARY & EGGS<img src="Pj/arrows.gif" align="right" height="10" ></a></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1"name="link8" id="link9" style="font-size:11px;font-family:Arial, Helvetica, sans-serif" onMouseOver="MM_showMenu(window.mm_menu_1005160226_0,216,-60,null,'link8')" onMouseOut="MM_startTimeout();">BEVERAGES<img src="Pj/arrows.gif" align="right" height="10" ></a></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1"name="link6" id="link10" style="font-size:11px;font-family:Arial, Helvetica, sans-serif" onMouseOver="MM_showMenu(window.mm_menu_1005160918_0,216,-100,null,'link6')" onMouseOut="MM_startTimeout();">BRANDED FOODS<img src="Pj/arrows.gif" align="right" height="10" ></a></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1"name="link14" id="link11" style="font-size:11px;font-family:Arial, Helvetica, sans-serif" onMouseOver="MM_showMenu(window.mm_menu_1005162054_0,216,-170,null,'link14')" onMouseOut="MM_startTimeout();">PERSONAL CARE<img src="Pj/arrows.gif" align="right" height="10" ></a></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1"name="link16" id="link12" style="font-size:11px;font-family:Arial, Helvetica, sans-serif; " onMouseOver="MM_showMenu(window.mm_menu_1005164511_0,218,-78,null,'link16')" onMouseOut="MM_startTimeout();">MEAT<img src="Pj/arrows.gif" align="right" height="10" ></a></td>
      </tr>
      <tr height="30px">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<a class="text1"style="font-size:11px;font-family:Arial, Helvetica, sans-serif">OTHER NEEDS<img src="Pj/arrows.gif" align="right" height="10px" ></a></td>
      </tr>
	 
	  
	 
  </table>

    
    <table style=" border:1px thin;border-color:#CCCCCC; float:left;" cellspacing="0" cellpadding="0" width="800px" >
  <tr bgcolor="#8FB242" style="height:50px;">
    <td width="160">&nbsp;
	<img src="Pj/img10.jpg">
	<a href="offers.php" style="text-decoration:none;">OFFERS</a>	 </td>
    <td width="400" style=" height:20px; margin-right:-100px">&nbsp;
	
	<a href="new_arrival.php" style="text-decoration:none;">NEW ARRIVALS</a><img src="Pj/img11.jpg" >	</td>
	
    </tr>
	</table>
  <table id='tab' vspace="1px"width="800px" class="image1">
  <tr >
  <br>
    <td colspan="4">&nbsp; <font style="font-family:Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $res['type'];?></font>	</tr>
  <tr>
  <tr >
    <td colspan="4">&nbsp; <font style="font-family:Arial, Helvetica, sans-serif"> </font>	</tr>
  <tr>
  
    <td height="275"><br>
      <img src="Pj/offers/fresho-tamarind-sweet.jpg" class="effectscale" width="240px" height="240px" style="margin-top:-30px; margin-left:30px"><br>	</td>
    <td valign="top">&nbsp;<br>
	<br>&nbsp;<b style="color:#000000; size:20px; vertical-align:top; font-size:35px"><i><?php echo $res["product_name"]; ?></i><br><i><?php echo $res["quantity"]; ?></i> <?php ?>
	</b>
	<br>
	<br>
	<br>&nbsp;&nbsp;&nbsp;Market Price  <?php echo $res["value"];?>
	<br>
	<br>&nbsp;&nbsp;&nbsp;Offer Price Rs <?php echo $res["offer_price"];?>
	<br>
		&nbsp;&nbsp;&nbsp;Discount <?php echo $res["discount"]; ?> %
	<br>
	<form action="cart_update.php" method="post">
	<br>&nbsp;&nbsp; Qty&nbsp;<input type="number" style="width:35px; height:15px;" name="qty" min="1" max="10">&nbsp;&nbsp;<input type="submit" style="width:50px; height:40px; background-color:#FFCC66; border-radius:8px;" value="ADD">	</td >
  <tr><input type="hidden" name="product_name" value="<?php echo $res['product_name'];?>">
	<input type="hidden" name="product_price" value="<?php echo $res['offer_price'];?>">
	<input type="hidden" name="product_imgname" value="Pj/offers/<?php echo $res['img_name'];?>">
	<?php
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="product_code" value="tama" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	 ?>
  <tr >
    <td height="673" colspan="4">
		
		<br>&nbsp;<b style="color:#000000; size:20px; vertical-align:top; font-size:35px"><i><?php echo $res['product_name'];?></i>
		
		<br><br>
		<p><button value="About" type="button" border="1px" onClick="showUserabout();" style="background-color:#FFFFFF; width:70px; height:40px">About</button>
		<!--<button value="Benefits" type="button" border="1px" onClick="showUseringredients();" style="background-color:#FFFFFF; width:70px; height:40px">Benefits</button>-->
		<table align="center" border="1px" height="22%" width="98%" vspace="30px">
		<tr>
		<td style="font-size:18px; border:thin;" id="txtHint3" class="image2">
		 Fresho Sweet Tamarind contains high energy and fiber content, these tamarind is a great source of B-vitamins and a number of minerals. The tamarind is best described as sweet and sours in taste, and is high in tartaric acid.

	</td>
		</tr>
		</table>	</td>
    </tr>
  </table>
  
  <table width="80%" vspace="0px" class="image1"  height="400px" align="center">
<tr>
<td>
<p style="width:50%">

	 <div id="disqus_thread"></div>
   <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'freshotamarindsweet'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
     </p>
	</td>
	</tr>
  </table>
<table vspace="10px" width="100%" height="100%">
	<tr>
	<td>
		<?php
		include ("footer.php");
		
		?>
	
	</td>
	</tr>
  </table>

</form>
</body>
</html>
