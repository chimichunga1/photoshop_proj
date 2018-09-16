<?php
    require("../connection.php");
    if(!isset($_SESSION['user_data'])) {
        header("Location:../index.php");
    }
?>

<html lang = "en">
    <head>
        <?php require("frameworks.php"); ?>
    </head>
    <style>
table, td, th {
    padding: 5px;
    border: 3px solid black;


}
td {
    text-align: justify;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th {
    text-align: center;
    background-color: #AD5D5D;
}
h1{
    font-size: 20px;
    font-weight: bold;
}

</style>
    <body>
    
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
<a class="navbar-brand" href="#"> <span class = "fa fa-laptop"> </span> CS6 Tutorial </a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
    <li class = "active"> <a href = "index.php"> <span class = "fa fa-book"> </span> Lessons </a> </li>
    <li> <a href = "exams.php"> <span class = "fa fa-pencil-alt"> </span> Exams </a> </li>
    <li> <a href = "results.php"> <span class = "fa fa-question"> </span> Results </a> </li>
    <li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li> <a href = "settings.php"> <span class = "fa fa-cog"></span> Settings </a> </li>
    <li> <a href = "signout.php"> <span class = "fa fa-sign-out-alt"></span> Sign out </a> </li>
</ul>
</div>
</div>
</nav>
        <div class = "container=fluid">
            <div class = "col-xs-3">
                <div class = "well">
                    <ul class = "list-group">
            <li class = "list-group-item">Chapter 1: ADOBE PHOTOSHOP NAVIGATIONS</li>
            <ul class = "list-group">
            <li class = "list-group-item"> <a href = "index.php?lesson_number=1"> Lesson 1: ADOBE PHOTOSHOP CS6 NAVIGATIONS </a></li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#BriefHistory">Brief History</a></li>
            <li class = "list-group-item"><a href = "#Starting_Adobe_Photoshop_CS6">Starting Adobe Photoshop CS6</a></li>
            <li class = "list-group-item"><a href = "#The_Photoshop_Workspace">The Photoshop Workspace</a></li>
            <li class = "list-group-item"><a href = "#Customizing_your_Workspace_by_using_the_Workspace_Switcher">Customizing your Workspace by using the Workspace Switcher</a></li>
            <li class = "list-group-item"><a href = "#Opening_a_File_in_Photoshop">Opening a File in Photoshop</a></li>
            <li class = "list-group-item"><a href = "#How_to_open_a_file_by_using_Adobe_Bridge">How to open a file by using Adobe Bridge</a></li>
            <li class = "list-group-item"><a href = "#Creating_a_New_Photoshop_Document">Creating a New Photoshop Document</a></li>
            <li class = "list-group-item"><a href = "#Overview_of_the_Tools_Panel">Overview of the Tools Panel</a></li>
            <li class = "list-group-item"><a href = "#Selection_Tools">Selection Tools</a></li>
            <li class = "list-group-item"><a href = "#Crop_and_Slice_Tools">Crop and Slice Tools</a></li>
            <li class = "list-group-item"><a href = "#Measuring_Tools">Measuring Tools</a></li>
            <li class = "list-group-item"><a href = "#Retouching_Tools">Retouching Tools</a></li>
            <li class = "list-group-item"><a href = "#Painting_Tools">Painting Tools</a></li>
            <li class = "list-group-item"><a href = "#Drawing_and_Type_Tools">Drawing and Type Tools</a></li>
            <li class = "list-group-item"><a href = "#Navigations_Tools">Navigation Tools</a></li>
            <li class = "list-group-item"><a href = "#Color_Boxes_and_Modes">Color Boxes and Modes</a></li>
            <li class = "list-group-item"><a href = "#3D_Tools_Gallery">3D Tools Gallery</a></li>
            <li class = "list-group-item"><a href = "#Panels">Panels</a></li>
        </ul>
            <li class = "list-group-item"> <a href = "index.php?lesson_number=2"> Lesson 2: STARTING ADOBE PHOTOSHOP </a> </li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#Whats_New_in_Photoshop_CS6">What's New in Photoshop CS6</a></li>
            <li class = "list-group-item"><a href = "#Starting_Photoshop">Starting Photoshop</a></li>
            <li class = "list-group-item"><a href = "#Opening_an_Image">Opening an Image</a></li>
            <li class = "list-group-item"><a href = "#Changing_the_Screen_Mode">Changing the Screen Mode</a></li>
            <li class = "list-group-item"><a href = "#Zooming_In_and_Out">Zooming In and Out</a></li>
            <li class = "list-group-item"><a href = "#Entering_Type">Entering Type</a></li>
            <li class = "list-group-item"><a href = "#Point_Type">Point Type</a></li>
            <li class = "list-group-item"><a href = "#Paragraph_Type">Paragraph Type</a></li>
            <li class = "list-group-item"><a href = "#Type_on_a_Path">Type on a Path</a></li>
            <li class = "list-group-item"><a href = "#Editing_Text">Editing Text</a></li>
            <li class = "list-group-item"><a href = "#Formatting_Text">Formatting Text</a></li>
            <li class = "list-group-item"><a href = "#Type_Mask_Tool">Type Mask Tool</a></li>
            <li class = "list-group-item"><a href = "#Spell_Check">Spell Check</a></li>
            <li class = "list-group-item"><a href = "#Warping_Text">Warping Text</a></li>
        
            <li class = "list-group-item">Chapter 2: ADOBE PHOTOSHOP CS6 </li>
            <li class = "list-group-item"> <a href = "index.php?lesson_number=3"> Lesson 1: THE EFFECT TOOLS </a> </li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#Using_Crop_Tool">Using Crop Tool</a></li>
            <li class = "list-group-item"><a href = "#Cropping_with_the_Marquee_Tool">Cropping with the Marquee Tool</a></li>
            <li class = "list-group-item"><a href = "#Using_Stamp_Tool">Using Stamp Tool</a></li>
            <li class = "list-group-item"><a href = "#Using_Healing_Tool">Using Healing Tool</a></li>
            <li class = "list-group-item"><a href = "#Using_Spot_Healing_Brush">Using Spot Healing Brush</a></li>
            <li class = "list-group-item"><a href = "#Using_Dodge_and_Burn_Tools">Using Dodge and Burn Tools</a></li>
            <li class = "list-group-item"><a href = "#Applying_Brightness_/_Contrast_Commands">Applying Brightness/Contrast Commands</a></li>
            <li class = "list-group-item"><a href = "#Adjusting_Tonal_Range">Adjusting Tonal Range</a></li>
            <li class = "list-group-item"><a href = "#Adjusting_Hue_and_Saturation">Adjusting Hue and Saturation</a></li>
            <li class = "list-group-item"><a href = "#Applying_Color_Balance">Applying Color Balance</a></li>
            <li class = "list-group-item"><a href = "#Using_Blur_and_Sharpen_Tools">Using Blur and Sharpen Tools</a></li>
        </ul>

            <li class = "list-group-item"> <a href = "index.php?lesson_number=4"> Lesson 2: IMAGE MANIPULATION </a> </li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#Using_Brush_Tool">Using Brush Tool</a></li>
            <li class = "list-group-item"><a href = "#Using_Brushes">Using Brushes</a></li>
            <li class = "list-group-item"><a href = "#Using_Pencil_Tool">Using Pen Tool</a></li>
            <li class = "list-group-item"><a href = "#Using_Paint_Bucket">Using Paint Bucket</a></li>
            <li class = "list-group-item"><a href = "#Fill_Command">Fill Command</a></li>
            <li class = "list-group-item"><a href = "#Creating_Custom_Shapes_in_Photoshop">Creating Custom Shapes in Photoshop</a></li>
            <li class = "list-group-item"><a href = "#Applying_Gradient">Applying Gradient</a></li>
            <li class = "list-group-item"><a href = "#Using_History_Brush_Tool">Using History Brush Tool</a></li>
            <li class = "list-group-item"><a href = "#Selecting Color for the Brush Tool">Selecting Color for the Brush Tool</a></li>
        </ul>
            <li class = "list-group-item"> <a href = "index.php?lesson_number=5"> Lesson 3: USING LAYERS </a></li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#The_Layers">The Layers</a></li>
            <li class = "list-group-item"><a href = "#Creating_a_New_Layer">Creating a New Layer</a></li>
            <li class = "list-group-item"><a href = "#Duplicating_a_Layer">Duplicating a Layer</a></li>
            <li class = "list-group-item"><a href = "#Using_Opacity">Using Opacity</a></li>
            <li class = "list-group-item"><a href = "#Merge_and_Flattening_a_Layer">Marge and Flattening a Layer
            </a></li>
            <li class = "list-group-item"><a href = "#Using_Adjustment_Layer">Using Adjustment Layer</a></li>
            <li class = "list-group-item"><a href = "#Linking_Layers">Linking Layers</a></li>
            <li class = "list-group-item"><a href = "#Blending_Layers">Blending Layers</a></li>
        </ul>
            <li class = "list-group-item"> <a href = "index.php?lesson_number=6"> Lesson 4: LAYER EFFECTS </a></li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#Layer_Effects">Layers Effects</a></li>
            <li class = "list-group-item"><a href = "#Adding_Drop_Shadow_Effect">Adding Drop Shadow Effect</a></li>
            <li class = "list-group-item"><a href = "#Adding_Inner_Shadow">Adding Inner Shadow</a></li>
            <li class = "list-group-item"><a href = "#Adding_Outer_and_Inner_Glow">Adding Outer and Inner Glow
            </a></li>
            <li class = "list-group-item"><a href = "#Applying_Bevel_and_Emboss">Applying Bevel and Emboss
            </a></li>
            </ul>
            <li class = "list-group-item"> <a href = "index.php?lesson_number=7"> Lesson 5: APPLYING MULTIPLE EFFECTS </a> </li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#Multiple_Effects">Multiple Effects</a></li>
            <li class = "list-group-item"><a href = "#Editing_Applied_Effects">Editing Applied Effects</a></li>
            <li class = "list-group-item"><a href = "#Locking_Layer_Effects">Locking Layer Effects</a></li>
            <li class = "list-group-item"><a href = "#Creating_Custom_Styles">Creating Custom Styles</a></li>
            </ul>
            <li class = "list-group-item"> <a href = "index.php?lesson_number=8"> Lesson 6: ADDING FILTERS</a></li>
            <ul class = "list-group">
            <li class = "list-group-item"><a href = "#Photoshop_Filters">Photoshop Filters</a></li>
            <li class = "list-group-item"><a href = "#Using_Dry_Brush_Filter">Using Dry Brush Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Sponge_Filter">Using Sponge Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Gaussian_Blur_Filter">Using Gaussian Blur Filter
            </a></li>
            <li class = "list-group-item"><a href = "#Using_Motion_Blur">Using Motion Blur</a></li>
            <li class = "list-group-item"><a href = "#Using_Brush_Stroke_Filter">Using Brush Stroke Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Ink_Outline_Filter">Using Ink Outline Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Distort_Filter">Using Distort Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Noise_Filter">Using Noise Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Pixilated_Filter">Using Pixilated Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Mosaic_Filter">Using Mosaic Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Render_Filter">Using Render Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Lens_Flare">Using Lens Flare </a></li>
            <li class = "list-group-item"><a href = "#Using_Sharpen_Filter">Using Sharpen Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Sketch_Filter">Using Sketch Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Photocopy_Filter">Using Photocopy Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Texture_Filter">Using Texture Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Stained_Glass_Filter">Using Stained_Filter</a></li>
            <li class = "list-group-item"><a href = "#Using_Filter_from_the_other_Menu">Using Filter from the other Menu</a></li>
                    </ul>
                </div>
            </div>
            <div class = "col-xs-9">
            <?php
                if(!isset($_GET['lesson_number'])) {
                    ?>
                <div class = "alert alert-info text-info">
                    <h3> <span class = "fa fa-question"> </span> Please select a lesson / topic on the left navigation bar. </h3>
                </div>
                    <?php
                }
                else {
                    if($_GET['lesson_number'] == "1") {
                        ?>
                <div class = "well">
<h1 class = 'text-info'> LESSON 1: <b> What is Photoshop CS6?</b> </h1>
<hr>
<p class = "text-justify">
 
    Image editing software was developed and manufactured by Adobe System Inc. Photoshop is considered one of the leaders in photo editing software. The software allows users to manipulate, crop, resize and correct color on digital photos. The software is particularly popular amongst professional photographers.
    It has been the world’s most popular app for optimizing and editing images for more than twenty years. The introduction of Adobe Photoshop CS6 further cements the program’s dominant position in the market.
    Adobe Photoshop’s newest release CS6 is no exception to the venerable rule of Adobe quality. It comes with numerous new tools and features that make your graphics work quicker and easier, streamlining the entire process and while still allowing you to develop amazing pictures.
<hr>
</p>
<h3 class = 'text-primary' id="BriefHistory"> Brief History </h3></a>
<p class = "text-justify">

        <center><img src="ph1.jpg" width ="280" height ="150">
        <br><b>Thomas and John Knoll</b><br><br></center>

        <p align=justify>
    In 1987, Thomas Knoll, A PhD student at the University of Michigan began writing a program on his Macintosh Plus to display grayscale image on a monochrome display. This program, called Display, caught the attention of his brother John Knoll, an Industrial Light Industrial Light & Magic employee, who recommend that Thomas turn it into a full-fledged image editing program. Thomas took a six-month break from his studies in 1988 to collaborate with his brother on the program. Thomas renamed the program ImagePro, but the name was already taken. Later that year, Thomas renamed his program Photoshop and worked out a short-term deal with scanner manufacturer Barneyscan to distribute copies of the program with a slide scanner; a “total of about 200 copies of Photoshop were shipped” this way.
    <br>
    <br>
    During this time, John traveled to Silicon Valley and gave a demonstration of the program to engineers at Apple and Russell Brown, art director at Adobe. Both showing were successful, and Adobe decided to purchase the license to distribute in September 1988. While John worked on plug-ins in California, Thomas remained in Ann Arbor writing code. Photoshop 1.0 was released in 1990 for Macintosh exclusively.
    <br>
    <br>
    In May 2011, Adobe Creative Suite 5.5 (CS5.5) was released, with new versions of some of the applications. Its version of Photoshop, 12.1, is identical to the concurrently released update for Photoshop CS5, version 12.04, except for support for the new subscription pricing that was introduced with CS5.5.
    <br>
    <br>
    During an Adobe conference call on June 21, 2011, CEO Shantanu Narayen said that the April 2011 launch of CS5.5 was “the first release in our transition to an annual release cycle “, adding, “ We intended to ship the next milestone release of Creative Suite in 2012.” On March 21 2012, Adobe release a freely available beta version of Adobe Photoshop CS6. The final version of Adobe CS6 was launched on release event April 23, 2012, and first shipped May 7. Adobe also lunched a subscription-based offering named Adobe Creative Cloud where users are able to gain access to individual applications or the full Adobe Creative Suite 6 suite on a per-month basis, plus additional cloud storage spaces and services.
    <br>
    <br>
    Adobe Creative Suite 6 software delivers, a whole new experience for digital media development, enabling you to work lightning-fast and reach audiences wherever they may be.
    <br>
    <br>
    CS6 and CS6 Extended were made available through Adobe’s online store, Adobe Authorized Resellers and Adobe direct sales. Both CS6 and CS6 Extended are offered as either a stand-alone application or feature of Adobe Creative Suite 6. Both products are compatible with Intel-based Mac OS and Windows XP, Windows Vista, Windows 7.
<hr>
</p>
<hr>
<h3 class = 'text-primary' id = "Starting_Adobe_Photoshop_CS6"> Starting Adobe Photoshop CS6 </h3>
<p class = "text-justify">
The Adobe Photoshop workspace includes the command menus at the top of your screen a variety of tools and panels for editing and adding elements to your image.   You can also add commands and filters to the menus by installing third party software as plug-in modules.
//"pictures"
<br>
<br>
Photoshop works with bitmapped, digitized images (that is, continuous-tone images that have converted into a series of small squares, or picture elements,called pixels). You can also work with vector graphics, which are drawings, made of smooth lines that retain their crispness when scaled. You can create original artwork in Photoshop, and you can import images into the program from many sources, such as:
<br>
<br>
<ul><li>Photographs from a digital camera<br>
<li>Commercial CDs of digital images<br>
<li>Scans of photographs, transparencies, negatives, graphics, or other documents<br>
<li>Captured video images<br>
<li>Artwork created in drawing programs<br></li></ul>
<br>
In this guide, you’ll learn your way around the Adobe Photoshop CS6 Workspace, how to create custom workspaces, how to open images, create new Photoshop documents, and use basic pan and zoom tools. </p>

<hr>
<h3 class = 'text-primary' id = "The_Photoshop_Workspace"> The Photoshop Workspace </h3>
<p class = "text-justify">
    You can customize the layout and functionality of the Photoshop workspace by using the workspace switcher.
    <br>

To open Photoshop and explore the workspace:<br><br>
<b> 1. Start Adobe Photoshop. </b><br><br>
If you don’t see the Photoshop icon, choose Start > All Program > Adobe Photoshop CS6 (Windows) or look in either the Applications folder or the Dock (Mac OS).<br><br>
<b>2. </b>From the workspace switcher menu which is located at the right most of the Options bar, confirm the option is set to Essential. Choose Reset Essentials to restore the default workspace. (Figure 2.1 Workspace switcher menu) //"pictures" <br><br>
<b>3.</b>The default Essentials workspace in Photoshop (Figure 2.1) is displayed together with the Options bar with the Tools panel on the left, panels, and one or more documents windows that are opened separately. <br>
<ul><li>The Options bar displays options for the currently selected tool.
    <li>The document window displays the file you’re working on.
    <li>The Tools panel contains tools for creating and editing images, artwork, and page elements and so on. Related tools are grouped together.
    <li>Panels help you monitor and modify your work. An example is the Layers panel.
    <li>Certain panels are displayed by default, but you can add any panel by selecting it from the Windows menu. Many panels have menus with panel specific options. You can separate, group, stack, and dock panels into your preferred layout.
    <li>You can restore the default workspace at any time choosing Windows Essential from the workspace switcher menu (Figure 2.1). <br>
    //"pictures"
    <li>You can restore the default workspace at any time by choosing Windows > Workspace > Essentials ( Default) (Figure 2.3) or by choosing Reset Essential from the workspace switcher menu (2.1)</li></ul>
    //"pictures"
<hr>
<h3 class = 'text-primary' id = "Customizing_your_Workspace_by_using_the_Workspace_Switcher"> Customizing your Workspace by using the Workspace Switcher </h3>
<p class = "text-justify">
    You can save the current size and position of panels as a named workspace and restore that workspace even if you move or close a panel. The names of saved workspaces appear in the Window > Workspace menu.
    <br><br>
<b>To customize the workspace:</b><br>
<b>1.</b>To create a custom workspace, move and manipulate the interface layout in Photoshop.<br>//"pictures"<br><br>
<b>2.</b>From the Workspace Switcher menu, select New Workspace (Figure 2.5)<br><br>
<b>3.</b>The New Workspace dialog box appears (Figure 2.6).<br>//"pictures"<br><br>
<b>4.</b>Name your workspace and select the Capture options to save in the workspace (Keyboard Shortcuts and Menus).<br><br>
<b>5.</b>Click Save. Your new workspace appears in the upper-right corner of the interface in the workspace switcher area. (Figure 2.7).<br>//"pictures"<br><br>
<b>6.Open the workspace switcher menu</b><br>
    Even if you change to another type of workspace, at any time you can return to your saved workspace by reselecting it from the workspace switcher menu. Photoshop also records any charges you make to your task-specific or saved layouts, so that if you switch to a different workspace and then switch back during an editing session, the panels will be exactly where you left them. You can restore the saved workspace at any time by choosing Reset (your named) Workspace from the workspace switcher menu (Figure 2.7).     
<hr>
<h3 class = 'text-primary' id = "Opening_a_File_in_Photoshop"> Opening a File in Photoshop </h3>
<p class = "text-justify">
    You can open files using the Open command or the Open Recent command.<br><br>
<b> To open a file </b><br><br>
<b>1.</b> To open a file, choose File > Open and navigate to the location of your image.<br><br>
<b>2.</b> Select your file and click Open. The file opens in its own windows, called the image windows (Figure 2.8).<br><br>
<b>3.</b> To close the image file, choose File > Close or click the close button on the tittle bar of the window in which the photograph appears.(Do not close Photoshop).<br><br>//"pictures"

<hr>
<h3 class = 'text-primary' id = "How_to_open_a_file_by_using_Adobe_Bridge"> How to Open a file by using Adobe Bridge </h3>
<p class = "text-justify">
    You can also open a file by using Adobe Bridge, a visual file browser that helps take the guesswork out of finding the image file you need. <br><br>

<b>To Open A File By Using Adobe Bridge:</b><br><br>
<b>1.</b> Open Adobe Bridge by choosing File> Browse in Bridge.
Choose the file that you want to open. <br><br>
<b>2. </b> From the Favorites panel in the upper left section of Adobe Bridge, browse to the folder where you store images.<br><br>
<b>3.</b> In the Favorites panel, double-click the image folder to open it. Thumbnail previews of the folder contents appear in the Content pane of Adobe Bridge (Figure 2.9). <br>
//* pictures//<br><br>
<b>4. </b> Select a file in the content pane and open the file by double-clicking its thumbnail, or use the Adobe Bridge main menu and choose File > Open. The image opens in Photoshop. <br>

<hr>
<h3 class = 'text-primary' id = "Creating_a_New_Photoshop_Document"> Creating a New Photoshop Document </h3>
<p class = "text-justify">
You can create a new Photoshop document and define a document size, resolution, color mode, and background contents.<br><br>

<b>To create a new Photoshop document:</b><br>
<b>1.  Select File > New.</b><br>
The New Photoshop document dialog box appears, with options for your file (Figure 2.11).<br><br>

<b>2.</b>  Type a filename and values for width and height of the canvas.<br><br>
<b>3.Type a value for Resolution.</b><br>
For an image to be used on the web, 7 pixels/inch is suitable. For an image to be printed, use a higher resolution, from 300 to 1200 pixels/inch.<br><br>
<b>4.Choose a setting for Color Mode.</b><br>
Color Mode determines which color method is used to display and print the image you’re working on.
Photoshop bases its color modes on the color models that are useful for images used in publishing. Choose from RGB (Red, Green, Blue), CMYK (Cyan, Magenta, Yellow, Black), Lab Color (based on CIE L*a*b*), and Grayscale.//'pictures'<br><br>
<b>5. Choose a setting for Background Contents.</b><br>
You can choose to use a white, transparent, or specific color background behind your image.
In the lower-right corner, notice that the file size information changes as you adjust the setting for the new file.<br><br>
<b>6.  Click OK.</b><br>
The new file opens in the image windows, ready to use (Figure 2.12). Be sure to save your file as you work in it.
<b>7.</b>  To save a file for the first time, select File > Save As from the main menu.//'pictures'<br>

<hr>
<h3 class = 'text-primary' id = "Overview_of_the_Tools_Panel"> Overview of the Tools Panel </h3>
<center><img src="Overview.png" width ="700" height ="600"><br></center>
<p class = "text-justify">
    Photoshop provides an integrated set of tools with which you can produce sophisticated graphics for print, web, and mobile viewing (Figure 2.13). Some tools are arranged in groups, with only one tool shown for each group and the other tools in the group hidden behind that tool. A small triangle in the lower right corner of a tool icon is your clue to look for hidden tools. Select a hidden tool by clicking and holding down the small triangle.
<hr>
<h3 class = 'text-primary' id = "Selection_Tools">Selection Tools </h3>
<table>
  <tr>
    <center>
    <th>Tools</th>
    <td><b>Function</td></b></center>
  </tr>
  <tr>
    <th rowspan="2">
        <img src ="move.png" height ="50" width ="50"><br>Move</td>
    <td>Used to select and move objects on the page.</td>
  </tr>
  <tr>
    <td>Click the tool button, and then click on any object on the page you wish to move.</td>
    <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br>Marquee</td>
    <td>Select an object by drawing a rectangle or eclipse around it. </td>
  </tr>
  <tr>
    <td>Click the tool button; choose a rectangular or eliptical marquee. Drag the marquee over the area of the image you wish to select.</td>
   <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br>Lasso</td>
    <td>Select an object by drawing a freehand border around it. </td>
  </tr>
  <tr>
    <td>Click the tool button, drag a freehandborder around the area of the image you wish to select.</td>
  <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br>Magic Wand</td>
    <td>Select all object in a document with same or similar fill color, stroke, weight, stroke color, opacity or blending mode. </td>
  </tr>
  <tr>
    <td>By specifying the color range or tolerance, you can control what magic wand tool selects.</td>
    </tr>
</table>

<hr>
<h3 class = 'text-primary' id = "Crop_and_Slice_Tools">Crop and Slice Tools </h3>
    <table>
  <tr>
    <th padding = "5"> Tools</th>
    <td><b>Function</td></b></center>
  </tr>
    <tr>
    <th rowspan="1">
        <img src ="" height ="50" width ="50"> Crop</td>
        <p align ="justify">
    <td>Click the tool button, then click and drag the tool over the part of the image that you want to keep Resize the selected area dragging the square at the sides and corners. Click the Return/Enter key when your crop box is sized correctly. </td>
  </tr>
   <tr>
    <th rowspan="1">
        <img src ="" height ="50" width ="50"> Slice</td>
    <td>Click and drag to the area of the image you want to cut into different sections; generally used for creation of image for a web page design.</td>
</table>
<hr>
<h3 class = 'text-primary' id ="Measuring_Tools">Measuring Tools </h3>
    <table>
  <tr>
    <th>Tools</th>
    <td><b>Function</td></b>
  </tr>
    <tr>
    <th rowspan="1">
        <img src ="" height ="50" width ="50"> Eye Dropper</td>
    <td>Takes color samples from on the page and display them in the Color Boxes. Select the tool, click on the image you wish to simple. The Color Box will display this color. There are still other tools together with the eye dropper tool such that belongs to measuring tools which are: 3D Material Eye Dropper, Color Sampler, Ruler, Note and Count. 
 </td>
  </tr>
   <tr>
    <th rowspan="1">
        <img src ="" height ="50" width ="50"> Slice</td>
    <td>Click and drag to the area of the image you want to cut into different sections; generally used for creation of image for a web page design.</td>
</table>
<hr>
<h3 class = 'text-primary' id="Retouching_Tools">Retouching Tools </h3>
<table>
  <tr>
    <center>
    <th>Tools</th>
    <td><b>Function</td></b></center>
  </tr>
  <tr>
    <th rowspan="2">
        <img src ="move.png" height ="50" width ="50"><br> Healing Brush</td>
    <td>Correct small blemishes in scanned photos.</td>
  </tr>
  <tr>
    <td>Select the tool, hand down the ALT key and left-click on the base color you need to heal. Then left-click over the blemish.</td>
    <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"> Brush</td>
    <td>Draws brush strokes of different thickness and colors. </td>
  </tr>
  <tr>
    <td>Select the tool. Then click on the selected area, drag to draw lines. Use the options bar to change the brush, mode, opacity.</td>
   <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"> Clone Stamp</td>
    <td>Takes a simple of an image and applies over another image, or pattern of the same image </td>
  </tr>
  <tr>
    <td>Select the tool. Hold down the ALT key and left-click on a certain point of the document where you want to start your copy point. Then, put your mouse over whatever part of the new document yiu want the picture to go to. Hold down the left mouse button and drag the mouse across the page to copy the picture.</td>
  <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50">Blur</td>
    <td>Blurs the sharp edge of an image. </td>
  </tr>
  <tr>
    <td>Select an are where you wish to apply the tool. Click the tool button and choose the brush, mode, and strength. Drag the brush along the edges. </td>
    </tr>
    <tr>
    <th rowspan="1">
        <img src ="" height ="50" width ="50">Dodge</td>
    <td>This tool whitens the area where it passes through. The other tools which are burn tool that darken the area of the image and sponge tool the saturate or desaturate the color of the image.  </td>
  </tr>
</table>
<hr>
<h3 class = 'text-primary' id = "Painting_Tools">Painting Tools </h3>
<table>
  <tr>
    <center>
    <th>Tools</th>
    <td><b>Function</td></b></center>
  </tr>
  <tr>
    <th rowspan="1">
        <img src ="" height ="50" width ="50"><br>Brush</td>
    <td>This tool is used to draw and color part on image with a brush strokes. This group of tools comes with Pencil, Color Replacement and Mixer Brush Tool</td>
  </tr>
  
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br> Art History Brush</td>
    <td>Paints over an image using the source data from a specified history state or snapshot.</td>
  </tr>
  <tr>
    <td>Select the tool, specify the brush, blending mode, opacity, style, area and tolerance.</td>
   <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"> Eraser</td>
    <td>Removes part of an existing path or stroke. You can use the Erase tool on paths, but not on text. </td>
  </tr>
  <tr>
    <td>Select the tool, click on the part of the image you wish to erase. Drag to erase pixels.</td>
  <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50">Gradient</td>
    <td>Applies a gradient fill to a selected part of the image or to an entire layer. </td>
  </tr>
  <tr>
    <td>Select an area you wish to apply gradient to, click the tool button, choose a fill in the Options bar, click on the starting point and hold the mouse down and drag to the end point. </td>
    </tr>

</table>
<hr>
<h3 class = 'text-primary' id = "Drawing_and_Type_Tools">Drawing and Type Tools Tools</h3>
<table>
  <tr>
    <center>
    <th>Tools</th>
    <td><b>Function</td></b></center>
  </tr>
  <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br>Path Selection</td>
    <td>Selects paths and path segments</td>
  </tr>
  <tr>
    <td>Select the tool, click anywhere on the path.</td></tr>
  
    <th rowspan="2">
        <img src ="" height ="50" width ="50"> Type</td>
    <td>Types text on a page. Every time you click the Type Tool on a new portion of the page a new layer will be created.</td>
  </tr>
  <tr>
    <td>Select the tool, click on the page and begin to type. You can specify the front and size in the Options bar. You can also resize and transform the text box by dragging the squares at the sides and corners. Use the Move Tool to move the text on the page.</td>
   <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"> Pen</td>
    <td>Draws smooth-edged paths. </td>
  </tr>
  <tr>
    <td>Select the tool, click on the page and drag to draw a path. Click and drag the anchor points to modify the path</td>
  <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50">Line Shape</td>
    <td>Draws a straight line. Other shapes that are hidden in this tool are: Rounded Rectangle Tool, Ellipse Tool, Polygon Tool, Line Tool, and Custom Shape Tool. </td>
  </tr>
  <tr>
    <td>Select the tool, click and drag on the page to draw a line. </td>
    </tr>
</table>
<hr>
<h3 class = 'text-primary' id = "Navigations_Tools">Navigation Tools</h3>
<table>
  <tr>
    <center>
    <th>Tools</th>
    <td><b>Function</td></b></center>
  </tr>
  <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br>Hand</td>
    <td>Allows you to move around within the image.</td>
  </tr>
  <tr>
    <td>Select the tool, click on the spot on the page, hold the mouse button down and drag to move in the area.</td></tr>
    <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br>Magnify</td>
    <td>Magnify or reduces the display of any area in your image window.</td>
  </tr>
  <tr>
    <td>Select the tool, choose Zoom In or Zoom Out in the Options bar, click on the area of the image you wish to magnify or reduce.</td></tr>
    </table>
<hr>
<h3 class = 'text-primary' id = "Color_Boxes_and_Modes">Color Boxes and Modes</h3>
<table>
  <tr>
    <center>
    <th>Tools</th>
    <td><b>Function</td></b></center>
  </tr>
  <tr>
    <th rowspan="2">
        <img src ="" height ="50" width ="50"><br>Color Boxes</td>
    <td>The foreground color appears in the upper color selectiion box and represent a color that is currently active. The background color appears in the lower box and represents an inactive color.</td>
  </tr>
  <tr>
    <td>1. To change the foreground color, click the upper color selection box in the Toolbox.<br>
        2. To change the background color, click the lower color selection box in the Toolbox.<br>
        3. To reverse the foreground and background colors, click the Switch Colors icon (the arrow) in the toolbox.<br>4. To restore the default foreground and background colors, click the Default Colors icon (the little black and white boxes) in the toolbox.</td></tr>
</table>
<hr>
<h3 class = 'text-primary' id = "3D_Tools_Gallery">3D Tools Gallery </h3>
<table>
  <tr>
    <center>
    <th><img src ="1.png" height ="100" width ="100"></th>
    <th><img src ="2.png" height ="100" width ="100"></th>
    <th><img src ="3.png" height ="100" width ="100"></th>
    <th><img src ="4.png" height ="100" width ="100"></th>
  </tr>
  <tr>
    <td>The 3D Objects Rotate Tool rotates the object around its x-axis.</td>
    <td>The 3D Object Roll tool rotates the object around its z-axis.</td>               
    <td>The 3D Object Pan tool pans the object in x or Y direction. </td>
    <td>The 3D Object Slide tool moves the object laterally when you drag horizontally or forward and back when drag vertically. </td>
  </tr>
  <tr>
  </table>
<table>
    <tr>
    <th><img src ="5.png" height ="100" width ="100"></th>
    <th><img src ="6.png" height ="100" width ="100"></th>
    <th><img src ="7.png" height ="100" width ="100"></th>
    <th><img src ="8.png" height ="100" width ="100"></th>
  </tr>
  <tr>
    <td>The 3D Object Scale Tool scales the object Larger or smaller.</td>
    <td>The 3D Rotate Camera tool orbits the camera in the x or y direction.</td>               
    <td>The 3D Roll Camera tool rotates the camera around the z-axis.</td>
    <td>The 3D Pan Camera tool pans the camera in the x or y direction</td>
  </tr>
</table>
  <table>
    <tr>
    <th><img src ="9.png" height ="100" width ="100"></th>
    <th><img src ="10.png" height ="100" width ="100"></th>
  </tr>
  <tr>
    <td> The 3D Walk Camera Tool moves laterally when you drag horizontal or forward and back when you drag vertically.</td>
    <td>The 3D Zoom Camera tool changes the field of view closer or farther away.</td>
  </tr>
</table>
<hr>
<h3 class = 'text-primary' id = "Panels"> Panels </h3>
<p class = "text-justify">
<b> NAVIGATOR PANEL </b><br>
Panning or zooming an image in the Navigator panel is another quick way to make large changes in the zoom level, especially when the exact percentage of magnification is unimportant. It’s also a great way to scroll around in an image, because the thumbnail shows you exactly what part of the image appears in the image window. <br><br>
<b>TO USE THE NAVIGATOR PANEL:</b><br>
If the Navigator panel is not visible, choose Window > Navigator. Locate the slider under the image thumbnail in the Navigator panel and drag it to the right. The image in the image window enlarges. Now drag the slider to the left and reduce the scale of the image in the image window.<br><br>
<b>COLOR, SWATCHES, STYLE</b><br>
The Color palette displays the current foreground and background colors and RGB values for these colors. You can use the sliders to change the foreground and background colors in different color modes. You can also choose a color from the spectrum of colors displayed in the color ramp at the bottom of the palette.<br><br>

The Swatches palette you can choose a foreground or background color and add customized color to the library.
<br><br>

The Styles palette allows you to view, select, and apply present layer styles. By default, a present style replaces the current layer style. You can use the styles in the palette or add your own using the Create New Style icon.
<br><br>

<b>HISTORY</b><br>
The History palette stores and displays each action performance allowing you jump to any recent stage of the image alteration. The alterations should be created during the current working sessions; after saving or losing the document the History palette clears all the contents. Each time you apply a change to an image, the new state of that image is added to the palette. It is important to know that once click on any of the previous stages, all the changes that were made after it will be lost.<br><br>

<b>ADJUSTMENTS</b><br>
The Adjustment layers palette give you the ability to apply an effect to a group of layers in Photoshop, and then you can edit that effect later, while preserving the original layers.<br><br>

<b>LAYERS</b><br>
 Layer let you organize your work into distinct levels that can be edited and viewed as individual units. Every Photoshop CS5 document contains at least one layer. Creating multiple layers lets you easily control how your artwork is printed, displayed, an edited. You will use the Layers palette often while creating at document, so it is crucial to understand what it does and how to use it.<br><br>

<b>1. Layer Visibility</b><br>
 - The eye shows that the selected layer is visible. Click on or off to see or to hide a layer.<br><br>
<b>2.   Layer Locking Options</b><br>
 – Click the checkered square icon to lock Transparency. Click the brush icon to lock image; click the arrow icon to lock the Position; Click the lock icon to lock all options.<br><br>
<b>3.   Layer Blending Mode</b><br> 
– a particular blending mode from the dropdown menu you can create a variety of special effects<br><br>
<b>4.  Opacity</b><br>
 – By typing in a value or dragging a slider you can specify the transparency of entire layer.<br><br>
<b>5.   Fill</b><br>
 – By typing in a value or dragging the slider you transparency. Layers Palette color the image or object.<br><br>
<b>6.   Layer Options Menu</b><br>
 - Click the black triangle to see the following options: New Layer, Duplicate Layer, Delete Layer, Layer Properties, etc. Some of the options are presented as icons at the bottom of the Layers palette.<br><br>
<b>7.  Link Layers</b><br>
 - Can be used to link layers together.<br><br>
<b>8.  Layer Styles</b><br>
 - If a layer has style, an “F” Icon shows at the bottom of the layers palette. Click the little black triangle to see style options.<br><br>
<b>9.  Layer Mask</b><br>
 – A grayscale image, with parts painted in black hidden, parts painted in white showing, and parts painted in gray shades showing in various level of transparency.<br><br>
<b>10. Create New Fill or Adjustment Layer</b><br>
 - Have the same opacity and blending mode options as image layers and be rearranged, deleted, hidden and duplicate in the same manner as image layers. Click the icon and select.<br><br>
<b>11. Create New Group</b><br>
 – This options helps to organize image with multiple layers. Click the icon create a folder for several layers.<br><br>
<b>12. Create new layer</b><br>
– Click this icon to create a new layer.<br><br>
<b>13. Delete Layer</b><br>
 – To delete a layer, select a layer in the Layers palette and drag it to the trash can icon; or, select a layer and click the icon.<br><br>
</div>
                        <?php
                    }
                    if($_GET['lesson_number'] == "2") {
                        ?>
                <div class = "well">
<h3 class = 'text-primary' id = "STARTING_ADOBE_PHOTOSHOP_CS6"> STARTING ADOBE PHOTOSHOP CS6 </h3>
    <hr>
    <p class = "text-justify">
    Adobe Photoshop CS6 has a new oil painting filter, brushes that erode as you use them for more realistic painting results, the ability to highlight and search layers in your document, 64bit support for lighting effects and an intuitive video creation process. Adobe has thrown in a whole load of new features to encourage an update, and certainly feels like a more worthwhile investment than the move from CS5 to CS5.5
<hr>
<h3 class = 'text-primary' id = "Whats_New_in_Photoshop_CS6"> What’s New in Photoshop CS6? </h3>
<p class = "text-justify">
<B>1.  Environment </B>– the first thing you notice about Photoshop CS6 is its new interface. You now have the choice between four base colors, from near-black to pale grey – so Photoshop can look more like Lightroom if you choose. Everything has been subtly tweaked, from the hundreds of redesigned icons (the pen and Lasso tools now indicate their active hotspots more clearly) to a crisper, more consistent layout.<br><br>
<B>2.  Filter Gallery</B> – Photoshop CS6 makes full use of your computer’s Graphics Processing Unit (GPU), which provides tremendous acceleration in many areas. Liquify filter is accelerated to provide smooth, real-time smearing even with brushes up to the new maximum limit of 15,000 pixels; the new Oil paint features adds a paint-like texture, with controls that operate on the full-screen preview in real time.<br><br>
<B>3.  Crop Tool</B> – the new Crop Tool allows you to easily change the size and shape of your images, and revert them to the uncropped version if needed. You can even change to a different format after applying a crop and still retain all the pixels of the original photograph. The Crop Tool has several overlays to choose from that can help you to position key image elements for a pleasing composition, such as the Golden Ration, Golden Spiral, Diagonal, Triangle, Grid, and Rule of Thirds.<br><br>
<B>4.  Perspective Crop Tool</B> – the updated tool and the new Perspective Crop Tool and the new Perspective Crop tool are grouped in the tool’s submenu. The Perspective Crop tool can be used to straighten elements or scenes that were photographed at an angle by creating a flexible marquee that outlines the area before you make the crop.
<br><br> 
<B>5.  Content Aware Move Tool </B>– it is the closest thing to magic in Photoshop CS6. Learn how to select part of an image and move it. Then watch as Photoshop automatically fills in the hole with matching elements from the existing background or duplicate the selected object.<br><br> 
<B>6.  Patch Tool in Content Aware Mode </B>– This tool works similarly to Content-aware Move tool in Move mode wherein  you are allowed to remove objects without noticing the object was removed by copying and blending the pixels where you drag it.<br><br> 
<B>7.  Blur Gallery </B>– Field blur, along with Iris Blur and Tilt-Shift (the other new blur filters) are found in Blur Gallery, also new CS6. Each of these filters gives us a different way to add a blur effect to a photo, but as we’ll see in these tutorials, Field Blur, Iris Blur and Tilt-Shift have one big advantage in common they give us amazing control over the effect because they don’t simply apply uniform blurring across the entire image. Instead, they allow us to easily adjust and fine-tune the blur amount in specific areas, and they do it without the need for layers masks.
<hr>
<h3 class = 'text-primary' id = "Starting_Photoshop"> Starting Photoshop  </h3>
<p class = "text-justify">
1.  To start out a new file in Photoshop, go to the Menu Bar and click File > New <br>
2.  A dialog box will appear to be filled up with the name and sittings required. <br>
3.  Click OK and it will display a blank window for you to work on the image that you want to make.<br><BR>
<B><I>Note: </I></B> Please refer to Unit 2 for Basic Photoshop lessons.

<hr>
<h3 class = 'text-primary' id = "Opening_an_Image"> Opening an Image  </h3>
<p class = "text-justify">

    There are two ways to open an image in Photoshop. <br><br>
1. Click File > Open > and then locate your picture on the new window.<br>
2. Double click - on the Gray workspce of Photoshop and a dialog box will appear, locate your picture and open it.

</p>
<hr>
<h3 class = 'text-primary' id = "Changing_the_Screen_Mode"> Changing the Screen Mode  </h3>
<p class = "text-justify">
    You can use the screen mode options to view images on your entire screen. You can show or hide the nenu bar, title bar and scroll bars. <br> <br>
<ul class = "text-justify">    
    <li>To display the default window,(menu bar at the top and scroll bars on the side) choose View > Screen Mode > Standard Screen mode, or click the Screen Mode button in the Application bar and Choose standard Screen Mode in the pop-up menu.</li><br>
    <li>To display  full-screen Window with a menu bar and 50% gray background, but no title bar or scroll bars, choose View > Screen Mode> Full Screen Mode. Or,click the Screen Mode button in the application bar and select Full Screen Mode with Menu Bar in the pop-up menu.</li><br>
    <li>To display a full-screen window with only a black background (no title bar, menu bar, or scroll bars), choose View > Screen Mode> Full Screen Mode, or click the Screen Mode button in the application bar and slect full Screen Mode in the pop-up menu. 
    </li>
</ul>
<hr>
<h3 class = 'text-primary' id = "Zooming_In_and_Out"> Zooming In and Out </h3>
<p class = "text-justify">
    Select Zoom tool, and click either the zoom in or Zoom Out button in the option bar. Click the area  you want to magnify.<br><br>
    Select the Zoom tool. The pointer becomes a magnifying glass with a plus sign in its center. Click the center of the areas that you want to magnify, or hold down Alt (windows) or Option (Mac OS) and click down Alt (windows) or Option (Mac OS) and click the center of the area that you want to reduce. Each click magnifies or reduces the view to the previous present percentage. <br><br>
<B><I>Note:</I></B> When you use the Zoom in or Zoom out tool, each click magnifies or reduces the image to the net present percentage and centers the displays on the point you click. When the image has reached its maximum magnification level of 160% or minimum size of 1 pixel, the magnifying glass appears empty.<br><br> 
    Select Zoom tool and drag a dotted rectangle, called a marquee, around the area you want to magnify. To move the marquee around the artwork, hold down down the spacebar and continue dragging until the marquee is in the desired location. <br><br>
    Choose View > Zoom in or View > Zoom Out. When the image reachs its maximum or minimum magnification, the command is dimmed.<br><br>
    Set the zoom level at the lower left corner of the document window or in the Navigator panel. To display a file at 100%, choose View > Actual Pixels or click the Actual Pixels button in the option bar. To change the view to fit the document window, choose View > Fit on Screen or click the Fit screen button in the option bar. 
<hr>
<h3 class = 'text-primary' id = "Entering_Type"> Entering Type </h3>
<p class = "text-justify">
    Type in Adobe Photoshop CS6 consists of vector-based type outlines-mathematically defined shapes that describe the letters, numbers and symbols of a typeface.<br><br>
    There are three ways to create type: at a point, inside a paragraph and along a path. 

<h1>Point Type</h1></br>
<p class = "text-justify">
    Point type is a horizontal or vertical line of text that begins where you click in the image. Entering text at a point is a useful way in adding few words to your image.<br><br>
    When you enter point type, each line of type is independent – the line expands or shrinks as you edit it, but it doesn’t wrap to the next line. The type you enter appears in a new type layer.<br><br>
1.  Select the Horizontal Type tool or the Vertical Type tool.<br><br>
2.  Click in the imae to set an insertion point for the type. The small line through the I-beam marks the baseline of the type (the imaginary line on which type rests). For vertical type, the baseline marks the center  axis of the characters.<br><br> 
3.  Select additional type options in the Options bar, Character panel or Paragraph panel. <br><br>
4.  Enter the characters. To go to the next line, press Enter (Windows) or Return (Mac OS).<br><br>
Note: You can also transform point type while in edit mode. Hold down the Ctrl (Windows) or Command (Mac OS) key. A bounding box appears around the type. You can grab a handle to scale or skew the type. You can also rotate the bounding box.<br><br> 
5.  When you finish entering or editing the type, do one of the following:<br>
<ul class = "text-justify">
 <li>Click the Commit button in the Option bar.</li>
 <li>Press the Enter key on the numeric keypad.</li>
 <li>Press Ctrl + Enter (Windows) or Command + Return (Mac OS).</li>
 <li>Select any tool in the toolbox; click in the layers, Channels, Paths, actions, History, or styles panel; or select any available menu command.</li>
</ul>
<hr>
<h1>Paragraph Type</h1>
<p class = "text-justify">
Paragraph type uses boundaries to control the flow of characters, either horizontally or vertically. Entering text this way is useful when you want to create one or more paragraphs such as for a brochure.<br><br>
    When you enter paragraph type, the lines of type wrap to fit the dimensions of the bounding box. You can enter multiple paragraph justification option.<br><br>
    You can resize the bounding box, causing the type to reflow within the adjusted rectangle. You can adjust the bounding box while you enter type or after you create the type layer. You can also use the bounding box to rotate, scale and skew type.<br><br> 
1.  Select the Horizontal Type tool or the Vertical Type tool.<br><br>
2.  Do one off the following.<br>
<ul class = "text-justify">
<li> Drag diagonally to define a bounding box for the type.</li>
<li>Hold down Alt (Windows) or Option (Mac OS) as you click or drag to display the paragraph Text Size dialog box. Enter values for Width and Height, and then click OK.</li>
</ul>
<p class = "text-justify">
3.  Select additional type options in the options bar, Characters panel, Paragraph panel of layer > type Submenu.<br><br>
4.  Enter the Characters. To begin a New Paragraph, press Enter (Windows) or Return (Mac OS). If you enter more type than can’t fit in the bounding box, the overflow icon appears on the bounding box.<br><br>
5.  If desired, resize, rotate or skew the bounding box.<br><br>
6.  Commit the type layer by doing one of the following:<br>
<ul class = "text-justify">
    <li>Click the Commit button in the options bar.</li>
    <li>Press the Enter key.</li>
    <li>Press Ctrl + Enter (windows) or Command + Return (Mac OS).</li>
    <li>Select any tool in the toolbox; click in the Layers, Channels, Paths, Action, History or Styles panel; or select any available menu command.</li>
</ul> 
<hr>
<h1>Type on a Path</h1>
<p class = "text-justify">
    Type on a path flows along the edge of an open or a closed path. When you enter text horizontally, characters appear along the path perpendicular to the baseline. When you enter text vertically, characters appear along the path parallel to the baseline. In either case, the text flows in the direction in which points were added to the path.<br><br>
    If you enter more text that can’t fit within a paragraph boundary or along a path, a small box or circle containing a plus symbol appears in place of a handle in the corner of the boundary or anchor point at the end of the path.<br><br> 
    Clicking in an image with a type tool puts the type tool in edit mode. When the tool is in edit mode, you can enter and edit characters as well as perform same other commands from the various menus; however, certain operations require that you first commit changes to the type layer. To determine whether a type tool is in edit mode, look in the options bar. The Commit button and Cancel button are present in the edit mode.<br>
<hr>
<h3 class = 'text-primary' id = "Editing_Text"> Editing Text  </h3>
<p class = "text-justify">  
    In editing text, do the following:<br><br>
1.  Select the Horizontal Type tool or the Vertical Type tool.<br><br>
2.  Select the type layer in the layers panel or Click in the text flow to automatically select a type layer.
<br><br> 
3.  Positions the Insertion point in the text, and do one of the following:<br>
<ul class = "text-justify">
<li>Click to set the insertion point.</li>
<li>Select one or more characters you want to edit.</li>
</ul> 
<p class = "text-justify"> 
4.  Enter the text as desired.<br><br>
5.  Commit the changes to the type layer.<br>
<hr>
<h3 class = 'text-primary' id = "Formatting_Text"> Formatting Text   </h3>
<p class = "text-justify">
    Formatting text in Photoshop can be in two ways. You can use the option bar at the top or you can use the Type Pane . The options bar looks like with the type tool active.<br><br>
    The styles of font and type that you use depends heavily upon the end use of the image. One common rule in design is not to have more than 3 different fonts on an image or document.<br><br> 
    The other way of modifying your text is to use the Type Panel.<br><br> 

<table>
  <tr>
    <center>
    <th>Icon</th>
    <th>Name</th>
    <th>Function</th>
  </tr>
  <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Text</td></b>
    <td>Adjusts text size depending upon the text height in points that you select.</td>
  </tr>
 <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Kerning</td></b>
    <td>Changes the spacing between letters based on true measurement (metrics) or what is more pleasing to the eye (optical).</td>
  </tr>
 <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Vertical Scale</td></b>
    <td>Vertical Scale  Makes the text taller or shorter but it does not affect its width.</td>
  </tr>
  <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Baseline Shift</td></b>
    <td>Moves the button of the text above or below the standard placement (baseline) and is measured in points. </td>
  </tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Set the Leading</td></b>
    <td>Set the Leading Adjusts the space between lines. </td>
  </tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Set the Tracking</td></b>
    <td>Changes the space between letter. </td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Horizontal Scale</td></b>
    <td>Adjusts the width of the character but not the height.</td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Faux Bold</td></b>
    <td>Creates a bolder character for fonts that don’t have a bold option. </td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Faux Italic</td></b>
    <td>Adds a slant to characters that don’t have an italic option. </td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>All Caps</td></b>
    <td>Makes all the selected letters uppercase.</td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Small Caps</td></b>
    <td>Makes all the selected letters uppercase but smaller.</td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Superscript</td></b>
    <td>Raises the selected text and makes it smaller.</td>  
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Subscript</td></b>
    <td>Makes the selected text smaller and lowers it. </td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Underlines</td></b>
    <td>It puts a line under the selected text. </td>
</tr>
   <tr>
    <td><img src ="" height ="40" width ="40"></td>
    <td><b>Strikethrough</td></b>
    <td>Puts a line straight through the middle of the text. </td>
</table>
<hr>
<p align ="justify">
Below all those icons is the two drop-down lists. One is to select what language you want to use and the other selects the anti-aliasing method. Below are examples of the different methods on text. </p>
<h1>Type Mask Tool</h1>
<p class = "text-justify">
These tools work just like the regular type tools but instead of creating text, it creates a mask or makes a selection boundary out of the outline of the text. This can be used to create text shaped marquees that you can use to edit the image with. Open any photo. Activate one type mask tools and create some text. Don’t freak out been the images turns red, It’s just temporary. When you finish the text, you’ll be left a selection. 

<h1>Spell Check</h1>
<p class = "text-justify">
When you finish a design, use spell check. It could save your job. You can go to the Menu and choose Edit> Check Spelling or right-click on a word and choose Check Spelling from the pop-up menu. Remember that spell check will not catch words that are spelled correctly contact info. Don’t catch the error after printing. 
<hr>
<h3 class = 'text-primary' id = "Warping_Text"> Warping Text </h3>
<p class = "text-justify">
    You can warp type to create a special type effect. For example, you can warp type in the sharp of an arc or a wave. The war style you selected was an attribute of the type layer. You can change a layer’s warp style at any time to change the overall shape of the warp. Warping options give you precise control over the orientation and perspective of the warp effect. //"pictures"
<b><I>Note: </I></b> You cannot warp type layers that include Faux Bold Formatting or that use fonts without outline data(such as bitmap fonts).

<h1>Warp Type</h1>
<p class = "text-justify">

These are the steps in applying warp:<br><br>
1.  Select a type layer.<br>
2.  Do one of the following:
<ul>
<li>Select a type tool and click the Wrap button in the options bar. <br></li>
<li>Choose Layer > type >warp text.</li><br>

<b><i>Note:</i></b> <br>
1. You can use the warp command to warp text in a type layer. Choode Edit >Transform > Warp<br>
2. Choose a warp style from the style pop-up menu.<br>
3. Select the Orientation of the warp effect- Horizontal or Vertical.<br>
4. If desired, specify values for additional warping options:<br><br>
<ul>
<li>Bend to specify how much warp is applied to the layer.<br></li>
<li>Horizontal Distortion or Vertical Distortion to apply perspective to the warp.</li>





                </div>
                <?php
                    }
                    if($_GET['lesson_number'] == "3") {
                        ?>
                <div class = "well">
<h3 class = 'text-primary'> THE EFFECT TOOLS </h3>
<hr>
<p class = "text-justify">
<h3 class = 'text-primary' id="Using_Crop_Tool"> Using Crop Tool </h3></a>
<p class = "text-justify">

    Cropping entails cutting away background clutter or endless expanses of empty space in order to focus in your
    desired subject.
    //image
</p>
<p class = "text-justify">
    The most popular way to crop an image is by using the Crop tool. This simple tool is as easy and effective to use as a T square.
</p>
<p class = "text-justify">
    Select the Crop tool in the Tools panel or press C on the keyboard. Then follow these steps:
    <br>
    <br>
    1. With the Crop tool, drag around the part of the image you want to keep, and then release your mouse button.
    <br>
    <br>
    As you drag, a marquee (a dotted outline) appears displaying the cropping boundaries. Don't worry if your cropping marquee isn't exactly correct. You can adjust by holding and moving the grids around the picture.
    <br>
    <br>
    Notice how the area outside the cropping marquee appears darker than the inside in order to enhance the frame of you image. Adobe calls this a 'shield'. You control the color and opacity (the amount of transparency) of the
    shield by adjusting the settings on the Options bar. if you don't want the shield, deselect the check box.
    <br>
    <br>
    2. Adjust the cropping marquee by dragging the handles.
    <br>
    <br>
    The small squares on the sides and corners of the cropping marquee are called handles. When you glide your mouse over any handle or the itself your cursor changes yo a double-headed arrow , indicating that you can drag. To move the entire marquee, position you mouse inside the marquee until you see a black arrrowhead cursor, and then drag it. Adjust the marquee until you're satisfied.
    <br>
    <br>
    You can also drag the origin point(the circle icon in the center) to change the axis of rotation.
    <br>
    <br>
    If you move your mouse outside the marquee, the cursor changes to a curved, double-headed arrow. Dragging with this cursor rotates the marquee. This feature can be extremely useful when you need to rotate and crop a cooked image. By using the Crop tool, you can perform both commands in one step and often more quickly and accurately. Just be aware that rotation, unless it's in 90-degree increments, re-samples you image, which, if done repeatedly, can damage your image (see the earlier section, "Re-sampling Images," for more on re-sampling). Getting the rotation right the first time around is for the best.
    <br>
    <br>
    3. Double-click inside the cropping marquee.
    <br>
    <br>
    You can also press Enter (Return on the Mac) or click the Commit (check mark icon) buttong on the Options bar. If you want to cancel the crop just press Esc or click Cancel (the slashed circle icon) on the Option bar.
</p>    
<hr>
<h3 class = 'text-primary' id="Cropping_with_the_Marquee_Tool"> Cropping with the Marquee Tool </h3></a>
<p class = "text-justify">

    You can also crop a selected area by choosing Image > Crop. Simply make a seletion with any of the tools and then choose this command. You can use Image > Crop with any selection like circular, polygonal, kidney bean even feathered. Photoshop can't crop to those odd shapes but it gets as close to the outline as it can.
</p>

<h1> Using the Trim Command </h4></a>
<p class = "text-justify">

    This trims away transparent or solid-colored areas around you image. Choose Image > Trim and a dialog box appears. Select Transparent Pixels (for layered images), Top Left Pixel Color or Bottom. 
</p>
<hr>
<h3 class = 'text-primary' id="Using_Stamp_Tool"> Using Stamp Tool </h3></a>
<p class = "text-justify">

    Clone stamp tool is just below the patch and healing brush tool. This tool is similar to healing brush tool. With the help of this tool, we can create a similar duplicate copy. This tool takes the sample of the image and applies it over the other image or a part of the same image. This tool plays important role in photo editing.
    <br>
    <br>
    1. Select the clone stamp tool then go to the target and select the sample piece by left clicking the mouse and holding Alt button. Now go to the other image and apply by just clicking it there.
    <br>
    <br>
    For example, we have this image of a broken door frame.
    <br>
    <br>
    2. To remove the damage area, select the Clone Stamp Tool and hold Alt button and click on the sample area which we want to place it in place of the damage frame.
    <br>
    <br>
    3. After selecting the sample area, go to the damage area and just click on it. The selected sample will be placed on that area. And this will be the final result.
</p>
<hr>
<h3 class = 'text-primary' id="Using_Healing_Tool"> Using Healing Tool </h3></a>
<p class = "text-justify">

    The healing brush lets you correct imperfections in your photographic image in a similar way to the clone stamp tool. Like the clone stamp tool, you paint with sampled pixels from your image which you can set with the Alt button. However, the healing brush also does an excellent job of matching together all of the relevant shades and textures to keep your fixes as seemless as possible; however it still requires you to be respnsive with your Alt-key selections.
    <br>
    <br>

    <b> 1. Your Healing Brush </b><br>
    Open up your imge and select the Healing Brush Tool From the Tools Panel. To make your healing easier and more accurate zoom the area you’re working on to 200/%. <br><br>
    <b> 2. Healing Brush Settings </b><br>
    To avoid harsh and obvious healing, expand the Brush drop-don menu in the Options bar change  the diameter of your brush in relation to the size of area you want to blend away. You can always change the size of the brush with the use of the square brackets({}). Alter the hardness of the brush so it will have a software edge. Start with 75%  and take brush on a test run. If you aren’t happy with the effect you can always change the hardness settings later. <br><br>
    <b> 3. Healing Brush Size </b><br>
    At the bottom of the drop-down menu, you can fix the size of your brush by setting it to off. Alternatively, if you have a graphics tablet, you can adjust the size of your brush with the Pen Pressure or a Stylus Wheel. <br><br>
    <b> 4. Your Modes </b><br>
    You can use the Healing Brush with various Blending Modes. This can be particularly helpful if you want to keep your healed areas subtle. We are working in black and white for this photographic image so that we don’t need to worry too much about blending modes. You can use Replace to maintain noise, film grain and texture in your image but this does require you to be very accurate with your editing. Keep the Source set to Sampled; and sample set to Current Layer. Make sure you are working on a flattened document. <br><br>
    <b> 5. Applying Your Heal </b><br>
    Zoom to the area you want to heal and press the Alt button on your keyboard. The cursor will change to a smaller targeted circle. Click with your mouse or pen to select an area near the spot you want to heal. This will define your source areas. Then let go and dab again with your Healing Brush. Notice how the brush automatically blends into the surrounding area.  <br><br>
    <b> 6. Keep Sourcing </b><br>
    If you find your Healing Brush hasn’t blended exactly how you’d want it to be, them simply redefine your source area and dab it again. You will find the process much faster if you keep one finger on the Alt key atall times so you can alternate between sourcing and blending. <br><br>

    <b> TIP: </b><br>
    For accurate healing brush applications, keep changing the size of your brush with  the Square bracket symbols ([ ]) keys. A smaller brush will be easier in tricky areas with lots of detail; whereas a large and soft brush is great for smooting out areas. <br>

</p>
<hr>
    <h3 class = 'text-primary' id="Using_Spot_Healing_Brush"> Using Spot Healing Brush </h3></a>
    <p class = "text-justify">

    <b>1. Spot Heal Settings </b>
    The spot healing brush is great for small troublesome area that only need a bit of attentions. It’s a good idea to follow up you Healing Brush application with the Spot Healing Brush to tidy up any smaller areas. Select the spot Healing Brush and make sure your Mode is set to Normal. <br><br>

    <b>2. Painting Over </b>
    Simply paint over the area you want to fix. You will notice that area turns dark grey but as soon as you lift your mouse or pen this area will automatically blend into the background. <br><br>

    <b>TIP:</b> Always make sure that you have a backup of your original document before you attempt to fix your work you can always go back to your original document.

</p>
<hr>
    <h3 class = 'text-primary' id="Using_Dodge_and_Burn_Tools"> Using Dodge and Burn Tools </h3></a>
    <p class = "text-justify">

    The Dodge and Burn tools are two side of the same coin and refer to traditional photographic techniques. The Dodge tool is used to lighten pixels in an image; while Burn tool darkens them. Both the Dodge and burn tools operate in three modes which can be selected from the options bar. These are the Highlights, Midtones and Shadows modes. By default, the Dodge tool operates in Highlights mode; and the Burn tool In Shadows mode. 
    <br><br>
    We’ll demonstrate the difference, but first here is the original iamge before the exposure tools are used. 
    In Highlight mode, the Dodge tool lightened only the brightest pixels in the image. With an image that has strong contrast such as tis, it’s easy to overexpose the highlights and blow them out. 
    <br><br>
    With the Dodge tool set to Midtones mode, only the middle range of tones is affected. The brightest and darkest pixels are unaltered. You can see that a lot of otherwise invisible detail has been revealed. 
    In Shadows mode, it’s the darkest pixels that get lightened. This is quite a different result. It looks like we’ve painted across the image with a transparent white brush-not good at all.
    <br><br> 
    If we start with a very light image and use the Burn Tool, we can better see its effects, but first here is the original image before the Exposure tools are used.
    <br><br>
    Here in Shadows mode, the tool picks out the dark area in the image and makes them even darker. 
    In Midtones mode, the middle range of ones is darkened leaving the darkest and lightest pixels as they were. This is like applying are gamma slider in the Levels dialog to darken and image’s midtones but only where you paint. 
    <br><br>
    There’s something familiar about this one. In highlights mode, the Burn tool lowers the brightness of the brightest pixels, resulting in what looks like a stroke of transparent black paint across the image. So the Burn tool works best in Shadows and Midtones mode; and the Dodge tool works best in Highlights and Midtones mode. </p>
<hr>

    <h3 class = 'text-primary' id="Applying_Brightness_/_Contrast_Commands"> Applying Brightness/Contrast Commands </h3></a>
    <p class = "text-justify">

    The <b>Brightness/Contrast</b> command lets you make simple adjustments to the tonal range of an image. Moving the brightness slider to the right increases tonal values and expands image highlights; to the left decreases values and expands shadows. The contrast slider expands or shrinks the overall range of tonal values in the image. <br><br>

    In normal mode, Brightness/Contrast applies proportionate (nonlibear) adjustments to the image pixels, as with levels and Curves adjustments. When <b>Use Legacy</b> is selected, Brightness/contrast simply shifts all pixels values higher or lower when adjusting brightness. Since this can cause clipping or loss of image detail in highlight or shadow areas, using the Brightness/Contrast command in legacy mode is not recommended for high-end output. <br><br>

    <b>Note:</b>Use legacy is automatically selected when editing Brightness/Contrast adjustment layers created with previous versions of Photoshop.<br><br>

    1. Do one of the following:
    <ul>
        <li>Choose image > Adjustment > Brightness/Contrast.</li>
        <li>Choose Layer  > New Adjustment Layer > Brightness/Contrast. Then, click OK in the New layer dialog box.</li>
        <li>Choose Brightness/ Contrast icon in the Adjustment panel.</li>
    </ul>

    <p align = "justify">
    2. Drag the sliders to adjust the brightness and contrast. Dragging it to the left decreases the level; and dragging to the right increases it. The number at the right of each slider reflects the brightness or contrast value. Values can range from -150 to +150 for brightness; and -50 to +100 for contrast. <br><br>
    3. The outer input Levels sliders map the black point and white point to the settings of the Output sliders. By default, the Output sliders are at level, where the pixels are completely black and level 255 where the pixels are completely white. So, in the default position for the Output sliders, moving the black input slide maps the pixels value to level 0 and moving the white point slider maps the pixel value to level 255. The remaining levels are redistributed between levels 0 and 255. This redistribution increases the tonal range of the image, in effect increasing the overall contrast of the image. 
<hr>
</p>
    <h3 class = 'text-primary' id="Adjusting_Tonal_Range"> Adjusting Tonal Range </h3></a>
    <p class = "text-justify">

    The outer two Input Levels sliders map the black point and white point to the settings of the Output sliders. BY default, the Output sliders are at Level 0, where the pixels are completely black and level 255 where the pixels are completely white. So, in the default position for the Output sliders, moving the black input slider maps the pixel value to level 0 and moving the white point slider maps the pixel value to Level 255. The remaining levels are redistributed between levels 0 and 255. This redistribution increases the tonal range of the image, in effect increasing the overall contrast of the image.<br><br>

    <b> Note:</b> When shadows are clipped, the pixels are completely black with no detail. When highlights are clipped, the pixels are completely white with no detail. <br><br>

    The middle input slider adjust the gamma I the image. It moves the midtone (level 128) and changes the intensity values of the middle range of gray tones without dramatically altering the highlights and shadows. 
    <br><br>

    1.  Do one of the following: <br>

    <ul>
        <li>Choose Image > Adjustments > Levels. </li>
        <li>Choose layer > New Adjustment layer > Levels. Click Ok in the New Layer dialog Box. </li>
        <li>Choose levels icon in the Adjustment Panel. </li><br>
    </ul>
    <p align = "justify">
    2. To adjust for a specific color channel, choose an option from the Channel menu. <br><br>

    To edit a combination of color channels at the same time, Shift-select the channels in the Channels panel before choosing the levels command. The channel menu then displays the abbreviations for the target channels, for example Cm for cyan and magenta. The menu also contains the individual channels for the selected combination. You must edit spot channels and alpha channels individually. Keep in mind that this method thus not work in Levels adjustment layer. <br><br>

    3.  To adjust the shadows and highlights manually, drag the black and white input levels Sliders to the edge of the first group of pixels on either end of the histogram <br><br>

    <b>Note:</b> You can also enter values directly into the first and third Input Levels text boxes.<br><br>

    4. To adjust midstones, use the middle Inpt slider to make a gamma adjustment. <br><br>
    Moving the middle Input slider to the left makes the overall image lighter. This slider adjustment maps a lower (darker) level up to the midpoint level between the Output Sliders. If the Output sliders are in their default position (0 and 255) the midpoint is level 128. In this example, the shadows expand to fill the tonal range from 0 to 128, and the highlights are compressed. Moving the middle Input slider to the right has the opposite effect, making the image darker. <br><br>

    <b>Note:</b> You can also enter a gamma adjustment value directly in the middle Input Levels text box.<br><br>

    5. Click Ok <br><br>
     You can view the adjusted histogram in the Histogram panel.

 </p>
 <hr>
    <h3 class = 'text-primary' id="Adjusting_Hue_and_Saturation"> Adjusting Hue and Saturation </h3></a>
    <p class = "text-justify">  

    The Hue/Saturation command lets you adjust the hue, saturation and brightness of a specific color component in an image or simultaneously adjust all the colors in an image. This command is especially good for fine-tuning colors in a CMYK image so that they are in the gamut of an output device. <br><br>
    You can save settings in the Hue/ Saturation dialog box and load them for reuse in other images. 

<h1> Apply Hue/Saturation Command</h1>

1.  Do one of the following 
<ul>
    <li>Choose image > adjustment > Hue/saturation </li>
    <li>Choose layer > new Adjustment layer > hue/saturation. Click Ok in the New layer dialog box.</li> 
    <li>Choose Hue/Saturation icon in the Adjustment panel. </li>
</ul>

The two color bars in the dialog box represent the colors in their order in the color wheel the upper color bars shows the color before the adjustment; the lower bar shows how the adjustment affects all of the hues at full saturation. <br><br>
2.  Choose which color to adjust using the Edit pop-up menu:
<ul>
    <li>Choose Master to adjust all color at once. </li>
    <li>Choose one of the other present color ranges listed for the color you want to adjust. </li>
</ul>
3.  For Hue, enter a value or drag the slider until you are satisfied with the colors. <br><br>
The values displayed in the text box reflect the number of degrees of rotation around the wheel from the pixel’s original color. A positive value indicated clockwise rotation; a negative value, counter clockwise rotation. Values can range from 180 to +180. 

<h1> Color Wheel</h1>

1. For Saturation, enter a value or drag the slider to the right to increases the saturation or to the left to decrease it. <br><br>
The color shifts away from or toward the center of the color wheel. Values can range from -100 (percentage of desaturation, duller colors) to +100 (percentage of saturation increases).<br><br>

2.  For lightness, enter a value or drag the slider to the right to increases the lightness (add white to a color ) or to the lest to decrease it ( add black to a color). Values can range from -100 (percentage of black) to +100 (percentage of white).<br><br>

<b>Note:</b> Click Reset button to undo settings in the hue/Saturation Adjustments panel. Press option (Mac OS) to change the cancel button to reset.<br>


 </p>
 <hr>
    <h3 class = 'text-primary' id="Applying_Color_Balance"> Applying Color Balance </h3></a>
    <p class = "text-justify">  
    
The color Balanced command change the overall mixture of colors in an image for generalized color correction.
 <br><br>
1.  Make sure the composite channel changes is selected I the Channels Panel. His command is available only when you’re viewing the composite Channel. 
2.  Do one of the following: 
<ul>
    <li>Choose Layer > adjustment > color Balance </li>
    <li>Choose layer > new Adjustment Layer > Color balance. Click Ok in the New Layer dialog Box. </li>
    <li>Choose Color Balance icon in the Adjustments Panel. </li>
</ul>
3.  Select Shadows, Midtones or Highlights to select the total range I which you want to focus the changes.
<br><br>
4.  (Optional) Select Preserve Luminosity to prevent changing the luminosity values in the iamge while changing the color. This Option maintains the tonal balance in the image. <br><br>
5.  Drag a slider toward a color that you want to increase in the image. Drag a slider away from a color that you want to decreases in the image. The values above the color bars show the color changes for the red, green and blue channels (For Lab images the values are for the and B Channels.) Values can range from -100 +100.

 </p>
 <hr>
    <h3 class = 'text-primary' id="Using_Blur_and_Sharpen_Tools"> Using Blur and Sharpen Tools</h3></a>
    <p class = "text-justify">  

    Even with the tool set to 100% strength, it seems like doesn’t blur to a very high degree. In fact it feels like it reaches a plateau where it has no longer effect. His is because as  the pixels get more blurry, the more you need a stronger blur to see the effect. But since the strength is at maximum, the tool just appers to come to a halt. <br><br>
    There is a simple way to overcome this and to boost the blur tool’s power. You need to edit the Spacing Settings for the brush. The default 25% spacing is often not enough. Reducing the spacing means an increase to flow of the effect, so blurring is given a boost. <br><br>
    The tools can be set to difference blending modes. This can be very useful for certain effects. In Darken mode, blurring parts of an image creates an eerie dark glow around objects. The result is actually similar to some types of an old cinematic film. <br><br>
    Setting it to Lighten mode does the opposite and creates a light glow or halo. This is a great way to soften bright highlights within an image in order to create soft focus and blooom effects on otherwise dead sharp images. <br><br>
    The antithesis of the Blur tool is the Sharpen tool. The Sharpen tool is used to selectively sharpen pixels in an image. This can be very useful, as in this image, where there is variable focus. Applying the Sharpen filter can sharpen unwanted noise in the blurred parts of the image.<br><br>
    The Sharpen tool works best when the Strength slider is kept low especially on photograpghic images or those that have been compressed using glossy compression such as JPEG. The sharpening can increase the noise. The pixels become too sharp and it strands out too much from the image. Therefore, too high a strength setting for the sharpening effect can ruin the image.<br><br>
    To reduce the multicolor noise effect, switch to the tool's blending mode to Luminosity. This will sharpen the image brightness but not the color, which is often where the noise resides.

                 </div>
                 <?php
                    }
                    if($_GET['lesson_number'] == "4") {
                        ?>
                <div class = "well">










                        <?php

                    }
                }
            ?>
            </div>
        </div>
    </body>
</html>