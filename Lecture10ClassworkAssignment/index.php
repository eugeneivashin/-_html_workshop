
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Basic HTML5 Template</title>
  <meta name="description" content="A simple HTML5 Template for new projects.">
  <meta name="author" content="SitePoint">

  <meta property="og:title" content="A Basic HTML5 Template">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
  <meta property="og:description" content="A simple HTML5 Template for new projects.">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <style>
    h2{
      position:relative;
    }
    p{
      display:none;
    }
    pre{
      display: none;
    }
  </style>
  <link rel="stylesheet" href="css_workshop.css?v=1.0">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
  <script type = "text/javascript">
    var buttonObj = null;
    $(document).ready(function(){
      $("h2").animate({left : '250px'});
      $("p").fadeIn();
      $("p").animate({fontSize:"120%"});

      $("#anim").click(function(){
         $("pre").slideDown("slow");
    });
    });
    function init() {
      buttonObj.getElementById("submitBtn")
    }
      

    window.onload = init;

  </script>

</head>

<body>
  <!-- your content here... -->
  <p>Disclaimer: this is TSI University task for HTML, CSS and SASS workshop, not for publishing anywhere on the media. Please include this disclaimer</p>
  <h1>What is Sass? Your guide to this top CSS preprocessor</h1>
  <p>By Tammy Coron January 10, 2020</p>
  <h3>Discover what Sass is, and learn how to start using it.</h3>
  <p><b><i>What is Sass? That's the question we here to answer. If you're new to web design, you've probably heard the term floating around, but you might not be quite up to speed with exactly what Sass is, what is does, and whether or not you should be using it. In short, Sass is a CSS preprocessor, which adds special features such as variables, nested rules and mixins (sometimes referred to as syntactic sugar) into regular CSS. The aim is to make the coding process simpler and more efficient. Let's explore in more detail. 

    <br><br>Article source: https://www.creativebloq.com/web-design/what-is-sass-111517618
  </i></b></p>
  <h2 style="position:relative">What is a CSS preprocessor?</h2>
  <p>A CSS preprocessor is a scripting language that extends CSS by allowing developers to write code in one language and then compile it into CSS. Sass is perhaps the most popular preprocessor around right now, but other well-known examples include Less and Stylus.

    Before we go any further, a quick public service announcement is in order: most web designers would say that if you're new to CSS, you're better off avoiding Sass (or any preprocessors, extensions or frameworks) while you're still learning. While it's true they offer many advantages in speed and efficiency, it's important that you really get to grips with the basics of CSS. Make sure you learn the core concepts before you start exploring shortcuts and confusing things.
    </p>
  <h2>What is Sass?</h2>
  <p><b>Sass is arguably the most useful of all CSS extensions<br></pb></b>
    <br>
    Sass (which stands for 'Syntactically awesome style sheets) is an extension of CSS that enables you to use things like variables, nested rules, inline imports and more. It also helps to keep things organised and allows you to create style sheets faster.
    <br>
    Sass is compatible with all versions of CSS. The only requirement for using it is that you must have Ruby installed. Users are also asked to follow the Sass Community Guidelines.
    How to use Sass
    <br>
    In the following section, we'll outline some basic tips for using Sass, using examples from the official Sass website. Take a look at the Sass Documentation for additional references and examples.
    </p>
    <h2>Syntax</h2>
    <p><b>Sass includes two syntax options:<br></b>

      <ul>
        <li>SCSS (Sassy CSS): Uses the .scss file extension and is fully compliant with CSS syntax</li>
        <li>Indented (simply called 'Sass'): Uses .sass file extension and indentation rather than brackets; it is not fully compliant with CSS syntax, but it's quicker to write</li>
      </ul>
      <p><i>Note that files can be converted from one syntax to the other using the sass-convert command</i></p>
    <h2>Variables</h2>
    <p>Just like other programming languages, Sass allows the use of variables that can store information you can use throughout your style sheet. For example, you can store a colour value in a variable at the top of the file, and then use this variable when setting the colour of your elements. This enables you to quickly change your colours without having to modify each line separately.
      <br><br>
      <b>For example:</b>
      <pre>
      <i>
      $font-stack:    Helvetica, sans-serif;
      $primary-color: #333;
      
      body {
        font: 100% $font-stack;
        color: $primary-color;
      }
      <br>
      The following CSS will be produced:
      
      body {
        font: 100% Helvetica, sans-serif;
        color: #333;
      }</i></pre>
      </p>
      <h2>Nesting</h2>
      <p>
        Nesting is a double-edged sword. While it provides an excellent method for reducing the amount of code you need to write, it can also lead to over-qualified CSS if not executed carefully. The idea is to nest your CSS selectors in such a way as to mimic your HTML hierarchy.
      <br>
The following shows a basic navigation style that uses nesting:
<pre>
nav {
  ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  li { display: inline-block; }

  a {
    display: block;
    padding: 6px 12px;
    text-decoration: none;
  }
}
</pre>
<b>The CSS output is as follows:</b>
<pre>
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
}

