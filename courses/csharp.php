<html>
<!DOCTYPE html>
<title>Courses</title>
<link rel="shortcut icon" href="BC.jpg"/>
<html lang="en" dir="ltr">

<style>

    body {
        margin-left: 50px;
        margin-right: 50px;
        text-align: center; }
	p.courses {
		border-radius: 20px;
    	padding: 15px;
    	background-color: #064c6b;
        margin-left: 75px;
        margin-right: 75px;
        text-align: justify; }
    img {
    	float: right;
        border-radius: 25px;
        background-color: #064c6b;
        display: block;
        margin-left: 50px;
        margin-right: 50px;
        margin-bottom: 20px;
        width: 150px;
        height: 150px; }    
    button {
    	margin-left: 845px;
    	background-color: #064c6b;
    	border-radius: 40px;
    	color: #FFAA33;
    	border-color: #064c6b;
    	padding: 15px;
    	text-align: center;
    	font-size: 30px;}   
</style>
<?php
    include_once '../header.php';
?>


<br><br><br><br>
<body>
	<p class="courses"><font color="#FFAA33" size="20px" font-weight="bold"><b> C# </b></font>
<br><img src="images\csharp.svg">
			C# (pronounced C sharp) is a general-purpose high-level programming language supporting multiple paradigms. C# encompasses static typing, strong typing, lexically scoped, imperative, declarative, functional, generic, object-oriented (class-based), and component-oriented programming disciplines.
<br><br>
			The C# programming language was designed by Anders Hejlsberg from Microsoft in 2000 and was later approved as an international standard by Ecma (ECMA-334) in 2002 and ISO/IEC (ISO/IEC 23270) in 2003. Microsoft introduced C# along with .NET Framework and Visual Studio, both of which were closed-source. At the time, Microsoft had no open-source products. Four years later, in 2004, a free and open-source project called Mono began, providing a cross-platform compiler and runtime environment for the C# programming language. A decade later, Microsoft released Visual Studio Code (code editor), Roslyn (compiler), and the unified .NET platform (software framework), all of which support C# and are free, open-source, and cross-platform. Mono also joined Microsoft but was not merged into .NET.
<br><br>
			C# is more type safe than C++. The only implicit conversions by default are those that are considered safe, such as widening of integers. This is enforced at compile-time, during JIT, and, in some cases, at runtime. No implicit conversions occur between Booleans and integers, nor between enumeration members and integers (except for literal 0, which can be implicitly converted to any enumerated type). Any user-defined conversion must be explicitly marked as explicit or implicit, unlike C++ copy constructors and conversion operators, which are both implicit by default. C# has explicit support for covariance and contravariance in generic types, unlike C++ which has some degree of support for contravariance simply through the semantics of return types on virtual methods.
		</p>
<br>
		<button><a href="plan/brocode_product.html"><font color="#FFAA33";>Subscribe</font></a></button>

</body>
        <a href="../courses.php"><img src='images/arrowleft.png' style="float:right;margin-top:15px;width:42px;height:42px;"></a>
<br><br>
<br><br>
<br><br>

<?php
    include_once '../footer.php';
?>
</html>