nav a {
  display: block;
  padding: 6px 12px;
  text-decoration: none;
}</pre>
</p>
<h2>Partials</h2>
<p>
  Partials are smaller Sass files that can be imported (see next section) into other Sass files. Think of partials as code snippets. With these code snippets, your CSS can now be modular and easier to maintain. A partial is designated as such by naming it with a leading underscore: _partial.scss.
Import
<br>
Used with Partials (see previous section), the @import directive allows you to import your partial files into the current file, to build one single CSS file. Be mindful of how many imports you're using as an HTTP request will be generated for each one.
<pre>
// _reset.scss

html,
body,
ul,
ol {
   margin: 0;
  padding: 0;
}

// basefile.scss

@import 'reset';

body {
  font: 100% Helvetica, sans-serif;
  background-color: #efefef;
}

And the corresponding CSS output:

html, body, ul, ol {
  margin: 0;
  padding: 0;
}

body {
  font: 100% Helvetica, sans-serif;
  background-color: #efefef;
}</pre>

<i>Note: When importing partials, you don't need to include the file extension or the underscore.</i>
</p>
<h2>Mixins</h2>
<p>
  One of the advantages of using preprocessors is their ability to take complex, long-winded code and simplify it. This is where mixins come in handy! 
<br>
For example, if you need to include the vendor prefixes, you can use a mixin instead. Take a look at this example for border-radius:
<pre><i>
@mixin border-radius($radius) {
  -webkit-border-radius: $radius;
     -moz-border-radius: $radius;
      -ms-border-radius: $radius;
          border-radius: $radius;
}

.box { @include border-radius(10px); }
</i></pre>
Notice the @mixin directive at the top. It has been given the name border-radius and uses the variable $radius as its parameter. This variable is used to set the radius value for each element. 
<br>
Later, the @include directive is called, along with the mixin name (border-radius) and a parameter (10px). Thus .box { @include border-radius(10px); }.
<br><br>
<b>The following CSS is produced:</b>
<pre>
.box {
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  border-radius: 10px;
}</pre>
</p>
<h2>Extend/Inheritance</h2>
<p>

  The @extend directive has been called one of Sass' most powerful features. After seeing it in action, it's clear why.
<br>
The idea is that with this directive you won't have to include multiple class names on your HTML elements and can keep your code DRY (don't repeat yourself). Your selectors can inherit the styles of other selectors, and then be easily extended when required. Now that's powerful.
Operators
<br>
Having the ability to perform calculations in your CSS allows you to do more, like convert pixel values into percentages. You'll have access to standard maths functions like addition, subtraction, multiplication and division. Of course, these functions can be combined to create complex calculations.
<br>
In addition, Sass includes a few built-in functions to help manipulate numbers. Functions like percentage(), floor() and round() to name a few.
<br>

</p>
<h2> Tammy Coron 
	<?php 	
		echo "<br>";
		echo date("d/m/Y ");
		echo date("H:i:s");
	?>
	</h2>
<p style="display:none" id="textAnim"><b>Tammy is an independent creative professional and the host of Roundabout: Creative Chaos. She???s also the owner of Just Write Code, an independent production company located in West Tennessee. For more information about Tammy, visit her website by clicking the icons above. </b></p>
<form>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <input id="submitBtn" type="submit" value="Subscribe">
</form>

<script src="js/scripts.js"></script>
<button id="anim">Event</button>

<br> <br>
<p>PHP Task</p>
<form>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="surname">Surame:</label><br>
  <input type="text" id="surname" name="surname"><br>
  <label for="dateofbirth">Date Of Birth:</label><br>
  <input type="date" id="dateofbirth" name="dateofbirth"><br>
  <input id="submitBtn" type="submit" value="Submit">
</form>
<p><?php echo $_GET["name"]; 
  echo "<br>";
  echo $_GET["surname"];
  echo "<br>";
  echo $_GET["dateofbirth"]; ?></p>

</body>
</html>

